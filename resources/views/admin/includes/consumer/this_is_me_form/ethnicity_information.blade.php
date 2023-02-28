<fieldset class="wizard-fieldset mt-4" id="fieldset_four">
    <h5>4. Ethnicity Information</h5>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="fname" class="wizard-form-text-label">4.1 What Race do you most see yourself as today?
                </label>
                <select class="form-control" name="race" id="race" required>
                    <option></option>
                    <option value="plahnet52">PLAHNET52 52 (5A’s & 2H’s)</option>
                    <option value="pacific_islander_americans">Pacific Islander Americans</option>
                    <option value="lgbtq">LGBTQ</option>
                    <option value="african_americans">African Americans</option>
                    <option value="asian">Asian</option>
                    <option value="asian_indians">Asian Indians</option>
                    <option value="alaska_natives">Alaska Natives</option>
                    <option value="alaska_native_corporations">Alaska Native Corporations</option>
                    <option value="hasidic_jews">Hasidic Jews</option>
                    <option value="hispanic_americans">Hispanic-Americans</option>
                    <option value="native_americans">Native Americans</option>
                    <option value="ex_offenders">Ex-Offenders</option>
                    <option value="tribal_entities">Tribal entities</option>
                    <option value="decline">Decline</option>
                    <option value="other_combination_not_described">Other Combination Not Described</option>
                    <option value="other">Other</option>
                    <option value="white">White</option>
                </select>
                <p class="text_danger form_error"></p>


            </div>
        </div>
       
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
              
                <label for="lname" class="wizard-form-text-label">4.2 What is your current Marital Status?</label>
                <select class="form-control" name="marital_status" id="marital_status" required>
                    <option></option>
                    <option value="divorced">Divorced</option>
                    <option value="domestic_partners">Domestic Partners</option>
                    <option value="engaged">Engaged</option>
                    <option value="married">Married</option>
                    <option value="other">Other</option>
                    <option value="separated">Separated</option>
                    <option value="significant_other">Significant Other</option>
                    <option value="single">Single</option>
                    <option value="unknown">Unknown</option>
                    <option value="widowed">Widowed</option>

                </select>
                <p class="text_danger form_error"></p>

            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="weight" type="number" class="form-control wizard-required"
                    id="weight" required>
                <label for="weight" class="wizard-form-text-label">4.3 Weight (lbs)</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="height" type="number" class="form-control wizard-required"
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
                    <option value="albinism">Albinism</option>
                    <option value="black">Black</option>
                    <option value="brown_skin">Brown Skin</option>
                    <option value="brown">Brown</option>
                    <option value="dark_brown">Dark Brown</option>
                    <option value="dark_skin">Dark Skin</option>
                    <option value="freckles">Freckles</option>
                    <option value="light_skin">Light Skin</option>
                    <option value="liver_spots">Liver Spots</option>
                    <option value="medium_white_to_light_brown">Medium White To Light Brown</option>
                    <option value="moderate_brown">Moderate Brown</option>
                    <option value="olive">Olive</option>
                    <option value="orange">Orange</option>
                    <option value="other">Other</option>
                    <option value="pale_white">Pale White</option>
                    <option value="pink">Pink</option>
                    <option value="suntanned">Suntanned</option>
                    <option value="tanned">Tanned</option>
                    <option value="very_dark_brown">Very Dark Brown</option>
                    <option value="vitiligo">Vitiligo</option>
                    <option value="white_fair">White Fair</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>


    </div>

  

    <div class="form-group clearfix">
        <a href="javascript:;" onclick="previousStep('enthnicity_bar','gender_identity_bar')" class="form-wizard-previous-btn float-left">Previous</a>
        <a onclick="checkFieldSetEthnicityInformation()" href="javascript:;" class="form-wizard-next-btn  float-right">Next</a>
    </div>
</fieldset>
