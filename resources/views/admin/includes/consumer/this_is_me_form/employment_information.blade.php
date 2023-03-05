<fieldset class="wizard-fieldset mt-4" id="fieldset_six">
    <h5>5. Employment inoformation</h5>
    <div class="row">
      



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="employer_name" type="text" class="form-control wizard-required" id="employer_name" required>
                <label for="weight" class="wizard-form-text-label">6.1 Employer's Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="job_title" type="text" class="form-control wizard-required" id="job_title" required>
                <label for="job_title" class="wizard-form-text-label">6.2 Job Title</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="employer_identification_number" type="text" class="form-control wizard-required" id="employer_identification_number" required>
                <label for="employer_identification_number" class="wizard-form-text-label">6.3 Employer Identification Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        
        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="anual_salary_last_year" class="wizard-form-text-label">6.4 What was your annual income last year? </label>
                <select class="form-control" name="anual_salary_last_year" id="anual_salary_last_year" required>
                    <option></option>
                    <option value="0_30000">0 - 30,000</option>
                    <option value="30000_50000">30,000 - 50,000</option>
                    <option value="50000_60000">50,000 - 60,000</option>
                    <option value="60000_75000">60,000 - 75,000</option>
                    <option value="75000_90000">75,000 - 90,000</option>
                    <option value="90000_125000">90,000 - 125,000</option>
                    <option value="125000_150000">125,000 - 150,000</option>
                    <option value="150000_200000">150,000 - 200,000</option>
                    <option value="200000_500000">200,000 - 500,000</option>
                    <option value="500000_1000000">500,000 - 1,000,000</option>
                    <option value="1000000_plus">1,000,000+</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

    </div>

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            6.5 Are you an active member of a Trade or Labor Union?
            <div class="wizard-form-radio">
                <input onclick="are_you_active_memeber_of_labour_union_check()"  name="are_you_active_memeber_of_labour_union"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="are_you_active_memeber_of_labour_union_check()" checked name="are_you_active_memeber_of_labour_union"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>
    <div class="row" id="are_you_active_memeber_of_labour_union_div" style="display: none;">

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="labor_union_name" type="text" class="form-control wizard-required" id="labor_union_name" >
                <label for="labor_union_name" class="wizard-form-text-label">6.6 What is the name of Labor Union?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="your_union_membership_number" type="text" class="form-control wizard-required" id="your_union_membership_number" >
                <label for="your_union_membership_number" class="wizard-form-text-label">6.7 What is your Union membership number?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
    </div>
    <div class="form-group clearfix">
        <a href="javascript:;" onclick="previousStep('employment_bar','neighborhood_bar')" class="form-wizard-previous-btn float-left">Previous</a>
        <a onclick="checkFieldSetEmploymentInformation()" href="javascript:;" class="form-wizard-next-btn  float-right">Next</a>
    </div>
</fieldset>
