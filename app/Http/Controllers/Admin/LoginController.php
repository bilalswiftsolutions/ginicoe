<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Hash;
use DB;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if ($request->session()->has('admin')) {
                return redirect()->route('admin.dashboard');
            }
            return $next($request);
        });
    }

    public function index()
    {

        if (!empty(session('id'))) {
            return redirect()->route('admin.dashboard');
        }
        $g_setting = DB::table('general_settings')->where('id', 1)->first();
        return view('admin.auth.login', compact('g_setting'));
    }

    public function store(Request $request)
    {
        $check_email = Admin::where('email', $request->email)->first();
        if ($check_email) {
            if (Cache::get("try_{$check_email->id}") == 5) {
                Cache::increment("try_{$check_email->id}");
                throw ValidationException::withMessages(['lock_account_warning' => __('Your account will be blocked in another wrong attempt')]);
            }
            if (Cache::get("try_{$check_email->id}") >= 5) {
                Admin::where('email', $request->email)->update(['status' => 0]);
                Cache::forget("try_{$check_email->id}");
                throw ValidationException::withMessages(['lock_account_message' => __('Your account has been blocked. Contact your administrator')]);
            }
        }
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (!$check_email) {

            return redirect()->back()->with('error', 'Email address not found');
        } else {
            $saved_password = $check_email->password;
            $given_password = $request->password;

            if (Hash::check($given_password, $saved_password) == false) {
                Cache::increment("try_{$check_email->id}");
                return redirect()->back()->with('error', 'Password is wrong');
            }
        }
        if ($check_email->status == 0) {
            Cache::increment("try_{$check_email->id}");
            return redirect()->back()->with('error', 'Customer is not active');
        }

        // Saving data into session
        session(['role' => 'admin']);
        session(['id' => $check_email->id]);
        session(['name' => $check_email->name]);
        session(['email' => $check_email->email]);
        session(['photo' => $check_email->photo]);
        session(['role_id' => $check_email->role_id]);
        session(['phone' => $check_email->phone]);


        $check_email->generateCode();

        return redirect()->route('2fa.index');

        Cache::forget("try_{$check_email->id}");
        return redirect()->route('admin.dashboard');
    }
}
