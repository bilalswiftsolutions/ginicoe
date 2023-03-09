<fieldset class="wizard-fieldset mt-4" id="fieldset_four">
    <h5>4. Ethnicity Information</h5>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="race" class="wizard-form-text-label">4.1 What Race do you most see yourself as today?
                </label>
                <select class="form-control" name="race" id="race" required>
                    <option></option>
                    <option value="plahnet52" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'plahnet52') selected="selected" @endif>PLAHNET52 52 (5A’s & 2H’s)</option>
                    <option value="pacific_islander_americans" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'pacific_islander_americans') selected="selected" @endif>Pacific Islander Americans</option>
                    <option value="lgbtq" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'lgbtq') selected="selected" @endif>LGBTQ</option>
                    <option value="african_americans" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'african_americans') selected="selected" @endif>African Americans</option>
                    <option value="asian" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'asian') selected="selected" @endif>Asian</option>
                    <option value="asian_indians" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'asian_indians') selected="selected" @endif>Asian Indians</option>
                    <option value="alaska_natives" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'alaska_natives') selected="selected" @endif>Alaska Natives</option>
                    <option value="alaska_native_corporations" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'alaska_native_corporations') selected="selected" @endif>Alaska Native Corporations</option>
                    <option value="hasidic_jews" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'hasidic_jews') selected="selected" @endif>Hasidic Jews</option>
                    <option value="hispanic_americans" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'hispanic_americans') selected="selected" @endif>Hispanic-Americans</option>
                    <option value="native_americans" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'native_americans') selected="selected" @endif>Native Americans</option>
                    <option value="ex_offenders" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'ex_offenders') selected="selected" @endif>Ex-Offenders</option>
                    <option value="tribal_entities" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'tribal_entities') selected="selected" @endif>Tribal entities</option>
                    <option value="decline" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'decline') selected="selected" @endif>Decline</option>
                    <option value="other_combination_not_described" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'other_combination_not_described') selected="selected" @endif>Other Combination Not Described</option>
                    <option value="other" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'other') selected="selected" @endif>Other</option>
                    <option value="white" @if(!empty($ethnicity_info) && $ethnicity_info->race == 'white') selected="selected" @endif>White</option>
                </select>
                <p class="text_danger form_error"></p>


            </div>
        </div>
       
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
              
                <label for="marital_status" class="wizard-form-text-label">4.2 What is your current Marital Status?</label>
                <select class="form-control" name="marital_status" id="marital_status" required>
                    <option></option>
                    <option value="divorced" @if (!empty($ethnicity_info) && $ethnicity_info->marital_status == 'divorced') selected @endif>Divorced</option>
                    <option value="domestic_partners" @if (!empty($ethnicity_info) && $ethnicity_info->marital_status == 'domestic_partners') selected @endif>Domestic Partners</option>
                    <option value="engaged" @if (!empty($ethnicity_info) && $ethnicity_info->marital_status == 'engaged') selected @endif>Engaged</option>
                    <option value="married" @if (!empty($ethnicity_info) && $ethnicity_info->marital_status == 'married') selected @endif>Married</option>
                    <option value="other" @if (!empty($ethnicity_info) && $ethnicity_info->marital_status == 'other') selected @endif>Other</option>
                    <option value="separated" @if (!empty($ethnicity_info) && $ethnicity_info->marital_status == 'separated') selected @endif>Separated</option>
                    <option value="significant_other" @if (!empty($ethnicity_info) && $ethnicity_info->marital_status == 'significant_other') selected @endif>Significant Other</option>
                    <option value="single" @if (!empty($ethnicity_info) && $ethnicity_info->marital_status == 'single') selected @endif>Single</option>
                    <option value="unknown" @if (!empty($ethnicity_info) && $ethnicity_info->marital_status == 'unknown') selected @endif>Unknown</option>
                    <option value="widowed" @if (!empty($ethnicity_info) && $ethnicity_info->marital_status == 'widowed') selected @endif>Widowed</option>

                </select>
                <p class="text_danger form_error"></p>

            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="weight" value="{{$ethnicity_info->weight ?? ''}}" type="number" class="form-control wizard-required"
                    id="weight" required>
                <label for="weight" class="wizard-form-text-label">4.3 Weight (lbs)</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="height" value="{{$ethnicity_info->height ?? ''}}" type="number" class="form-control wizard-required"
                    id="height"  required>
                <label for="height" class="wizard-form-text-label">4.4 Height (inches)</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="middle_initial" class="wizard-form-text-label">4.5 What complexion or hue or pigmentation do
                    others most see your face today? </label>
                <select class="form-control" name="complexion" id="complexion" required>
                    <option></option>
                    <option value="albinism" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'albinism') selected @endif>Albinism</option>
                    <option value="black" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'black') selected @endif>Black</option>
                    <option value="brown_skin" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'brown_skin') selected @endif>Brown Skin</option>
                    <option value="brown" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'brown') selected @endif>Brown</option>
                    <option value="dark_brown" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'dark_brown') selected @endif>Dark Brown</option>
                    <option value="dark_skin" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'dark_skin') selected @endif>Dark Skin</option>
                    <option value="freckles" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'freckles') selected @endif>Freckles</option>
                    <option value="light_skin" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'light_skin') selected @endif>Light Skin</option>
                    <option value="liver_spots" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'liver_spots') selected @endif>Liver Spots</option>
                    <option value="medium_white_to_light_brown" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'medium_white_to_light_brown') selected @endif>Medium White To Light Brown</option>
                    <option value="moderate_brown" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'moderate_brown') selected @endif>Moderate Brown</option>
                    <option value="olive" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'olive') selected @endif>Olive</option>
                    <option value="orange" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'orange') selected @endif>Orange</option>
                    <option value="other" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'other') selected @endif>Other</option>
                    <option value="pale_white" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'pale_white') selected @endif>Pale White</option>
                    <option value="pink" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'pink') selected @endif>Pink</option>
                    <option value="suntanned" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'suntanned') selected @endif>Suntanned</option>
                    <option value="tanned" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'tanned') selected @endif>Tanned</option>
                    <option value="very_dark_brown" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'very_dark_brown') selected @endif>Very Dark Brown</option>
                    <option value="vitiligo" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'vitiligo') selected @endif>Vitiligo</option>
                    <option value="white_fair" @if(!empty($ethnicity_info) && $ethnicity_info->complexion == 'white_fair') selected @endif>White Fair</option>
                    

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>


    </div>

  

    <div class="form-group clearfix">
        <a href="javascript:;"  onclick="previousStep('enthnicity_bar','gender_identity_bar')" class="form-wizard-previous-btn float-left">Previous</a>
        <a onclick="checkFieldSetEthnicityInformation()" href="javascript:;" id="ethnicity_information_button" class="form-wizard-next-btn  float-right">Next</a>
    </div>
</fieldset>
