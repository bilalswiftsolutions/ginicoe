<?php

namespace App\Http\Controllers\Admin\Education;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\Admin\Education;
use Illuminate\Http\Request;

class UpdateMyInfoController extends Controller
{
    public function index()
    {
        $education = Education::where('education_id',session('id'))->first();
        return view('admin.education.index',compact('education'));
    }

    public function store(Request $request)
    {
       Education::updateOrCreate(['education_id'=>session('id')],$request->only( 'education_id',
       'first_name',
       'last_name',
       'email',
       'country_code',
       'telephone_no',
       'help_description'));
       return back()->with('success','Information saved successfully');
    }
}
