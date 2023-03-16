<fieldset class="wizard-fieldset @if(empty($this_is_me_return_back_data) || $this_is_me_return_back_data->fieldset_id == 'fieldset_one') show @endif mt-4" id="fieldset_one">
    <h5>1. Personal Information</h5>
    <input type="hidden" name="form_section" value="my_pidegree_info" />
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="fname" value="{{$my_pidegree_info->fname ?? ''}}" type="text" class="form-control wizard-required" id="fname" @if(!empty($attestation_info) ) disabled @endif>
                <label for="fname" class="wizard-form-text-label">1.1 First Name</label>
                <p class="text_danger form_error"></p>

            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="middle_initial" value="{{$my_pidegree_info->middle_initial ?? ''}}" type="text" class="form-control wizard-required" id="middle_initial"  @if(!empty($attestation_info) ) disabled @endif>
                <label for="middle_initial" class="wizard-form-text-label">1.2 Middle Initial</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="lname" value="{{$my_pidegree_info->lname ?? ''}}" type="text" class="form-control wizard-required">
                <label for="lname" class="wizard-form-text-label">1.3 Last Name</label>
                <p class="text_danger form_error"></p>

            </div>
        </div>
      

    </div>

    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="suffix" value="{{$my_pidegree_info->suffix ?? ''}}"  value="" type="text" class="form-control wizard-required">
                <label for="suffix" class="wizard-form-text-label">1.4 Suffix</label>
                <p class="text_danger form_error"></p>

            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="nick_name"  value="{{$my_pidegree_info->nick_name ?? ''}}" type="text" class="form-control wizard-required"  @if(!empty($attestation_info) ) disabled @endif>
                <label for="nick_name" class="wizard-form-text-label">1.5 Nick Name</label>
                <p class="text_danger form_error"></p>

            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="date_of_birth" value="{{$my_pidegree_info->date_of_birth ?? ''}}" value="{{ date('Y-m-d') }}" type="date"
                    class="form-control wizard-required"  @if(!empty($attestation_info) ) disabled @endif>
                <label for="date_of_birth" class="wizard-form-text-label">1.6 Date of Birth</label>
                <p class="text_danger form_error"></p>

            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="social_security_no" value="{{$my_pidegree_info->social_security_no ?? ''}}" type="text" class="form-control wizard-required"
                    id="social_security_no"  @if(!empty($attestation_info) ) disabled @endif>
                <label for="" class="wizard-form-text-label">1.7 Social Security Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input id="verify_social_security_no" value="{{$my_pidegree_info->social_security_no ?? ''}}" name="verify_social_security_no" type="text"
                    class="form-control wizard-required" id="verify_social_security_no"  @if(!empty($attestation_info) ) disabled @endif>
                <label for="verify_social_security_no" class="wizard-form-text-label">1.8 Verify Social
                    Security Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
   
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                1.9 Do you use a credit privacy number or credit protection number or credit profile number
                (cpn)?
                <div class="wizard-form-radio">
                    <input @if(!empty($my_pidegree_info->cpn_no)) checked @endif onclick="check_cpn_usage()" name="cpn_usage" value="1" id="radio1" type="radio"  @if(!empty($attestation_info) ) disabled @endif>
                    <label for="radio1" >Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input  @if(empty($my_pidegree_info->cpn_no)) checked  @endif onclick="check_cpn_usage()"  name="cpn_usage" value="0" id="radio2"
                        type="radio"  @if(!empty($attestation_info) ) disabled @endif>
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4 col-lg-4" @if(empty($my_pidegree_info) || empty($my_pidegree_info->cpn_no)) style="display: none;" @endif id="cpn_no_div" >
            <div class="form-group">
                <input name="cpn_no" value="{{$my_pidegree_info->cpn_no ?? ''}}" type="text" class="form-control wizard-required" id="cpn_no"  @if(!empty($attestation_info) ) disabled @endif>
                <label for="cpn_no" class="wizard-form-text-label">1.10 Credit privacy number (cpn)
                </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
               1.11 Are you US Vetran?
                <div class="wizard-form-radio">
                    <input @if(!empty($my_pidegree_info->us_vetran) && $my_pidegree_info->us_vetran == 1) checked @endif name="us_vetran" value="1" id="radio1" type="radio"  @if(!empty($attestation_info) ) disabled @endif>
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input @if(empty($my_pidegree_info->us_vetran) || $my_pidegree_info->us_vetran == 0) checked @endif  name="us_vetran" value="0" id="radio2" type="radio"  @if(!empty($attestation_info) ) disabled @endif>
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
               1.12 Is the consumer presently incarcerated? Y/N
                <div class="wizard-form-radio">
                    <input @if(!empty($my_pidegree_info->us_vetran) && $my_pidegree_info->consumer_presently_incarcerated == 1) checked @endif name="consumer_presently_incarcerated" value="1" id="radio1" type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input @if(empty($my_pidegree_info->us_vetran) || $my_pidegree_info->consumer_presently_incarcerated == 0) checked @endif name="consumer_presently_incarcerated" value="0" id="radio2"
                        type="radio">
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>


    </div>

    <div class="form-group clearfix">


        <a onclick="checkFieldSetPidegree()" id="my_pidegree_info_button" href="javascript:;" class="form-wizard-next-btn-without-click  float-right">Save & Continue</a>
   
    
    </div>
</fieldset>
