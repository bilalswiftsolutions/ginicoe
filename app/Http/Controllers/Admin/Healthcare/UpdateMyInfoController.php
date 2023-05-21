<?php

namespace App\Http\Controllers\Admin\Healthcare;

use App\Http\Controllers\Controller;
use App\Models\Admin\Healthcare;
use Illuminate\Http\Request;

class UpdateMyInfoController extends Controller
{
    public function index()
    {
        $healthcare = Healthcare::where('healthcare_id',session('id'))->first();
        return view('admin.healthcare.index',compact('healthcare'));
    }

    public function store(Request $request)
    {
        Healthcare::updateOrCreate(['healthcare_id'=>session('id')],$request->only( 'healthcare_id',
       'first_name',
       'last_name',
       'email',
       'country_code',
       'telephone_no',
       'help_description'));
       return back()->with('success','Information saved successfully');
    }
}
