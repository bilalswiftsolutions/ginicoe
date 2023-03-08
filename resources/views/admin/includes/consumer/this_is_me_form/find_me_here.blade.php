<fieldset class="wizard-fieldset" id="fieldset_two">
    <h5>2. You can find me here</h5>
    <div class="row">

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $find_me_here->house_address ?? '' }}" name="house_address" id="house_address"
                    type="text" class="form-control wizard-required">
                <label for="house_address" class="wizard-form-text-label">2.1 House Address</label>
                <p class="text_danger form_error"></p>

            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $find_me_here->building_name ?? '' }}" name="building_name" type="text"
                    class="form-control wizard-required" id="building_name">
                <label for="building_name" class="wizard-form-text-label">2.2 Building Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        {{-- <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="apartment_no" type="number" class="form-control wizard-required" id="apartment_no">
                <label for="apartment_no" class="wizard-form-text-label">2.3 Apartment No.</label>
                <p class="text_danger form_error"></p>
            </div>
        </div> --}}



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $find_me_here->street_name ?? '' }}" name="street_name" type="text"
                    class="form-control wizard-required" id="street_name">
                <label for="street_name" class="wizard-form-text-label">2.4 Street Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="state" class="wizard-form-text-label">2.5 State</label>
                <select class="form-control" name="state" id="state" required>

                    <option value="{{ $find_me_here->state ?? '' }}" selected>{{ $find_me_here->state ?? '' }}</option>
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



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <label for="city" class="wizard-form-text-label">2.6 City</label>
                <select class="form-control" name="city" id="city" required>
                    <option value="{{ $find_me_here->city ?? '' }}" selected>{{ $find_me_here->city ?? ''}}</option>
                </select>
                <p class="text_danger form_error"></p>

            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $find_me_here->town ?? '' }}" name="town" type="text"
                    class="form-control wizard-required" id="town">
                <label for="town" class="wizard-form-text-label">2.7 Town</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $find_me_here->township ?? '' }}" name="township" type="text"
                    class="form-control wizard-required" id="township">
                <label for="township" class="wizard-form-text-label">2.8 Township</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>





        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $find_me_here->parish ?? '' }}" name="parish" type="text"
                    class="form-control wizard-required" id="parish">
                <label for="parish" class="wizard-form-text-label">2.9 Parish</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $find_me_here->village ?? '' }}" name="village" type="text"
                    class="form-control wizard-required" id="village">
                <label for="village" class="wizard-form-text-label">2.10 Village</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $find_me_here->hamlet ?? '' }}" name="hamlet" type="text"
                    class="form-control wizard-required" id="hamlet">
                <label for="hamlet" class="wizard-form-text-label">2.11 Hamlet</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $find_me_here->district ?? '' }}" name="district" type="text"
                    class="form-control wizard-required" id="district">
                <label for="district" class="wizard-form-text-label">2.12 District</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        {{-- <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="district" type="text" class="form-control wizard-required" id="district">
                <label for="district" class="wizard-form-text-label">2.13 District</label>
                <p class="text_danger form_error"></p>
            </div>
        </div> --}}



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $find_me_here->county ?? '' }}" name="county" type="text"
                    class="form-control wizard-required" id="county">
                <label for="county" class="wizard-form-text-label">2.13 County</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $find_me_here->neighborhood_name ?? '' }}" name="neighborhood_name" type="text"
                    class="form-control wizard-required" id="neighborhood_name">
                <label for="neighborhood_name" class="wizard-form-text-label">2.14 Name of Neighborhood</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $find_me_here->zipcode ?? '' }}" name="zipcode" type="number"
                    class="form-control wizard-required" id="zipcode">
                <label for="zipcode" class="wizard-form-text-label">2.15 Zip Code</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $find_me_here->urbanization_name ?? '' }}" name="urbanization_name" type="text"
                    class="form-control wizard-required" id="urbanization_name">
                <label for="urbanization_name" class="wizard-form-text-label">2.16 Urbanization Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>





        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="house_type" class="wizard-form-text-label">2.17 House Type</label>
                <select class="form-control" name="house_type" id="house_type">
                    <option></option>
                    <option @if (!empty($find_me_here) && $find_me_here->house_type == 'apartment') selected @endif value="apartment">Apartment</option>
                    <option @if (!empty($find_me_here) && $find_me_here->house_type == 'co_op') selected @endif value="co_op">Co-Op</option>
                    <option @if (!empty($find_me_here) && $find_me_here->house_type == 'condo') selected @endif value="condo">Condo</option>
                    <option @if (!empty($find_me_here) && $find_me_here->house_type == 'correctional_facilities') selected @endif value="correctional_facilities">
                        Correctional
                        Facilities</option>
                    <option @if (!empty($find_me_here) && $find_me_here->house_type == 'duplex') selected @endif value="duplex">Duplex</option>
                    <option @if (!empty($find_me_here) && $find_me_here->house_type == 'four_plex') selected @endif value="four_plex">Four-Plex</option>
                    <option @if (!empty($find_me_here) && $find_me_here->house_type == 'group_homes') selected @endif value="group_homes">Group Homes</option>
                    <option @if (!empty($find_me_here) && $find_me_here->house_type == 'health_care_facility_bed') selected @endif value="health_care_facility_bed">Health
                        Care
                        Facility bed</option>
                    <option @if (!empty($find_me_here) && $find_me_here->house_type == 'health_care_facility_bed') selected @endif value="house">House</option>
                    <option @if (!empty($find_me_here) && $find_me_here->house_type == 'military_base_bunk') selected @endif value="military_base_bunk">Military Base
                        bunk
                    </option>
                    <option @if (!empty($find_me_here) && $find_me_here->house_type == 'mobile_trailer_home') selected @endif value="mobile_trailer_home">Mobile /
                        Trailer
                        Home</option>
                    <option @if (!empty($find_me_here) && $find_me_here->house_type == 'campus_student_housing_dormitory_room') selected @endif
                        value="on-campus_student_housing_dormitory_room">On-Campus Student Housing Dormitory Room
                    </option>
                    <option value="project_apartment" @if (!empty($find_me_here) && $find_me_here->house_type == 'project_apartment') selected @endif>Project's
                        Apartment
                    </option>
                    <option value="room" @if (!empty($find_me_here) && $find_me_here->house_type == 'room') selected @endif>Room</option>
                    <option value="shelter_bed" @if (!empty($find_me_here) && $find_me_here->house_type == 'shelter_bed') selected @endif>Shelter's bed
                    </option>

                </select>
            </div>
        </div>

        <div class="col-md-12 col-lg-12">
            <div class="form-group">
                2.18 Do you live in multi-storey building?
                <div class="wizard-form-radio">
                    <input onclick="sky_crapper_field()" @if (!empty($find_me_here) && $find_me_here->do_you_live_in_sky_crapper == 1) checked @endif
                        name="do_you_live_in_sky_crapper" value="1" id="radio1" type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input onclick="sky_crapper_field()" @if ((!empty($find_me_here) && $find_me_here->do_you_live_in_sky_crapper == 0) || empty($find_me_here)) checked @endif
                        name="do_you_live_in_sky_crapper" value="0" id="radio2" type="radio">
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-12 row" @if (!empty($find_me_here) && $find_me_here->do_you_live_in_sky_crapper == 0) style="display: none;" @endif
            id="sky_crapper_fields">

            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input value="{{ $find_me_here->no_of_floor ?? '' }}" name="no_of_floor" type="number"
                        class="form-control wizard-required" id="no_of_floor">
                    <label for="no_of_floor" class="wizard-form-text-label">2.19 No of Floors Your Building</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input value="{{ $find_me_here->your_floor_no ?? '' }}" name="your_floor_no" type="text"
                        class="form-control wizard-required" id="your_floor_no">
                    <label for="your_floor_no" class="wizard-form-text-label">2.20 Your Floor No.</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input value="{{ $find_me_here->apartment_no ?? '' }}" name="apartment_no" type="text"
                        class="form-control wizard-required" id="apartment_no">
                    <label for="apartment_no" class="wizard-form-text-label">2.21 Apartment No.</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>


            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input value="{{ $find_me_here->room_no ?? '' }}" name="room_no" type="number"
                        class="form-control wizard-required" id="room_no">
                    <label for="room_no" class="wizard-form-text-label">2.22 Room No.</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>


            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input value="{{ $find_me_here->bed_no ?? '' }}" name="bed_no" type="number"
                        class="form-control wizard-required" id="bed_no">
                    <label for="bed_no" class="wizard-form-text-label">2.23 Bed No</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>
        </div>







    </div>
    <hr>
    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            2.24 Have you lived at this address for 2 years or more?
            <div class="wizard-form-radio">
                <input onclick="living_for_two_year()" @if (!empty($find_me_here) && $find_me_here->living_for_two_years == 1) checked @endif
                    name="living_for_two_years" value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="living_for_two_year()" @if (empty($find_me_here) || $find_me_here->living_for_two_years == 0) checked @endif
                    name="living_for_two_years" value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-lg-12">
        <div class="row" @if (!empty($find_me_here) && $find_me_here->living_for_two_years == 1) style="display: none;" @endif
            id="old_address_section">
            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input value="{{ $find_me_here->old_house_address ?? ''}}" name="old_house_address"
                        id="old_house_address" type="text" class="form-control wizard-required">
                    <label for="old_house_address" class="wizard-form-text-label">2.25 House Address</label>
                    <p class="text_danger form_error"></p>

                </div>
            </div>
            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input value="{{ $find_me_here->old_building_name ?? ''}}" name="old_building_name" type="text"
                        class="form-control wizard-required" id="old_building_name">
                    <label for="old_building_name" class="wizard-form-text-label">2.26 Building Name</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>

            {{-- <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input name="old_apartment_no" type="number" class="form-control wizard-required"
                        id="old_apartment_no">
                    <label for="old_apartment_no" class="wizard-form-text-label">2.27 Apartment No.</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div> --}}



            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input value="{{ $find_me_here->old_street_name ?? ''}}" name="old_street_name" type="text"
                        class="form-control wizard-required" id="old_street_name">
                    <label for="old_street_name" class="wizard-form-text-label">2.28 Street Name</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="form-group">

                    <label for="old_state" class="wizard-form-text-label">2.29 State</label>
                    <select class="form-control" name="old_state" id="old_state" required>
                        <option value="{{ $find_me_here->old_state ?? '' }}" selected>
                            {{ $find_me_here->old_state ?? '' }}</option>

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
                    <label for="old_city" class="wizard-form-text-label">2.30 City</label>
                    <select class="form-control" name="old_city" id="old_city" required>
                        <option value="{{ $find_me_here->old_city ?? ''}}" selected>{{ $find_me_here->old_city ?? '' }}</option>
                    
                    </select>

                </div>
            </div>


            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input name="old_town" type="text" class="form-control wizard-required" id="old_town">
                    <label for="old_town" class="wizard-form-text-label">2.31 Town</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input name="old_township" type="text" class="form-control wizard-required"
                        id="old_township">
                    <label for="old_township" class="wizard-form-text-label">2.32 Township</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>





            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input name="old_parish" type="text" class="form-control wizard-required" id="old_parish">
                    <label for="old_parish" class="wizard-form-text-label">2.33 Parish</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input name="old_village" type="text" class="form-control wizard-required" id="old_village">
                    <label for="old_village" class="wizard-form-text-label">2.34 Village</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input name="old_hamlet" type="text" class="form-control wizard-required" id="old_hamlet">
                    <label for="old_hamlet" class="wizard-form-text-label">2.35 Hamlet</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>



            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input name="old_district" type="text" class="form-control wizard-required"
                        id="old_district">
                    <label for="old_district" class="wizard-form-text-label">2.37 District</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>



            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input name="old_county" type="text" class="form-control wizard-required" id="old_county">
                    <label for="old_county" class="wizard-form-text-label">2.38 County</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input name="old_neighborhood_name" type="text" class="form-control wizard-required"
                        id="old_neighborhood_name">
                    <label for="old_neighborhood_name" class="wizard-form-text-label">2.39 Name of
                        Neighborhood</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input name="old_zipcode" type="number" class="form-control wizard-required" id="old_zipcode">
                    <label for="old_zipcode" class="wizard-form-text-label">2.40 Zip Code</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>


            <div class="col-md-4 col-lg-4">
                <div class="form-group">
                    <input name="old_urbanization_name" type="text" class="form-control wizard-required"
                        id="old_urbanization_name">
                    <label for="old_urbanization_name" class="wizard-form-text-label">2.41 Urbanization Name</label>
                    <p class="text_danger form_error"></p>
                </div>
            </div>





            <div class="col-md-4 col-lg-4">
                <div class="form-group">

                    <label for="old_house_type" class="wizard-form-text-label">2.42 House Type</label>
                    <select class="form-control" name="old_house_type" id="old_house_type">
                        <option></option>
                        <option value="apartment">Apartment</option>
                        <option value="co_op">Co-Op</option>
                        <option value="condo">Condo</option>
                        <option value="correctional_facilities">Correctional Facilities</option>
                        <option value="duplex">Duplex</option>
                        <option value="four_plex">Four-Plex</option>
                        <option value="group_homes">Group Homes</option>
                        <option value="health_care_facility_bed">Health Care Facility bed</option>
                        <option value="house">House</option>
                        <option value="military_base_bunk">Military Base bunk</option>
                        <option value="mobile_trailer_home">Mobile / Trailer Home</option>
                        <option value="on-campus_student_housing_dormitory_room">On-Campus Student Housing Dormitory
                            Room
                        </option>
                        <option value="project_apartment">Project's Apartment</option>
                        <option value="room">Room</option>
                        <option value="shelter_bed">Shelter's bed</option>

                    </select>
                </div>
            </div>



            <div class="col-md-12 col-lg-12">
                <div class="form-group">
                    2.43 Do you lived in multi-storey building?
                    <div class="wizard-form-radio">
                        <input onclick="old_sky_crapper_field()" @if ((!empty($find_me_here) && $find_me_here->old_do_you_live_in_sky_crapper == 1)) checked @endif name="old_do_you_live_in_sky_crapper" value="1"
                            id="radio1" type="radio">
                        <label for="radio1">Yes</label>
                    </div>
                    <div class="wizard-form-radio">
                        <input onclick="old_sky_crapper_field()" @if ((!empty($find_me_here) && $find_me_here->old_do_you_live_in_sky_crapper == 0) || empty($find_me_here)) checked @endif name="old_do_you_live_in_sky_crapper"
                            value="0" id="radio2" type="radio">
                        <label for="radio2">No</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-12 row" style="display: none;" id="old_sky_crapper_fields">

                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <input value="{{$find_me_here->old_no_of_floor ?? ''}}" name="old_no_of_floor" type="number" class="form-control wizard-required"
                            id="old_no_of_floor">
                        <label for="old_no_of_floor" class="wizard-form-text-label">2.44 No of Floors Your
                            Building</label>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <input value="{{$find_me_here->old_your_floor_no ?? ''}}" name="old_your_floor_no" type="text" class="form-control wizard-required"
                            id="old_your_floor_no">
                        <label for="old_your_floor_no" class="wizard-form-text-label">2.45 Your Floor No.</label>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <input value="{{$find_me_here->old_apartment_no ?? ''}}" name="old_apartment_no" type="text" class="form-control wizard-required"
                            id="old_apartment_no">
                        <label for="old_apartment_no" class="wizard-form-text-label">2.46 Apartment No.</label>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>


                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <input value="{{$find_me_here->old_room_no ?? ''}}" name="old_room_no" type="number" class="form-control wizard-required"
                            id="old_room_no">
                        <label for="old_room_no" class="wizard-form-text-label">2.47 Room No.</label>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>


                <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                        <input value="{{$find_me_here->old_bed_no ?? ''}}" name="old_bed_no" type="number" class="form-control wizard-required"
                            id="old_bed_no">
                        <label for="old_bed_no" class="wizard-form-text-label">2.48 Bed No</label>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <hr>

    <div class="row">

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$find_me_here->primary_area_code ?? ''}}" name="primary_area_code" type="number" class="form-control wizard-required"
                    id="primary_area_code">
                <label for="primary_area_code" class="wizard-form-text-label">2.49 Area Code Primary Mobile
                    No.</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$find_me_here->primary_mobile_number ?? ''}}" name="primary_mobile_number" type="number" class="form-control wizard-required"
                    id="primary_mobile_number">
                <label for="primary_mobile_number" class="wizard-form-text-label">2.50 Primary Mobile No.</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$find_me_here->alternate_area_code ?? ''}}" name="alternate_area_code" type="number" class="form-control wizard-required"
                    id="alternate_area_code">
                <label for="alternate_area_code" class="wizard-form-text-label">2.51 Alternate Telephone no. Area
                    Code</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$find_me_here->alternate_telephone_number ?? ''}}" name="alternate_telephone_number" type="number" class="form-control wizard-required"
                    id="alternate_telephone_number">
                <label for="alternate_telephone_number" class="wizard-form-text-label">2.52 Alternate Telephone
                    No.</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$find_me_here->email ?? ''}}" name="email" type="email" class="form-control wizard-required" id="email">
                <label for="email" class="wizard-form-text-label">2.53 Email</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
    </div>

    <div class="form-group clearfix">
        <a href="javascript:;" onclick="previousStep('find_me_here_bar','pedigree_bar')"
            class="form-wizard-previous-btn float-left">Previous</a>
        <a onclick="checkFieldSetThisIsMe()" id="find_me_here_next_button"
            class="form-wizard-next-btn-without-click float-right">Next</a>
    </div>
</fieldset>
