<?php

namespace App\Http\Controllers\Admin\Consumer;

use App\Http\Controllers\Controller;
use App\Models\Admin\Admin;
use App\Models\Admin\Consumer\EmploymentInformation;
use App\Models\Admin\Consumer\EthnicityInformation;
use App\Models\Admin\Consumer\FindMeHere;
use App\Models\Admin\Consumer\GenderIdentityInformation;
use App\Models\Admin\Consumer\MyNeighborhoodInformation;
use App\Models\Admin\Consumer\MyPidegreeInformation;
use Exception;
use Illuminate\Http\Request;

class ThisIsMeController extends Controller
{

    public function this_is_me()
    {
        $consumer = Admin::with([
            'my_pidegree_info', 'find_me_here', 'gender_identity_info',
            'my_neighborhood_info',
            'employment_info'
        ])->where('id', session('id'))->first();
        $my_pidegree_info = $consumer->my_pidegree_info;
        $find_me_here = $consumer->find_me_here;
        $gender_identity_info = $consumer->gender_identity_info;
        $ethnicity_info = $consumer->ethnicity_info;
        $my_neighborhood_info = $consumer->my_neighborhood_info;
        $employment_info = $consumer->employment_info;
        return view('admin.consumer.this_is_me', compact(
            'my_pidegree_info',
            'find_me_here',
            'gender_identity_info',
            'ethnicity_info',
            'my_neighborhood_info',
            'employment_info',
            
        ));
    }

    public function this_is_me_store(Request $request)
    {
        if ($request->form_section == 'find_me_here') {
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
                    $this->store_gender_identity_info($request);
                    break;
                case 'ethnicity_information':
                    $this->store_ethnicity_info($request);
                    break;
                case 'my_neighborhood_information':
                    $this->store_my_neighborhood_info($request);
                case 'employment_information':
                    $this->store_employement_info($request);
                    break;

                default:
            }
            return response()->json(['success' => true, 'message' => 'form submitted successfully']);
        } catch (Exception $e) {

            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
    public function store_employement_info($request)
    {
        return EmploymentInformation::updateOrCreate(['consumer_id' => $request->consumer_id], $request->only(
            'consumer_id',
            'employer_name',
            'job_title',
            'employer_identification_number',
            'anual_salary_last_year',
            'are_you_active_memeber_of_labour_union',
            'labor_union_name',
            'your_union_membership_number'
        ));
    }
    public function store_my_neighborhood_info($request)
    {
        return MyNeighborhoodInformation::updateOrCreate(['consumer_id' => $request->consumer_id], $request->only(
            'consumer_id',
            'neighborhood_race_right',
            'name_of_neighborhood_household_head_right',
            'neighborhood_guid_right',
            'provide_neigborhood_address_right',
            'neighborhood_house_address_right',
            'neighborhood_urbanization_name_right',
            'neighborhood_zipcode_right',
            'neighborhood_state_right',
            'neighborhood_city_right',

            'neighborhood_race_left',
            'name_of_neighborhood_household_head_left',
            'neighborhood_guid_left',
            'provide_neigborhood_address_left',
            'neighborhood_house_address_left',
            'neighborhood_urbanization_name_left',
            'neighborhood_zipcode_left',
            'neighborhood_state_left',
            'neighborhood_city_left',

            'neighborhood_race_front',
            'name_of_neighborhood_household_head_front',
            'neighborhood_guid_front',
            'provide_neigborhood_address_front',
            'neighborhood_house_address_front',
            'neighborhood_urbanization_name_front',
            'neighborhood_zipcode_front',
            'neighborhood_state_front',
            'neighborhood_city_front',


            'neighborhood_race_back',
            'name_of_neighborhood_household_head_back',
            'neighborhood_guid_back',
            'provide_neigborhood_address_back',
            'neighborhood_house_address_back',
            'neighborhood_urbanization_name_back',
            'neighborhood_zipcode_back',
            'neighborhood_state_back',
            'neighborhood_city_back',
        ));
    }
    public function store_ethnicity_info($request)
    {

        return EthnicityInformation::updateOrCreate(['consumer_id' => $request->consumer_id], $request->only(
            'consumer_id',
            'race',
            'marital_status',
            'weight',
            'height',
            'middle_initial',
            'complexion'
        ));
    }

    public function store_gender_identity_info($request)
    {
        return  GenderIdentityInformation::updateOrCreate(['consumer_id' => $request->consumer_id], $request->only(
            'consumer_id',
            'sex_at_birth',
            'legal_sex',
            'self_identify_sex'
        ));
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
