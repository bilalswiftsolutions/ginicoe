<fieldset class="wizard-fieldset mt-4" id="fieldset_three">
    <h5>3. Gender Identiy Information</h5>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <label for="city" class="wizard-form-text-label">3.1 Sex Assigned at Birth</label>
                <select class="form-control" name="sex_at_birth" id="sex_at_birth" required>
                    <option></option>
                    <option value="choose_not_to_disclose"></option>
                    <option value="female">Female</option>
                    <option value="intersex">Intersex</option>
                    <option value="male">Male</option>
                    <option value="not_recorded">Not Recorded on Birth</option>
                    <option value="uncertain">Uncertain</option>
                    <option value="unknown">Unknow</option>                
                </select>
                <p class="text_danger form_error"></p>

            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <label for="city" class="wizard-form-text-label">3.2 Legal Sex</label>
                <select class="form-control" name="sex_at_birth" id="legal_sex" required>
                    <option></option>
                    <option value="female">Female</option>        
                    <option value="male">Male</option>
                    <option value="non_binary">Non Binary</option>
                    <option value="unknown">Unknow</option>                
                </select>
                <p class="text_danger form_error"></p>

            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <label for="city" class="wizard-form-text-label">3.3 What Gender do you self-identify as today</label>
                <select class="form-control" name="self_identify_sex" id="self_identify_sex" required>
                    <option></option>
                    <option value="androgyn">Androgyn</option>
                    <option value="bisexual_as_female">Bi-Sexual Accept Me A Female</option>
                    <option value="bisexual_as_male">Bi-Sexual Accept Me A Male</option>
                    <option value="boi">Boi</option>
                    <option value="butch">Butch</option>
                    <option value="cisgender">Cisgender</option>
                    <option value="cross_dresser">Cross-Dresser</option>
                    <option value="female">Female</option>
                    <option value="gay_female">Gay Female</option>
                    <option value="gay_male">Gay Male</option>
                    <option value="gender_bender">Gender Bender</option>
                    <option value="gender_neutrality">Gender Neutrality</option>
                    <option value="gender_non_conforming">Gender Non-Conforming</option>
                    <option value="gender_queer">Gender Queer</option>
                    <option value="gender_variance">Gender Variance</option>
                    <option value="lesbian">Lesbian</option>
                    <option value="male">Male</option>
                    <option value="man">Man</option>
                    <option value="non_binary">Non-Binary</option>
                    <option value="other">Other</option>
                    <option value="post_genderism">Post Genderism</option>
                    <option value="something_else">Something Else</option>
                    <option value="trans_man">Trans Man</option>
                    <option value="trans_woman">Trans Woman</option>
                    <option value="transgender_female_to_male">Transgender Female/Male to Female</option>
                    <option value="transgender_male_to_female">Transgender Male/Female to Male</option>
                    <option value="transsexual">Transsexual</option>
                    <option value="woman">Woman</option>
                    
                </select>
                <p class="text_danger form_error"></p>

            </div>
        </div>
      

    </div>

    

    <div class="form-group clearfix">
        <a onclick="checkFieldSetGenderIdentityInformation()" href="javascript:;" class="form-wizard-next-btn  float-right">Next</a>
    </div>
</fieldset>
