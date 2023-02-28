<fieldset class="wizard-fieldset mt-4" id="fieldset_nine">
    <h5>9. Head & Face Info</h5>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="chin_description" class="wizard-form-text-label">9.1 What best describe your chin as you see
                    it?
                </label>
                <select class="form-control" name="chin_description" id="chin_description" required>
                    <option></option>
                    <option value="bi-lateral_dimples_cheek">Bi-Lateral Dimples Cheek</option>
                    <option value="cleft_chin">Cleft Chin</option>
                    <option value="left_dimples_cheek">Left Dimples, Cheek</option>
                    <option value="right_dimples_cheek">Right Dimples, Cheek</option>
                    <option value="other">Other</option>

                </select>
                <p class="text_danger form_error"></p>


            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="eyes_description" class="wizard-form-text-label">9.2 What best describe your eyes as you see
                    it?
                </label>
                <select class="form-control" name="eyes_description" id="eyes_description" required>
                    <option></option>
                    <option value="eye_eccentricity">Eye Eccentricity</option>
                    <option value="eye_size">Eye Size</option>
                    <option value="eye_spacing">Eye Spacing</option>
                    <option value="eyebrow_slant">Eyebrow Slant</option>
                    <option value="pupil_size">Pupil Size</option>
                    <option value="other">Other</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="hair_description" class="wizard-form-text-label">9.3 What best describe your hair as you see
                    it?
                </label>
                <select class="form-control" name="hair_description" id="hair_description" required>
                    <option></option>
                    <option value="head_eccentricity">Head Eccentricity</option>
                    <option value="unibrow">Unibrow</option>
                    <option value="widows_peak">Widow's Peak</option>
                    <option value="other">Other</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="mouth_description" class="wizard-form-text-label">9.4 What best describe your mouth as you
                    see
                    it?
                </label>
                <select class="form-control" name="mouth_description" id="mouth_description" required>
                    <option></option>
                    <option value="mouth_curvature">Mouth Curvature</option>
                    <option value="mouth_openness">Mouth Openness</option>
                    <option value="mouth_width">Mouth Width</option>
                    <option value="other">Other</option>


                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="hair_description" class="wizard-form-text-label">9.5 What is your natural eye color?
                </label>
                <select class="form-control" name="hair_description" id="hair_description" required>
                    <option></option>
                    <option value="amber">Amber</option>
                    <option value="blue">Blue</option>
                    <option value="brown">Brown</option>
                    <option value="gray">Gray</option>
                    <option value="green">Green</option>
                    <option value="hazel">Hazel</option>
                    <option value="red_and_violet">Red and violet</option>
                    <option value="spectrum_of_eye_color">Spectrum of eye color</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                9.6 Do you require prescription eyewear?
                <div class="wizard-form-radio">
                    <input name="eyeware_prescription" value="1" id="radio1" type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input checked name="eyeware_prescription" value="0" id="radio2"
                        type="radio">
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>

    </div>
    <div class="form-group clearfix">
        <a href="javascript:;" onclick="previousStep('head_n_face_bar','facial_image_upload_bar')"
            class="form-wizard-previous-btn float-left">Previous</a>
        <a onclick="checkFieldSetHeadAndFace()" href="javascript:;"
            class="form-wizard-next-btn  float-right">Next</a>
    </div>
</fieldset>
