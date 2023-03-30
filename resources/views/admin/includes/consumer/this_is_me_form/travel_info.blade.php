<fieldset class="wizard-fieldset mt-4 @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_sixteen') show @endif" id="fieldset_sixteen">
    <h5>16. Special Licenses</h5>
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

        {{-- <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->country_of_issuance_foreign_passport ?? '' }}" name="country_of_issuance_foreign_passport" type="text" class="form-control wizard-required" id="country_of_issuance_foreign_passport">
                <label for="country_of_issuance_foreign_passport" class="wizard-form-text-label">16.6 What is the Country of Issuance?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div> --}}

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
                <label for="visa_number" class="wizard-form-text-label">16.8 What is your U.S. Visa number?</label>
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
                <input value="{{$travel_info->us_visa_expiration_date ?? '' }}" name="us_visa_expiration_date" type="text" class="form-control wizard-required" id="us_visa_expiration_date">
                <label for="us_visa_expiration_date" class="wizard-form-text-label">16.10 What is Your U.S. Visa Date of Expiration? </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        

        {{-- <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->us_govt_id_number ?? ''}}" name="us_govt_id_number" type="text" class="form-control wizard-required" id="us_govt_id_number">
                <label for="us_govt_id_number" class="wizard-form-text-label">16.10 U.S. government id document number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div> --}}


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
               
                <label for="state_driver_license" class="wizard-form-text-label">16.13 State Driver's License</label>
               <select class="form-control" name="state_driver_license" id="state_driver_license" required>
                    <option></option>
                    <option value="{{ $travel_info->state_driver_license ?? ''  ?? '' }}" selected>
                        {{ $travel_info->state_driver_license ?? '' }}</option>
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
                <input value="{{$travel_info->state_driver_license_no ?? '' }}" name="state_driver_license_no" type="text" class="form-control wizard-required" id="state_driver_license_no">
                <label for="" class="wizard-form-text-label">16.14 State Driver's License No.</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
               
                <label for="state_id" class="wizard-form-text-label">16.15 State ID</label>
                <select class="form-control" name="state_id" id="state_id" required>
                    <option></option>
                    <option value="{{ $travel_info->state_id ?? ''  ?? '' }}" selected>
                        {{ $travel_info->state_id ?? '' }}</option>
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
                <input value="{{$travel_info->state_id_no ?? '' }}" name="state_id_no" type="text" class="form-control wizard-required" id="state_id_no">
                <label for="state_id_no" class="wizard-form-text-label">16.16 State ID No.</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
               
                <label for="state_hunting" class="wizard-form-text-label">16.17 State Hunting</label>
                <select class="form-control" name="state_hunting" id="state_hunting" >
                    <option></option>
                    <option value="{{ $travel_info->state_hunting ?? ''  ?? '' }}" selected>
                        {{ $travel_info->state_hunting ?? '' }}</option>
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
                <input value="{{$travel_info->state_hunting_no ?? '' }}" name="state_hunting_no" type="text" class="form-control wizard-required" id="state_hunting_no">
                <label for="state_hunting_no" class="wizard-form-text-label">16.18 State Hunting No.</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
               
                <label for="state_fishing" class="wizard-form-text-label">16.19 State Fishing</label>
                <select class="form-control" name="state_fishing" id="state_fishing" required>
                    <option></option>
                    <option value="{{ $travel_info->state_fishing ?? ''  ?? '' }}" selected>
                        {{ $travel_info->state_fishing ?? '' }}</option>
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
                <input value="{{$travel_info->state_fishing_no ?? '' }}" name="state_fishing_no" type="text" class="form-control wizard-required" id="state_fishing_no">
                <label for="state_fishing_no" class="wizard-form-text-label">16.20 State Fishing No.</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
               
                <label for="state_pilot_license" class="wizard-form-text-label">16.21 State Pilot License</label>
                <select class="form-control" name="state_pilot_license" id="state_pilot_license" required>
                    <option></option>
                    <option value="{{ $travel_info->state_pilot_license ?? ''  ?? '' }}" selected>
                        {{ $travel_info->state_pilot_license ?? '' }}</option>
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
                <input value="{{$travel_info->state_pilot_license_no ?? '' }}" name="state_pilot_license_no" type="text" class="form-control wizard-required" id="state_pilot_license_no">
                <label for="state_pilot_license_no" class="wizard-form-text-label">16.22 State Pilot License No.</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
               
                <label for="state_handgun_firearm" class="wizard-form-text-label">16.23 State Handgun or Firearm</label>
                <select class="form-control" name="state_handgun_firearm" id="state_handgun_firearm" required>
                    <option></option>
                    <option value="{{ $travel_info->state_handgun_firearm ?? ''  ?? '' }}" selected>
                        {{ $travel_info->state_handgun_firearm ?? '' }}</option>
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
                <input value="{{$travel_info->state_handgun_firearm_no ?? '' }}" name="state_handgun_firearm_no" type="text" class="form-control wizard-required" id="state_handgun_firearm_no">
                <label for="state_handgun_firearm_no" class="wizard-form-text-label">16.24 State Handgun or Firearm No.</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
               
                <label for="state_medicaid" class="wizard-form-text-label">16.25 State MedicaiD</label>
                <select class="form-control" name="state_medicaid" id="state_medicaid" >
                    <option></option>
                    <option value="{{ $travel_info->state_medicaid ?? ''  ?? '' }}" selected>
                        {{ $travel_info->state_medicaid ?? '' }}</option>
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
                <input value="{{$travel_info->state_medicaid_no ?? '' }}" name="state_medicaid_no" type="text" class="form-control wizard-required" id="state_medicaid_no">
                <label for="state_medicaid_no" class="wizard-form-text-label">16.26 State Medicaid No.</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
               
                <label for="state_medicare" class="wizard-form-text-label">16.27 State Medicare</label>
                <select class="form-control" name="state_medicare" id="state_medicare" >
                    <option></option>
                    <option value="{{ $travel_info->state_medicare ?? ''  ?? '' }}" selected>
                        {{ $travel_info->state_medicare ?? '' }}</option>
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
                <input value="{{$travel_info->state_medicare_no ?? '' }}" name="state_medicare_no" type="text" class="form-control wizard-required" id="state_medicare_no">
                <label for="state_medicare_no" class="wizard-form-text-label">16.28 State Medicare No.</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
               
                <label for="us_military_branch" class="wizard-form-text-label">16.29 US Military Branch</label>
                <select class="form-control" name="us_military_branch" id="us_military_branch" >
                    <option></option>
                    <option value="{{ $travel_info->us_military_branch ?? ''  ?? '' }}" selected>
                        {{ $travel_info->us_military_branch ?? '' }}</option>
                    <option value="air_force">Air Force</option>
                    <option value="army_marines">Army Marines</option>
                    <option value="navy">Navy</option>
                    <option value="Arkansas">Space Forece</option>
                    <option value="Arkansas">Air National Guard</option>
                    <option value="Arkansas">Coast Guard</option>

       
        
                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->us_military_branch_no ?? '' }}" name="us_military_branch_no" type="text" class="form-control wizard-required" id="us_military_branch_no">
                <label for="us_military_branch_no" class="wizard-form-text-label">16.30 US Military ID No.</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->bureau_of_indian_affair_card_no ?? '' }}" name="bureau_of_indian_affair_card_no" type="text" class="form-control wizard-required" id="bureau_of_indian_affair_card_no">
                <label for="bureau_of_indian_affair_card_no" class="wizard-form-text-label">16.31 Bureau of Indian Affairs card Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

      

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->tribal_id_card_no ?? '' }}" name="tribal_id_card_no" type="text" class="form-control wizard-required" id="tribal_id_card_no">
                <label for="tribal_id_card_no" class="wizard-form-text-label">16.32 Tribal ID card No.</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        {{-- <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->foreign_country_driving_license_number ?? '' }}" name="foreign_country_driving_license_number" type="text" class="form-control wizard-required" id="foreign_country_driving_license_number">
                <label for="foreign_country_driving_license_number" class="wizard-form-text-label">16.13 foreign driver’s license country</label>
                <p class="text_danger form_error"></p>
            </div>
        </div> --}}


        {{-- <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->foreign_dl_number ?? '' }}" name="foreign_dl_number" type="text" class="form-control wizard-required" id="foreign_dl_number">
                <label for="foreign_dl_number" class="wizard-form-text-label">16.14 foreign dl number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div> --}}


