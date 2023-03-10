<fieldset class="wizard-fieldset mt-4 @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_seventeen') show @endif" id="fieldset_seventeen">
    <h5>17. Attestation</h5>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="how_you_heared_about_us" class="wizard-form-text-label">17.1 How did you hear about Us?  Please Select</label>
                <select class="form-control" required name="how_you_heared_about_us" id="how_you_heared_about_us" >
                    <option></option>
                    <option value="friends_family_word_of_mouth" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'friends_family_word_of_mouth') selected @endif>Friends / Family Word of Mouth</option>
                    <option value="counselor_bank_professional_referral" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'counselor_bank_professional_referral') selected @endif>Counselor / Bank Professional referral</option>
                    <option value="yahoo" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'yahoo') selected @endif>Yahoo!</option>
                    <option value="google" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'google') selected @endif>Google</option>
                    <option value="bing" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'bing') selected @endif>Bing</option>
                    <option value="youtube" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'youtube') selected @endif>YouTube</option>
                    <option value="website_banners" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'website_banners') selected @endif>Website Banners</option>
                    <option value="advertisement_on_clothing" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'advertisement_on_clothing') selected @endif>Advertisement on Clothing</option>
                    <option value="advertisement_received_at_home" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'advertisement_received_at_home') selected @endif>Advertisement received at home</option>
                    <option value="advertisement_at_bank" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'advertisement_at_bank') selected @endif>Advertisement at bank</option>
                    <option value="advertisement_at_a_store" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'advertisement_at_a_store') selected @endif>Advertisement at a store</option>
                    <option value="advertisement_at_a_health_care_place" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'advertisement_at_a_health_care_place') selected @endif>Advertisement at a health care place</option>
                    <option value="advertisement_in_magazine" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'advertisement_in_magazine') selected @endif>Advertisement in magazine</option>
                    <option value="newspaper_editorial" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'newspaper_editorial') selected @endif>Newspaper Editorial</option>
                    <option value="radio" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'radio') selected @endif>Radio</option>
                    <option value="television" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'television') selected @endif>Television</option>
                    <option value="email_ads" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'email_ads') selected @endif>E-mail ads</option>
                    <option value="internet_blogs" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'internet_blogs') selected @endif>Internet Blogs</option>
                    <option value="other" @if(!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'other') selected @endif>Other</option>

                </select>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <div class="form-check">
                    <input @if(!empty($attestation_info) && $attestation_info->i_confirm_data_is_accurate == 1) checked @endif required type="checkbox" class="form-check-input" name="i_confirm_data_is_accurate" id="i_confirm_data_is_accurate">
                    <label class="form-check-label" for="i_confirm_data_is_accurate">17.2 I attest that all information provided is accurate and current.</label>
                   
                </div>
            </div>
        </div>
      

     

    </div>

  
    <div class="form-group clearfix">
        <a  href="javascript:;" onclick="returnLater('fieldset_seventeen','consumer_this_is_me')" class="form-wizard-return-btn float-left mr-3">Return Later</a>
        
        <a  href="javascript:;" onclick="previousStep('attestation_bar','travel_info_bar')" class="form-wizard-previous-btn float-left">Previous</a>
        <a  href="javascript:;" onclick="submitAttestation()" id="attestation_information_button" class="form-wizard-next-btn  float-right">Submit</a>
    </div>
</fieldset>
