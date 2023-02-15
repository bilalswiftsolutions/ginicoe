<?php

namespace App\Http\Controllers;

use App\Models\Admin\Admin;
use App\Models\AdminCode;

use Illuminate\Http\Request;
use Session;

class TwoFAController extends Controller
{
    
    public function index()
    {
        return view('admin.auth.2fa');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $request->validate([
            'code'=>'required',
        ]);
  
        $find = AdminCode::where('admin_id', session('id'))
                        ->where('code', $request->code)
                        ->where('updated_at', '>=', now()->subMinutes(2))
                        ->first();
  
        if (!is_null($find)) {
            Session::put('user_2fa', session('id'));
            return redirect()->route('admin.dashboard');
        }
  
        return back()->with('error', 'You entered wrong code.');
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function resend()
    {
        Admin::find(session('id'))->generateCode();
       
  
        return back()->with('success', 'We sent you code on your mobile number.');
    }
}
