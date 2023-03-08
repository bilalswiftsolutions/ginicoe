<?php

namespace App\Http\Controllers\Admin\Consumer;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\Admin\Consumer\FindMeHere;
use App\Models\Admin\Consumer\MyPidegreeInformation;
use Exception;
use Illuminate\Http\Request;

class ThisIsMeController extends Controller
{

    public function this_is_me()
    {
        $consumer = Admin::with(['my_pidegree_info', 'find_me_here'])->where('id', session('id'))->first();
        $my_pidegree_info = $consumer->my_pidegree_info;
        $find_me_here = $consumer->find_me_here;
        return view('admin.consumer.this_is_me', compact('my_pidegree_info', 'find_me_here'));
    }

    public function this_is_me_store(Request $request)
    {
        if ($request->form_section == 'find_me_here'){
            //  dd($request->form_section);
        }

            $request['consumer_id'] = session('id');
        try {
            switch ($request->form_section) {
                case 'my_pidegree_info':
                   
                    $this->store_my_pidegree_info($request);
                    break;
                case 'find_me_here':
                    $this->store_find_me_here($request);
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

    public function store_find_me_here($request)
    {
        return FindMeHere::updateOrCreate(['consumer_id' => $request->consumer_id], $request->only(
            'consumer_id',
            'house_address',
            'building_name',
            'street_name',
            'state',
            'city',
            'town',
            'township',
            'parish',
            'village',
            'hamlet',
            'district',
            'county',
            'neighborhood_name',
            'zipcode',
            'urbanization_name',
            'house_type',
            'do_you_live_in_sky_crapper',
            'no_of_floor',
            'your_floor_no',
            'apartment_no',
            'room_no',
            'bed_no',
            'living_for_two_years',
            'old_house_address',
            'old_building_name',
            'old_street_name',
            'old_state',
            'old_city',
            'old_town',
            'old_township',
            'old_parish',
            'old_village',
            'old_hamlet',
            'old_district',
            'old_county',
            'old_neighborhood_name',
            'old_zipcode',
            'old_urbanization_name',
            'old_house_type',
            'old_do_you_live_in_sky_crapper',
            'old_no_of_floor',
            'old_your_floor_no',
            'old_apartment_no',
            'old_room_no',
            'old_bed_no',
            'email',
            'primary_area_code',
            'primary_mobile_number',
            'alternate_area_code',
            'alternate_telephone_number'

        ));
    }

    public function store_my_pidegree_info($request)
    {
        return MyPidegreeInformation::updateOrCreate(['consumer_id' => $request->consumer_id], $request->only(
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
