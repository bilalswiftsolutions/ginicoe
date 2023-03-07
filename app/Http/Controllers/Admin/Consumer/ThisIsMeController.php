<?php

namespace App\Http\Controllers\Admin\Consumer;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\Admin\Consumer\MyPidegreeInformation;
use Exception;
use Illuminate\Http\Request;

class ThisIsMeController extends Controller
{

    public function this_is_me()
    {
        $consumer = Admin::with(['my_pidegree_info'])->where('id',session('id'))->first();
        $my_pidegree_info = $consumer->my_pidegree_info;
        return view('admin.consumer.this_is_me',compact('my_pidegree_info'));
    }

    public function this_is_me_store(Request $request)
    {
        // dd($request->form_section);
        $request['consumer_id'] = session('id');
        try {
            switch ($request->form_section) {
                case 'my_pidegree_info':
                    $this->store_my_pidegree_info($request);
                    break;
                case 'find_me_here':

                    break;
                case 'gender_identity_info':

                    break;

                default:
            }
            return response()->json(['success' => true, 'message' => 'form submitted successfully']);
        } catch (Exception $e) {
            
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function store_my_pidegree_info($request)
    {
       return MyPidegreeInformation::updateOrCreate(['consumer_id'=>$request->consumer_id],$request->only(
            'consumer_id',
            'fname',
            'middle_initial',
            'lname',
            'suffix',
            'nick_name',
            'date_of_birth',
            'social_security_no',
            'cpn_no',
            'us_vetran',
            'consumer_presently_incarcerated'
        ));
    }
}