{{-- 
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->foreign_id_number ?? '' }}" name="foreign_id_number" type="text" class="form-control wizard-required" id="foreign_id_number">
                <label for="foreign_id_number" class="wizard-form-text-label">16.15 foreign id documents</label>
                <p class="text_danger form_error"></p>
            </div>
        </div> --}}



        {{-- <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->us_education_doc ?? '' }}" name="us_education_doc" type="text" class="form-control wizard-required" id="us_education_doc">
                <label for="us_education_doc" class="wizard-form-text-label">16.16 U.S. professional or education documents </label>
                <p class="text_danger form_error"></p>
            </div>
        </div> --}}

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->witsec ?? '' }}" name="witsec" type="text" class="form-control wizard-required" id="witsec">
                <label for="witsec " class="wizard-form-text-label">16.33 WITSEC </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_first_name ?? '' }}" name="old_first_name" type="text" class="form-control wizard-required" id="old_first_name">
                <label for="old_first_name" class="wizard-form-text-label">16.34 OLD First Name </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_last_name ?? '' }}" name="old_last_name" type="text" class="form-control wizard-required" id="old_last_name">
                <label for="old_last_name" class="wizard-form-text-label">16.35 Old Last Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_mi ?? '' }}" name="old_mi" type="text" class="form-control wizard-required" id="old_mi">
                <label for="old_mi" class="wizard-form-text-label">16.36 Old MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_dob ?? date('Y-m-d')}}" name="old_dob"  type="date" class="form-control wizard-required" id="old_dob">
                <label for="old_dob" class="wizard-form-text-label">16.37 Old DOB</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_spouse_first_name ?? '' }}" name="old_spouse_first_name" type="text" class="form-control wizard-required" id="old_spouse_first_name">
                <label for="old_spouse_first_name" class="wizard-form-text-label"></label>
                <p class="text_danger form_error">16.38 Spouse Old First Name</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_spouse_last_name ?? '' }}" name="old_spouse_last_name" type="text" class="form-control wizard-required" id="old_spouse_last_name">
                <label for="old_spouse_last_name" class="wizard-form-text-label">16.39 Spouse old Last Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_spouse_mi ?? '' }}" name="old_spouse_mi" type="text" class="form-control wizard-required" id="old_spouse_mi">
                <label for="old_spouse_mi" class="wizard-form-text-label">16.40 Spouse Old MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_spouse_dob ?? date('Y-m-d')}}" name="old_spouse_dob" type="date" class="form-control wizard-required" id="old_spouse_dob">
                <label for="old_spouse_dob" class="wizard-form-text-label">16.41 Spouse old DOB</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_first_name_1st_daughter ?? '' }}" name="old_first_name_1st_daughter" type="text" class="form-control wizard-required" id="old_first_name_1st_daughter">
                <label for="old_first_name_1st_daughter" class="wizard-form-text-label">16.42 1st Daughter’s Old First Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_last_name_1st_daughter ?? '' }}" name="old_last_name_1st_daughter" type="text" class="form-control wizard-required" id="old_last_name_1st_daughter">
                <label for="old_last_name_1st_daughter" class="wizard-form-text-label">16.43 1st Daughter’s Old Last Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_mi_1st_daughter ?? '' }}" name="old_mi_1st_daughter" type="text" class="form-control wizard-required" id="old_mi_1st_daughter">
                <label for="old_mi_1st_daughter" class="wizard-form-text-label">16.44 1st Daughter’s Old MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_dob_1st_daughter ?? date('Y-m-d')  }}" name="old_dob_1st_daughter"  type="date" class="form-control wizard-required" id="old_dob_1st_daughter">
                <label for="old_dob_1st_daughter" class="wizard-form-text-label">16.45 1st Daughter’s Old DOB</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_first_name_2nd_daughter ?? '' }}" name="old_first_name_2nd_daughter" type="text" class="form-control wizard-required" id="old_first_name_2nd_daughter">
                <label for="old_first_name_2nd_daughter" class="wizard-form-text-label">16.46 2nd  Daughter’s Old First Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_last_name_2nd_daughter ?? '' }}" name="old_last_name_2nd_daughter" type="text" class="form-control wizard-required" id="old_last_name_2nd_daughter">
                <label for="old_last_name_2nd_daughter" class="wizard-form-text-label">16.47 2nd  Daughter’s Old Last Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_mi_2nd_daughter ?? '' }}" name="old_mi_2nd_daughter" type="text" class="form-control wizard-required" id="old_mi_2nd_daughter">
                <label for="old_mi_2nd_daughter" class="wizard-form-text-label">16.48 2nd  Daughter’s Old MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_dob_2nd_daughter ?? date('Y-m-d')}}" name="old_dob_2nd_daughter" type="date" class="form-control wizard-required" id="old_dob_2nd_daughter">
                <label for="old_dob_2nd_daughter" class="wizard-form-text-label">16.49 2nd  Daughter’s Old DOB</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_first_name_1st_son ?? '' }}" name="old_first_name_1st_son" type="text" class="form-control wizard-required" id="old_first_name_1st_son">
                <label for="old_first_name_1st_son" class="wizard-form-text-label">16.50 1st Son’s Old First Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_last_name_1st_son ?? '' }}" name="old_last_name_1st_son" type="text" class="form-control wizard-required" id="old_last_name_1st_son">
                <label for="old_last_name_1st_son" class="wizard-form-text-label">16.51 1st Son’s Old Last Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_mi_1st_son ?? '' }}" name="old_mi_1st_son" type="text" class="form-control wizard-required" id="old_mi_1st_son">
                <label for="old_mi_1st_son" class="wizard-form-text-label">16.52 1st Son’s Old MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_dob_1st_son ?? date('Y-m-d')}}" name="old_dob_1st_son" type="date" class="form-control wizard-required" id="old_dob_1st_son">
                <label for="old_dob_1st_son" class="wizard-form-text-label">16.53 1st Son’s Old DOB</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_first_name_2nd_son ?? '' }}" name="old_first_name_2nd_son" type="text" class="form-control wizard-required" id="old_first_name_2nd_son">
                <label for="old_first_name_2nd_son" class="wizard-form-text-label">16.54 2nd  Son’s Old First Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_last_name_2nd_son ?? '' }}" name="old_last_name_2nd_son" type="text" class="form-control wizard-required" id="old_last_name_2nd_son">
                <label for="old_last_name_2nd_son" class="wizard-form-text-label">16.55  2nd  Son’s Old Last Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_mi_2nd_son ?? '' }}" name="old_mi_2nd_son" type="text" class="form-control wizard-required" id="old_mi_2nd_son">
                <label for="old_mi_2nd_son" class="wizard-form-text-label">16.56  2nd  Son’s Old MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$travel_info->old_dob_2nd_son ?? date('Y-m-d')}}" name="old_dob_2nd_son" type="date" class="form-control wizard-required" id="old_dob_2nd_son">
                <label for="old_dob_2nd_son" class="wizard-form-text-label">16.57  2nd  Son’s DOB</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>




      

        


    </div>

  
    <div class="form-group clearfix">
        <a  href="javascript:;" onclick="returnLater('fieldset_sixteen','consumer_this_is_me')" class="form-wizard-return-btn float-left mr-3">Pause & Return Later</a>

        <a  href="javascript:;" onclick="previousStep('travel_info_bar','family_history_bar')" class="form-wizard-previous-btn float-left">Previous</a>
        <a onclick="checkFieldSetTravelInfo()" id="travel_information_button" href="javascript:;" class="form-wizard-next-btn  float-right">Save & Continue</a>
    </div>
</fieldset>
