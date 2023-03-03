<fieldset class="wizard-fieldset  mt-4" id="fieldset_eleven">
    <h5>11. Head Tattoos, Scars, and other distinguishing identifiers</h5>

    <div class="row">

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                11.1 Do you have any facial or neck or head scars?
                <div class="wizard-form-radio">
                    <input onclick="distinguish_identifier_check()" name="facial_neck_scars" value="1" id="radio1"
                        type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input checked onclick="distinguish_identifier_check()" name="facial_neck_scars" value="0"
                        id="radio2" type="radio">
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6" id="facial_neck_scars_description_div" style="display: none;">
            <div class="form-group">
                <textarea name="facial_neck_scars_description" type="text" class="form-control wizard-required"
                    id="facial_neck_scars_description"></textarea>
                <label for="facial_neck_scars_description" class="wizard-form-text-label">11.2 Please describe where
                    your facial or neck or head scar is located?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                11.3 Do you have permanent facial or neck or head tattoos ?
                <div class="wizard-form-radio">
                    <input onclick="facial_neck_tattoos_check()" name="facial_or_neck_tattoos" value="1"
                        id="radio1" type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input checked onclick="facial_neck_tattoos_check()" name="facial_or_neck_tattoos" value="0"
                        id="radio2" type="radio">
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6" id="facial_or_neck_tattoos_description_div" style="display: none;">
            <div class="form-group">
                <textarea name="facial_or_neck_tattoos_description" type="text" class="form-control wizard-required"
                    id="facial_or_neck_tattoos_description"></textarea>
                <label for="facial_or_neck_tattoos_description" class="wizard-form-text-label">11.4 Describe the
                    location of your permanent facial or neck or head tattoo</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                11.5 Have you ever had facial plastic surgery?
                <div class="wizard-form-radio">
                    <input onclick="facial_plastic_surgery_check()" name="facial_plastic_surgery" value="1"
                        id="radio1" type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input checked onclick="facial_plastic_surgery_check()" name="facial_plastic_surgery" value="0"
                        id="radio2" type="radio">
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-12" id="facial_plastic_surgery_description_div" style="display: none;">
            <div class="col-md-6 col-lg-6 pb-4">
                <label for="" class="wizard-form-text-label">11.6 where on your face
                    was your surgery? </label>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="form-group">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name="right_eye" id="right_eye">
                            <label class="form-check-label" for="right_eye">Right Eye</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name="left_eye" id="left_eye">
                            <label class="form-check-label" for="left_eye">Left Eye</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name="nose_job" id="nose_job">
                            <label class="form-check-label" for="nose_job">Nose Job</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name="cheeks" id="cheeks">
                            <label class="form-check-label" for="cheeks">Cheeks</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name="mouth" id="mouth">
                            <label class="form-check-label" for="mouth">Mouth</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name="chin" id="chin">
                            <label class="form-check-label" for="chin">Chin</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name="fore_head" id="fore_head">
                            <label class="form-check-label" for="fore_head">Fore Head</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name="face_lift" id="face_lift">
                            <label class="form-check-label" for="face_lift">Face Lift</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input"  name="lips" id="lips">
                            <label class="form-check-label" for="lips">Lips</label>
                        </div>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <input name="facial_surgery_date" type="date" value="{{ date('Y-m-d') }}"
                            class="form-control wizard-required" id="facial_surgery_date">
                        <label for="facial_surgery_date" class="wizard-form-text-label">11.7 What was the date of your
                            first facial plastic surgery procedure?</label>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <input name="number_of_plastic_surgery" type="number" class="form-control wizard-required"
                            id="number_of_plastic_surgery">
                        <label for="number_of_plastic_surgery" class="wizard-form-text-label">11.8 How many facial
                            plastic surgery procedures would you say you had up to today?</label>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <input name="plastic_surgeon_name" type="number" class="form-control wizard-required"
                            id="plastic_surgeon_name">
                        <label for="plastic_surgeon_name" class="wizard-form-text-label">11.9 What is the name of the
                            facial plastic surgeon who performed your last surgery?</label>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <input name="first_name_of_surgeon" type="text" class="form-control wizard-required"
                            id="first_name_of_surgeon">
                        <label for="first_name_of_surgeon" class="wizard-form-text-label">11.9 First Name of
                            Surgeon</label>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <input name="last_name_of_surgeon" type="text" class="form-control wizard-required"
                            id="last_name_of_surgeon">
                        <label for="last_name_of_surgeon" class="wizard-form-text-label">11.9 Last Name of
                            Surgeon</label>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <input name="surgeon_house_address" type="text" class="form-control wizard-required"
                            id="surgeon_house_address">
                        <label for="surgeon_house_address" class="wizard-form-text-label">11.10 Office or House
                            number</label>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <input name="surgeon_street" type="text" class="form-control wizard-required"
                            id="surgeon_street">
                        <label for="surgeon_street" class="wizard-form-text-label">11.11 Street</label>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="form-group">

                        <label for="surgeon_state" class="wizard-form-text-label">11.12 State</label>
                        <select class="form-control" name="surgeon_state" id="surgeon_state">
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
                        <p class="text_danger form_error"></p>
                    </div>

                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <label for="surgeon_city" class="wizard-form-text-label">11.13 City</label>
                        <select class="form-control" name="surgeon_city" id="surgeon_city" required>
                        </select>
                        <p class="text_danger form_error"></p>
                    </div>

                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <input name="surgeon_zipcode" type="text" class="form-control wizard-required"
                            id="surgeon_zipcode">
                        <label for="surgeon_zipcode" class="wizard-form-text-label">11.14 Zip Code</label>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="form-group">
                        <input name="surgeon_telephone" type="text" class="form-control wizard-required"
                            id="surgeon_telephone">
                        <label for="surgeon_telephone" class="wizard-form-text-label">Sugeon Telephone</label>
                        <p class="text_danger form_error"></p>
                    </div>
                </div>
            </div>



        </div>





    </div>

    <div class="form-group clearfix">
        <a href="javascript:;" onclick="previousStep('distinguish_bar','hair_bar')" class="form-wizard-previous-btn float-left">Previous</a>

        <a onclick="checkFieldSetDistinguishIdentifier()" href="javascript:;" class="form-wizard-next-btn  float-right">Next</a>
    </div>
</fieldset>