<fieldset class="wizard-fieldset mt-4 @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_six') show @endif" id="fieldset_six">
    <h5>6. Employment inoformation</h5>
    <input type="hidden" name="form_section" value="employment_information" />

    <div class="row">
      



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$employment_info->employer_name ?? ''}}" name="employer_name" type="text" class="form-control wizard-required" id="employer_name" >
                <label for="weight" class="wizard-form-text-label">6.1 Employer's Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$employment_info->job_title ?? ''}}" name="job_title" type="text" class="form-control wizard-required" id="job_title" required>
                <label for="job_title" class="wizard-form-text-label">6.2 Job Title</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{$employment_info->employer_identification_number ?? ''}}" name="employer_identification_number" type="text" class="form-control wizard-required" id="employer_identification_number" 
                >
                <label for="employer_identification_number" class="wizard-form-text-label">6.3 Employer Identification Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        
        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="anual_salary_last_year" class="wizard-form-text-label">6.4 What was your annual income last year? </label>
                <select class="form-control" name="anual_salary_last_year" id="anual_salary_last_year" required>
                    <option></option>
                    <option @if(!empty($employment_info) && $employment_info->anual_salary_last_year == '0_30000') selected  @endif value="0_30000">0 - 30,000</option>
                    <option @if(!empty($employment_info) && $employment_info->anual_salary_last_year == '30000_50000') selected  @endif value="30000_50000">30,000 - 50,000</option>
                    <option @if(!empty($employment_info) && $employment_info->anual_salary_last_year == '50000_60000') selected @endif value="50000_60000">50,000 - 60,000</option>
                    <option @if(!empty($employment_info) && $employment_info->anual_salary_last_year == '60000_75000') selected @endif value="60000_75000">60,000 - 75,000</option>
                    <option @if(!empty($employment_info) && $employment_info->anual_salary_last_year == '75000_90000') selected @endif value="75000_90000">75,000 - 90,000</option>
                    <option @if(!empty($employment_info) && $employment_info->anual_salary_last_year == '90000_125000') selected @endif value="90000_125000">90,000 - 125,000</option>
                    <option @if(!empty($employment_info) && $employment_info->anual_salary_last_year == '125000_150000') selected @endif value="125000_150000">125,000 - 150,000</option>
                    <option @if(!empty($employment_info) && $employment_info->anual_salary_last_year == '150000_200000') selected @endif value="150000_200000">150,000 - 200,000</option>
                    <option @if(!empty($employment_info) && $employment_info->anual_salary_last_year == '200000_500000') selected @endif value="200000_500000">200,000 - 500,000</option>
                    <option @if(!empty($employment_info) && $employment_info->anual_salary_last_year == '500000_1000000') selected @endif value="500000_1000000">500,000 - 1,000,000</option>
                    <option @if(!empty($employment_info) && $employment_info->anual_salary_last_year == '1000000_plus') selected @endif value="1000000_plus">1,000,000+</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

    </div>

    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            6.5 Are you an active member of a Trade or Labor Union?
            <div class="wizard-form-radio">
                <input onclick="are_you_active_memeber_of_labour_union_check()" @if (!empty($employment_info) && $employment_info->are_you_active_memeber_of_labour_union == 1) checked @endif  name="are_you_active_memeber_of_labour_union"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="are_you_active_memeber_of_labour_union_check()" @if (empty($employment_info) || $employment_info->are_you_active_memeber_of_labour_union == 0) checked @endif name="are_you_active_memeber_of_labour_union"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>
    <div class="row" id="are_you_active_memeber_of_labour_union_div" @if (empty($employment_info) || $employment_info->are_you_active_memeber_of_labour_union == 0) style="display: none;" @endif>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input  value="{{$employment_info->labor_union_name ?? ''}}" name="labor_union_name" type="text" class="form-control wizard-required" id="labor_union_name" >
                <label for="labor_union_name" class="wizard-form-text-label">6.6 What is the name of Labor Union?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input  value="{{$employment_info->your_union_membership_number ?? ''}}" name="your_union_membership_number" type="text" class="form-control wizard-required" id="your_union_membership_number" >
                <label for="your_union_membership_number" class="wizard-form-text-label">6.7 What is your Union membership number?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
    </div>
    <div class="form-group clearfix">
        <a  href="javascript:;" onclick="returnLater('fieldset_six','consumer_this_is_me')" class="form-wizard-return-btn float-left mr-3">Pause & Return Later</a>

        {{-- <a href="javascript:;" onclick="previousStep('employment_bar','neighborhood_bar')" class="form-wizard-previous-btn float-left">Previous</a> --}}
        <a onclick="checkFieldSetEmploymentInformation()" href="javascript:;" id="employment_information_button" class="form-wizard-next-btn  float-right">Save & Continue</a>
    </div>
</fieldset>
