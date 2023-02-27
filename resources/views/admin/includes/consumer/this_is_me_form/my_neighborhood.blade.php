<fieldset class="wizard-fieldset mt-4" id="fieldset_five">
    <h5>5. My Neighborhood is</h5>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="fname" class="wizard-form-text-label">5.1 what race are your nearest neighbors to the right of you?
                </label>
                <select class="form-control" name="neighborhood_race" id="neighborhood_race" required>
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
       
        {{-- <div class="col-md-4 col-lg-4">
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
        </div> --}}

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input name="name_of_neighborhood_household_head" type="text" class="form-control wizard-required"
                    id="name_of_neighborhood_household_head" required>
                <label for="weight" class="wizard-form-text-label">5.2 What is the last name of the head of household of your nearest neighbor to the right?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input name="neghborhood_guid" type="number" class="form-control wizard-required"
                    id="neghborhood_guid">
                <label for="height" class="wizard-form-text-label" style="font-size:15px">5.3 If you can, please provide the unique GUID of any member of your nearest neighbor to the right of you? </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
{{-- 
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
        </div> --}}


    </div>

    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            5.4 Looking out your front door what is the address of your nearest neighbors to the right of you?
            <div class="wizard-form-radio">
                <input onclick="get_nearest_neghbor_address()" name="provide_neigborhood_address" value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="get_nearest_neghbor_address()" checked name="provide_neigborhood_address" value="0" id="radio2"
                    type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>

    <div class="row" id="neighborhood_address_div" style="display: none;">

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_house_address" type="text" class="form-control wizard-required"
                    id="neighborhood_house_address">
                <label for="neighborhood_house_address" class="wizard-form-text-label">5.5 House Address</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_urbanization_name" type="text" class="form-control wizard-required"
                    id="neighborhood_urbanization_name">
                <label for="neighborhood_urbanization_name" class="wizard-form-text-label">5.6 Urbanization Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_zipcode" type="text" class="form-control wizard-required"
                    id="neighborhood_zipcode">
                <label for="neighborhood_zipcode" class="wizard-form-text-label">5.7 Zip code</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="neighborhood_state" class="wizard-form-text-label">5.8 State</label>
                <select class="form-control" name="neighborhood_state" id="neighborhood_state" required>
                    <option></option>
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
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <label for="neighborhood_city" class="wizard-form-text-label">5.8 City</label>
                <select class="form-control" name="neighborhood_city" id="neighborhood_city" required>
                </select>

            </div>
        </div>

    </div>

  

    <div class="form-group clearfix">
        <a onclick="checkFieldSetEthnicityInformation()" href="javascript:;" class="form-wizard-next-btn  float-right">Next</a>
    </div>
</fieldset>
