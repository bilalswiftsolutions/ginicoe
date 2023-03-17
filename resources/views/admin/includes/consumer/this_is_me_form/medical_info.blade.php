<fieldset class="wizard-fieldset mt-4 @if (!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_fourteen') show @endif" id="fieldset_fourteen">
    <h5>14. Medical Info</h5>
    <input type="hidden" name="form_section" value="medical_information" />

    <div class="row">

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $medical_info->medical_house_address ?? '' }}" name="medical_house_address" type="text"
                    class="form-control wizard-required" id="medical_house_address">
                <label for="medical_house_address" class="wizard-form-text-label">14.1 House Address</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $medical_info->medical_street ?? '' }}" name="medical_street" type="text"
                    class="form-control wizard-required" id="medical_street">
                <label for="medical_street" class="wizard-form-text-label">14.2 Street</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $medical_info->medical_country ?? '' }}" name="medical_country" type="text"
                    class="form-control wizard-required" id="medical_country">
                <label for="medical_country" class="wizard-form-text-label">14.3 Country</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>



        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="medical_state" class="wizard-form-text-label">14.5 State</label>
                <select class="form-control" name="medical_state" id="medical_state">
                    <option></option>
                    <option value="{{ $medical_info->medical_state ?? '' }}" selected>
                        {{ $medical_info->medical_state ?? '' }}</option>
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

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <label for="medical_city" class="wizard-form-text-label">14.6 City</label>
                <select class="form-control" name="medical_city" id="medical_city">
                    <option value="{{ $medical_info->medical_city ?? '' }}" selected>
                        {{ $medical_info->medical_city ?? '' }}</option>
                </select>
                <p class="text_danger form_error"></p>

            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $medical_info->medical_zipcode ?? '' }}" name="medical_zipcode" type="text"
                    class="form-control wizard-required" id="medical_zipcode">
                <label for="medical_zipcode" class="wizard-form-text-label">14.7 Zip code</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $medical_info->medical_guid ?? '' }}" name="medical_guid" type="text"
                    class="form-control wizard-required" id="medical_guid">
                <label for="medical_guid" class="wizard-form-text-label">14.8 GUID</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                14.9 Do you want Law Enforcement to know that you are disabled?
                <div class="wizard-form-radio">
                    <input name="want_to_know_law_inforcement" @if (!empty($medical_info) && $medical_info->want_to_know_law_inforcement == 1) checked @endif
                        value="1" id="radio1" type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input @if (empty($medical_info) || $medical_info->want_to_know_law_inforcement == 0) checked @endif name="want_to_know_law_inforcement"
                        value="0" id="radio2" type="radio">
                    <label for="radio2">Not Applicable</label>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                14.10 Do you have any hidden or old medical ailments that would distinguish you from a bad actor trying
                to steal your identity?
                <div class="wizard-form-radio">
                    <input onclick="check_do_you_have_hidden_ailment()"
                        @if (!empty($medical_info) && $medical_info->do_you_have_hidden_ailment == 1) checked @endif name="do_you_have_hidden_ailment"
                        value="1" id="radio1" type="radio">
                    <label for="radio1">Yes</label>
                </div>
                <div class="wizard-form-radio">
                    <input onclick="check_do_you_have_hidden_ailment()"
                        @if (empty($medical_info) || $medical_info->do_you_have_hidden_ailment == 0) checked @endif name="do_you_have_hidden_ailment"
                        value="0" id="radio2" type="radio">
                    <label for="radio2">No</label>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-12">
            <div class="form-group">
                14.11 Describe your disability (Select All that apply)
            </div>
            <div class="form-group">
                <i>If yes, then please select all that applies regarding hidden or old or current physical or mental
                    conditions.</i>
            </div>
        </div>
        <div class="row" id="disablility_section" @if (empty($medical_info) || $medical_info->do_you_have_hidden_ailment == 0) style="display:none;" @endif >

            <div class="col-md-4 col-lg-4">
                <div class="col-md-12 col-lg-12 pb-4">
                    <label for="" class="wizard-form-text-label">14a. Anxiety Disorders </label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->agoraphobia == '1') checked @endif
                                    class="form-check-input" name="agoraphobia" id="agoraphobia"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="agoraphobia">Agoraphobia </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->generalized_anxiety_disorder_gad == '1') checked @endif
                                    class="form-check-input" id="generalized_anxiety_disorder_gad"
                                    name="generalized_anxiety_disorder_gad"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="generalized_anxiety_disorder_gad">GENERALIZED
                                    ANXIETY DISORDER (GAD)</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->panic_disorder == '1') checked @endif
                                    class="form-check-input" id="panic_disorder" name="panic_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="panic_disorder">PANIC DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->separation_anxiety_disorder == '1') checked @endif
                                    class="form-check-input" id="separation_anxiety_disorder"
                                    name="separation_anxiety_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="separation_anxiety_disorder">SEPARATION ANXIETY
                                    DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->social_anxiety_disorder == '1') checked @endif
                                    class="form-check-input" id="social_anxiety_disorder"
                                    name="social_anxiety_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="social_anxiety_disorder">SOCIAL ANXIETY
                                    DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->specific_phobias == '1') checked @endif
                                    class="form-check-input" id="specific_phobias" name="specific_phobias"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="specific_phobias">SPECIFIC PHOBIAS</label>
                            </div>

                            <p class="text_danger form_error"></p>
                        </div>
                    </div>


                </div>



            </div>


            <div class="col-md-4 col-lg-4">
                <div class="col-md-12 col-lg-12 pb-4">
                    <label for="" class="wizard-form-text-label">14h. Bipolar and Related Disorders </label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->depressive_episodes == '1') checked @endif
                                    class="form-check-input" id="depressive_episodes" name="depressive_episodes"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="depressive_episodes">DEPRESSIVE EPISODES</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->mania == '1') checked @endif
                                    class="form-check-input" id="mania" name="mania"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="mania">MANIA</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->breathing_related_sleep_disorders == '1') checked @endif
                                    class="form-check-input" id="breathing_related_sleep_disorders"
                                    name="breathing_related_sleep_disorders"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label"
                                    for="breathing_related_sleep_disorders">BREATHING-RELATED SLEEP DISORDERS</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->hypersomnolence == '1') checked @endif
                                    class="form-check-input" id="hypersomnolence" name="hypersomnolence"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="hypersomnolence">HYPERSOMNOLENCE</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->insomnia_disorder == '1') checked @endif
                                    class="form-check-input" id="insomnia_disorder" name="insomnia_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="insomnia_disorder">INSOMNIA DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->narcolepsy == '1') checked @endif
                                    class="form-check-input" id="narcolepsy" name="narcolepsy"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="narcolepsy">NARCOLEPSY</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->parasomnias == '1') checked @endif
                                    class="form-check-input" id="parasomnias" name="parasomnias"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="parasomnias">PARASOMNIAS</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->restless_legs_syndrome == '1') checked @endif
                                    class="form-check-input" id="restless_legs_syndrome"
                                    name="restless_legs_syndrome"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="restless_legs_syndrome">RESTLESS LEGS
                                    SYNDROME</label>
                            </div>


                            <p class="text_danger form_error"></p>
                        </div>
                    </div>


                </div>



            </div>


            <div class="col-md-4 col-lg-4">
                <div class="col-md-12 col-lg-12 pb-4">
                    <label for="" class="wizard-form-text-label">14q. Depressive Disorders </label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->disruptive_mood_dysregulation_disorder == '1') checked @endif
                                    class="form-check-input" id="disruptive_mood_dysregulation_disorder"
                                    name="disruptive_mood_dysregulation_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label"
                                    for="disruptive_mood_dysregulation_disorder">DISRUPTIVE MOOD DYSREGULATION
                                    DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->major_depressive_disorder == '1') checked @endif
                                    class="form-check-input" id="major_depressive_disorder"
                                    name="major_depressive_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="major_depressive_disorder">MAJOR DEPRESSIVE
                                    DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->persistent_depressive_disorder == '1') checked @endif
                                    class="form-check-input" id="persistent_depressive_disorder"
                                    name="persistent_depressive_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="persistent_depressive_disorder">PERSISTENT
                                    DEPRESSIVE DISORDER (DYSTHYMIA)</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->other_or_unspecified_depressive_disorder == '1') checked @endif
                                    class="form-check-input" id="other_or_unspecified_depressive_disorder"
                                    name="other_or_unspecified_depressive_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="other_or_unspecified_depressive_disorder">OTHER
                                    OR UNSPECIFIED DEPRESSIVE DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->premenstrual_dysphoric_disorder == '1') checked @endif
                                    class="form-check-input" id="premenstrual_dysphoric_disorder"
                                    name="premenstrual_dysphoric_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="premenstrual_dysphoric_disorder">PREMENSTRUAL
                                    DYSPHORIC DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->medication_depressive_disorder == '1') checked @endif
                                    class="form-check-input" id="medication_depressive_disorder"
                                    name="medication_depressive_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="medication_depressive_disorder">MEDICATION
                                    DEPRESSIVE DISORDER</label>
                            </div>




                            <p class="text_danger form_error"></p>
                        </div>
                    </div>


                </div>



            </div>


            <div class="col-md-4 col-lg-4">
                <div class="col-md-12 col-lg-12 pb-4">
                    <label for="" class="wizard-form-text-label">14x. Disruptive Disorders </label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">


                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->conduct_disorder == '1') checked @endif
                                    class="form-check-input" id="conduct_disorder" name="conduct_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="conduct_disorder">CONDUCT DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->intermittent_explosive_disorder == '1') checked @endif
                                    class="form-check-input" id="intermittent_explosive_disorder"
                                    name="intermittent_explosive_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="intermittent_explosive_disorder">INTERMITTENT
                                    EXPLOSIVE DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->kleptomania == '1') checked @endif
                                    class="form-check-input" id="kleptomania" name="kleptomania"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="kleptomania">KLEPTOMANIA</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->oppositional_defiant_disorder == '1') checked @endif
                                    class="form-check-input" id="oppositional_defiant_disorder"
                                    name="oppositional_defiant_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="oppositional_defiant_disorder">OPPOSITIONAL
                                    DEFIANT DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->pyromania == '1') checked @endif
                                    class="form-check-input" id="pyromania" name="pyromania"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="pyromania">PYROMANIA</label>
                            </div>



                            <p class="text_danger form_error"></p>
                        </div>
                    </div>


                </div>



            </div>

            <div class="col-md-4 col-lg-4">
                <div class="col-md-12 col-lg-12 pb-4">
                    <label for="" class="wizard-form-text-label">14dd. Dissociative Disorders </label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->dissociative_amnesia == '1') checked @endif
                                    class="form-check-input" id="dissociative_amnesia" name="dissociative_amnesia"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="dissociative_amnesia">DISSOCIATIVE
                                    AMNESIA</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->dissociative_identity_disorder == '1') checked @endif
                                    class="form-check-input" id="dissociative_identity_disorder"
                                    name="dissociative_identity_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="dissociative_identity_disorder">DISSOCIATIVE
                                    IDENTITY DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->derealization_disorder == '1') checked @endif
                                    class="form-check-input" id="derealization_disorder"
                                    name="derealization_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="derealization_disorder">DEREALIZATION
                                    DISORDER</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-lg-4">
                <div class="col-md-12 col-lg-12 pb-4">
                    <label for="" class="wizard-form-text-label">14hh. Eating Disorders </label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->anorexia_nervosa == '1') checked @endif
                                    class="form-check-input" id="anorexia_nervosa" name="anorexia_nervosa"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="anorexia_nervosa">ANOREXIA NERVOSA</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->binge_eating_disorder == '1') checked @endif
                                    class="form-check-input" id="binge_eating_disorder" name="binge_eating_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="binge_eating_disorder">BINGE-EATING
                                    DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->bulimia_nervosa == '1') checked @endif
                                    class="form-check-input" id="bulimia_nervosa" name="bulimia_nervosa"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="bulimia_nervosa">BULIMIA NERVOSA</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->pica == '1') checked @endif
                                    class="form-check-input" id="pica" name="pica">
                                <label class="form-check-label" for="pica">PICA</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->rumination_disorder == '1') checked @endif
                                    class="form-check-input" id="rumination_disorder" name="rumination_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="rumination_disorder">RUMINATION DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->sleep_disorders == '1') checked @endif
                                    class="form-check-input" id="sleep_disorders" name="sleep_disorders"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="sleep_disorders">SLEEP DISORDERS</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-lg-4">
                <div class="col-md-12 col-lg-12 pb-4">
                    <label for="" class="wizard-form-text-label">14oo. Neurocognitive Disorders </label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->delirium == '1') checked @endif
                                    class="form-check-input" id="delirium" name="delirium"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="delirium">DELIRIUM</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->neurocognitive_disorders == '1') checked @endif
                                    class="form-check-input" id="neurocognitive_disorders"
                                    name="neurocognitive_disorders"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="neurocognitive_disorders">NEUROCOGNITIVE
                                    DISORDERS</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-lg-4">
                <div class="col-md-12 col-lg-12 pb-4">
                    <label for="" class="wizard-form-text-label">14rr. Neurodevelopmental Disorders</label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->adhd == '1') checked @endif
                                    class="form-check-input" id="adhd" name="adhd"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="adhd">ATTENTION-DEFICIT HYPERACTIVITY
                                    DISORDER (ADHD)</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->autism_spectrum_disorder == '1') checked @endif
                                    class="form-check-input" id="autism_spectrum_disorder"
                                    name="autism_spectrum_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="autism_spectrum_disorder">AUTISM SPECTRUM
                                    DISORDER</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->communication_disorders == '1') checked @endif
                                    class="form-check-input" id="communication_disorders"
                                    name="communication_disorders"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="communication_disorders">COMMUNICATION
                                    DISORDERS</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->global_developmental_delay == '1') checked @endif
                                    class="form-check-input" id="global_developmental_delay"
                                    name="global_developmental_delay"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="global_developmental_delay">GLOBAL DEVELOPMENTAL
                                    DELAY</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->intellectual_disability == '1') checked @endif
                                    class="form-check-input" id="intellectual_disability"
                                    name="intellectual_disability"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="intellectual_disability">INTELLECTUAL
                                    DISABILITY</label>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-lg-4">
                <div class="col-md-12 col-lg-12 pb-4">
                    <label for="" class="wizard-form-text-label">14xx. Obsessive-Compulsive Disorders</label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->obsessive_compulsive_disorder == '1') checked @endif
                                    class="form-check-input" id="obsessive_compulsive_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label"
                                    for="obsessive_compulsive_disorder">OBSESSIVE-COMPULSIVE DISORDER (OCD)</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->body_dysmorphic_disorder == '1') checked @endif
                                    class="form-check-input" id="body_dysmorphic_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="body_dysmorphic_disorder">BODY-DYSMORPHIC
                                    DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->hoarding_disorder == '1') checked @endif
                                    class="form-check-input" id="hoarding_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="hoarding_disorder">HOARDING DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->trichotillomania == '1') checked @endif
                                    class="form-check-input" id="trichotillomania"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="trichotillomania">TRICHOTILLOMANIA (HAIR-PULLING
                                    DISORDER)</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->excoriation_disorder == '1') checked @endif
                                    class="form-check-input" id="excoriation_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="excoriation_disorder">EXCORIATION DISORDER (SKIN
                                    PICKING)</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->ocd_medical_condition == '1') checked @endif
                                    class="form-check-input" id="ocd_medical_condition"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="ocd_medical_condition">OBSESSIVE-COMPULSIVE AND
                                    RELATED DISORDER DUE TO ANOTHER MEDICAL CONDITION</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-lg-4">
                <div class="col-md-12 col-lg-12 pb-4">
                    <label for="" class="wizard-form-text-label">14fff. Personality Disorders</label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->antisocial_personality_disorder == '1') checked @endif
                                    class="form-check-input" id="antisocial_personality_disorder"
                                    name="antisocial_personality_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="antisocial_personality_disorder">ANTISOCIAL
                                    PERSONALITY DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->avoidant_personality_disorder == '1') checked @endif
                                    class="form-check-input" id="avoidant_personality_disorder"
                                    name="avoidant_personality_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="avoidant_personality_disorder">AVOIDANT
                                    PERSONALITY DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->borderline_personality_disorder == '1') checked @endif
                                    class="form-check-input" id="borderline_personality_disorder"
                                    name="borderline_personality_disorder" @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="borderline_personality_disorder">BORDERLINE
                                    PERSONALITY DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->dependent_personality_disorder == '1') checked @endif
                                    class="form-check-input" id="dependent_personality_disorder"
                                    name="dependent_personality_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="dependent_personality_disorder">DEPENDENT
                                    PERSONALITY DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->histrionic_personality_disorder == '1') checked @endif
                                    class="form-check-input" id="histrionic_personality_disorder"
                                    name="histrionic_personality_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="histrionic_personality_disorder">HISTRIONIC
                                    PERSONALITY DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->narcissistic_personality_disorder == '1') checked @endif
                                    class="form-check-input" id="narcissistic_personality_disorder"
                                    name="narcissistic_personality_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="narcissistic_personality_disorder">NARCISSISTIC
                                    PERSONALITY DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->obsessive_compulsive_personality_disorder == '1') checked @endif
                                    class="form-check-input" id="obsessive_compulsive_personality_disorder"
                                    name="obsessive_compulsive_personality_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label"
                                    for="obsessive_compulsive_personality_disorder">OBSESSIVE-COMPULSIVE PERSONALITY
                                    DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->paranoid_personality_disorder == '1') checked @endif
                                    class="form-check-input" id="paranoid_personality_disorder"
                                    name="paranoid_personality_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="paranoid_personality_disorder">PARANOID
                                    PERSONALITY DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->schizoid_personality_disorder == '1') checked @endif
                                    class="form-check-input" id="schizoid_personality_disorder"
                                    name="schizoid_personality_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="schizoid_personality_disorder">SCHIZOID
                                    PERSONALITY DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->schizotypal_personality_disorder == '1') checked @endif
                                    class="form-check-input" id="schizotypal_personality_disorder"
                                    name="schizotypal_personality_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="schizotypal_personality_disorder">SCHIZOTYPAL
                                    PERSONALITY DISORDER</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-lg-4">
                <div class="col-md-12 col-lg-12 pb-4">
                    <label for="" class="wizard-form-text-label">14qqqq. Schizophrenia </label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->delusions == '1') checked @endif
                                    name="delusions" class="form-check-input" id="delusions"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="delusions">DELUSIONS</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->hallucinations == '1') checked @endif
                                    name="hallucinations" class="form-check-input" id="hallucinations"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="hallucinations">HALLUCINATIONS</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->disorganized_speech == '1') checked @endif
                                    name="disorganized_speech" class="form-check-input" id="disorganized_speech"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="disorganized_speech">DISORGANIZED SPEECH</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->disorganized_behavior == '1') checked @endif
                                    name="disorganized_behavior" class="form-check-input" id="disorganized_behavior"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="disorganized_behavior">GROSSLY DISORGANIZED OR
                                    CATATONIC BEHAVIOR</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->negative_symptoms == '1') checked @endif
                                    name="negative_symptoms" class="form-check-input" id="negative_symptoms"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="negative_symptoms">NEGATIVE SYMPTOMS</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-lg-4">
                <div class="col-md-12 col-lg-12 pb-4">
                    <label for="" class="wizard-form-text-label">14wwww. Somatic Symptom Disorders</label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->conversion_disorder == '1') checked @endif
                                    class="form-check-input" id="conversion_disorder" name="conversion_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="conversion_disorder">CONVERSION DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->factitious_disorder == '1') checked @endif
                                    class="form-check-input" id="factitious_disorder" name="factitious_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="factitious_disorder">FACTITIOUS DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->illness_anxiety_disorder == '1') checked @endif
                                    class="form-check-input" id="illness_anxiety_disorder"
                                    name="illness_anxiety_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="illness_anxiety_disorder">ILLNESS ANXIETY
                                    DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->somatic_symptom_disorder == '1') checked @endif
                                    class="form-check-input" id="somatic_symptom_disorder"
                                    name="somatic_symptom_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="somatic_symptom_disorder">SOMATIC SYMPTOM
                                    DISORDER</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-4 col-lg-4">
                <div class="col-md-12 col-lg-12 pb-4">
                    <label for="" class="wizard-form-text-label">14bbbb. Stress-Related Disorders </label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->acute_stress_disorder == '1') checked @endif
                                    class="form-check-input" id="acute_stress_disorder" name="acute_stress_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="acute_stress_disorder">ACUTE STRESS
                                    DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->adjustment_disorders == '1') checked @endif
                                    class="form-check-input" id="adjustment_disorders" name="adjustment_disorders"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="adjustment_disorders">ADJUSTMENT
                                    DISORDERS</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->post_traumatic_stress_disorder == '1') checked @endif
                                    class="form-check-input" id="post_traumatic_stress_disorder"
                                    name="post_traumatic_stress_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="post_traumatic_stress_disorder">POST-TRAUMATIC
                                    STRESS DISORDER (PTSD)</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->reactive_attachment_disorder == '1') checked @endif
                                    class="form-check-input" id="reactive_attachment_disorder"
                                    name="reactive_attachment_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="reactive_attachment_disorder">REACTIVE ATTACHMENT
                                    DISORDER</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-lg-4">
                <div class="col-md-12 col-lg-12 pb-4">
                    <label for="" class="wizard-form-text-label">14gggg. Substance-Related Disorders</label>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->alcohol_related_disorders == '1') checked @endif
                                    class="form-check-input" id="alcohol_related_disorders"
                                    name="alcohol_related_disorders"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="alcohol_related_disorders">ALCOHOL-RELATED
                                    DISORDERS</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->inhalant_use_disorders == '1') checked @endif
                                    class="form-check-input" id="inhalant_use_disorders"
                                    name="inhalant_use_disorders"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="inhalant_use_disorders">INHALANT-USE
                                    DISORDERS</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->stimulant_use_disorder == '1') checked @endif
                                    class="form-check-input" id="stimulant_use_disorder"
                                    name="stimulant_use_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="stimulant_use_disorder">STIMULANT USE
                                    DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->tobacco_use_disorder == '1') checked @endif
                                    class="form-check-input" id="tobacco_use_disorder" name="tobacco_use_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="tobacco_use_disorder">TOBACCO USE
                                    DISORDER</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" @if (!empty($medical_info) && $medical_info->gambling_disorder == '1') checked @endif
                                    class="form-check-input" id="gambling_disorder" name="gambling_disorder"  @if(!empty($medical_info) ) disabled @endif>
                                <label class="form-check-label" for="gambling_disorder">GAMBLING DISORDER</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="form-group clearfix">
        <a href="javascript:;" onclick="returnLater('fieldset_fourteen','consumer_this_is_me')"
            class="form-wizard-return-btn float-left mr-3">Return Later</a>

        {{-- <a href="javascript:;" onclick="previousStep('medical_info_bar','open_bar')"
            class="form-wizard-previous-btn float-left">Previous</a> --}}
        <a onclick="checkFieldSetMedicalInfo()" href="javascript:;" id="medical_information_information_button"
            class="form-wizard-next-btn  float-right">Save & Continue</a>
    </div>
</fieldset>
