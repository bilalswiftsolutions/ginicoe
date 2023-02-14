<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\RegistrationEmailToCustomer;
use App\Models\Admin\Admin;
use App\Models\Admin\Role;
use App\Models\Customer;
use App\Models\OldPassword;
use Illuminate\Http\Request;
use Hash;
use DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $roles = Role::select('id', 'role_name')->get();
        return view('admin.auth.register', compact('g_setting', 'roles'));
    }

    public function store(Request $request)
    {
        if (env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        }

        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        $token = hash('sha256', time());

        $admin = new Admin();
        $data = $request->only($admin->getFillable());

        if (!preg_match('/^(?!.*(.)(?:.*\1)).*$/',$request->password)) {
            throw ValidationException::withMessages(['identical_char' => __('Identical Characters are not allowed')]);

        }

        if (!preg_match('/^(?!.*(.)\1)[a-z0-9]*$/',$request->password)) {
            throw ValidationException::withMessages(['consec_char' => __('Consecutive Characters are not allowed')]);

        }

      
            $parts = preg_split('/\s+/', $request->name);
         
            foreach ($parts as $part) {
                
                if (str_contains($request->new_password, $part)) {
                    throw ValidationException::withMessages(['contain_name' => __('You can not use name in your password')]);
                }
            }
        

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:admins',
                'password' => 'required|min:8|max:32',
                'confirm_password' => 'required|same:password'
            ],
            [],
            [
                'name' => 'Name',
                'email' => 'Email',
                'password' => 'Password',
                'confirm_password' => 'Retype Password'
            ]
        );

        if ($g_setting->google_recaptcha_status == 'Show') {
            $request->validate(
                [
                    'g-recaptcha-response' => 'required'
                ],
                [
                    'g-recaptcha-response.required' => 'You must have to input recaptcha correctly'
                ]
            );
        }

        unset($request->confirm_password);
        $data['password'] = Hash::make($request->password);
        $data['token'] = $token;
        $data['photo'] = "user-1.jpg";
        $data['status'] = 1;

        $admin->fill($data)->save();
        OldPassword::create(['admin_id' => $admin->id, 'password' => $admin->password]);


        // Send Email
        $email_template_data = DB::table('email_templates')->where('id', 6)->first();
        $subject = $email_template_data->et_subject;
        $message = $email_template_data->et_content;

        $verification_link = url('admin/registration/verify/' . $token . '/' . $request->email);

        $message = str_replace('[[verification_link]]', $verification_link, $message);

        Mail::to($request->email)->send(new RegistrationEmailToCustomer($subject, $message));

        return redirect()->back()->with('success', 'Please check your email to verify your registration. Check your spam folder too.');
    }

    public function verify()
    {
        $email_from_url = request()->segment(count(request()->segments()));
        $aa = DB::table('admins')->where('email', $email_from_url)->first();

        if (!$aa) {
            return redirect()->route('admin.login');
        }

        $expected_url = url('admin/registration/verify/' . $aa->token . '/' . $aa->email);
        $current_url = url()->current();
        if ($expected_url != $current_url) {
            return redirect()->route('admin.login');
        }

        $data['status'] = 1;
        $data['token'] = '';
        Admin::where('email', $email_from_url)->update($data);

        return redirect()->route('admin.login')->with('success', 'Registration is completed. You can now login.');
    }
}
