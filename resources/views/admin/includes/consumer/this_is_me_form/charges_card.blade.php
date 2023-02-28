<fieldset class="wizard-fieldset mt-4" id="fieldset_seven">
    <h5>7. I Want To Protect These Charge Cards</h5>

    {{-- Card 1::Begin --}}
    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            7. Card No. 1
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="charge_card_to_protect_1" class="wizard-form-text-label">7.1 Please list each and every charge
                    card, one at a time that you wish Ginicoe to Protect?
                </label>
                <select class="form-control" name="charge_card_to_protect_1" id="charge_card_to_protect_1" required>
                    <option></option>
                    <option value="american_express">American Express</option>
                    <option value="bank_of_america">Bank of America</option>
                    <option value="barclays">Barclays</option>
                    <option value="capital_one">Capital One</option>
                    <option value="chase">Chase</option>
                    <option value="citibank">Citibank</option>
                    <option value="navy_federal_credit_union">Navy Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union">Pentagon Federal Credit Union</option>
                    <option value="pnc">PNC</option>
                    <option value="us_bank">U.S. Bank</option>
                    <option value="usaa">USAA</option>
                    <option value="wells_fargo">Wells Fargo</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="card_number_1" type="number" class="form-control wizard-required" id="card_number_1"
                    required>
                <label for="card_number_1" class="wizard-form-text-label">7.2 Card Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="nickname_1" type="text" class="form-control wizard-required" id="nickname_1" required>
                <label for="nickname_1" class="wizard-form-text-label">7.3 Nickname</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_first_name_1" type="text" class="form-control wizard-required"
                    id="primary_first_name_1" required>
                <label for="primary_first_name_1" class="wizard-form-text-label">7.4 Primary Card Holder First
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_mi_1" type="text" class="form-control wizard-required" id="primary_mi_1"
                    required>
                <label for="primary_mi_1" class="wizard-form-text-label">7.5 Primary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_last_name_1" type="text" class="form-control wizard-required"
                    id="primary_last_name_1" required>
                <label for="primary_last_name_1" class="wizard-form-text-label">7.6 Primary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

    </div>
    <hr>
    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            7.7 Does this card have a secondary authorized user?
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_1()" name="card_has_secondary_auth_user_1"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_1()" checked name="card_has_secondary_auth_user_1"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>
    <div class="row" id="secondary_card_holder_div_1" style="display: none">


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_first_name_1" type="text" class="form-control wizard-required"
                    id="secondary_first_name_1">
                <label for="secondary_first_name_1" class="wizard-form-text-label">7.8 Secondary Card Holder First
                    Name </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_last_name_1" type="text" class="form-control wizard-required"
                    id="secondary_last_name_1">
                <label for="secondary_last_name_1" class="wizard-form-text-label">7.9 Secondary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_mi_1" type="text" class="form-control wizard-required"
                    id="secondary_mi_1">
                <label for="secondary_mi_1" class="wizard-form-text-label">7.10 Secondary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="secondary_card_holder_relationship_1" class="wizard-form-text-label">7.11 What is the
                    relationship of the secondary card holder to the primary card holder ?</label>
                <select class="form-control" name="secondary_card_holder_relationship_1"
                    id="secondary_card_holder_relationship_1">
                    <option></option>
                    <option value="boyfriend">Boyfriend</option>
                    <option value="brother">Brother</option>
                    <option value="daughter">Daughter</option>
                    <option value="father">Father</option>
                    <option value="friend">Friend</option>
                    <option value="girlfriend">Girlfriend</option>
                    <option value="granddaughter">Granddaughter</option>
                    <option value="grandson">Grandson</option>
                    <option value="husband">Husband</option>
                    <option value="mother">Mother</option>
                    <option value="neighbor">Neighbor</option>
                    <option value="nephew">Nephew</option>
                    <option value="niece">Niece</option>
                    <option value="roommate">Roommate</option>
                    <option value="sister">Sister</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="name_of_bank_1" class="wizard-form-text-label">7.12 Name of the Bank that issued my card
                    is?</label>
                <select class="form-control" name="name_of_bank_1" id="name_of_bank_1">
                    <option></option>
                    <option value="american_express">American Express</option>
                    <option value="bank_of_america">Bank of America</option>
                    <option value="barclays">Barclays</option>
                    <option value="capital_one">Capital One</option>
                    <option value="chase">Chase</option>
                    <option value="citibank">Citibank</option>
                    <option value="navy_federal_credit_union">Navy Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union">Pentagon Federal Credit Union</option>
                    <option value="pnc">PNC</option>
                    <option value="us_bank">U.S. Bank</option>
                    <option value="usaa">USAA</option>
                    <option value="wells_fargo">Wells Fargo</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="expiry_date_1" type="date" value="{{ date('Y-m-d') }}"
                    class="form-control wizard-required" id="expiry_date_1">
                <label for="expiry_date_1" class="wizard-form-text-label">7.13 Expiry Date</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


    </div>
    {{-- Card 1::END --}}




    {{-- Card 2::Begin --}}
    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            7. Card No. 2
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="charge_card_to_protect_2" class="wizard-form-text-label">7.14 Please list each and every
                    charge
                    card, one at a time that you wish Ginicoe to Protect?
                </label>
                <select class="form-control" name="charge_card_to_protect_2" id="charge_card_to_protect_2" required>
                    <option></option>
                    <option value="american_express">American Express</option>
                    <option value="bank_of_america">Bank of America</option>
                    <option value="barclays">Barclays</option>
                    <option value="capital_one">Capital One</option>
                    <option value="chase">Chase</option>
                    <option value="citibank">Citibank</option>
                    <option value="navy_federal_credit_union">Navy Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union">Pentagon Federal Credit Union</option>
                    <option value="pnc">PNC</option>
                    <option value="us_bank">U.S. Bank</option>
                    <option value="usaa">USAA</option>
                    <option value="wells_fargo">Wells Fargo</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="card_number_2" type="text" class="form-control wizard-required" id="card_number_2"
                    required>
                <label for="card_number_2" class="wizard-form-text-label">7.15 Card Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="nickname_2" type="text" class="form-control wizard-required" id="nickname_2"
                    required>
                <label for="nickname_2" class="wizard-form-text-label">7.16 Nickname</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_first_name_2" type="text" class="form-control wizard-required"
                    id="primary_first_name_2" required>
                <label for="primary_first_name_2" class="wizard-form-text-label">7.17 Primary Card Holder First
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_mi_2" type="text" class="form-control wizard-required" id="primary_mi_2"
                    required>
                <label for="primary_mi_2" class="wizard-form-text-label">7.18 Primary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_last_name_2" type="text" class="form-control wizard-required"
                    id="primary_last_name_2" required>
                <label for="primary_last_name_2" class="wizard-form-text-label">7.19 Primary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

    </div>
    <hr>
    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            7.20 Does this card have a secondary authorized user?
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_2()" name="card_has_secondary_auth_user_2"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_2()" checked name="card_has_secondary_auth_user_2"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>
    <div class="row" id="secondary_card_holder_div_2" style="display: none">


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_first_name_2" type="text" class="form-control wizard-required"
                    id="secondary_first_name_2">
                <label for="secondary_first_name_2" class="wizard-form-text-label">7.21 Secondary Card Holder First
                    Name </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_last_name_2" type="text" class="form-control wizard-required"
                    id="secondary_last_name_2">
                <label for="secondary_last_name_2" class="wizard-form-text-label">7.22 Secondary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_mi_2" type="text" class="form-control wizard-required"
                    id="secondary_mi_2">
                <label for="secondary_mi_2" class="wizard-form-text-label">7.23 Secondary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="secondary_card_holder_relationship_2" class="wizard-form-text-label">7.24 What is the
                    relationship of the secondary card holder to the primary card holder ?</label>
                <select class="form-control" name="secondary_card_holder_relationship_2"
                    id="secondary_card_holder_relationship_2">
                    <option></option>
                    <option value="boyfriend">Boyfriend</option>
                    <option value="brother">Brother</option>
                    <option value="daughter">Daughter</option>
                    <option value="father">Father</option>
                    <option value="friend">Friend</option>
                    <option value="girlfriend">Girlfriend</option>
                    <option value="granddaughter">Granddaughter</option>
                    <option value="grandson">Grandson</option>
                    <option value="husband">Husband</option>
                    <option value="mother">Mother</option>
                    <option value="neighbor">Neighbor</option>
                    <option value="nephew">Nephew</option>
                    <option value="niece">Niece</option>
                    <option value="roommate">Roommate</option>
                    <option value="sister">Sister</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="name_of_bank_2" class="wizard-form-text-label">7.25 Name of the Bank that issued my card
                    is?</label>
                <select class="form-control" name="name_of_bank_2" id="name_of_bank_2">
                    <option></option>
                    <option value="american_express">American Express</option>
                    <option value="bank_of_america">Bank of America</option>
                    <option value="barclays">Barclays</option>
                    <option value="capital_one">Capital One</option>
                    <option value="chase">Chase</option>
                    <option value="citibank">Citibank</option>
                    <option value="navy_federal_credit_union">Navy Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union">Pentagon Federal Credit Union</option>
                    <option value="pnc">PNC</option>
                    <option value="us_bank">U.S. Bank</option>
                    <option value="usaa">USAA</option>
                    <option value="wells_fargo">Wells Fargo</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="expiry_date_2" type="date" value="{{ date('Y-m-d') }}"
                    class="form-control wizard-required" id="expiry_date_2">
                <label for="expiry_date_2" class="wizard-form-text-label">7.26 Expiry Date</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


    </div>
    {{-- Card 2::END --}}


    {{-- Card 3::Begin --}}
    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            7. Card No. 3
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="charge_card_to_protect_3" class="wizard-form-text-label">7.27 Please list each and every
                    charge
                    card, one at a time that you wish Ginicoe to Protect?
                </label>
                <select class="form-control" name="charge_card_to_protect_3" id="charge_card_to_protect_3" required>
                    <option></option>
                    <option value="american_express">American Express</option>
                    <option value="bank_of_america">Bank of America</option>
                    <option value="barclays">Barclays</option>
                    <option value="capital_one">Capital One</option>
                    <option value="chase">Chase</option>
                    <option value="citibank">Citibank</option>
                    <option value="navy_federal_credit_union">Navy Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union">Pentagon Federal Credit Union</option>
                    <option value="pnc">PNC</option>
                    <option value="us_bank">U.S. Bank</option>
                    <option value="usaa">USAA</option>
                    <option value="wells_fargo">Wells Fargo</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="card_number_3" type="text" class="form-control wizard-required" id="card_number_3"
                    required>
                <label for="card_number_3" class="wizard-form-text-label">7.28 Card Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="nickname_3" type="text" class="form-control wizard-required" id="nickname_3"
                    required>
                <label for="nickname_3" class="wizard-form-text-label">7.29 Nickname</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_first_name_3" type="text" class="form-control wizard-required"
                    id="primary_first_name_3" required>
                <label for="primary_first_name_3" class="wizard-form-text-label">7.30 Primary Card Holder First
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_mi_3" type="text" class="form-control wizard-required" id="primary_mi_3"
                    required>
                <label for="primary_mi_3" class="wizard-form-text-label">7.31 Primary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_last_name_3" type="text" class="form-control wizard-required"
                    id="primary_last_name_3" required>
                <label for="primary_last_name_3" class="wizard-form-text-label">7.32 Primary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

    </div>
    <hr>
    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            7.33 Does this card have a secondary authorized user?
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_3()" name="card_has_secondary_auth_user_3"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_3()" checked name="card_has_secondary_auth_user_3"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>
    <div class="row" id="secondary_card_holder_div_3" style="display: none">


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_first_name_3" type="text" class="form-control wizard-required"
                    id="secondary_first_name_3">
                <label for="secondary_first_name_3" class="wizard-form-text-label">7.34 Secondary Card Holder First
                    Name </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_last_name_3" type="text" class="form-control wizard-required"
                    id="secondary_last_name_3">
                <label for="secondary_last_name_3" class="wizard-form-text-label">7.35 Secondary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_mi_3" type="text" class="form-control wizard-required"
                    id="secondary_mi_3">
                <label for="secondary_mi_3" class="wizard-form-text-label">7.36 Secondary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="secondary_card_holder_relationship_3" class="wizard-form-text-label">7.37 What is the
                    relationship of the secondary card holder to the primary card holder ?</label>
                <select class="form-control" name="secondary_card_holder_relationship_3"
                    id="secondary_card_holder_relationship_3">
                    <option></option>
                    <option value="boyfriend">Boyfriend</option>
                    <option value="brother">Brother</option>
                    <option value="daughter">Daughter</option>
                    <option value="father">Father</option>
                    <option value="friend">Friend</option>
                    <option value="girlfriend">Girlfriend</option>
                    <option value="granddaughter">Granddaughter</option>
                    <option value="grandson">Grandson</option>
                    <option value="husband">Husband</option>
                    <option value="mother">Mother</option>
                    <option value="neighbor">Neighbor</option>
                    <option value="nephew">Nephew</option>
                    <option value="niece">Niece</option>
                    <option value="roommate">Roommate</option>
                    <option value="sister">Sister</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="name_of_bank_3" class="wizard-form-text-label">7.38 Name of the Bank that issued my card
                    is?</label>
                <select class="form-control" name="name_of_bank_3" id="name_of_bank_3">
                    <option></option>
                    <option value="american_express">American Express</option>
                    <option value="bank_of_america">Bank of America</option>
                    <option value="barclays">Barclays</option>
                    <option value="capital_one">Capital One</option>
                    <option value="chase">Chase</option>
                    <option value="citibank">Citibank</option>
                    <option value="navy_federal_credit_union">Navy Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union">Pentagon Federal Credit Union</option>
                    <option value="pnc">PNC</option>
                    <option value="us_bank">U.S. Bank</option>
                    <option value="usaa">USAA</option>
                    <option value="wells_fargo">Wells Fargo</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="expiry_date_3" type="date" value="{{ date('Y-m-d') }}"
                    class="form-control wizard-required" id="expiry_date_3">
                <label for="expiry_date_3" class="wizard-form-text-label">7.39 Expiry Date</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


    </div>
    {{-- Card 3::END --}}




    {{-- Card 4::Begin --}}
    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            7. Card No. 4
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="charge_card_to_protect_4" class="wizard-form-text-label">7.40 Please list each and every
                    charge
                    card, one at a time that you wish Ginicoe to Protect?
                </label>
                <select class="form-control" name="charge_card_to_protect_4" id="charge_card_to_protect_4" required>
                    <option></option>
                    <option value="american_express">American Express</option>
                    <option value="bank_of_america">Bank of America</option>
                    <option value="barclays">Barclays</option>
                    <option value="capital_one">Capital One</option>
                    <option value="chase">Chase</option>
                    <option value="citibank">Citibank</option>
                    <option value="navy_federal_credit_union">Navy Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union">Pentagon Federal Credit Union</option>
                    <option value="pnc">PNC</option>
                    <option value="us_bank">U.S. Bank</option>
                    <option value="usaa">USAA</option>
                    <option value="wells_fargo">Wells Fargo</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="card_number_4" type="text" class="form-control wizard-required" id="card_number_4"
                    required>
                <label for="card_number_4" class="wizard-form-text-label">7.41 Card Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="nickname_4" type="text" class="form-control wizard-required" id="nickname_4"
                    required>
                <label for="nickname_4" class="wizard-form-text-label">7.42 Nickname</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_first_name_4" type="text" class="form-control wizard-required"
                    id="primary_first_name_4" required>
                <label for="primary_first_name_4" class="wizard-form-text-label">7.43 Primary Card Holder First
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_mi_4" type="text" class="form-control wizard-required" id="primary_mi_4"
                    required>
                <label for="primary_mi_4" class="wizard-form-text-label">7.44 Primary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_last_name_4" type="text" class="form-control wizard-required"
                    id="primary_last_name_4" required>
                <label for="primary_last_name_4" class="wizard-form-text-label">7.45 Primary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

    </div>
    <hr>
    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            7.46 Does this card have a secondary authorized user?
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_4()" name="card_has_secondary_auth_user_4"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_4()" checked name="card_has_secondary_auth_user_4"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>
    <div class="row" id="secondary_card_holder_div_4" style="display: none">


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_first_name_4" type="text" class="form-control wizard-required"
                    id="secondary_first_name_4">
                <label for="secondary_first_name_4" class="wizard-form-text-label">7.47 Secondary Card Holder First
                    Name </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_last_name_4" type="text" class="form-control wizard-required"
                    id="secondary_last_name_4">
                <label for="secondary_last_name_4" class="wizard-form-text-label">7.48 Secondary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_mi_4" type="text" class="form-control wizard-required"
                    id="secondary_mi_4">
                <label for="secondary_mi_4" class="wizard-form-text-label">7.49 Secondary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="secondary_card_holder_relationship_4" class="wizard-form-text-label">7.50 What is the
                    relationship of the secondary card holder to the primary card holder ?</label>
                <select class="form-control" name="secondary_card_holder_relationship_4"
                    id="secondary_card_holder_relationship_4">
                    <option></option>
                    <option value="boyfriend">Boyfriend</option>
                    <option value="brother">Brother</option>
                    <option value="daughter">Daughter</option>
                    <option value="father">Father</option>
                    <option value="friend">Friend</option>
                    <option value="girlfriend">Girlfriend</option>
                    <option value="granddaughter">Granddaughter</option>
                    <option value="grandson">Grandson</option>
                    <option value="husband">Husband</option>
                    <option value="mother">Mother</option>
                    <option value="neighbor">Neighbor</option>
                    <option value="nephew">Nephew</option>
                    <option value="niece">Niece</option>
                    <option value="roommate">Roommate</option>
                    <option value="sister">Sister</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="name_of_bank_4" class="wizard-form-text-label">7.51 Name of the Bank that issued my card
                    is?</label>
                <select class="form-control" name="name_of_bank_4" id="name_of_bank_4">
                    <option></option>
                    <option value="american_express">American Express</option>
                    <option value="bank_of_america">Bank of America</option>
                    <option value="barclays">Barclays</option>
                    <option value="capital_one">Capital One</option>
                    <option value="chase">Chase</option>
                    <option value="citibank">Citibank</option>
                    <option value="navy_federal_credit_union">Navy Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union">Pentagon Federal Credit Union</option>
                    <option value="pnc">PNC</option>
                    <option value="us_bank">U.S. Bank</option>
                    <option value="usaa">USAA</option>
                    <option value="wells_fargo">Wells Fargo</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="expiry_date_4" type="date" value="{{ date('Y-m-d') }}"
                    class="form-control wizard-required" id="expiry_date_4">
                <label for="expiry_date_4" class="wizard-form-text-label">7.52 Expiry Date</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


    </div>
    {{-- Card 4::END --}}


    {{-- Card 5::Begin --}}
    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            7. Card No. 5
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="charge_card_to_protect_5" class="wizard-form-text-label">7.53 Please list each and every
                    charge
                    card, one at a time that you wish Ginicoe to Protect?
                </label>
                <select class="form-control" name="charge_card_to_protect_5" id="charge_card_to_protect_5" required>
                    <option></option>
                    <option value="american_express">American Express</option>
                    <option value="bank_of_america">Bank of America</option>
                    <option value="barclays">Barclays</option>
                    <option value="capital_one">Capital One</option>
                    <option value="chase">Chase</option>
                    <option value="citibank">Citibank</option>
                    <option value="navy_federal_credit_union">Navy Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union">Pentagon Federal Credit Union</option>
                    <option value="pnc">PNC</option>
                    <option value="us_bank">U.S. Bank</option>
                    <option value="usaa">USAA</option>
                    <option value="wells_fargo">Wells Fargo</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="card_number_5" type="text" class="form-control wizard-required" id="card_number_5"
                    required>
                <label for="card_number_5" class="wizard-form-text-label">7.54 Card Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="nickname_5" type="text" class="form-control wizard-required" id="nickname_5"
                    required>
                <label for="nickname_5" class="wizard-form-text-label">7.55 Nickname</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_first_name_5" type="text" class="form-control wizard-required"
                    id="primary_first_name_5" required>
                <label for="primary_first_name_5" class="wizard-form-text-label">7.56 Primary Card Holder First
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_mi_5" type="text" class="form-control wizard-required" id="primary_mi_5"
                    required>
                <label for="primary_mi_5" class="wizard-form-text-label">7.57 Primary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_last_name_5" type="text" class="form-control wizard-required"
                    id="primary_last_name_5" required>
                <label for="primary_last_name_5" class="wizard-form-text-label">7.58 Primary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

    </div>
    <hr>
    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            7.59 Does this card have a secondary authorized user?
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_5()" name="card_has_secondary_auth_user_5"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_5()" checked name="card_has_secondary_auth_user_5"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>
    <div class="row" id="secondary_card_holder_div_5" style="display: none">


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_first_name_5" type="text" class="form-control wizard-required"
                    id="secondary_first_name_5">
                <label for="secondary_first_name_5" class="wizard-form-text-label">7.60 Secondary Card Holder First
                    Name </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_last_name_5" type="text" class="form-control wizard-required"
                    id="secondary_last_name_5">
                <label for="secondary_last_name_5" class="wizard-form-text-label">7.61 Secondary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_mi_5" type="text" class="form-control wizard-required"
                    id="secondary_mi_5">
                <label for="secondary_mi_5" class="wizard-form-text-label">7.62 Secondary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="secondary_card_holder_relationship_5" class="wizard-form-text-label">7.63 What is the
                    relationship of the secondary card holder to the primary card holder ?</label>
                <select class="form-control" name="secondary_card_holder_relationship_5"
                    id="secondary_card_holder_relationship_5">
                    <option></option>
                    <option value="boyfriend">Boyfriend</option>
                    <option value="brother">Brother</option>
                    <option value="daughter">Daughter</option>
                    <option value="father">Father</option>
                    <option value="friend">Friend</option>
                    <option value="girlfriend">Girlfriend</option>
                    <option value="granddaughter">Granddaughter</option>
                    <option value="grandson">Grandson</option>
                    <option value="husband">Husband</option>
                    <option value="mother">Mother</option>
                    <option value="neighbor">Neighbor</option>
                    <option value="nephew">Nephew</option>
                    <option value="niece">Niece</option>
                    <option value="roommate">Roommate</option>
                    <option value="sister">Sister</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="name_of_bank_5" class="wizard-form-text-label">7.64 Name of the Bank that issued my card
                    is?</label>
                <select class="form-control" name="name_of_bank_5" id="name_of_bank_5">
                    <option></option>
                    <option value="american_express">American Express</option>
                    <option value="bank_of_america">Bank of America</option>
                    <option value="barclays">Barclays</option>
                    <option value="capital_one">Capital One</option>
                    <option value="chase">Chase</option>
                    <option value="citibank">Citibank</option>
                    <option value="navy_federal_credit_union">Navy Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union">Pentagon Federal Credit Union</option>
                    <option value="pnc">PNC</option>
                    <option value="us_bank">U.S. Bank</option>
                    <option value="usaa">USAA</option>
                    <option value="wells_fargo">Wells Fargo</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="expiry_date_5" type="date" value="{{ date('Y-m-d') }}"
                    class="form-control wizard-required" id="expiry_date_5">
                <label for="expiry_date_5" class="wizard-form-text-label">7.65 Expiry Date</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


    </div>
    {{-- Card 5::END --}}










    <div class="form-group clearfix">
        <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
        <a onclick="checkFieldSetChargesCard()" href="javascript:;"
            class="form-wizard-next-btn  float-right">Next</a>
    </div>
</fieldset>
