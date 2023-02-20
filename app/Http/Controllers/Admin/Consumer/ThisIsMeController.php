<?php

namespace App\Http\Controllers\Admin\Consumer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ThisIsMeController extends Controller
{

    public function this_is_me()
    {
        return view('admin.consumer.this_is_me');
    }
}
