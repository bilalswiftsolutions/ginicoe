<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\OldPassword;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;
use Hash;
use Illuminate\Validation\ValidationException;

class ResetPasswordController extends Controller
{
    public function index()
    {
        $g_setting = DB::table('general_settings')->where('id', 1)->first();

        $email_from_url = request()->segment(count(request()->segments()));
        $aa = DB::table('customers')->where('customer_email', $email_from_url)->first();

        if(!$aa) {
            return redirect()->route('customer.login');
        }

        $expected_url = url('customer/reset-password/'.$aa->customer_token.'/'.$aa->customer_email);
        $current_url = url()->current();
        if($expected_url != $current_url) {
            return redirect()->route('customer.login');
        }

        $email = $aa->customer_email;

        return view('customer.auth.reset_password', compact('g_setting', 'email'));
    }

    public function update(Request $request)
    {
        if(env('PROJECT_MODE') == 0) {
            return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        }
        
        $user = Customer::with(['oldPassword'])->where('customer_email', $request->current_email)->first();

     
        foreach ($user->oldPassword as $old_password) {
           
            if (Hash::check($request->new_password, $old_password->password)) {
                throw ValidationException::withMessages(['same_password' => __(' you are not allowed to use your last 4 password to comply the password security policy.')]);
            }
        }
        
        $request->validate([
            'new_password' => 'required',
            'retype_password' => 'required|same:new_password',
        ]);

        $data['customer_password'] = Hash::make($request->new_password);
        $data['customer_token'] = '';

        
        Customer::where('customer_email', $request->current_email)->update($data);
        OldPassword::create(['customer_id'=>$user->id,'password'=>$data['customer_password']]);


        return redirect()->route('customer.login')->with('success', 'Password is reset successfully!');
    }
}
