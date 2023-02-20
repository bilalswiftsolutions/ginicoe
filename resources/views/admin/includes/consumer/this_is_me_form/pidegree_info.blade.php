<fieldset class="wizard-fieldset show mt-4" id="fieldset_one">
    <h5>Personal Information</h5>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="fname" type="text" class="form-control wizard-required" id="fname">
                <label for="fname" class="wizard-form-text-label">First Name</label>
                <p class="text_danger form_error"></p>

            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="lname" type="text" class="form-control wizard-required">
                <label for="lname" class="wizard-form-text-label">Last Name</label>
                <p class="text_danger form_error"></p>

            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="middle_initial" type="text" class="form-control wizard-required" id="middle_initial">
                <label for="middle_initial" class="wizard-form-text-label">Middle Initial</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="suffix" type="text" class="form-control wizard-required">
                <label for="suffix" class="wizard-form-text-label">Suffix</label>
                <p class="text_danger form_error"></p>

            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="nick_name" type="text" class="form-control wizard-required">
                <label for="nick_name" class="wizard-form-text-label">Nick Name</label>
                <p class="text_danger form_error"></p>

            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="date_of_birth" value="{{ date('Y-m-d') }}" type="date"
                    class="form-control wizard-required">
                <label for="middle_initial" class="wizard-form-text-label">Date of Birth</label>
                <p class="text_danger form_error"></p>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="social_security_no" type="text" class="form-control wizard-required"
                    id="social_security_no">
                <label for="" class="wizard-form-text-label">Social Security Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input id="verify_social_security_no" name="verify_social_security_no" type="text"
                    class="form-control wizard-required" id="verify_social_security_no">
                <label for="verify_social_security_no" class="wizard-form-text-label">Verify Social
                    Security Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                Do you use a credit privacy number or credit protection number or credit profile number
                (cpn)?
                <div class="wizard-form-radio">
                    <input onclick="check_cpn_usage()" name="cpn_usage" value="1" id="radio1" type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input onclick="check_cpn_usage()" checked name="cpn_usage" value="0" id="radio2"
                        type="radio">
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4 col-lg-4" id="cpn_no_div" style="display: none;">
            <div class="form-group">
                <input name="cpn_no" type="text" class="form-control wizard-required" id="cpn_no">
                <label for="cpn_no" class="wizard-form-text-label">Credit privacy number (cpn)
                </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                Are you US Vetran?
                <div class="wizard-form-radio">
                    <input name="us_vetran" value="1" id="radio1" type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input checked name="us_vetran" value="0" id="radio2" type="radio">
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                Is the consumer presently incarcerated? Y/N
                <div class="wizard-form-radio">
                    <input name="consumer_presently_incarcerated" value="1" id="radio1" type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input checked name="consumer_presently_incarcerated" value="0" id="radio2"
                        type="radio">
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>


    </div>

    <div class="form-group clearfix">
        <a onclick="checkFieldSetPidegree()" href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
    </div>
</fieldset>
