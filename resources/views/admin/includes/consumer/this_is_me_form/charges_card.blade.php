<fieldset class="wizard-fieldset mt-4  @if (!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_seven') show @endif" id="fieldset_seven">
    <h5>7. I Want To Protect These Charge Cards</h5>
    <input type="hidden" name="form_section" value="charge_card_information" />

    {{-- Card 1::Begin --}}
    <div class="col-md-6 col-lg-6">
        <div class="form-group">
            7. Card No. 1
        </div>
    </div>

    <div class="row">
        {{-- <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="charge_card_to_protect_1" class="wizard-form-text-label">7.1 Please list each and every charge
                    card, one at a time that you wish Ginicoe to Protect?
                </label>
                <select class="form-control" name="charge_card_to_protect_1" id="charge_card_to_protect_1" required>
                    <option></option>
                    <option value="american_express" @if (!empty($charge_card_info) && $charge_card_info->charge_card_to_protect_1 == 'american_express') selected @endif>American Express</option>
                    <option value="bank_of_america" @if (!empty($charge_card_info) && $charge_card_info->charge_card_to_protect_1 == 'bank_of_america') selected @endif>Bank of America</option>
                    <option value="barclays" @if (!empty($charge_card_info) && $charge_card_info->charge_card_to_protect_1 == 'barclays') selected @endif>Barclays</option>
                    <option value="capital_one" @if (!empty($charge_card_info) && $charge_card_info->charge_card_to_protect_1 == 'capital_one') selected @endif>Capital One</option>
                    <option value="chase" @if (!empty($charge_card_info) && $charge_card_info->charge_card_to_protect_1 == 'chase') selected @endif>Chase</option>
                    <option value="citibank" @if (!empty($charge_card_info) && $charge_card_info->charge_card_to_protect_1 == 'citibank') selected @endif>Citibank</option>
                    <option value="navy_federal_credit_union" @if (!empty($charge_card_info) && $charge_card_info->charge_card_to_protect_1 == 'navy_federal_credit_union') selected @endif>Navy Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union" @if (!empty($charge_card_info) && $charge_card_info->charge_card_to_protect_1 == 'pentagon_federal_credit_union') selected @endif>Pentagon Federal Credit Union</option>
                    <option value="pnc" @if (!empty($charge_card_info) && $charge_card_info->charge_card_to_protect_1 == 'pnc') selected @endif>PNC</option>
                    <option value="us_bank" @if (!empty($charge_card_info) && $charge_card_info->charge_card_to_protect_1 == 'us_bank') selected @endif>U.S. Bank</option>
                    <option value="usaa" @if (!empty($charge_card_info) && $charge_card_info->charge_card_to_protect_1 == 'usaa') selected @endif>USAA</option>
                    <option value="wells_fargo" @if (!empty($charge_card_info) && $charge_card_info->charge_card_to_protect_1 == 'wells_fargo') selected @endif>Wells Fargo</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div> --}}



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="card_number_1" value="{{ $charge_card_info->card_number_1 ?? '' }}" type="number"
                    class="form-control wizard-required" id="card_number_1" required>
                <label for="card_number_1" class="wizard-form-text-label">7.1 Card Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->nickname_1 ?? '' }}" name="nickname_1" type="text"
                    class="form-control wizard-required" id="nickname_1">
                <label for="nickname_1" class="wizard-form-text-label">7.2 Nickname</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->primary_first_name_1 ?? '' }}" name="primary_first_name_1"
                    type="text" class="form-control wizard-required" id="primary_first_name_1" required>
                <label for="primary_first_name_1" class="wizard-form-text-label">7.3 Primary Card Holder First
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->primary_mi_1 ?? '' }}" name="primary_mi_1" type="text"
                    class="form-control wizard-required" id="primary_mi_1">
                <label for="primary_mi_1" class="wizard-form-text-label">7.4 Primary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->primary_last_name_1 ?? '' }}" name="primary_last_name_1"
                    type="text" class="form-control wizard-required" id="primary_last_name_1" required>
                <label for="primary_last_name_1" class="wizard-form-text-label">7.5 Primary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

    </div>
    <hr>
    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            7.6 Does this card have a secondary authorized user?
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_1()" @if (!empty($charge_card_info) && $charge_card_info->card_has_secondary_auth_user_1 == 1) checked @endif
                    name="card_has_secondary_auth_user_1" value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_1()" @if (empty($charge_card_info) || $charge_card_info->card_has_secondary_auth_user_1 == 0) checked @endif
                    name="card_has_secondary_auth_user_1" value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>
    <div class="row" id="secondary_card_holder_div_1" @if (empty($charge_card_info) || $charge_card_info->card_has_secondary_auth_user_1 == 0) style="display: none" @endif>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->secondary_first_name_1 ?? '' }}" name="secondary_first_name_1"
                    type="text" class="form-control wizard-required" id="secondary_first_name_1">
                <label for="secondary_first_name_1" class="wizard-form-text-label">7.7 Secondary Card Holder First
                    Name </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->secondary_last_name_1 ?? '' }}" name="secondary_last_name_1"
                    type="text" class="form-control wizard-required" id="secondary_last_name_1">
                <label for="secondary_last_name_1" class="wizard-form-text-label">7.8 Secondary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->secondary_mi_1 ?? '' }}" name="secondary_mi_1" type="text"
                    class="form-control wizard-required" id="secondary_mi_1">
                <label for="secondary_mi_1" class="wizard-form-text-label">7.9 Secondary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6">
            <div class="form-group">

                <label for="secondary_card_holder_relationship_1" class="wizard-form-text-label">7.10 What is the
                    relationship of the secondary card holder to the primary card holder ?</label>
                <select class="form-control" name="secondary_card_holder_relationship_1"
                    id="secondary_card_holder_relationship_1">
                    <option></option>
                    <option value="boyfriend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'boyfriend') selected @endif>Boyfriend</option>
                    <option value="brother" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'brother') selected @endif>Brother</option>
                    <option value="daughter" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'daughter') selected @endif>Daughter</option>
                    <option value="father" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'father') selected @endif>Father</option>
                    <option value="friend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'friend') selected @endif>Friend</option>
                    <option value="girlfriend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'girlfriend') selected @endif>Girlfriend</option>
                    <option value="granddaughter" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'granddaughter') selected @endif>Granddaughter
                    </option>
                    <option value="grandson" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'grandson') selected @endif>Grandson</option>
                    <option value="husband" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'husband') selected @endif>Husband</option>
                    <option value="mother" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'mother') selected @endif>Mother</option>
                    <option value="neighbor" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'neighbor') selected @endif>Neighbor</option>
                    <option value="nephew" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'nephew') selected @endif>Nephew</option>
                    <option value="niece" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'niece') selected @endif>Niece</option>
                    <option value="roommate" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'roommate') selected @endif>Roommate</option>
                    <option value="sister" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_1 === 'sister') selected @endif>Sister</option>

                </select>
                <p class="text_danger form_error"></p>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <div class="form-group">

                <label for="name_of_bank_1" class="wizard-form-text-label">7.11 Name of the Bank that issued my card
                    is?</label>
                <input value="{{ $charge_card_info->name_of_bank_1 ?? '' }}" name="name_of_bank_1" type="text"
                    class="form-control wizard-required" id="name_of_bank_1">
                <p class="text_danger form_error"></p>
                {{-- <select class="form-control" name="name_of_bank_1" id="name_of_bank_1" required>
                    <option></option>
                    <option value="american_express" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_1 == 'american_express') selected @endif>American
                        Express</option>
                    <option value="bank_of_america" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_1 == 'bank_of_america') selected @endif>Bank of America
                    </option>
                    <option value="barclays" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_1 == 'barclays') selected @endif>Barclays</option>
                    <option value="capital_one" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_1 == 'capital_one') selected @endif>Capital One
                    </option>
                    <option value="chase" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_1 == 'chase') selected @endif>Chase</option>
                    <option value="citibank" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_1 == 'citibank') selected @endif>Citibank</option>
                    <option value="navy_federal_credit_union" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_1 == 'navy_federal_credit_union') selected @endif>Navy
                        Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_1 == 'pentagon_federal_credit_union') selected @endif>
                        Pentagon Federal Credit Union</option>
                    <option value="pnc" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_1 == 'pnc') selected @endif>PNC</option>
                    <option value="us_bank" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_1 == 'us_bank') selected @endif>U.S. Bank</option>
                    <option value="usaa" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_1 == 'usaa') selected @endif>USAA</option>
                    <option value="wells_fargo" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_1 == 'wells_fargo') selected @endif>Wells Fargo
                    </option>

                </select> --}}
        
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->expiry_date_1 ?? date('Y-m-d') }}" name="expiry_date_1"
                    type="date" class="form-control wizard-required" id="expiry_date_1" required>
                <label for="expiry_date_1" class="wizard-form-text-label">7.12 Expiry Date</label>
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
        {{-- <div class="col-md-6 col-lg-6">
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
        </div> --}}



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->card_number_2 ?? '' }}" name="card_number_2" type="text"
                    class="form-control wizard-required" id="card_number_2">
                <label for="card_number_2" class="wizard-form-text-label">7.13 Card Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->nickname_2 ?? '' }}" name="nickname_2" type="text"
                    class="form-control wizard-required" id="nickname_2">
                <label for="nickname_2" class="wizard-form-text-label">7.16 Nickname</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->primary_first_name_2 ?? '' }}" name="primary_first_name_2"
                    type="text" class="form-control wizard-required" id="primary_first_name_2">
                <label for="primary_first_name_2" class="wizard-form-text-label">7.17 Primary Card Holder First
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->primary_mi_2 ?? '' }}" name="primary_mi_2" type="text"
                    class="form-control wizard-required" id="primary_mi_2">
                <label for="primary_mi_2" class="wizard-form-text-label">7.18 Primary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->primary_last_name_2 ?? '' }}" name="primary_last_name_2"
                    type="text" class="form-control wizard-required" id="primary_last_name_2">
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
                <input onclick="check_card_has_secondary_auth_user_2()"
                    @if (!empty($charge_card_info) && $charge_card_info->card_has_secondary_auth_user_2 == 1) checked @endif name="card_has_secondary_auth_user_2"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_2()"
                    @if (empty($charge_card_info) || $charge_card_info->card_has_secondary_auth_user_2 == 0) checked @endif name="card_has_secondary_auth_user_2"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>
    <div class="row" id="secondary_card_holder_div_2"
        @if (empty($charge_card_info) || $charge_card_info->card_has_secondary_auth_user_2 == 0) style="display: none" @endif>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->secondary_first_name_2 ?? '' }}" name="secondary_first_name_2"
                    type="text" class="form-control wizard-required" id="secondary_first_name_2">
                <label for="secondary_first_name_2" class="wizard-form-text-label">7.21 Secondary Card Holder First
                    Name </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->secondary_last_name_2 ?? '' }}" name="secondary_last_name_2"
                    type="text" class="form-control wizard-required" id="secondary_last_name_2">
                <label for="secondary_last_name_2" class="wizard-form-text-label">7.22 Secondary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input value="{{ $charge_card_info->secondary_mi_2 ?? '' }}" name="secondary_mi_2" type="text"
                    class="form-control wizard-required" id="secondary_mi_2">
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
                    <option value="boyfriend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'boyfriend') selected @endif>Boyfriend</option>
                    <option value="brother" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'brother') selected @endif>Brother</option>
                    <option value="daughter" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'daughter') selected @endif>Daughter</option>
                    <option value="father" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'father') selected @endif>Father</option>
                    <option value="friend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'friend') selected @endif>Friend</option>
                    <option value="girlfriend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'girlfriend') selected @endif>Girlfriend</option>
                    <option value="granddaughter" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'granddaughter') selected @endif>Granddaughter
                    </option>
                    <option value="grandson" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'grandson') selected @endif>Grandson</option>
                    <option value="husband" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'husband') selected @endif>Husband</option>
                    <option value="mother" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'mother') selected @endif>Mother</option>
                    <option value="neighbor" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'neighbor') selected @endif>Neighbor</option>
                    <option value="nephew" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'nephew') selected @endif>Nephew</option>
                    <option value="niece" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'niece') selected @endif>Niece</option>
                    <option value="roommate" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'roommate') selected @endif>Roommate</option>
                    <option value="sister" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_2 === 'sister') selected @endif>Sister</option>

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
                    <input value="{{ $charge_card_info->name_of_bank_2 ?? '' }}" name="name_of_bank_2" type="text"
                    class="form-control wizard-required" id="name_of_bank_2">
                <p class="text_danger form_error"></p>
                {{-- <select class="form-control" name="name_of_bank_2" id="name_of_bank_2">
                    <option></option>
                    <option value="american_express" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_2 == 'american_express') selected @endif>American
                        Express</option>
                    <option value="bank_of_america" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_2 == 'bank_of_america') selected @endif>Bank of America
                    </option>
                    <option value="barclays" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_2 == 'barclays') selected @endif>Barclays</option>
                    <option value="capital_one" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_2 == 'capital_one') selected @endif>Capital One
                    </option>
                    <option value="chase" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_2 == 'chase') selected @endif>Chase</option>
                    <option value="citibank" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_2 == 'citibank') selected @endif>Citibank</option>
                    <option value="navy_federal_credit_union" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_2 == 'navy_federal_credit_union') selected @endif>Navy
                        Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_2 == 'pentagon_federal_credit_union') selected @endif>
                        Pentagon Federal Credit Union</option>
                    <option value="pnc" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_2 == 'pnc') selected @endif>PNC</option>
                    <option value="us_bank" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_2 == 'us_bank') selected @endif>U.S. Bank</option>
                    <option value="usaa" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_2 == 'usaa') selected @endif>USAA</option>
                    <option value="wells_fargo" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_2 == 'wells_fargo') selected @endif>Wells Fargo
                    </option>

                </select> --}}
               
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="expiry_date_2" type="date"
                    value="{{ $charge_card_info->expiry_date_2 ?? date('Y-m-d') }}"
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
        {{-- <div class="col-md-6 col-lg-6">
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
        </div> --}}



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="card_number_3" value="{{ $charge_card_info->card_number_3 ?? '' }}" type="text"
                    class="form-control wizard-required" id="card_number_3">
                <label for="card_number_3" class="wizard-form-text-label">7.28 Card Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="nickname_3" value="{{ $charge_card_info->nickname_3 ?? '' }}" type="text"
                    class="form-control wizard-required" id="nickname_3">
                <label for="nickname_3" class="wizard-form-text-label">7.29 Nickname</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_first_name_3" value="{{ $charge_card_info->primary_first_name_3 ?? '' }}"
                    type="text" class="form-control wizard-required" id="primary_first_name_3">
                <label for="primary_first_name_3" class="wizard-form-text-label">7.30 Primary Card Holder First
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_mi_3" value="{{ $charge_card_info->primary_mi_3 ?? '' }}" type="text"
                    class="form-control wizard-required" id="primary_mi_3">
                <label for="primary_mi_3" class="wizard-form-text-label">7.31 Primary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_last_name_3" value="{{ $charge_card_info->primary_last_name_3 ?? '' }}"
                    type="text" class="form-control wizard-required" id="primary_last_name_3">
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
                <input onclick="check_card_has_secondary_auth_user_3()"
                    @if (!empty($charge_card_info) && $charge_card_info->card_has_secondary_auth_user_3 == 1) checked @endif name="card_has_secondary_auth_user_3"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_3()"
                    @if (empty($charge_card_info) || $charge_card_info->card_has_secondary_auth_user_3 == 0) checked @endif name="card_has_secondary_auth_user_3"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>
    <div class="row" id="secondary_card_holder_div_3"
        @if (empty($charge_card_info) || $charge_card_info->card_has_secondary_auth_user_3 == 0) style="display: none" @endif>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_first_name_3" value="{{ $charge_card_info->secondary_first_name_3 ?? '' }}"
                    type="text" class="form-control wizard-required" id="secondary_first_name_3">
                <label for="secondary_first_name_3" class="wizard-form-text-label">7.34 Secondary Card Holder First
                    Name </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_last_name_3" value="{{ $charge_card_info->secondary_last_name_3 ?? '' }}"
                    type="text" class="form-control wizard-required" id="secondary_last_name_3">
                <label for="secondary_last_name_3" class="wizard-form-text-label">7.35 Secondary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_mi_3" value="{{ $charge_card_info->secondary_mi_3 ?? '' }}" type="text"
                    class="form-control wizard-required" id="secondary_mi_3">
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
                    <option value="boyfriend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'boyfriend') selected @endif>Boyfriend</option>
                    <option value="brother" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'brother') selected @endif>Brother</option>
                    <option value="daughter" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'daughter') selected @endif>Daughter</option>
                    <option value="father" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'father') selected @endif>Father</option>
                    <option value="friend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'friend') selected @endif>Friend</option>
                    <option value="girlfriend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'girlfriend') selected @endif>Girlfriend</option>
                    <option value="granddaughter" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'granddaughter') selected @endif>Granddaughter
                    </option>
                    <option value="grandson" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'grandson') selected @endif>Grandson</option>
                    <option value="husband" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'husband') selected @endif>Husband</option>
                    <option value="mother" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'mother') selected @endif>Mother</option>
                    <option value="neighbor" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'neighbor') selected @endif>Neighbor</option>
                    <option value="nephew" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'nephew') selected @endif>Nephew</option>
                    <option value="niece" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'niece') selected @endif>Niece</option>
                    <option value="roommate" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'roommate') selected @endif>Roommate</option>
                    <option value="sister" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_3 === 'sister') selected @endif>Sister</option>

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
                    <input value="{{ $charge_card_info->name_of_bank_3 ?? '' }}" name="name_of_bank_3" type="text"
                    class="form-control wizard-required" id="name_of_bank_3">
                <p class="text_danger form_error"></p>
                {{-- <select class="form-control" name="name_of_bank_3" id="name_of_bank_4">
                    <option></option>
                    <option value="american_express" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_3 == 'american_express') selected @endif>American
                        Express</option>
                    <option value="bank_of_america" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_3 == 'bank_of_america') selected @endif>Bank of America
                    </option>
                    <option value="barclays" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_3 == 'barclays') selected @endif>Barclays</option>
                    <option value="capital_one" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_3 == 'capital_one') selected @endif>Capital One
                    </option>
                    <option value="chase" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_3 == 'chase') selected @endif>Chase</option>
                    <option value="citibank" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_3 == 'citibank') selected @endif>Citibank</option>
                    <option value="navy_federal_credit_union" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_3 == 'navy_federal_credit_union') selected @endif>Navy
                        Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_3 == 'pentagon_federal_credit_union') selected @endif>
                        Pentagon Federal Credit Union</option>
                    <option value="pnc" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_3 == 'pnc') selected @endif>PNC</option>
                    <option value="us_bank" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_3 == 'us_bank') selected @endif>U.S. Bank</option>
                    <option value="usaa" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_3 == 'usaa') selected @endif>USAA</option>
                    <option value="wells_fargo" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_3 == 'wells_fargo') selected @endif>Wells Fargo
                    </option>

                </select>
                <p class="text_danger form_error"></p> --}}
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="expiry_date_3" value="{{ $charge_card_info->expiry_date_3 ?? date('Y-m-d') }}"
                    type="date" class="form-control wizard-required" id="expiry_date_3">
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
        {{-- <div class="col-md-6 col-lg-6">
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
        </div> --}}



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="card_number_4" value="{{ $charge_card_info->card_number_4 ?? '' }}" type="text"
                    class="form-control wizard-required" id="card_number_4">
                <label for="card_number_4" class="wizard-form-text-label">7.41 Card Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="nickname_4" value="{{ $charge_card_info->nickname_4 ?? '' }}" type="text"
                    class="form-control wizard-required" id="nickname_4">
                <label for="nickname_4" class="wizard-form-text-label">7.42 Nickname</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_first_name_4" value="{{ $charge_card_info->primary_first_name_4 ?? '' }}"
                    type="text" class="form-control wizard-required" id="primary_first_name_4">
                <label for="primary_first_name_4" class="wizard-form-text-label">7.43 Primary Card Holder First
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_mi_4" value="{{ $charge_card_info->primary_mi_4 ?? '' }}" type="text"
                    class="form-control wizard-required" id="primary_mi_4">
                <label for="primary_mi_4" class="wizard-form-text-label">7.44 Primary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_last_name_4" value="{{ $charge_card_info->primary_last_name_4 ?? '' }}"
                    type="text" class="form-control wizard-required" id="primary_last_name_4">
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
                <input onclick="check_card_has_secondary_auth_user_4()"
                    @if (!empty($charge_card_info) && $charge_card_info->card_has_secondary_auth_user_4 == 1) checked @endif name="card_has_secondary_auth_user_4"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_4()"
                    @if (empty($charge_card_info) || $charge_card_info->card_has_secondary_auth_user_4 == 0) checked @endif name="card_has_secondary_auth_user_4"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>
    <div class="row" id="secondary_card_holder_div_4"
        @if (empty($charge_card_info) || $charge_card_info->card_has_secondary_auth_user_4 == 0) style="display: none" @endif>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_first_name_4" value="{{ $charge_card_info->secondary_first_name_4 ?? '' }}"
                    type="text" class="form-control wizard-required" id="secondary_first_name_4">
                <label for="secondary_first_name_4" class="wizard-form-text-label">7.47 Secondary Card Holder First
                    Name </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_last_name_4" value="{{ $charge_card_info->secondary_last_name_4 ?? '' }}"
                    type="text" class="form-control wizard-required" id="secondary_last_name_4">
                <label for="secondary_last_name_4" class="wizard-form-text-label">7.48 Secondary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_mi_4" value="{{ $charge_card_info->secondary_mi_4 ?? '' }}" type="text"
                    class="form-control wizard-required" id="secondary_mi_4">
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
                    <option value="boyfriend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'boyfriend') selected @endif>Boyfriend</option>
                    <option value="brother" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'brother') selected @endif>Brother</option>
                    <option value="daughter" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'daughter') selected @endif>Daughter</option>
                    <option value="father" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'father') selected @endif>Father</option>
                    <option value="friend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'friend') selected @endif>Friend</option>
                    <option value="girlfriend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'girlfriend') selected @endif>Girlfriend</option>
                    <option value="granddaughter" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'granddaughter') selected @endif>Granddaughter
                    </option>
                    <option value="grandson" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'grandson') selected @endif>Grandson</option>
                    <option value="husband" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'husband') selected @endif>Husband</option>
                    <option value="mother" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'mother') selected @endif>Mother</option>
                    <option value="neighbor" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'neighbor') selected @endif>Neighbor</option>
                    <option value="nephew" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'nephew') selected @endif>Nephew</option>
                    <option value="niece" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'niece') selected @endif>Niece</option>
                    <option value="roommate" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'roommate') selected @endif>Roommate</option>
                    <option value="sister" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_4 === 'sister') selected @endif>Sister</option>

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
                    <input value="{{ $charge_card_info->name_of_bank_4 ?? '' }}" name="name_of_bank_4" type="text"
                    class="form-control wizard-required" id="name_of_bank_4">
                <p class="text_danger form_error"></p>
                {{-- <select class="form-control" name="name_of_bank_4" id="name_of_bank_4">
                    <option></option>
                    <option value="american_express" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_4 == 'american_express') selected @endif>American
                        Express</option>
                    <option value="bank_of_america" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_4 == 'bank_of_america') selected @endif>Bank of
                        America</option>
                    <option value="barclays" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_4 == 'barclays') selected @endif>Barclays</option>
                    <option value="capital_one" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_4 == 'capital_one') selected @endif>Capital One
                    </option>
                    <option value="chase" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_4 == 'chase') selected @endif>Chase</option>
                    <option value="citibank" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_4 == 'citibank') selected @endif>Citibank</option>
                    <option value="navy_federal_credit_union" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_4 == 'navy_federal_credit_union') selected @endif>
                        Navy Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union"
                        @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_4 == 'pentagon_federal_credit_union') selected @endif>Pentagon Federal Credit Union</option>
                    <option value="pnc" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_4 == 'pnc') selected @endif>PNC</option>
                    <option value="us_bank" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_4 == 'us_bank') selected @endif>U.S. Bank</option>
                    <option value="usaa" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_4 == 'usaa') selected @endif>USAA</option>
                    <option value="wells_fargo" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_4 == 'wells_fargo') selected @endif>Wells Fargo
                    </option>

                </select>
                <p class="text_danger form_error"></p> --}}
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="expiry_date_4" value="{{ $charge_card_info->expiry_date_4 ?? date('Y-m-d') }}"
                    type="date" class="form-control wizard-required" id="expiry_date_4">
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
        {{-- <div class="col-md-6 col-lg-6">
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
        </div> --}}



        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="card_number_5" value="{{ $charge_card_info->card_number_5 ?? '' }}" type="text"
                    class="form-control wizard-required" id="card_number_5">
                <label for="card_number_5" class="wizard-form-text-label">7.54 Card Number</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="nickname_5" value="{{ $charge_card_info->nickname_5 ?? '' }}" type="text"
                    class="form-control wizard-required" id="nickname_5">
                <label for="nickname_5" class="wizard-form-text-label">7.55 Nickname</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_first_name_5" value="{{ $charge_card_info->primary_first_name_5 ?? '' }}"
                    type="text" class="form-control wizard-required" id="primary_first_name_5">
                <label for="primary_first_name_5" class="wizard-form-text-label">7.56 Primary Card Holder First
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_mi_5" value="{{ $charge_card_info->primary_mi_5 ?? '' }}" type="text"
                    class="form-control wizard-required" id="primary_mi_5">
                <label for="primary_mi_5" class="wizard-form-text-label">7.57 Primary Card Holder MI</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="primary_last_name_5" value="{{ $charge_card_info->primary_last_name_5 ?? '' }}"
                    type="text" class="form-control wizard-required" id="primary_last_name_5">
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
                <input onclick="check_card_has_secondary_auth_user_5()"
                    @if (!empty($charge_card_info) && $charge_card_info->card_has_secondary_auth_user_5 == 1) checked @endif name="card_has_secondary_auth_user_5"
                    value="1" id="radio1" type="radio">
                <label for="radio1">Yes</label>
            </div>
            <div class="wizard-form-radio">
                <input onclick="check_card_has_secondary_auth_user_5()"
                    @if (empty($charge_card_info) || $charge_card_info->card_has_secondary_auth_user_5 == 0) checked @endif name="card_has_secondary_auth_user_5"
                    value="0" id="radio2" type="radio">
                <label for="radio2">No</label>
            </div>
        </div>
    </div>
    <div class="row" id="secondary_card_holder_div_5"
        @if (empty($charge_card_info) || $charge_card_info->card_has_secondary_auth_user_5 == 0) style="display: none" @endif>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_first_name_5" value="{{ $charge_card_info->secondary_first_name_5 ?? '' }}"
                    type="text" class="form-control wizard-required" id="secondary_first_name_5">
                <label for="secondary_first_name_5" class="wizard-form-text-label">7.60 Secondary Card Holder First
                    Name </label>
                <p class="text_danger form_error"></p>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_last_name_5" value="{{ $charge_card_info->secondary_last_name_5 ?? '' }}"
                    type="text" class="form-control wizard-required" id="secondary_last_name_5">
                <label for="secondary_last_name_5" class="wizard-form-text-label">7.61 Secondary Card Holder Last
                    Name</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="secondary_mi_5" value="{{ $charge_card_info->secondary_mi_5 ?? '' }}" type="text"
                    class="form-control wizard-required" id="secondary_mi_5">
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
                    <option value="boyfriend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'boyfriend') selected @endif>Boyfriend</option>
                    <option value="brother" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'brother') selected @endif>Brother</option>
                    <option value="daughter" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'daughter') selected @endif>Daughter</option>
                    <option value="father" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'father') selected @endif>Father</option>
                    <option value="friend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'friend') selected @endif>Friend</option>
                    <option value="girlfriend" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'girlfriend') selected @endif>Girlfriend
                    </option>
                    <option value="granddaughter" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'granddaughter') selected @endif>Granddaughter
                    </option>
                    <option value="grandson" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'grandson') selected @endif>Grandson</option>
                    <option value="husband" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'husband') selected @endif>Husband</option>
                    <option value="mother" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'mother') selected @endif>Mother</option>
                    <option value="neighbor" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'neighbor') selected @endif>Neighbor</option>
                    <option value="nephew" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'nephew') selected @endif>Nephew</option>
                    <option value="niece" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'niece') selected @endif>Niece</option>
                    <option value="roommate" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'roommate') selected @endif>Roommate</option>
                    <option value="sister" @if (!empty($charge_card_info) && $charge_card_info->secondary_card_holder_relationship_5 === 'sister') selected @endif>Sister</option>

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
                    <input value="{{ $charge_card_info->name_of_bank_5 ?? '' }}" name="name_of_bank_5" type="text"
                    class="form-control wizard-required" id="name_of_bank_5">
                <p class="text_danger form_error"></p>
                {{-- <select class="form-control" name="name_of_bank_5" id="name_of_bank_5">
                    <option></option>
                    <option value="american_express" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_5 == 'american_express') selected @endif>American
                        Express</option>
                    <option value="bank_of_america" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_5 == 'bank_of_america') selected @endif>Bank of
                        America</option>
                    <option value="barclays" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_5 == 'barclays') selected @endif>Barclays</option>
                    <option value="capital_one" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_5 == 'capital_one') selected @endif>Capital One
                    </option>
                    <option value="chase" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_5 == 'chase') selected @endif>Chase</option>
                    <option value="citibank" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_5 == 'citibank') selected @endif>Citibank</option>
                    <option value="navy_federal_credit_union" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_5 == 'navy_federal_credit_union') selected @endif>
                        Navy Federal Credit Union</option>
                    <option value="pentagon_federal_credit_union"
                        @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_5 == 'pentagon_federal_credit_union') selected @endif>Pentagon Federal Credit Union</option>
                    <option value="pnc" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_5 == 'pnc') selected @endif>PNC</option>
                    <option value="us_bank" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_5 == 'us_bank') selected @endif>U.S. Bank</option>
                    <option value="usaa" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_5 == 'usaa') selected @endif>USAA</option>
                    <option value="wells_fargo" @if (!empty($charge_card_info) && $charge_card_info->name_of_bank_5 == 'wells_fargo') selected @endif>Wells Fargo
                    </option>

                </select>
                <p class="text_danger form_error"></p> --}}
            </div>
        </div>

        <div class="col-md-4 col-lg-4">
            <div class="form-group">
                <input name="expiry_date_5" value="{{ $charge_card_info->expiry_date_5 ?? date('Y-m-d') }}"
                    type="date" class="form-control wizard-required" id="expiry_date_5">
                <label for="expiry_date_5" class="wizard-form-text-label">7.65 Expiry Date</label>
                <p class="text_danger form_error"></p>
            </div>
        </div>


    </div>
    {{-- Card 5::END --}}



    <div class="form-group clearfix">
        <a href="javascript:;" onclick="returnLater('fieldset_seven','consumer_this_is_me')"
            class="form-wizard-return-btn float-left mr-3">Pause & Return Later</a>

        {{-- <a href="javascript:;" onclick="previousStep('protect_cards_bar','employment_bar')" class="form-wizard-previous-btn float-left">Previous</a> --}}
        <a onclick="checkFieldSetChargesCard()" id="charge_card_information_button" href="javascript:;"
            class="form-wizard-next-btn  float-right">Save & Continue</a>
    </div>
</fieldset>
