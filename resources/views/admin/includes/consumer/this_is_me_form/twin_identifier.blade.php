<fieldset class="wizard-fieldset mt-4" id="fieldset_twelve">
    <h5>12. Twin Identifiers </h5>
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="dominant_hand_writing_side" class="wizard-form-text-label">12.1 What is your dominant hand
                    writing side?</label>
                <select class="form-control" name="dominant_hand_writing_side" id="dominant_hand_writing_side" required>
                    <option></option>
                    <option value="ambidextrous">Ambidextrous</option>
                    <option value="left_handed">Left Handed</option>
                    <option value="right_handed">Right Handed</option>
                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="are_you_twin" class="wizard-form-text-label">12.2 Are you a </label>
                <select class="form-control" name="are_you_twin" id="are_you_twin" required>
                    <option></option>
                    <option value="conjoined_or_siamese_twins">Conjoined or Siamese twins</option>
                    <option value="different_birthday_twin">Different Birthday Twin</option>
                    <option value="different_race_twins_or_bi_racial_twins">Different Race Twins or Bi-Racial Twins
                    </option>
                    <option value="dizygotic">Dizygotic</option>
                    <option value="heteropaternal_superfecundation">Heteropaternal Superfecundation</option>
                    <option value="mirror-image">Mirror-Image</option>
                    <option value="monozygotic">Monozygotic</option>
                    <option value="parasitic">Parasitic</option>
                    <option value="quadruplet">Quadruplet</option>
                    <option value="semi-identical">Semi-Identical</option>
                    <option value="superfetation">Superfetation</option>
                    <option value="twin_triplet">Twin/Triplet</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="twin_type" class="wizard-form-text-label">12.3 Are you</label>
                <select class="form-control" name="twin_type" id="twin_type" required>
                    <option></option>
                    <option value="fraternal">Fraternal</option>
                    <option value="identical">Identical</option>
                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input name="twin_first_name" type="text" class="form-control wizard-required" id="twin_first_name">
                <label for="twin_first_name" class="wizard-form-text-label">12.4 What is your twin’s first name?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input name="twin_mi" type="text" class="form-control wizard-required" id="twin_mi">
                <label for="twin_mi" class="wizard-form-text-label">12.5 What is your twin’s MI?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <input name="twin_last_name" type="text" class="form-control wizard-required" id="twin_last_name">
                <label for="twin_last_name" class="wizard-form-text-label">12.6 What is your twin’s Last Name?</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <textarea name="twin_difference_description" type="text" class="form-control wizard-required"
                    id="twin_difference_description" required></textarea>
                <label for="twin_difference_description" class="wizard-form-text-label">12.7 Please tell us what best
                    describes the difference between you and your twin.
                    Physical Differences??</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>




        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="birth_mark_located" class="wizard-form-text-label">12.8 My Birthmarks is located on?</label>
                <select class="form-control" required name="birth_mark_located" id="birth_mark_located" required>
                    <option></option>
                    <option value="face_forehead">Face Forehead</option>
                    <option value="face_cheek_left">Face Cheek Left</option>
                    <option value="face_cheek_right">Face Cheek Right</option>
                    <option value="face_chin">Face Chin</option>
                    <option value="neck_left">Neck Left</option>
                    <option value="neck_right">Neck Right</option>
                    <option value="neck_front">Neck Front</option>
                    <option value="neck_back">Neck Back</option>
                    <option value="shoulder_left">Shoulder Left</option>
                    <option value="shoulder_right">Shoulder Right</option>
                    <option value="arm_upper_left">Arm Upper Left</option>
                    <option value="arm_upper_right">Arm Upper Right</option>
                    <option value="arm_lower_left">Arm Lower Left</option>
                    <option value="arm_lower_right">Arm Lower Right</option>
                    <option value="left_hand">Left Hand</option>
                    <option value="right_hand">Right Hand</option>
                    <option value="wrist_left">Wrist Left</option>
                    <option value="wrist_right">Wrist Right</option>
                    <option value="torso_front">Torso Front</option>
                    <option value="torso_back">Torso Back</option>
                    <option value="torso_left">Torso Left</option>
                    <option value="torso_right">Torso Right</option>
                    <option value="upper_leg_left">Upper Leg Left</option>
                    <option value="upper_leg_right">Upper Leg Right</option>
                    <option value="lower_leg_left">Lower Leg Left</option>
                    <option value="lower_leg_right">Lower Leg Right</option>
                    <option value="ankle_left">Ankle Left</option>
                    <option value="ankle_right">Ankle Right</option>
                    <option value="foot_left">Foot Left</option>
                    <option value="foot_right">Foot Right</option>


                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="twin_birth_mark_located" class="wizard-form-text-label">12.9 My closest twin's Birthmarks is
                    located on?</label>
                <select class="form-control" required name="twin_birth_mark_located" id="twin_birth_mark_located">
                    <option></option>
                    <option value="face_forehead">Face Forehead</option>
                    <option value="face_cheek_left">Face Cheek Left</option>
                    <option value="face_cheek_right">Face Cheek Right</option>
                    <option value="face_chin">Face Chin</option>
                    <option value="neck_left">Neck Left</option>
                    <option value="neck_right">Neck Right</option>
                    <option value="neck_front">Neck Front</option>
                    <option value="neck_back">Neck Back</option>
                    <option value="shoulder_left">Shoulder Left</option>
                    <option value="shoulder_right">Shoulder Right</option>
                    <option value="arm_upper_left">Arm Upper Left</option>
                    <option value="arm_upper_right">Arm Upper Right</option>
                    <option value="arm_lower_left">Arm Lower Left</option>
                    <option value="arm_lower_right">Arm Lower Right</option>
                    <option value="left_hand">Left Hand</option>
                    <option value="right_hand">Right Hand</option>
                    <option value="wrist_left">Wrist Left</option>
                    <option value="wrist_right">Wrist Right</option>
                    <option value="torso_front">Torso Front</option>
                    <option value="torso_back">Torso Back</option>
                    <option value="torso_left">Torso Left</option>
                    <option value="torso_right">Torso Right</option>
                    <option value="upper_leg_left">Upper Leg Left</option>
                    <option value="upper_leg_right">Upper Leg Right</option>
                    <option value="lower_leg_left">Lower Leg Left</option>
                    <option value="lower_leg_right">Lower Leg Right</option>
                    <option value="ankle_left">Ankle Left</option>
                    <option value="ankle_right">Ankle Right</option>
                    <option value="foot_left">Foot Left</option>
                    <option value="foot_right">Foot Right</option>


                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="my_freckles_located" class="wizard-form-text-label">12.10 My freckles is located on?</label>
                <select class="form-control" required name="my_freckles_located" id="my_freckles_located" required>
                    <option></option>
                    <option value="face_forehead">Face Forehead</option>
                    <option value="face_cheek_left">Face Cheek Left</option>
                    <option value="face_cheek_right">Face Cheek Right</option>
                    <option value="face_chin">Face Chin</option>
                    <option value="neck_left">Neck Left</option>
                    <option value="neck_right">Neck Right</option>
                    <option value="neck_front">Neck Front</option>
                    <option value="neck_back">Neck Back</option>
                    <option value="shoulder_left">Shoulder Left</option>
                    <option value="shoulder_right">Shoulder Right</option>
                    <option value="arm_upper_left">Arm Upper Left</option>
                    <option value="arm_upper_right">Arm Upper Right</option>
                    <option value="arm_lower_left">Arm Lower Left</option>
                    <option value="arm_lower_right">Arm Lower Right</option>
                    <option value="left_hand">Left Hand</option>
                    <option value="right_hand">Right Hand</option>
                    <option value="wrist_left">Wrist Left</option>
                    <option value="wrist_right">Wrist Right</option>
                    <option value="torso_front">Torso Front</option>
                    <option value="torso_back">Torso Back</option>
                    <option value="torso_left">Torso Left</option>
                    <option value="torso_right">Torso Right</option>
                    <option value="upper_leg_left">Upper Leg Left</option>
                    <option value="upper_leg_right">Upper Leg Right</option>
                    <option value="lower_leg_left">Lower Leg Left</option>
                    <option value="lower_leg_right">Lower Leg Right</option>
                    <option value="ankle_left">Ankle Left</option>
                    <option value="ankle_right">Ankle Right</option>
                    <option value="foot_left">Foot Left</option>
                    <option value="foot_right">Foot Right</option>


                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="twin_freckles_located" class="wizard-form-text-label">12.11 My closest twin's freckles is
                    located on?</label>
                <select class="form-control" required name="twin_freckles_located" id="twin_freckles_located">
                    <option></option>
                    <option value="face_forehead">Face Forehead</option>
                    <option value="face_cheek_left">Face Cheek Left</option>
                    <option value="face_cheek_right">Face Cheek Right</option>
                    <option value="face_chin">Face Chin</option>
                    <option value="neck_left">Neck Left</option>
                    <option value="neck_right">Neck Right</option>
                    <option value="neck_front">Neck Front</option>
                    <option value="neck_back">Neck Back</option>
                    <option value="shoulder_left">Shoulder Left</option>
                    <option value="shoulder_right">Shoulder Right</option>
                    <option value="arm_upper_left">Arm Upper Left</option>
                    <option value="arm_upper_right">Arm Upper Right</option>
                    <option value="arm_lower_left">Arm Lower Left</option>
                    <option value="arm_lower_right">Arm Lower Right</option>
                    <option value="left_hand">Left Hand</option>
                    <option value="right_hand">Right Hand</option>
                    <option value="wrist_left">Wrist Left</option>
                    <option value="wrist_right">Wrist Right</option>
                    <option value="torso_front">Torso Front</option>
                    <option value="torso_back">Torso Back</option>
                    <option value="torso_left">Torso Left</option>
                    <option value="torso_right">Torso Right</option>
                    <option value="upper_leg_left">Upper Leg Left</option>
                    <option value="upper_leg_right">Upper Leg Right</option>
                    <option value="lower_leg_left">Lower Leg Left</option>
                    <option value="lower_leg_right">Lower Leg Right</option>
                    <option value="ankle_left">Ankle Left</option>
                    <option value="ankle_right">Ankle Right</option>
                    <option value="foot_left">Foot Left</option>
                    <option value="foot_right">Foot Right</option>


                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="my_moles_located" class="wizard-form-text-label">12.12 My moles is located on?</label>
                <select class="form-control" required name="my_moles_located" id="my_moles_located">
                    <option></option>
                    <option value="face_forehead">Face Forehead</option>
                    <option value="face_cheek_left">Face Cheek Left</option>
                    <option value="face_cheek_right">Face Cheek Right</option>
                    <option value="face_chin">Face Chin</option>
                    <option value="neck_left">Neck Left</option>
                    <option value="neck_right">Neck Right</option>
                    <option value="neck_front">Neck Front</option>
                    <option value="neck_back">Neck Back</option>
                    <option value="shoulder_left">Shoulder Left</option>
                    <option value="shoulder_right">Shoulder Right</option>
                    <option value="arm_upper_left">Arm Upper Left</option>
                    <option value="arm_upper_right">Arm Upper Right</option>
                    <option value="arm_lower_left">Arm Lower Left</option>
                    <option value="arm_lower_right">Arm Lower Right</option>
                    <option value="left_hand">Left Hand</option>
                    <option value="right_hand">Right Hand</option>
                    <option value="wrist_left">Wrist Left</option>
                    <option value="wrist_right">Wrist Right</option>
                    <option value="torso_front">Torso Front</option>
                    <option value="torso_back">Torso Back</option>
                    <option value="torso_left">Torso Left</option>
                    <option value="torso_right">Torso Right</option>
                    <option value="upper_leg_left">Upper Leg Left</option>
                    <option value="upper_leg_right">Upper Leg Right</option>
                    <option value="lower_leg_left">Lower Leg Left</option>
                    <option value="lower_leg_right">Lower Leg Right</option>
                    <option value="ankle_left">Ankle Left</option>
                    <option value="ankle_right">Ankle Right</option>
                    <option value="foot_left">Foot Left</option>
                    <option value="foot_right">Foot Right</option>


                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="twin_moles_located" class="wizard-form-text-label">12.13 My twin's moles is located on?</label>
                <select class="form-control" required name="twin_moles_located" id="twin_moles_located">
                    <option></option>
                    <option value="face_forehead">Face Forehead</option>
                    <option value="face_cheek_left">Face Cheek Left</option>
                    <option value="face_cheek_right">Face Cheek Right</option>
                    <option value="face_chin">Face Chin</option>
                    <option value="neck_left">Neck Left</option>
                    <option value="neck_right">Neck Right</option>
                    <option value="neck_front">Neck Front</option>
                    <option value="neck_back">Neck Back</option>
                    <option value="shoulder_left">Shoulder Left</option>
                    <option value="shoulder_right">Shoulder Right</option>
                    <option value="arm_upper_left">Arm Upper Left</option>
                    <option value="arm_upper_right">Arm Upper Right</option>
                    <option value="arm_lower_left">Arm Lower Left</option>
                    <option value="arm_lower_right">Arm Lower Right</option>
                    <option value="left_hand">Left Hand</option>
                    <option value="right_hand">Right Hand</option>
                    <option value="wrist_left">Wrist Left</option>
                    <option value="wrist_right">Wrist Right</option>
                    <option value="torso_front">Torso Front</option>
                    <option value="torso_back">Torso Back</option>
                    <option value="torso_left">Torso Left</option>
                    <option value="torso_right">Torso Right</option>
                    <option value="upper_leg_left">Upper Leg Left</option>
                    <option value="upper_leg_right">Upper Leg Right</option>
                    <option value="lower_leg_left">Lower Leg Left</option>
                    <option value="lower_leg_right">Lower Leg Right</option>
                    <option value="ankle_left">Ankle Left</option>
                    <option value="ankle_right">Ankle Right</option>
                    <option value="foot_left">Foot Left</option>
                    <option value="foot_right">Foot Right</option>


                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>



        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="hair_are_different" class="wizard-form-text-label">12.14 My hair is different from my twin’s
                    because</label>
                <select class="form-control" required name="hair_are_different" id="hair_are_different">
                    <option></option>
                    <option value="1">My whorls spiral is clockwise and my twin's is counter-clockwise</option>
                    <option value="2">My cowlicks spiral is clockwise and my twin's is counter-clockwise</option>
                    <option value="3">My whorls spiral is counter-clockwise and my twin's is clockwise</option>
                    <option value="4">My cowlicks spiral is counter-clockwise and my twin's is clockwise</option>


                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="my_eye_color" class="wizard-form-text-label">12.15 My Eye Color?</label>
                <select class="form-control" required name="my_eye_color" id="my_eye_color">
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
                <label for="twin_eye_color" class="wizard-form-text-label">12.16 My Twin's Eye Color?</label>
                <select class="form-control" required name="twin_eye_color" id="twin_eye_color">
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
                <label for="my_hair_color" class="wizard-form-text-label">12.17 My current Hair Color</label>
                <select class="form-control" required name="my_hair_color" id="my_hair_color" required>
                    <option></option>
                    <option value="black">Black</option>
                    <option value="blonde">Blonde</option>
                    <option value="brown">Brown</option>
                    <option value="brunette">Brunette</option>
                    <option value="carrot_top_red">Carrot Top Red</option>
                    <option value="dark_brown">Dark-Brown</option>
                    <option value="fiery_red">Fiery Red</option>
                    <option value="gray">Gray</option>
                    <option value="honey">Honey</option>
                    <option value="light_brown">Light-Brown</option>
                    <option value="platinum_blonde">Platinum Blonde</option>
                    <option value="sandy">Sandy</option>
                    <option value="silver">Silver</option>
                    <option value="strawberry_red">Strawberry Red</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        
        <div class="col-md-6 col-lg-6">
            <div class="form-group">
                <label for="twin_hair_color" class="wizard-form-text-label">12.18 My twin's current Hair Color</label>
                <select class="form-control" required name="twin_hair_color" id="twin_hair_color" required>
                    <option></option>
                    <option value="black">Black</option>
                    <option value="blonde">Blonde</option>
                    <option value="brown">Brown</option>
                    <option value="brunette">Brunette</option>
                    <option value="carrot_top_red">Carrot Top Red</option>
                    <option value="dark_brown">Dark-Brown</option>
                    <option value="fiery_red">Fiery Red</option>
                    <option value="gray">Gray</option>
                    <option value="honey">Honey</option>
                    <option value="light_brown">Light-Brown</option>
                    <option value="platinum_blonde">Platinum Blonde</option>
                    <option value="sandy">Sandy</option>
                    <option value="silver">Silver</option>
                    <option value="strawberry_red">Strawberry Red</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>








    </div>
    <div class="form-group clearfix">
        <a href="javascript:;" onclick="previousStep('twin_identifier_bar','distinguish_bar')"
            class="form-wizard-previous-btn float-left">Previous</a>
        <a onclick="checkFieldSetTwinIdentifier()" href="javascript:;" class="form-wizard-next-btn  float-right">Next</a>
    </div>
</fieldset>
