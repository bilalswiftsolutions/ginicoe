<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\OldPassword;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;
use Hash;

use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class ResetPasswordController extends Controller
{
    public function index()
    {
        $email_from_url = request()->segment(count(request()->segments()));
      
        $aa = DB::table('admins')->where('email', $email_from_url)->first();
        $expected_url = url('admin/reset-password/'.$aa->token.'/'.$aa->email);
        $current_url = url()->current();
        if($expected_url != $current_url) {
            return redirect()->route('admin.login');
        }
        return view('admin.auth.reset_password',compact('email_from_url'));
    }

    public function update(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        }

        $user = Admin::with(['oldPassword'])->where('email', $request->email)->first();

 
        foreach ($user->oldPassword as $old_password) {
           
            if (Hash::check($request->new_password, $old_password->password)) {
                throw ValidationException::withMessages(['same_password' => __(' you are not allowed to use your last 4 password to comply the password security policy.')]);
            }
        }
        
        $request->validate([
            'new_password' => ["required","min:8","max:32", Password::min(8)
            ->mixedCase()
            ->numbers()
            ->symbols()
            ->uncompromised()],
            'retype_password' => 'required|same:new_password',
           
        ]);

        $data['password'] = Hash::make($request->new_password);
        $data['token'] = '';
        $admin = Admin::where('email',$request->email)->first();
        OldPassword::create(['admin_id' => $admin->id, 'password' => $admin->password]);

        $admin->update($data);
        

        return redirect()->route('admin.login')->with('success', 'Password is reset successfully!');
    }
}
