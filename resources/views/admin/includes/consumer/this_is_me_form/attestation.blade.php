<fieldset class="wizard-fieldset   mt-4" id="fieldset_seventeen">
    <h5>17. Attestation</h5>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="how_you_heared_about_us" class="wizard-form-text-label">17.1 How did you hear about Us?  Please Select</label>
                <select class="form-control" required name="how_you_heared_about_us" id="how_you_heared_about_us" >
                    <option></option>
                    <option value="friends_family_word_of_mouth">Friends / Family Word of Mouth</option>
                    <option value="counselor_bank_professional_referral">Counselor / Bank Professional referral</option>
                    <option value="yahoo">Yahoo!</option>
                    <option value="google">Google</option>
                    <option value="bing">Bing</option>
                    <option value="youtube">YouTube</option>
                    <option value="website_banners">Website Banners</option>
                    <option value="advertisement_on_clothing">Advertisement on Clothing</option>
                    <option value="advertisement_received_at_home">Advertisement received at home</option>
                    <option value="advertisement_at_bank">Advertisement at bank</option>
                    <option value="advertisement_at_a_store">Advertisement at a store</option>
                    <option value="advertisement_at_a_health_care_place">Advertisement at a health care place</option>
                    <option value="advertisement_in_magazine">Advertisement in magazine</option>
                    <option value="newspaper_editorial">Newspaper Editorial</option>
                    <option value="radio">Radio</option>
                    <option value="television">Television</option>
                    <option value="email_ads">E-mail ads</option>
                    <option value="internet_blogs">Internet Blogs</option>
                    <option value="other">Other</option>

                </select>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <div class="form-check">
                    <input required type="checkbox" class="form-check-input" name="i_confirm_data_is_accurate" id="i_confirm_data_is_accurate">
                    <label class="form-check-label" for="i_confirm_data_is_accurate">17.2 I attest that all information provided is accurate and current.</label>
                   
                </div>
            </div>
        </div>
      

     

    </div>

  
    <div class="form-group clearfix">
        <a  href="javascript:;" onclick="previousStep('attestation_bar','travel_info_bar')" class="form-wizard-previous-btn float-left">Previous</a>
        <a  href="javascript:;" onclick="submitAttestation()" class="form-wizard-next-btn  float-right">Submit</a>
    </div>
</fieldset>
