<fieldset class="wizard-fieldset mt-4 @if (!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_seventeen') show @endif" id="fieldset_seventeen">
    <h5>17. Attestation</h5>
    <input type="hidden" name="form_section" value="attestation_information" />

    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="how_you_heared_about_us" class="wizard-form-text-label">17.1 How did you hear about Us? Please
                    Select</label>
                <select class="form-control" required name="how_you_heared_about_us" id="how_you_heared_about_us">
                    <option></option>
                    <option value="friends_family_word_of_mouth" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'friends_family_word_of_mouth') selected @endif>
                        Friends / Family Word of Mouth</option>
                    <option value="counselor_bank_professional_referral"
                        @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'counselor_bank_professional_referral') selected @endif>Counselor / Bank Professional referral
                    </option>
                    <option value="yahoo" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'yahoo') selected @endif>Yahoo!</option>
                    <option value="google" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'google') selected @endif>Google</option>
                    <option value="bing" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'bing') selected @endif>Bing</option>
                    <option value="youtube" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'youtube') selected @endif>YouTube</option>
                    <option value="website_banners" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'website_banners') selected @endif>Website Banners
                    </option>
                    <option value="advertisement_on_clothing" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'advertisement_on_clothing') selected @endif>
                        Advertisement on Clothing</option>
                    <option value="advertisement_received_at_home" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'advertisement_received_at_home') selected @endif>
                        Advertisement received at home</option>
                    <option value="advertisement_at_bank" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'advertisement_at_bank') selected @endif>
                        Advertisement at bank</option>
                    <option value="advertisement_at_a_store" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'advertisement_at_a_store') selected @endif>
                        Advertisement at a store</option>
                    <option value="advertisement_at_a_health_care_place"
                        @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'advertisement_at_a_health_care_place') selected @endif>Advertisement at a health care place
                    </option>
                    <option value="advertisement_in_magazine" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'advertisement_in_magazine') selected @endif>
                        Advertisement in magazine</option>
                    <option value="newspaper_editorial" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'newspaper_editorial') selected @endif>Newspaper
                        Editorial</option>
                    <option value="radio" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'radio') selected @endif>Radio</option>
                    <option value="television" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'television') selected @endif>Television</option>
                    <option value="email_ads" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'email_ads') selected @endif>E-mail ads</option>
                    <option value="internet_blogs" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'internet_blogs') selected @endif>Internet Blogs
                    </option>
                    <option value="other" @if (!empty($attestation_info) && $attestation_info->how_you_heared_about_us === 'other') selected @endif>Other</option>

                </select>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <div class="form-check">
                    <input @if (!empty($attestation_info) && $attestation_info->i_confirm_data_is_accurate == 1) checked @endif required type="checkbox"
                        class="form-check-input" name="i_confirm_data_is_accurate" id="i_confirm_data_is_accurate">
                    <label class="form-check-label" for="i_confirm_data_is_accurate">17.2 I attest that all information
                        provided is accurate and current.</label>

                </div>
            </div>
        </div>




    </div>

    <hr>
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="container mt-4">
                <h2 class="mb-4">As a certified Ginicoe Trekker, you must have:</h2>
                <ul>
                    <li>Excellent data management skills to accurately enter data and verify discrepancies to help build
                        comprehensive records.</li>
                    <li>Take every possible legal and ethical step to collect and report data about the non-respondent
                        consumer(s).</li>
                    <li>Returning to the housing unit multiple times and similar steps.</li>
                    <li>Hours are 9am – 9pm local time.</li>
                </ul>
                <h5 class="mb-3 mt-4">You should pay particular attention to:</h5>
                <ul>
                    <li>Low-income consumers.</li>
                    <li>People who rent.</li>
                    <li>People who don’t have homes.</li>
                    <li>People who live in rural areas.</li>
                    <li>People who don’t speak or read English.</li>
                </ul>
                <p>You will take an Oath to protect the data.</p>
                <p>You must pass an independent background check.</p>
                <p>Once you are approved, you will be issued an ID Badge complete with your:</p>
                <ul>
                    <li>Name</li>
                    <li>Photograph</li>
                    <li>Ginicoe Logo</li>
                    <li>Watermark</li>
                </ul>
                <p>Rewards for volunteers are recognition, house, cash, and intangible perks.</p>
                <p>To learn more, download the app from the Google Play Store or Apple Store.</p>
                <p>Trekker needs to be verified before your start date. e.g. organization, school, researcher, etc.</p>
                <p>You will take an Oath to protect the data.
                    "I will not disclose any personally identifiable information (PII) contained in the mobile app, race
                    mapping, or other data obtained for or prepared by the Ginicoe Corporation or it's agents to any
                    person or persons either during or after my volunteer service."
                </p>
                <p>You are no longer accepting the things you cannot change. You are changing the things you cannot
                    accept.</p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <div class="form-check">
                    <input @if (!empty($attestation_info) && $attestation_info->volunteer_trekker == 1) checked @endif type="checkbox" class="form-check-input"
                        name="volunteer_trekker" id="volunteer_trekker">
                    <label class="form-check-label" for="volunteer_trekker">I voluntarly wish to join the Social Justice
                        Warrior Team
                    </label>

                </div>
            </div>

                    <div class="form-group">
                        <blockquote class="blockquote">
                            <p class="mb-0">“I am sure that most [builders] are as much against discrimination as I
                                am, but I think they are either bound by custom or fear of financial loss.”</p>
                            <footer class="blockquote-footer">Joseph Eichler <cite title="Source Title">July 1, 1958
                                    resigning from The National Association of Home Builders</cite></footer>
                        </blockquote>
                    </div>
            

        </div>

    </div>
    <div class="form-group clearfix">
        <a href="javascript:;" onclick="returnLater('fieldset_seventeen','consumer_this_is_me')"
            class="form-wizard-return-btn float-left mr-3">Pause & Return Later</a>

        <a href="javascript:;" onclick="submitAttestation()" id="attestation_information_button"
            class="form-wizard-next-btn  float-right">Submit</a>
        <a href="javascript:;" onclick="review_form()" class="form-wizard-review-btn float-right mr-2">Review</a>

    </div>

    <div class="form-group " id="all_form_submit" style="display:none;">

        <a href="javascript:;" onclick="submit_full_form()" class="form-wizard-review-btn  float-right"
            style="background-color: green;color:white">Submit</a>

    </div>
</fieldset>
