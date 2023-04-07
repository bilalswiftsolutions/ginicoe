<?php

namespace App\Http\Controllers\Admin\Consumer;

use App\Http\Controllers\Controller;
use App\Mail\ConsumerThisIsMeMail;
use App\Models\Admin\Admin;
use App\Models\Admin\Consumer\AttestationInformation;
use App\Models\Admin\Consumer\ChargeCardInformation;
use App\Models\Admin\Consumer\DistinguishIdentifierInformation;
use App\Models\Admin\Consumer\EmploymentInformation;
use App\Models\Admin\Consumer\EthnicityInformation;
use App\Models\Admin\Consumer\FacialImageUpload;
use App\Models\Admin\Consumer\FamilyAndMedicalHistoryInformation;
use App\Models\Admin\Consumer\FindMeHere;
use App\Models\Admin\Consumer\GenderIdentityInformation;
use App\Models\Admin\Consumer\HairInformation;
use App\Models\Admin\Consumer\HeadAndFaceInformation;
use App\Models\Admin\Consumer\MedicalInformation;
use App\Models\Admin\Consumer\MyNeighborhoodInformation;
use App\Models\Admin\Consumer\MyPidegreeInformation;
use App\Models\Admin\Consumer\TravelInformation;
use App\Models\Admin\Consumer\TwinIdentifierInformation;
use App\Models\Admin\FieldsetReturnBackData;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ThisIsMeController extends Controller
{

    public function this_is_me()
    {
        $consumer = Admin::with([
            'my_pidegree_info', 'find_me_here', 'gender_identity_info',
            'my_neighborhood_info',
            'employment_info',
            'charge_card_info',
            'family_and_medical_info',
            'this_is_me_return_back_data', 'facial_image'
        ])->where('id', session('id'))->first();
        $my_pidegree_info = $consumer->my_pidegree_info;
        $find_me_here = $consumer->find_me_here;
        $gender_identity_info = $consumer->gender_identity_info;
        $ethnicity_info = $consumer->ethnicity_info;
        $my_neighborhood_info = $consumer->my_neighborhood_info;
        $employment_info = $consumer->employment_info;
        $charge_card_info = $consumer->charge_card_info;
        $head_and_face_info = $consumer->head_and_face_info;
        $hair_info = $consumer->hair_info;
        $distinguish_identifier_info = $consumer->distinguish_identifier_info;
        $twin_identifier_info = $consumer->twin_identifier_info;
        $medical_info = $consumer->medical_info;
        $family_and_medical_info = $consumer->family_and_medical_info;
        $travel_info = $consumer->travel_info;
        $attestation_info = $consumer->attestation_info;
        $facial_image = $consumer->facial_image;

        $this_is_me_return_back_data = $consumer->this_is_me_return_back_data;
        return view('admin.consumer.this_is_me', compact(
            'my_pidegree_info',
            'find_me_here',
            'gender_identity_info',
            'ethnicity_info',
            'my_neighborhood_info',
            'employment_info',
            'charge_card_info',
            'hair_info',
            'head_and_face_info',
            'distinguish_identifier_info',
            'twin_identifier_info',
            'medical_info',
            'family_and_medical_info',
            'travel_info',
            'attestation_info',
            'this_is_me_return_back_data',
            'facial_image'


        ));
    }

    public function this_is_me_store(Request $request)
    {

        if ($request->form_section == 'head_and_face_information') {
            // dd($request->all());
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
                    break;
                case 'employment_information':

                    $this->store_employement_info($request);
                    break;
                case 'charge_card_information':
                    $this->store_charge_card_info($request);
                    break;
                case 'head_and_face_information':
                    $this->store_head_and_face_info($request);
                    break;
                case 'hair_information':
                    $this->store_hair_info($request);
                    break;
                case 'distinguish_identifier_information':
                    $this->distinguish_identifier_info($request);
                    break;
                case 'twin_identifier_information':
                    $this->twin_identifier_info($request);
                    break;
                case 'facial_image_upload':

                    return response()->json(['success' => true, 'data' => $this->store_facial_image_upload($request)]);
                    break;
                case 'medical_information':
                    $this->store_medical_info($request);
                    break;
                case 'family_and_medical_information':
                    $this->store_family_and_medical_info($request);
                    break;
                case 'travel_information':
                    $this->store_travel_info($request);
                    break;
                case 'attestation_information':
                    $this->store_attestation_info($request);
                    break;

                default:
            }
            return response()->json(['success' => true, 'message' => 'form submitted successfully']);
        } catch (Exception $e) {

            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
    public function store_facial_image_upload($request)
    {
        if (!empty($request->file)) {
            if (in_array($request->file->extension(), ['png', 'jpg', 'jpeg'])) {
                // Store the uploaded file in the public/uploads directory
                $imageName = time() . '.' . $request->file->extension();
                $request->file->move(public_path('facial_uploads'), $imageName);
                return   FacialImageUpload::updateOrCreate(
                    ['consumer_id' => $request->consumer_id],
                    $request->only(
                        'consumer_id',
                        'to_see_global_look_alike',
                        'like_to_have_global_look_alike'
                    ) + ['facial_image' => asset('public/facial_uploads/' . $imageName)]
                );
            }
        } else {

            return   FacialImageUpload::updateOrCreate(
                ['consumer_id' => $request->consumer_id],
                $request->only(
                    'consumer_id',
                    'to_see_global_look_alike',
                    'like_to_have_global_look_alike'
                )
            );
        }
    }
    public function store_attestation_info($request)
    {
        try {

            $attestation_info = AttestationInformation::updateOrCreate(
                ['consumer_id' => $request->consumer_id],
                $request->only(
                    'consumer_id',
                    'how_you_heared_about_us',
                    'i_confirm_data_is_accurate'
                )
            );

            $message = "<pre>Thank you for signing up to become a Ginicoe Member.
            We will perform some checking on our end before we can begin to protect your credit and debit card transaction.s
            Please be patient.
            If we require any additional info, we will contact you by mail.
            
            Ginicoe will never telephone you asking for information.
            Ginicoe will never text you asking for information.
            
            Your data will never be sold.
            
            From all of our Ginicoe Associates, thank you once again for signing up.
            We will email you once we are completed on our end.
            Please be well.</pre>";
           
            Mail::to(session('email'))->send(new ConsumerThisIsMeMail('Thank you for signing up to become a Ginicoe Member', $message));
            return $attestation_info;
        } catch (Exception $e) {

        }
    }

    public function store_travel_info($request)
    {
        return TravelInformation::updateOrCreate(
            ['consumer_id' => $request->consumer_id],
            $request->only(
                'consumer_id',
                'are_you_us_citizen',
                'passport_number',
                'alien_id_number',
                'country_of_issuance_foriegn_country',
                'foreign_passport_number',
                'are_you_on_visa',
                'visa_number',
                'us_permit',
                'us_govt_id_number',
                'us_driving_license_number',
                'us_state',
                'state_driver_license_no',
                'state_id',
                'state_id_no',
                'state_hunting',
                'state_hunting_no',
                'state_fishing',
                'state_fishing_no',
                'state_pilot_license',
                'state_pilot_license_no',
                'state_handgun_firearm',
                'state_handgun_firearm_no',
                'state_medicaid',
                'state_medicaid_no',
                'state_medicare',
                'state_medicare_no',
                'us_military_branch',
                'us_military_branch_no',
                'bureau_of_indian_affair_card_no',
                'tribal_id_card_no',
                'witsec',
                'old_first_name',
                'old_last_name',
                'old_mi',
                'old_dob',
                'old_spouse_first_name',
                'old_spouse_last_name',
                'old_spouse_mi',
                'old_spouse_dob',
                'old_first_name_1st_daughter',
                'old_last_name_1st_daughter',
                'old_mi_1st_daughter',
                'old_dob_1st_daughter',
                'old_first_name_2nd_daughter',
                'old_last_name_2nd_daughter',
                'old_mi_2nd_daughter',
                'old_dob_2nd_daughter',
                'old_first_name_1st_son',
                'old_last_name_1st_son',
                'old_mi_1st_son',
                'old_dob_1st_son',
                'old_first_name_2nd_son',
                'old_last_name_2nd_son',
                'old_mi_2nd_son',
                'old_dob_2nd_son',
                'to_see_global_look_alike',
                'like_to_have_global_look_alike'
            )
        );
    }
    public function store_family_and_medical_info($request)
    {
        return FamilyAndMedicalHistoryInformation::updateOrCreate(
            ['consumer_id' => $request->consumer_id],
            $request->only(
                'consumer_id',
                'number_of_brother',
                'olders_brother_name',
                'number_of_sister',
                'youngest_sister_name',
                'place_of_birth',
                'name_of_hospital_you_born_in',
                'name_of_mid_wife',
                'first_name_of_mid_wife',
                'last_name_of_mid_wife',
                'exact_location_of_first_reponder',
                'address_description',
                'birth_house_address',
                'birth_street',
                'birth_country',
                'birth_state',
                'birth_city',
                'birth_zipcode',
                'birth_address_description',
                'your_age'
            )
        );
    }
    public function store_medical_info($request)
    {
        return MedicalInformation::updateOrCreate(
            ['consumer_id' => $request->consumer_id],
            $request->only(
                'consumer_id',
                'medical_house_address',
                'medical_street',
                'medical_country',
                'medical_state',
                'medical_city',
                'medical_zipcode',
                'medical_guid',
                'want_to_know_law_inforcement',
                'do_you_have_hidden_ailment',
                'agoraphobia',
                'generalized_anxiety_disorder_gad',
                'panic_disorder',
                'separation_anxiety_disorder',
                'social_anxiety_disorder',
                'specific_phobias',
                'depressive_episodes',
                'mania',
                'breathing_related_sleep_disorders',
                'hypersomnolence',
                'insomnia_disorder',
                'narcolepsy',
                'parasomnias',
                'restless_legs_syndrome',
                'disruptive_mood_dysregulation_disorder',
                'major_depressive_disorder',
                'persistent_depressive_disorder',
                'other_or_unspecified_depressive_disorder',
                'premenstrual_dysphoric_disorder',
                'medication_depressive_disorder',
                'conduct_disorder',
                'intermittent_explosive_disorder',
                'kleptomania',
                'oppositional_defiant_disorder',
                'pyromania',
                'dissociative_amnesia',
                'dissociative_identity_disorder',
                'derealization_disorder',
                'anorexia_nervosa',
                'binge_eating_disorder',
                'bulimia_nervosa',
                'pica',
                'rumination_disorder',
                'sleep_disorders',
                'delirium',
                'neurocognitive_disorders',
                'adhd',
                'autism_spectrum_disorder',
                'communication_disorders',
                'global_developmental_delay',
                'intellectual_disability',
                'obsessive_compulsive_disorder',
                'body_dysmorphic_disorder',
                'hoarding_disorder',
                'trichotillomania',
                'excoriation_disorder',
                'ocd_medical_condition',
                'antisocial_personality_disorder',
                'avoidant_personality_disorder',
                'borderline_personality_disorder',
                'dependent_personality_disorder',
                'histrionic_personality_disorder',
                'narcissistic_personality_disorder',
                'obsessive_compulsive_personality_disorder',
                'paranoid_personality_disorder',
                'schizoid_personality_disorder',
                'schizotypal_personality_disorder',
                'delusions',
                'hallucinations',
                'disorganized_speech',
                'disorganized_behavior',
                'negative_symptoms',
                'conversion_disorder',
                'factitious_disorder',
                'illness_anxiety_disorder',
                'somatic_symptom_disorder',
                'acute_stress_disorder',
                'adjustment_disorders',
                'post_traumatic_stress_disorder',
                'reactive_attachment_disorder',
                'alcohol_related_disorders',
                'inhalant_use_disorders',
                'stimulant_use_disorder',
                'tobacco_use_disorder',
                'gambling_disorder'


            )
        );
    }
    public function twin_identifier_info($request)
    {
        return TwinIdentifierInformation::updateOrCreate(
            ['consumer_id' => $request->consumer_id],
            $request->only(
                'consumer_id',
                'dominant_hand_writing_side',
                'are_you_twin',
                'twin_type',
                'twin_first_name',
                'twin_mi',
                'twin_last_name',
                'twin_difference_description',
                'birth_mark_located',
                'twin_birth_mark_located',
                'my_freckles_located',
                'twin_freckles_located',
                'my_moles_located',
                'twin_moles_located',
                'hair_are_different',
                'my_eye_color',
                'twin_eye_color',
                'my_hair_color',
                'twin_hair_color',



            )
        );
    }
    public function distinguish_identifier_info($request)
    {
        return DistinguishIdentifierInformation::updateOrCreate(
            ['consumer_id' => $request->consumer_id],
            $request->only(
                'consumer_id',
                'facial_neck_scars',
                'facial_neck_scars_description',
                'facial_or_neck_tattoos',
                'facial_or_neck_tattoos_description',
                'facial_plastic_surgery',
                'right_eye',
                'left_eye',
                'nose_job',
                'cheeks',
                'mouth',
                'chin',
                'fore_head',
                'face_lift',
                'lips',
                'facial_surgery_date',
                'number_of_plastic_surgery',
                'plastic_surgeon_name',
                'first_name_of_surgeon',
                'last_name_of_surgeon',
                'surgeon_house_address',
                'surgeon_street',
                'surgeon_state',
                'surgeon_city',
                'surgeon_zipcode',
                'surgeon_telephone',


            )
        );
    }
    public function store_hair_info($request)
    {
        return HairInformation::updateOrCreate(
            ['consumer_id' => $request->consumer_id],
            $request->only(
                'consumer_id',
                'natural_hair_color',
                'hair_style',
                'facial_hair_description',

            )
        );
    }

    public function store_head_and_face_info($request)
    {
        return  HeadAndFaceInformation::updateOrCreate(
            ['consumer_id' => $request->consumer_id],
            $request->only(
                'consumer_id',
                'chin_description',
                'eyes_description',
                'hair_description',
                'mouth_description',
                'eye_color',
                'eyeware_prescription'
            )
        );
    }

    public function store_charge_card_info($request)
    {
        return  ChargeCardInformation::updateOrCreate(
            ['consumer_id' => $request->consumer_id],
            $request->only(
                'consumer_id',
                // 'charge_card_to_protect_1',
                'card_number_1',
                'nickname_1',
                'primary_first_name_1',
                'primary_mi_1',
                'primary_last_name_1',
                'card_has_secondary_auth_user_1',
                'secondary_first_name_1',
                'secondary_last_name_1',
                'secondary_mi_1',
                'secondary_card_holder_relationship_1',
                'name_of_bank_1',
                'expiry_date_1',

                // 'charge_card_to_protect_2',
                'card_number_2',
                'nickname_2',
                'primary_first_name_2',
                'primary_mi_2',
                'primary_last_name_2',
                'card_has_secondary_auth_user_2',
                'secondary_first_name_2',
                'secondary_last_name_2',
                'secondary_mi_2',
                'secondary_card_holder_relationship_2',
                'name_of_bank_2',
                'expiry_date_2',


                // 'charge_card_to_protect_3',
                'card_number_3',
                'nickname_3',
                'primary_first_name_3',
                'primary_mi_3',
                'primary_last_name_3',
                'card_has_secondary_auth_user_3',
                'secondary_first_name_3',
                'secondary_last_name_3',
                'secondary_mi_3',
                'secondary_card_holder_relationship_3',
                'name_of_bank_3',
                'expiry_date_3',


                // 'charge_card_to_protect_4',
                'card_number_4',
                'nickname_4',
                'primary_first_name_4',
                'primary_mi_4',
                'primary_last_name_4',
                'card_has_secondary_auth_user_4',
                'secondary_first_name_4',
                'secondary_last_name_4',
                'secondary_mi_4',
                'secondary_card_holder_relationship_4',
                'name_of_bank_4',
                'expiry_date_4',


                // 'charge_card_to_protect_5',
                'card_number_5',
                'nickname_5',
                'primary_first_name_5',
                'primary_mi_5',
                'primary_last_name_5',
                'card_has_secondary_auth_user_5',
                'secondary_first_name_5',
                'secondary_last_name_5',
                'secondary_mi_5',
                'secondary_card_holder_relationship_5',
                'name_of_bank_5',
                'expiry_date_5',
            )
        );
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

        $random_bytes = random_bytes(32); // generates 16 random bytes
        $random_string = bin2hex($random_bytes);
        Admin::where('id', $request->consumer_id)->update(['guid' => 'CUSA' . $this->get_state_abbriviation($request) . $request->consumer_id . $random_string]);
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

    public function get_state_abbriviation($request)
    {
        $states = array(
            'Alabama' => 'AL',
            'Alaska' => 'AK',
            'Arizona' => 'AZ',
            'Arkansas' => 'AR',
            'California' => 'CA',
            'Colorado' => 'CO',
            'Connecticut' => 'CT',
            'Delaware' => 'DE',
            'Florida' => 'FL',
            'Georgia' => 'GA',
            'Hawaii' => 'HI',
            'Idaho' => 'ID',
            'Illinois' => 'IL',
            'Indiana' => 'IN',
            'Iowa' => 'IA',
            'Kansas' => 'KS',
            'Kentucky' => 'KY',
            'Louisiana' => 'LA',
            'Maine' => 'ME',
            'Maryland' => 'MD',
            'Massachusetts' => 'MA',
            'Michigan' => 'MI',
            'Minnesota' => 'MN',
            'Mississippi' => 'MS',
            'Missouri' => 'MO',
            'Montana' => 'MT',
            'Nebraska' => 'NE',
            'Nevada' => 'NV',
            'New Hampshire' => 'NH',
            'New Jersey' => 'NJ',
            'New Mexico' => 'NM',
            'New York' => 'NY',
            'North Carolina' => 'NC',
            'North Dakota' => 'ND',
            'Ohio' => 'OH',
            'Oklahoma' => 'OK',
            'Oregon' => 'OR',
            'Pennsylvania' => 'PA',
            'Rhode Island' => 'RI',
            'South Carolina' => 'SC',
            'South Dakota' => 'SD',
            'Tennessee' => 'TN',
            'Texas' => 'TX',
            'Utah' => 'UT',
            'Vermont' => 'VT',
            'Virginia' => 'VA',
            'Washington' => 'WA',
            'West Virginia' => 'WV',
            'Wisconsin' => 'WI',
            'Wyoming' => 'WY',
        );
        $state_name = $request->state;
        $state_abbr = $states[$state_name];
        return $state_abbr;
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

    public function return_later(Request $request)
    {
        FieldsetReturnBackData::updateOrCreate(['admin_id' => session('id')], $request->only('fieldset_id', 'module') + ['admin_id' => session('id')]);
        return response()->json(['success' => true, 'message' => 'Data saved successfully']);
    }
}
