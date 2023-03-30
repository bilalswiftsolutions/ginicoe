<fieldset class="wizard-fieldset mt-4 @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_five') show @endif" id="fieldset_five">
    <h5>5. My Neighborhood is</h5>
    <input type="hidden" name="form_section" value="my_neighborhood_information" />

    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="neighborhood_race_right" class="wizard-form-text-label">5.1 what race are your nearest
                    neighbors to the right of you?
                </label>
                <select class="form-control" name="neighborhood_race_right" id="neighborhood_race_right" required>
                    <option></option>
                    <option value="plahnet52" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'plahnet52') selected @endif>PLAHNET52 52 (5A’s &
                        2H’s)</option>
                    <option value="pacific_islander_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'pacific_islander_americans') selected @endif>Pacific
                        Islander Americans</option>
                    <option value="lgbtq" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'lgbtq') selected @endif>LGBTQ</option>
                    <option value="african_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'african_americans') selected @endif>African
                        Americans</option>
                    <option value="asian" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'asian') selected @endif>Asian</option>
                    <option value="asian_indians" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'asian_indians') selected @endif>Asian Indians
                    </option>
                    <option value="alaska_natives" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'alaska_natives') selected @endif>Alaska Natives
                    </option>
                    <option value="alaska_native_corporations" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'alaska_native_corporations') selected @endif>Alaska
                        Native Corporations</option>
                    <option value="hasidic_jews" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'hasidic_jews') selected @endif>Hasidic Jews</option>
                    <option value="hispanic_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'hispanic_americans') selected @endif>
                        Hispanic-Americans</option>
                    <option value="native_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'native_americans') selected @endif>Native
                        Americans</option>
                    <option value="ex_offenders" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'ex_offenders') selected @endif>Ex-Offenders
                    </option>
                    <option value="tribal_entities" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'tribal_entities') selected @endif>Tribal entities
                    </option>
                    <option value="decline" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'decline') selected @endif>Decline</option>
                    <option value="other_combination_not_described" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'other_combination_not_described') selected @endif>
                        Other Combination Not Described</option>
                    <option value="other" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'other') selected @endif>Other</option>
                    <option value="white" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_right== 'white') selected @endif>White</option>
                </select>
                <p class="text_danger form_error"></p>


            </div>
        </div>



        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{ $my_neighborhood_info->name_of_neighborhood_household_head_right ?? '' }}"
                    name="name_of_neighborhood_household_head_right" type="text" class="form-control wizard-required"
                    id="name_of_neighborhood_household_head_right" required>
                <label for="weight" class="wizard-form-text-label">5.2 What is the last name of the head of household
                    of your nearest neighbor to the right?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{ $my_neighborhood_info->neighborhood_guid_right ?? '' }}" name="neighborhood_guid_right"
                    type="number" class="form-control wizard-required" id="neighborhood_guid_right">
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
                <input onclick="get_nearest_neghbor_address_right()" @if (!empty($my_neighborhood_info) || $my_neighborhood_info->provide_neigborhood_address_right == 1) checked @endif
                    name="provide_neigborhood_address_right" value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="get_nearest_neghbor_address_right()" @if (empty($my_neighborhood_info) && $my_neighborhood_info->provide_neigborhood_address_right == 0) checked @endif
                     name="provide_neigborhood_address_right" value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>

    <div class="row" id="neighborhood_address_div_right"
        @if (empty($my_neighborhood_info) || $my_neighborhood_info->provide_neigborhood_address_right == 0) style="display: none;" @endif>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $my_neighborhood_info->id ?? '' }}"
                    name="neighborhood_house_address_right" type="text" class="form-control wizard-required"
                    id="neighborhood_house_address_right">
                <label for="neighborhood_house_address_right" class="wizard-form-text-label">5.5 House Address</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $my_neighborhood_info->neighborhood_urbanization_name_right ?? '' }}"
                    name="neighborhood_urbanization_name_right" type="text" class="form-control wizard-required"
                    id="neighborhood_urbanization_name_right">
                <label for="neighborhood_urbanization_name" class="wizard-form-text-label">5.6 Urbanization Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $my_neighborhood_info->neighborhood_zipcode_right ?? '' }}"
                    name="neighborhood_zipcode_right" type="text" class="form-control wizard-required"
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
                    <option value="{{ $my_neighborhood_info->neighborhood_state_right ?? '' }}" selected>
                        {{ $my_neighborhood_info->neighborhood_state_right ?? '' }}</option>
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
                    <option value="{{ $my_neighborhood_info->neighborhood_city_right ?? '' }}" selected>
                        {{ $my_neighborhood_info->neighborhood_city_right ?? '' }}</option>
                </select>

            </div>
        </div>

    </div>
    {{-- LEft Neighborhood --}}
    <hr>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="neighborhood_race_left" class="wizard-form-text-label">5.10 what race are your nearest
                    neighbors to the left of you?
                </label>
                <select class="form-control" name="neighborhood_race_left" id="neighborhood_race_left" required>
                    <option></option>
                    <option value="plahnet52" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'plahnet52') selected @endif>PLAHNET52 52 (5A’s &
                        2H’s)</option>
                    <option value="pacific_islander_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'pacific_islander_americans') selected @endif>Pacific
                        Islander Americans</option>
                    <option value="lgbtq" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'lgbtq') selected @endif>LGBTQ</option>
                    <option value="african_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'african_americans') selected @endif>African
                        Americans</option>
                    <option value="asian" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'asian') selected @endif>Asian</option>
                    <option value="asian_indians" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'asian_indians') selected @endif>Asian Indians
                    </option>
                    <option value="alaska_natives" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'alaska_natives') selected @endif>Alaska Natives
                    </option>
                    <option value="alaska_native_corporations" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'alaska_native_corporations') selected @endif>Alaska
                        Native Corporations</option>
                    <option value="hasidic_jews" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'hasidic_jews') selected @endif>Hasidic Jews</option>
                    <option value="hispanic_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'hispanic_americans') selected @endif>
                        Hispanic-Americans</option>
                    <option value="native_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'native_americans') selected @endif>Native
                        Americans</option>
                    <option value="ex_offenders" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'ex_offenders') selected @endif>Ex-Offenders
                    </option>
                    <option value="tribal_entities" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'tribal_entities') selected @endif>Tribal entities
                    </option>
                    <option value="decline" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'decline') selected @endif>Decline</option>
                    <option value="other_combination_not_described" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'other_combination_not_described') selected @endif>
                        Other Combination Not Described</option>
                    <option value="other" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'other') selected @endif>Other</option>
                    <option value="white" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_left== 'white') selected @endif>White</option>
                </select>
                <p class="text_danger form_error"></p>


            </div>
        </div>



        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{ $my_neighborhood_info->name_of_neighborhood_household_head_left ?? '' }}" name="name_of_neighborhood_household_head_left" type="text"
                    class="form-control wizard-required" id="name_of_neighborhood_household_head_left" required>
                <label for="weight" class="wizard-form-text-label">5.11 What is the last name of the head of
                    household of your nearest neighbor to the left?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{ $my_neighborhood_info->neighborhood_guid_left ?? '' }}" name="neighborhood_guid_left" type="number" class="form-control wizard-required"
                    id="neighborhood_guid_left">
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
                <input onclick="get_nearest_neghbor_address_left()"  @if (!empty($my_neighborhood_info) || $my_neighborhood_info->provide_neigborhood_address_left == 1) checked @endif name="provide_neigborhood_address_left"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="get_nearest_neghbor_address_left()"  @if (empty($my_neighborhood_info) && $my_neighborhood_info->provide_neigborhood_address_left == 0) checked @endif  name="provide_neigborhood_address_left"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>

    <div class="row" @if (empty($my_neighborhood_info) || $my_neighborhood_info->provide_neigborhood_address_left == 0) style="display: none;" @endif id="neighborhood_address_div_left" >

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$my_neighborhood_info->neighborhood_house_address_left ?? ''}}" name="neighborhood_house_address_left" type="text" class="form-control wizard-required"
                    id="neighborhood_house_address_left">
                <label for="neighborhood_house_address_left" class="wizard-form-text-label">5.14 House Address</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$my_neighborhood_info->neighborhood_urbanization_name_left ?? ''}}" name="neighborhood_urbanization_name_left" type="text" class="form-control wizard-required"
                    id="neighborhood_urbanization_name_left">
                <label for="neighborhood_urbanization_name_left" class="wizard-form-text-label">5.15 Urbanization
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$my_neighborhood_info->neighborhood_zipcode_left ?? ''}}" name="neighborhood_zipcode_left" type="text" class="form-control wizard-required"
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
                    <option value="{{ $my_neighborhood_info->neighborhood_state_left ?? '' }}" selected>
                        {{ $my_neighborhood_info->neighborhood_state_left ?? '' }}</option>
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
                    <option value="{{ $my_neighborhood_info->neighborhood_city_left ?? '' }}" selected>
                        {{ $my_neighborhood_info->neighborhood_city_left ?? '' }}</option>
                </select>

            </div>
        </div>

    </div>

    {{-- back neighborhood --}}

    <hr>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="neighborhood_race_back" class="wizard-form-text-label">5.19 what race are your nearest
                    neighbors to the back of you?
                </label>
                <select class="form-control" name="neighborhood_race_back" id="neighborhood_race_back" required>
                    <option></option>
                    <option value="plahnet52" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'plahnet52') selected @endif>PLAHNET52 52 (5A’s &
                        2H’s)</option>
                    <option value="pacific_islander_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'pacific_islander_americans') selected @endif>Pacific
                        Islander Americans</option>
                    <option value="lgbtq" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'lgbtq') selected @endif>LGBTQ</option>
                    <option value="african_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'african_americans') selected @endif>African
                        Americans</option>
                    <option value="asian" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'asian') selected @endif>Asian</option>
                    <option value="asian_indians" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'asian_indians') selected @endif>Asian Indians
                    </option>
                    <option value="alaska_natives" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'alaska_natives') selected @endif>Alaska Natives
                    </option>
                    <option value="alaska_native_corporations" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'alaska_native_corporations') selected @endif>Alaska
                        Native Corporations</option>
                    <option value="hasidic_jews" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'hasidic_jews') selected @endif>Hasidic Jews</option>
                    <option value="hispanic_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'hispanic_americans') selected @endif>
                        Hispanic-Americans</option>
                    <option value="native_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'native_americans') selected @endif>Native
                        Americans</option>
                    <option value="ex_offenders" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'ex_offenders') selected @endif>Ex-Offenders
                    </option>
                    <option value="tribal_entities" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'tribal_entities') selected @endif>Tribal entities
                    </option>
                    <option value="decline" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'decline') selected @endif>Decline</option>
                    <option value="other_combination_not_described" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'other_combination_not_described') selected @endif>
                        Other Combination Not Described</option>
                    <option value="other" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'other') selected @endif>Other</option>
                    <option value="white" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_back== 'white') selected @endif>White</option>
                </select>
                <p class="text_danger form_error"></p>


            </div>
        </div>



        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$my_neighborhood_info->name_of_neighborhood_household_head_back ?? ''}}" name="name_of_neighborhood_household_head_back" type="text"
                    class="form-control wizard-required" id="name_of_neighborhood_household_head_back" required>
                <label for="weight" class="wizard-form-text-label">5.20 What is the last name of the head of
                    household
                    of your nearest neighbor to the back?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$my_neighborhood_info->neighborhood_guid_back ?? ''}}" name="neighborhood_guid_back" type="number" class="form-control wizard-required"
                    id="neighborhood_guid_back">
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
                <input onclick="get_nearest_neghbor_address_back()"  @if (!empty($my_neighborhood_info) || $my_neighborhood_info->provide_neigborhood_address_back == 1) checked @endif name="provide_neigborhood_address_back"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="get_nearest_neghbor_address_back()"  @if (empty($my_neighborhood_info) && $my_neighborhood_info->provide_neigborhood_address_back == 0) checked @endif  name="provide_neigborhood_address_back"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>

    <div class="row" id="neighborhood_address_div_back"   @if (empty($my_neighborhood_info) || $my_neighborhood_info->provide_neigborhood_address_back == 0) style="display: none;" @endif>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input  value="{{$my_neighborhood_info->neighborhood_house_address_back ?? ''}}" name="neighborhood_house_address_back" type="text" class="form-control wizard-required"
                    id="neighborhood_house_address_back">
                <label for="neighborhood_house_address_back" class="wizard-form-text-label">5.23 House Address</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input  value="{{$my_neighborhood_info->neighborhood_urbanization_name_back ?? ''}}" name="neighborhood_urbanization_name_back" type="text" class="form-control wizard-required"
                    id="neighborhood_urbanization_name_back">
                <label for="neighborhood_urbanization_name_back" class="wizard-form-text-label">5.24 Urbanization
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input   value="{{$my_neighborhood_info->neighborhood_zipcode_back ?? ''}}" name="neighborhood_zipcode_back" type="text" class="form-control wizard-required"
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
                    <option value="{{ $my_neighborhood_info->neighborhood_state_back ?? '' }}" selected>
                        {{ $my_neighborhood_info->neighborhood_state_back ?? '' }}</option>
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
                    <option value="{{ $my_neighborhood_info->neighborhood_city_back ?? '' }}" selected>
                        {{ $my_neighborhood_info->neighborhood_city_back ?? '' }}</option>
                </select>

            </div>
        </div>

    </div>


    {{-- front neighbor hood --}}


    <hr>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="neighborhood_race_front" class="wizard-form-text-label">5.28 what race are your nearest
                    neighbors to the front of you?
                </label>
                <select class="form-control" name="neighborhood_race_front" id="neighborhood_race_front" required>
                    <option></option>
                    <option value="plahnet52" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'plahnet52') selected @endif>PLAHNET52 52 (5A’s &
                        2H’s)</option>
                    <option value="pacific_islander_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'pacific_islander_americans') selected @endif>Pacific
                        Islander Americans</option>
                    <option value="lgbtq" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'lgbtq') selected @endif>LGBTQ</option>
                    <option value="african_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'african_americans') selected @endif>African
                        Americans</option>
                    <option value="asian" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'asian') selected @endif>Asian</option>
                    <option value="asian_indians" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'asian_indians') selected @endif>Asian Indians
                    </option>
                    <option value="alaska_natives" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'alaska_natives') selected @endif>Alaska Natives
                    </option>
                    <option value="alaska_native_corporations" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'alaska_native_corporations') selected @endif>Alaska
                        Native Corporations</option>
                    <option value="hasidic_jews" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'hasidic_jews') selected @endif>Hasidic Jews</option>
                    <option value="hispanic_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'hispanic_americans') selected @endif>
                        Hispanic-Americans</option>
                    <option value="native_americans" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'native_americans') selected @endif>Native
                        Americans</option>
                    <option value="ex_offenders" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'ex_offenders') selected @endif>Ex-Offenders
                    </option>
                    <option value="tribal_entities" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'tribal_entities') selected @endif>Tribal entities
                    </option>
                    <option value="decline" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'decline') selected @endif>Decline</option>
                    <option value="other_combination_not_described" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'other_combination_not_described') selected @endif>
                        Other Combination Not Described</option>
                    <option value="other" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'other') selected @endif>Other</option>
                    <option value="white" @if (!empty($my_neighborhood_info) && $my_neighborhood_info->neighborhood_race_front== 'white') selected @endif>White</option>
                </select>
                <p class="text_danger form_error"></p>


            </div>
        </div>



        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$my_neighborhood_info->name_of_neighborhood_household_head_front ?? ''}}" name="name_of_neighborhood_household_head_front" type="text"
                    class="form-control wizard-required" id="name_of_neighborhood_household_head_front" required>
                <label for="weight" class="wizard-form-text-label">5.29 What is the last name of the head of
                    household
                    of your nearest neighbor to the front?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input value="{{$my_neighborhood_info->neighborhood_guid_front ?? ''}}" name="neighborhood_guid_front" type="number" class="form-control wizard-required"
                    id="neighborhood_guid_front">
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
                <input onclick="get_nearest_neghbor_address_front()"  @if (!empty($my_neighborhood_info) || $my_neighborhood_info->provide_neigborhood_address_front == 1) checked @endif name="provide_neigborhood_address_front"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="get_nearest_neghbor_address_front()"  @if (empty($my_neighborhood_info) && $my_neighborhood_info->provide_neigborhood_address_front == 0) checked @endif  name="provide_neigborhood_address_front"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>

    <div class="row" id="neighborhood_address_div_front" @if (empty($my_neighborhood_info) || $my_neighborhood_info->provide_neigborhood_address_front == 0) style="display: none;" @endif>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input  value="{{$my_neighborhood_info->neighborhood_house_address_front ?? ''}}" name="neighborhood_house_address_front" type="text" class="form-control wizard-required"
                    id="neighborhood_house_address_front">
                <label for="neighborhood_house_address_front" class="wizard-form-text-label">5.32 House
                    Address</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input  value="{{$my_neighborhood_info->neighborhood_urbanization_name_front ?? ''}}" name="neighborhood_urbanization_name_front" type="text"
                    class="form-control wizard-required" id="neighborhood_urbanization_name_front">
                <label for="neighborhood_urbanization_name_front" class="wizard-form-text-label">5.33 Urbanization
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$my_neighborhood_info->neighborhood_zipcode_front ?? ''}}" name="neighborhood_zipcode_front" type="text" class="form-control wizard-required"
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
                    <option value="{{ $my_neighborhood_info->neighborhood_state_front ?? '' }}" selected>
                        {{ $my_neighborhood_info->neighborhood_state_front ?? '' }}</option>
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
                    <option value="{{ $my_neighborhood_info->neighborhood_city_front ?? '' }}" selected>
                        {{ $my_neighborhood_info->neighborhood_city_front ?? '' }}</option>
                </select>

            </div>
        </div>

    </div>

    <div class="form-group clearfix">
        <a  href="javascript:;" onclick="returnLater('fieldset_five','consumer_this_is_me')" class="form-wizard-return-btn float-left mr-3">Pause & Return Later</a>

        {{-- <a href="javascript:;" onclick="previousStep('neighborhood_bar','enthnicity_bar')"
            class="form-wizard-previous-btn float-left">Previous</a> --}}
        <a onclick="checkFieldSetNeighborhood()" id="my_neighborhood_button" href="javascript:;"
            class="form-wizard-next-btn  float-right">Save & Continue</a>
    </div>
</fieldset>
