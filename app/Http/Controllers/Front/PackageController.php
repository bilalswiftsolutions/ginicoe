<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    public function goto_payment_page($package_name)
    {
        if (session('id') != null) {
            if ($package_name == 'basic')
                return redirect('https://buy.stripe.com/14kaFD0nSekOfEk4gi');
            if ($package_name == 'standard')
                return redirect('https://buy.stripe.com/5kA5ljdaE0tY3VCdQT');
            if ($package_name == 'plus')
                return redirect('https://buy.stripe.com/28o5lj1rWgsW2Ry7sw');
            if ($package_name == 'elite')
                return redirect('https://buy.stripe.com/dR6bJHdaEb8Cak0cMR');
        } else {
            return redirect()->route('admin.login');
        }
    }
}
