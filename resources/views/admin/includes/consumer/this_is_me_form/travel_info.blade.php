<fieldset class="wizard-fieldset mt-4 @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_sixteen') show @endif" id="fieldset_sixteen">
    <h5>16. Travel Information</h5>
    <input type="hidden" name="form_section" value="travel_information" />

    <div class="row">
     
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
               16.1 Are you a U.S. Citizen
                <div class="wizard-form-radio">
                    <input @if(!empty($travel_info) && $travel_info->are_you_us_citizen == 1) checked @endif name="are_you_us_citizen" value="1" id="radio1" type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input  @if(empty($travel_info) || $travel_info->are_you_us_citizen == 0) checked @endif name="are_you_us_citizen" value="0" id="radio2"
                        type="radio">
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$travel_info->passport_number ?? '' }}" name="passport_number" type="text" class="form-control wizard-required" id="passport_number">
                <label for="passport_number" class="wizard-form-text-label">16.2 What is your U.S. Passport number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$travel_info->alien_id_number ?? '' }}" name="alien_id_number" type="text" class="form-control wizard-required" id="alien_id_number">
                <label for="alien_id_number" class="wizard-form-text-label">16.3 What is your alien identification card number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->country_of_issuance_foriegn_country ?? '' }}" name="country_of_issuance_foriegn_country" type="text" class="form-control wizard-required" id="country_of_issuance_foriegn_country">
                <label for="country_of_issuance_foriegn_country" class="wizard-form-text-label">16.4 What is the Country of issuance of your foreign government-issued document evidencing nationality or residence? </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$travel_info->foreign_passport_number ?? '' }}" name="foreign_passport_number" type="text" class="form-control wizard-required" id="foreign_passport_number">
                <label for="foreign_passport_number" class="wizard-form-text-label">16.5 What is your Foreign Passport number? </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->country_of_issuance_foreign_passport ?? '' }}" name="country_of_issuance_foreign_passport" type="text" class="form-control wizard-required" id="country_of_issuance_foreign_passport">
                <label for="country_of_issuance_foreign_passport" class="wizard-form-text-label">16.6 What is the Country of Issuance?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
               16.7  Are you in the U.S. on a Visa?
                <div class="wizard-form-radio">
                    <input  @if(!empty($travel_info) && $travel_info->are_you_on_visa == 1) checked @endif  name="are_you_on_visa" value="1" id="radio1" type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input    @if(empty($travel_info) || $travel_info->are_you_on_visa == 1) checked @endif name="are_you_on_visa" value="0" id="radio2"
                        type="radio">
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->visa_number ?? '' }}" name="visa_number" type="text" class="form-control wizard-required" id="visa_number">
                <label for="visa_number" class="wizard-form-text-label">16.8 16.8What is your U.S. Visa number?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->us_permit ?? '' }}" name="us_permit" type="text" class="form-control wizard-required" id="us_permit">
                <label for="us_permit" class="wizard-form-text-label">16.9 U.S Permit</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->us_govt_id_number ?? ''}}" name="us_govt_id_number" type="text" class="form-control wizard-required" id="us_govt_id_number">
                <label for="us_govt_id_number" class="wizard-form-text-label">16.10 U.S. government id document number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->us_driving_license_number ?? ''}}" name="us_driving_license_number" type="text" class="form-control wizard-required" id="us_driving_license_number">
                <label for="us_driving_license_number" class="wizard-form-text-label">16.11 U.S. driver’s license number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
               
                <label for="us_state" class="wizard-form-text-label">16.12 state</label>
                <select class="form-control" name="us_state" id="us_state" required>
                    <option></option>
                    <option value="{{ $travel_info->us_state ?? ''  ?? '' }}" selected>
                        {{ $travel_info->us_state ?? '' }}</option>
                    <option value="Alabama">Alabama</option>
                    <option value="Alaska">Alaska</option>
                    <option value="Arizona">Arizona</option>
                    <option value="Arkansas">Arkansas</option>
                    <option value="California">California</option>
                    <option value="Colorado">Colorado</option>
                    <option value="Connecticut">Connecticut</option>
                    <option value="Delaware">Delaware</option>
                    <option value="District Of Columbia">District Of Columbia</option>
                    <option value="Florida">Florida</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Idaho">Idaho</option>
                    <option value="Illinois">Illinois</option>
                    <option value="Indiana">Indiana</option>
                    <option value="Iowa">Iowa</option>
                    <option value="Kansas">Kansas</option>
                    <option value="Kentucky">Kentucky</option>
                    <option value="Louisiana">Louisiana</option>
                    <option value="Maine">Maine</option>
                    <option value="Maryland">Maryland</option>
                    <option value="Massachusetts">Massachusetts</option>
                    <option value="Michigan">Michigan</option>
                    <option value="Minnesota">Minnesota</option>
                    <option value="Mississippi">Mississippi</option>
                    <option value="Missouri">Missouri</option>
                    <option value="Montana">Montana</option>
                    <option value="Nebraska">Nebraska</option>
                    <option value="Nevada">Nevada</option>
                    <option value="New Hampshire">New Hampshire</option>
                    <option value="New Jersey">New Jersey</option>
                    <option value="New Mexico">New Mexico</option>
                    <option value="New York">New York</option>
                    <option value="North Carolina">North Carolina</option>
                    <option value="North Dakota">North Dakota</option>
                    <option value="Ohio">Ohio</option>
                    <option value="Oklahoma">Oklahoma</option>
                    <option value="Oregon">Oregon</option>
                    <option value="Pennsylvania">Pennsylvania</option>
                    <option value="Rhode Island">Rhode Island</option>
                    <option value="South Carolina">South Carolina</option>
                    <option value="South Dakota">South Dakota</option>
                    <option value="Tennessee">Tennessee</option>
                    <option value="Texas">Texas</option>
                    <option value="Utah">Utah</option>
                    <option value="Vermont">Vermont</option>
                    <option value="Virginia">Virginia</option>
                    <option value="Washington">Washington</option>
                    <option value="West Virginia">West Virginia</option>
                    <option value="Wisconsin">Wisconsin</option>
                    <option value="Wyoming">Wyoming</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>



        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->foreign_country_driving_license_number ?? '' }}" name="foreign_country_driving_license_number" type="text" class="form-control wizard-required" id="foreign_country_driving_license_number">
                <label for="foreign_country_driving_license_number" class="wizard-form-text-label">16.13 foreign driver’s license country</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->foreign_dl_number ?? '' }}" name="foreign_dl_number" type="text" class="form-control wizard-required" id="foreign_dl_number">
                <label for="foreign_dl_number" class="wizard-form-text-label">16.14 foreign dl number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>



        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->foreign_id_number ?? '' }}" name="foreign_id_number" type="text" class="form-control wizard-required" id="foreign_id_number">
                <label for="foreign_id_number" class="wizard-form-text-label">16.15 foreign id documents</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>



        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->us_education_doc ?? '' }}" name="us_education_doc" type="text" class="form-control wizard-required" id="us_education_doc">
                <label for="us_education_doc" class="wizard-form-text-label">16.16 U.S. professional or education documents </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->witsec ?? '' }}" name="witsec" type="text" class="form-control wizard-required" id="witsec">
                <label for="witsec " class="wizard-form-text-label">16.17 WITSEC </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_first_name ?? '' }}" name="old_first_name" type="text" class="form-control wizard-required" id="old_first_name">
                <label for="old_first_name" class="wizard-form-text-label">16.18 OLD First Name </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_last_name ?? '' }}" name="old_last_name" type="text" class="form-control wizard-required" id="old_last_name">
                <label for="old_last_name" class="wizard-form-text-label">16.19 Old Last Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_mi ?? '' }}" name="old_mi" type="text" class="form-control wizard-required" id="old_mi">
                <label for="old_mi" class="wizard-form-text-label">16.20 Old MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_dob ?? date('Y-m-d')}}" name="old_dob"  type="date" class="form-control wizard-required" id="old_dob">
                <label for="old_dob" class="wizard-form-text-label">16.21 Old DOB</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_spouse_first_name ?? '' }}" name="old_spouse_first_name" type="text" class="form-control wizard-required" id="old_spouse_first_name">
                <label for="old_spouse_first_name" class="wizard-form-text-label"></label>
                <p class="text_danger form_error">16.22 Spouse Old First Name</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_spouse_last_name ?? '' }}" name="old_spouse_last_name" type="text" class="form-control wizard-required" id="old_spouse_last_name">
                <label for="old_spouse_last_name" class="wizard-form-text-label">16.23 Spouse old Last Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_spouse_mi ?? '' }}" name="old_spouse_mi" type="text" class="form-control wizard-required" id="old_spouse_mi">
                <label for="old_spouse_mi" class="wizard-form-text-label">16.24 Spouse Old MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_spouse_dob ?? date('Y-m-d')}}" name="old_spouse_dob" type="date" class="form-control wizard-required" id="old_spouse_dob">
                <label for="old_spouse_dob" class="wizard-form-text-label">16.25 Spouse old DOB</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_first_name_1st_daughter ?? '' }}" name="old_first_name_1st_daughter" type="text" class="form-control wizard-required" id="old_first_name_1st_daughter">
                <label for="old_first_name_1st_daughter" class="wizard-form-text-label">16.26 1st Daughter’s Old First Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_last_name_1st_daughter ?? '' }}" name="old_last_name_1st_daughter" type="text" class="form-control wizard-required" id="old_last_name_1st_daughter">
                <label for="old_last_name_1st_daughter" class="wizard-form-text-label">16.27 1st Daughter’s Old Last Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_mi_1st_daughter ?? '' }}" name="old_mi_1st_daughter" type="text" class="form-control wizard-required" id="old_mi_1st_daughter">
                <label for="old_mi_1st_daughter" class="wizard-form-text-label">16.28 1st Daughter’s Old MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_dob_1st_daughter ?? date('Y-m-d')  }}" name="old_dob_1st_daughter"  type="date" class="form-control wizard-required" id="old_dob_1st_daughter">
                <label for="old_dob_1st_daughter" class="wizard-form-text-label">16.29 1st Daughter’s Old DOB</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_first_name_2nd_daughter ?? '' }}" name="old_first_name_2nd_daughter" type="text" class="form-control wizard-required" id="old_first_name_2nd_daughter">
                <label for="old_first_name_2nd_daughter" class="wizard-form-text-label">16.30 2nd  Daughter’s Old First Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_last_name_2nd_daughter ?? '' }}" name="old_last_name_2nd_daughter" type="text" class="form-control wizard-required" id="old_last_name_2nd_daughter">
                <label for="old_last_name_2nd_daughter" class="wizard-form-text-label">16.31 2nd  Daughter’s Old Last Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_mi_2nd_daughter ?? '' }}" name="old_mi_2nd_daughter" type="text" class="form-control wizard-required" id="old_mi_2nd_daughter">
                <label for="old_mi_2nd_daughter" class="wizard-form-text-label">16.32 2nd  Daughter’s Old MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_dob_2nd_daughter ?? date('Y-m-d')}}" name="old_dob_2nd_daughter" type="date" class="form-control wizard-required" id="old_dob_2nd_daughter">
                <label for="old_dob_2nd_daughter" class="wizard-form-text-label">16.33 2nd  Daughter’s Old DOB</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_first_name_1st_son ?? '' }}" name="old_first_name_1st_son" type="text" class="form-control wizard-required" id="old_first_name_1st_son">
                <label for="old_first_name_1st_son" class="wizard-form-text-label">16.34 1st Son’s Old First Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_last_name_1st_son ?? '' }}" name="old_last_name_1st_son" type="text" class="form-control wizard-required" id="old_last_name_1st_son">
                <label for="old_last_name_1st_son" class="wizard-form-text-label">16.35 1st Son’s Old Last Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_mi_1st_son ?? '' }}" name="old_mi_1st_son" type="text" class="form-control wizard-required" id="old_mi_1st_son">
                <label for="old_mi_1st_son" class="wizard-form-text-label">16.36 1st Son’s Old MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_dob_1st_son ?? date('Y-m-d')}}" name="old_dob_1st_son" type="date" class="form-control wizard-required" id="old_dob_1st_son">
                <label for="old_dob_1st_son" class="wizard-form-text-label">16.37 1st Son’s Old DOB</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_first_name_2nd_son ?? '' }}" name="old_first_name_2nd_son" type="text" class="form-control wizard-required" id="old_first_name_2nd_son">
                <label for="old_first_name_2nd_son" class="wizard-form-text-label">16.38 2nd  Son’s Old First Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_last_name_2nd_son ?? '' }}" name="old_last_name_2nd_son" type="text" class="form-control wizard-required" id="old_last_name_2nd_son">
                <label for="old_last_name_2nd_son" class="wizard-form-text-label">16.39  2nd  Son’s Old Last Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_mi_2nd_son ?? '' }}" name="old_mi_2nd_son" type="text" class="form-control wizard-required" id="old_mi_2nd_son">
                <label for="old_mi_2nd_son" class="wizard-form-text-label">16.40  2nd  Son’s Old MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_dob_2nd_son ?? date('Y-m-d')}}" name="old_dob_2nd_son" type="date" class="form-control wizard-required" id="old_dob_2nd_son">
                <label for="old_dob_2nd_son" class="wizard-form-text-label">16.41  2nd  Son’s DOB</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>




        <div class="col-md-6 col-lg-6">
            <div class="form-group">
               16.42  Do you wish to opt-in for ‘counter-part consent’ to see your global look alike?
                <div class="wizard-form-radio">
                    <input   @if(!empty($travel_info) && $travel_info->to_see_global_look_alike == 1) checked @endif name="to_see_global_look_alike"
                        value="1" id="radio1" type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input    @if(empty($travel_info) || $travel_info->to_see_global_look_alike == 0) checked @endif name="to_see_global_look_alike"
                        value="0" id="radio2" type="radio">
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
               16.43  Do you wish to opt-in for ‘counter-part consent’ to have your global look alike(s) see you? 
                <div class="wizard-form-radio">
                    <input   @if(!empty($travel_info) && $travel_info->like_to_have_global_look_alike == 1) checked @endif name="like_to_have_global_look_alike"
                        value="1" id="radio1" type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input   @if(empty($travel_info) || $travel_info->like_to_have_global_look_alike == 0) checked @endif name="like_to_have_global_look_alike"
                        value="0" id="radio2" type="radio">
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>

        


    </div>

  
    <div class="form-group clearfix">
        <a  href="javascript:;" onclick="returnLater('fieldset_sixteen','consumer_this_is_me')" class="form-wizard-return-btn float-left mr-3">Pause & Return Later</a>

        <a  href="javascript:;" onclick="previousStep('travel_info_bar','family_history_bar')" class="form-wizard-previous-btn float-left">Previous</a>
        <a onclick="checkFieldSetTravelInfo()" id="travel_information_button" href="javascript:;" class="form-wizard-next-btn  float-right">Save & Continue</a>
    </div>
</fieldset>
