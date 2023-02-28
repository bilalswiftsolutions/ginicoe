<fieldset class="wizard-fieldset mt-4" id="fieldset_five">
    <h5>5. My Neighborhood is</h5>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="neghborhood_race_right" class="wizard-form-text-label">5.1 what race are your nearest
                    neighbors to the right of you?
                </label>
                <select class="form-control" name="neighborhood_race_right" id="neighborhood_race_right" required>
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



        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input name="name_of_neighborhood_household_head_right" type="text"
                    class="form-control wizard-required" id="name_of_neighborhood_household_head_right" required>
                <label for="weight" class="wizard-form-text-label">5.2 What is the last name of the head of household
                    of your nearest neighbor to the right?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input name="neghborhood_guid_right" type="number" class="form-control wizard-required"
                    id="neghborhood_guid_right">
                <label for="height" class="wizard-form-text-label" style="font-size:15px">5.3 If you can, please
                    provide the unique GUID of any member of your nearest neighbor to the right of you? </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>



    </div>

    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            5.4 Looking out your front door what is the address of your nearest neighbors to the right of you?
            <div class="wizard-form-radio">
                <input onclick="get_nearest_neghbor_address_right()" name="provide_neigborhood_address_right"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="get_nearest_neghbor_address_right()" checked name="provide_neigborhood_address_right"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>

    <div class="row" id="neighborhood_address_div_right" style="display: none;">

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_house_address_right" type="text" class="form-control wizard-required"
                    id="neighborhood_house_address">
                <label for="neighborhood_house_address_right" class="wizard-form-text-label">5.5 House Address</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_urbanization_name_right" type="text" class="form-control wizard-required"
                    id="neighborhood_urbanization_name_right">
                <label for="neighborhood_urbanization_name" class="wizard-form-text-label">5.6 Urbanization Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_zipcode_right" type="text" class="form-control wizard-required"
                    id="neighborhood_zipcode_right">
                <label for="neighborhood_zipcode_right" class="wizard-form-text-label">5.7 Zip code</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="neighborhood_state_right" class="wizard-form-text-label">5.8 State</label>
                <select class="form-control" name="neighborhood_state_right" id="neighborhood_state_right" required>
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
                <label for="neighborhood_city_right" class="wizard-form-text-label">5.9 City</label>
                <select class="form-control" name="neighborhood_city_right" id="neighborhood_city_right" required>
                </select>

            </div>
        </div>

    </div>
    {{-- LEft Neighborhood --}}
    <hr>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="neghborhood_race_left" class="wizard-form-text-label">5.10 what race are your nearest
                    neighbors to the left of you?
                </label>
                <select class="form-control" name="neighborhood_race_left" id="neighborhood_race_left" required>
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



        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input name="name_of_neighborhood_household_head_left" type="text"
                    class="form-control wizard-required" id="name_of_neighborhood_household_head_left" required>
                <label for="weight" class="wizard-form-text-label">5.11 What is the last name of the head of
                    household of your nearest neighbor to the left?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input name="neghborhood_guid_left" type="number" class="form-control wizard-required"
                    id="neghborhood_guid_left">
                <label for="height" class="wizard-form-text-label" style="font-size:15px">5.12 If you can, please
                    provide the unique GUID of any member of your nearest neighbor to the left of you? </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>



    </div>

    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            5.13 Looking out your front door what is the address of your nearest neighbors to the left of you?
            <div class="wizard-form-radio">
                <input onclick="get_nearest_neghbor_address_left()" name="provide_neigborhood_address_left"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="get_nearest_neghbor_address_left()" checked name="provide_neigborhood_address_left"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>

    <div class="row" id="neighborhood_address_div_left" style="display: none;">

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_house_address_left" type="text" class="form-control wizard-required"
                    id="neighborhood_house_address">
                <label for="neighborhood_house_address_left" class="wizard-form-text-label">5.14 House Address</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_urbanization_name_left" type="text" class="form-control wizard-required"
                    id="neighborhood_urbanization_name_left">
                <label for="neighborhood_urbanization_name_left" class="wizard-form-text-label">5.15 Urbanization
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_zipcode_left" type="text" class="form-control wizard-required"
                    id="neighborhood_zipcode_left">
                <label for="neighborhood_zipcode_left" class="wizard-form-text-label">5.16 Zip code</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="neighborhood_state_left" class="wizard-form-text-label">5.17 State</label>
                <select class="form-control" name="neighborhood_state_left" id="neighborhood_state_left" required>
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
                <label for="neighborhood_city_left" class="wizard-form-text-label">5.18 City</label>
                <select class="form-control" name="neighborhood_city_left" id="neighborhood_city_left" required>
                </select>

            </div>
        </div>

    </div>

    {{-- back neighborhood --}}

    <hr>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="neghborhood_race_back" class="wizard-form-text-label">5.19 what race are your nearest
                    neighbors to the back of you?
                </label>
                <select class="form-control" name="neighborhood_race_back" id="neighborhood_race_back" required>
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



        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input name="name_of_neighborhood_household_head_back" type="text"
                    class="form-control wizard-required" id="name_of_neighborhood_household_head_back" required>
                <label for="weight" class="wizard-form-text-label">5.20 What is the last name of the head of
                    household
                    of your nearest neighbor to the back?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input name="neghborhood_guid_back" type="number" class="form-control wizard-required"
                    id="neghborhood_guid_back">
                <label for="height" class="wizard-form-text-label" style="font-size:15px">5.21 If you can, please
                    provide the unique GUID of any member of your nearest neighbor to the back of you? </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>



    </div>

    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            5.22 Looking out your front door what is the address of your nearest neighbors to the back of you?
            <div class="wizard-form-radio">
                <input onclick="get_nearest_neghbor_address_back()" name="provide_neigborhood_address_back"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="get_nearest_neghbor_address_back()" checked name="provide_neigborhood_address_back"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>

    <div class="row" id="neighborhood_address_div_back" style="display: none;">

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_house_address_back" type="text" class="form-control wizard-required"
                    id="neighborhood_house_address">
                <label for="neighborhood_house_address_back" class="wizard-form-text-label">5.23 House Address</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_urbanization_name_back" type="text"
                    class="form-control wizard-required" id="neighborhood_urbanization_name_back">
                <label for="neighborhood_urbanization_name_back" class="wizard-form-text-label">5.24 Urbanization
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_zipcode_back" type="text" class="form-control wizard-required"
                    id="neighborhood_zipcode_back">
                <label for="neighborhood_zipcode_back" class="wizard-form-text-label">5.25 Zip code</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="neighborhood_state_back" class="wizard-form-text-label">5.26 State</label>
                <select class="form-control" name="neighborhood_state_back" id="neighborhood_state_back" required>
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
                <label for="neighborhood_city_back" class="wizard-form-text-label">5.27 City</label>
                <select class="form-control" name="neighborhood_city_back" id="neighborhood_city_back" required>
                </select>

            </div>
        </div>

    </div>


    {{-- front neighbor hood --}}

    
    <hr>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="neghborhood_race_front" class="wizard-form-text-label">5.28 what race are your nearest
                    neighbors to the front of you?
                </label>
                <select class="form-control" name="neighborhood_race_front" id="neighborhood_race_front" required>
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



        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input name="name_of_neighborhood_household_head_front" type="text"
                    class="form-control wizard-required" id="name_of_neighborhood_household_head_front" required>
                <label for="weight" class="wizard-form-text-label">5.29 What is the last name of the head of
                    household
                    of your nearest neighbor to the front?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input name="neghborhood_guid_front" type="number" class="form-control wizard-required"
                    id="neghborhood_guid_front">
                <label for="height" class="wizard-form-text-label" style="font-size:15px">5.30 If you can, please
                    provide the unique GUID of any member of your nearest neighbor to the front of you? </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>



    </div>

    <div class="col-md-4 col-lg-4">
        <div class="form-group">
            5.31 Looking out your front door what is the address of your nearest neighbors to the front of you?
            <div class="wizard-form-radio">
                <input onclick="get_nearest_neghbor_address_front()" name="provide_neigborhood_address_front"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="get_nearest_neghbor_address_front()" checked name="provide_neigborhood_address_front"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>

    <div class="row" id="neighborhood_address_div_front" style="display: none;">

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_house_address_front" type="text" class="form-control wizard-required"
                    id="neighborhood_house_address_front">
                <label for="neighborhood_house_address_front" class="wizard-form-text-label">5.32 House Address</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_urbanization_name_front" type="text"
                    class="form-control wizard-required" id="neighborhood_urbanization_name_front">
                <label for="neighborhood_urbanization_name_front" class="wizard-form-text-label">5.33 Urbanization
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="neighborhood_zipcode_front" type="text" class="form-control wizard-required"
                    id="neighborhood_zipcode_front">
                <label for="neighborhood_zipcode_front" class="wizard-form-text-label">5.34 Zip code</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="neighborhood_state_front" class="wizard-form-text-label">5.35 State</label>
                <select class="form-control" name="neighborhood_state_front" id="neighborhood_state_front" required>
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
                <label for="neighborhood_city_front" class="wizard-form-text-label">5.36 City</label>
                <select class="form-control" name="neighborhood_city_front" id="neighborhood_city_front" required>
                </select>

            </div>
        </div>

    </div>

    <div class="form-group clearfix">
        <a href="javascript:;" onclick="previousStep('neighborhood_bar','enthnicity_bar')" class="form-wizard-previous-btn float-left">Previous</a>
        <a onclick="checkFieldSetNeighborhood()" href="javascript:;"
            class="form-wizard-next-btn  float-right">Next</a>
    </div>
</fieldset>
