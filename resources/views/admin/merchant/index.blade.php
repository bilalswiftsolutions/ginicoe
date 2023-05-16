@extends('admin.admin_layouts')

@section('admin_content')
    <div class="card shadow mb-4">


        <div class="col-lg-12 col-md-12">
            <form id="update_my_info_form" action="{{route('admin.merchant.update_my_info.store')}}" method="post" role="form">
               @csrf
                <div class="form-wizard">

                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="business_legal_name" value="{{optional($merchant)->business_legal_name ?? ''}}" type="text"
                                    class="form-control wizard-required" id="business_legal_name">
                                <label for="business_legal_name" class="wizard-form-text-label">1. Business Legal Coordinates</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="business_dba_name" value="{{optional($merchant)->business_dba_name ?? ''}}" type="text"
                                    class="form-control wizard-required" id="business_dba_name">
                                <label for="business_dba_name" class="wizard-form-text-label">2. Business DBA Name (if
                                    different than legal name)</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="business_legal_address"   value="{{optional($merchant)->business_legal_address ?? ''}}" type="text"
                                    class="form-control wizard-required" id="business_legal_address">
                                <label for="business_legal_address" class="wizard-form-text-label">3. Business Legal
                                    Address</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>



                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <select class="form-control" name="state_legal" id="state_legal">
                                    <option>Select State</option>
                                    <option value="Alabama" {{ optional($merchant)->state_legal == 'Alabama' ? 'selected' : '' }}>Alabama</option>
                                    <option value="Alaska" {{ optional($merchant)->state_legal == 'Alaska' ? 'selected' : '' }}>Alaska</option>
                                    <option value="Arizona" {{ optional($merchant)->state_legal == 'Arizona' ? 'selected' : '' }}>Arizona</option>
                                    <option value="Arkansas" {{ optional($merchant)->state_legal == 'Arkansas' ? 'selected' : '' }}>Arkansas</option>
                                    <option value="California" {{ optional($merchant)->state_legal == 'California' ? 'selected' : '' }}>California</option>
                                    <option value="Colorado" {{ optional($merchant)->state_legal == 'Colorado' ? 'selected' : '' }}>Colorado</option>
                                    <option value="Connecticut" {{ optional($merchant)->state_legal == 'Connecticut' ? 'selected' : '' }}>Connecticut</option>
                                    <option value="Delaware" {{ optional($merchant)->state_legal == 'Delaware' ? 'selected' : '' }}>Delaware</option>
                                    <option value="District Of Columbia" {{ optional($merchant)->state_legal == 'District Of Columbia' ? 'selected' : '' }}>District Of Columbia</option>
                                    <option value="Florida" {{ optional($merchant)->state_legal == 'Florida' ? 'selected' : '' }}>Florida</option>
                                    <option value="Georgia" {{ optional($merchant)->state_legal == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                    <option value="Hawaii" {{ optional($merchant)->state_legal == 'Hawaii' ? 'selected' : '' }}>Hawaii</option>
                                    <option value="Idaho" {{ optional($merchant)->state_legal == 'Idaho' ? 'selected' : '' }}>Idaho</option>
                                    <option value="Illinois" {{ optional($merchant)->state_legal == 'Illinois' ? 'selected' : '' }}>Illinois</option>
                                    <option value="Indiana" {{ optional($merchant)->state_legal == 'Indiana' ? 'selected' : '' }}>Indiana</option>
                                    <option value="Iowa" {{ optional($merchant)->state_legal == 'Iowa' ? 'selected' : '' }}>Iowa</option>
                                    <option value="Kansas" {{ optional($merchant)->state_legal == 'Kansas' ? 'selected' : '' }}>Kansas</option>
                                    <option value="Kentucky" {{ optional($merchant)->state_legal == 'Kentucky' ? 'selected' : '' }}>Kentucky</option>
                                    <option value="Louisiana" {{ optional($merchant)->state_legal == 'Louisiana' ? 'selected' : '' }}>Louisiana</option>
                                    <option value="Maine" {{ optional($merchant)->state_legal == 'Maine' ? 'selected' : '' }}>Maine</option>
                                    <option value="Maryland" {{ optional($merchant)->state_legal == 'Maryland' ? 'selected' : '' }}>Maryland</option>
                                    <option value="Massachusetts" {{ optional($merchant)->state_legal == 'Massachusetts' ? 'selected' : '' }}>Massachusetts</option>
                                    <option value="Michigan" {{ optional($merchant)->state_legal == 'Michigan' ? 'selected' : '' }}>Michigan</option>
                                    <option value="Minnesota" {{ optional($merchant)->state_legal == 'Minnesota' ? 'selected' : '' }}>Minnesota</option>
                                    <option value="Mississippi" {{ optional($merchant)->state_legal == 'Mississippi' ? 'selected' : '' }}>Mississippi</option>
                                    <option value="Missouri" {{ optional($merchant)->state_legal == 'Missouri' ? 'selected' : '' }}>Missouri</option>
                                    <option value="Montana" {{ optional($merchant)->state_legal == 'Montana' ? 'selected' : '' }}>Montana</option>
                                    <option value="Nebraska" {{ optional($merchant)->state_legal == 'Nebraska' ? 'selected' : '' }}>Nebraska</option>
                                    <option value="Nevada" {{ optional($merchant)->state_legal == 'Nevada' ? 'selected' : '' }}>Nevada</option>
                                    <option value="New Hampshire" {{ optional($merchant)->state_legal == 'New Hampshire' ? 'selected' : '' }}>New Hampshire</option>
                                    <option value="New Jersey" {{ optional($merchant)->state_legal == 'New Jersey' ? 'selected' : '' }}>New Jersey</option>
                                    <option value="New Mexico" {{ optional($merchant)->state_legal == 'New Mexico' ? 'selected' : '' }}>New Mexico</option>
                                    <option value="New York" {{ optional($merchant)->state_legal == 'New York' ? 'selected' : '' }}>New York</option>
                                    <option value="North Carolina" {{ optional($merchant)->state_legal == 'North Carolina' ? 'selected' : '' }}>North Carolina</option>
                                    <option value="North Dakota" {{ optional($merchant)->state_legal == 'North Dakota' ? 'selected' : '' }}>North Dakota</option>
                                    <option value="Ohio" {{ optional($merchant)->state_legal == 'Ohio' ? 'selected' : '' }}>Ohio</option>
                                    <option value="Oklahoma" {{ optional($merchant)->state_legal == 'Oklahoma' ? 'selected' : '' }}>Oklahoma</option>
                                    <option value="Oregon" {{ optional($merchant)->state_legal == 'Oregon' ? 'selected' : '' }}>Oregon</option>
                                    <option value="Pennsylvania" {{ optional($merchant)->state_legal == 'Pennsylvania' ? 'selected' : '' }}>Pennsylvania</option>
                                    <option value="Rhode Island" {{ optional($merchant)->state_legal == 'Rhode Island' ? 'selected' : '' }}>Rhode Island</option>
                                    <option value="South Carolina" {{ optional($merchant)->state_legal == 'South Carolina' ? 'selected' : '' }}>South Carolina</option>
                                    <option value="South Dakota" {{ optional($merchant)->state_legal == 'South Dakota' ? 'selected' : '' }}>South Dakota</option>
                                    <option value="Tennessee" {{ optional($merchant)->state_legal == 'Tennessee' ? 'selected' : '' }}>Tennessee</option>
                                    <option value="Texas" {{ optional($merchant)->state_legal == 'Texas' ? 'selected' : '' }}>Texas</option>
                                    <option value="Utah" {{ optional($merchant)->state_legal == 'Utah' ? 'selected' : '' }}>Utah</option>
                                    <option value="Vermont" {{ optional($merchant)->state_legal == 'Vermont' ? 'selected' : '' }}>Vermont</option>
                                    <option value="Virginia" {{ optional($merchant)->state_legal == 'Virginia' ? 'selected' : '' }}>Virginia</option>
                                    <option value="Washington" {{ optional($merchant)->state_legal == 'Washington' ? 'selected' : '' }}>Washington</option>
                                    <option value="West Virginia"{{ optional($merchant)->state_legal == 'West Virginia' ? 'selected' : '' }}>West Virginia</option>
                                    <option value="Wisconsin" {{ optional($merchant)->state_legal == 'Wisconsin' ? 'selected' : '' }}>Wisconsin</option>
                                    <option value="Wyoming" {{ optional($merchant)->state_legal == 'Wyoming' ? 'selected' : '' }}>Wyoming</option>
                                    </select>
                                
                                <label for="state_legal" class="wizard-form-text-label">4. State</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">

                                <select class="form-control" name="city_legal" id="city_legal" >
                                    <option value="{{optional($merchant)->city_legal}}" selected>{{optional($merchant)->city_legal}}</option>

                                </select>
                                <label for="city_legal" class="wizard-form-text-label">5. City</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="zip_legal"   value="{{optional($merchant)->zip_legal ?? ''}}" type="text"
                                    class="form-control wizard-required" id="zip_legal">
                                <label for="zip_legal" class="wizard-form-text-label">6. Zip</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <label style="font-weight:bold; font-size:150%">Business Physical
                                    Address
                                </label>

                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="business_physical_address"   value="{{optional($merchant)->business_physical_address ?? ''}}" type="text"
                                    class="form-control wizard-required" id="business_physical_address">
                                <label for="business_physical_address" class="wizard-form-text-label">7. Business Physical
                                    Address (if different than legal address)</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>




                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="zip_physical"   value="{{optional($merchant)->zip_physical ?? ''}}" type="text"
                                    class="form-control wizard-required" id="zip_physical">
                                <label for="zip_physical" class="wizard-form-text-label">8. Zip</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <select class="form-control" name="state_physical" id="state_physical" >
                                    <option>Select State</option>
                                    <option value="Alabama" {{ optional($merchant)->state_physical == 'Alabama' ? 'selected' : '' }}>Alabama</option>
                                    <option value="Alaska" {{ optional($merchant)->state_physical == 'Alaska' ? 'selected' : '' }}>Alaska</option>
                                    <option value="Arizona" {{ optional($merchant)->state_physical == 'Arizona' ? 'selected' : '' }}>Arizona</option>
                                    <option value="Arkansas" {{ optional($merchant)->state_physical == 'Arkansas' ? 'selected' : '' }}>Arkansas</option>
                                    <option value="California" {{ optional($merchant)->state_physical == 'California' ? 'selected' : '' }}>California</option>
                                    <option value="Colorado" {{ optional($merchant)->state_physical == 'Colorado' ? 'selected' : '' }}>Colorado</option>
                                    <option value="Connecticut" {{ optional($merchant)->state_physical == 'Connecticut' ? 'selected' : '' }}>Connecticut</option>
                                    <option value="Delaware" {{ optional($merchant)->state_physical == 'Delaware' ? 'selected' : '' }}>Delaware</option>
                                    <option value="District Of Columbia" {{ optional($merchant)->state_physical == 'District Of Columbia' ? 'selected' : '' }}>District Of Columbia</option>
                                    <option value="Florida" {{ optional($merchant)->state_physical == 'Florida' ? 'selected' : '' }}>Florida</option>
                                    <option value="Georgia" {{ optional($merchant)->state_physical == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                    <option value="Hawaii" {{ optional($merchant)->state_physical == 'Hawaii' ? 'selected' : '' }}>Hawaii</option>
                                    <option value="Idaho" {{ optional($merchant)->state_physical == 'Idaho' ? 'selected' : '' }}>Idaho</option>
                                    <option value="Illinois" {{ optional($merchant)->state_physical == 'Illinois' ? 'selected' : '' }}>Illinois</option>
                                    <option value="Indiana" {{ optional($merchant)->state_physical == 'Indiana' ? 'selected' : '' }}>Indiana</option>
                                    <option value="Iowa" {{ optional($merchant)->state_physical == 'Iowa' ? 'selected' : '' }}>Iowa</option>
                                    <option value="Kansas" {{ optional($merchant)->state_physical == 'Kansas' ? 'selected' : '' }}>Kansas</option>
                                    <option value="Kentucky" {{ optional($merchant)->state_physical == 'Kentucky' ? 'selected' : '' }}>Kentucky</option>
                                    <option value="Louisiana" {{ optional($merchant)->state_physical == 'Louisiana' ? 'selected' : '' }}>Louisiana</option>
                                    <option value="Maine" {{ optional($merchant)->state_physical == 'Maine' ? 'selected' : '' }}>Maine</option>
                                    <option value="Maryland" {{ optional($merchant)->state_physical == 'Maryland' ? 'selected' : '' }}>Maryland</option>
                                    <option value="Massachusetts" {{ optional($merchant)->state_physical == 'Massachusetts' ? 'selected' : '' }}>Massachusetts</option>
                                    <option value="Michigan" {{ optional($merchant)->state_physical == 'Michigan' ? 'selected' : '' }}>Michigan</option>
                                    <option value="Minnesota" {{ optional($merchant)->state_physical == 'Minnesota' ? 'selected' : '' }}>Minnesota</option>
                                    <option value="Mississippi" {{ optional($merchant)->state_physical == 'Mississippi' ? 'selected' : '' }}>Mississippi</option>
                                    <option value="Missouri" {{ optional($merchant)->state_physical == 'Missouri' ? 'selected' : '' }}>Missouri</option>
                                    <option value="Montana" {{ optional($merchant)->state_physical == 'Montana' ? 'selected' : '' }}>Montana</option>
                                    <option value="Nebraska" {{ optional($merchant)->state_physical == 'Nebraska' ? 'selected' : '' }}>Nebraska</option>
                                    <option value="Nevada" {{ optional($merchant)->state_physical == 'Nevada' ? 'selected' : '' }}>Nevada</option>
                                    <option value="New Hampshire" {{ optional($merchant)->state_physical == 'New Hampshire' ? 'selected' : '' }}>New Hampshire</option>
                                    <option value="New Jersey" {{ optional($merchant)->state_physical == 'New Jersey' ? 'selected' : '' }}>New Jersey</option>
                                    <option value="New Mexico" {{ optional($merchant)->state_physical == 'New Mexico' ? 'selected' : '' }}>New Mexico</option>
                                    <option value="New York" {{ optional($merchant)->state_physical == 'New York' ? 'selected' : '' }}>New York</option>
                                    <option value="North Carolina" {{ optional($merchant)->state_physical == 'North Carolina' ? 'selected' : '' }}>North Carolina</option>
                                    <option value="North Dakota" {{ optional($merchant)->state_physical == 'North Dakota' ? 'selected' : '' }}>North Dakota</option>
                                    <option value="Ohio" {{ optional($merchant)->state_physical == 'Ohio' ? 'selected' : '' }}>Ohio</option>
                                    <option value="Oklahoma" {{ optional($merchant)->state_physical == 'Oklahoma' ? 'selected' : '' }}>Oklahoma</option>
                                    <option value="Oregon" {{ optional($merchant)->state_physical == 'Oregon' ? 'selected' : '' }}>Oregon</option>
                                    <option value="Pennsylvania" {{ optional($merchant)->state_physical == 'Pennsylvania' ? 'selected' : '' }}>Pennsylvania</option>
                                    <option value="Rhode Island" {{ optional($merchant)->state_physical == 'Rhode Island' ? 'selected' : '' }}>Rhode Island</option>
                                    <option value="South Carolina" {{ optional($merchant)->state_physical == 'South Carolina' ? 'selected' : '' }}>South Carolina</option>
                                    <option value="South Dakota" {{ optional($merchant)->state_physical == 'South Dakota' ? 'selected' : '' }}>South Dakota</option>
                                    <option value="Tennessee" {{ optional($merchant)->state_physical == 'Tennessee' ? 'selected' : '' }}>Tennessee</option>
                                    <option value="Texas" {{ optional($merchant)->state_physical == 'Texas' ? 'selected' : '' }}>Texas</option>
                                    <option value="Utah" {{ optional($merchant)->state_physical == 'Utah' ? 'selected' : '' }}>Utah</option>
                                    <option value="Vermont" {{ optional($merchant)->state_physical == 'Vermont' ? 'selected' : '' }}>Vermont</option>
                                    <option value="Virginia" {{ optional($merchant)->state_physical == 'Virginia' ? 'selected' : '' }}>Virginia</option>
                                    <option value="Washington" {{ optional($merchant)->state_physical == 'Washington' ? 'selected' : '' }}>Washington</option>
                                    <option value="West Virginia"{{ optional($merchant)->state_physical == 'West Virginia' ? 'selected' : '' }}>West Virginia</option>
                                    <option value="Wisconsin" {{ optional($merchant)->state_physical == 'Wisconsin' ? 'selected' : '' }}>Wisconsin</option>
                                    <option value="Wyoming" {{ optional($merchant)->state_physical == 'Wyoming' ? 'selected' : '' }}>Wyoming</option>

                                </select>
                                <label for="state_physical" class="wizard-form-text-label">9. State</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <select class="form-control" name="city_physical" id="city_physical" >
                                    <option value="{{optional($merchant)->city_physical}}" selected>{{optional($merchant)->city_physical}}</option>

                                </select>

                                <label for="city_physical" class="wizard-form-text-label">10. City</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="first_name"   value="{{optional($merchant)->first_name ?? ''}}" type="text"
                                    class="form-control wizard-required" id="first_name">
                                <label for="first_name" class="wizard-form-text-label">11. First Name of New Member</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="mi"   value="{{optional($merchant)->mi ?? ''}}" type="text" class="form-control wizard-required"
                                    id="mi">
                                <label for="mi" class="wizard-form-text-label">12. MI</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="last_name"   value="{{optional($merchant)->last_name ?? ''}}" type="text"
                                    class="form-control wizard-required" id="last_name">
                                <label for="last_name" class="wizard-form-text-label">13. Last Name</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="telephone_number"   value="{{optional($merchant)->telephone_number ?? ''}}" type="text"
                                    class="form-control wizard-required" id="telephone_number">
                                <label for="telephone_number" class="wizard-form-text-label">14. Telephone Number</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="toll_free_number"   value="{{optional($merchant)->toll_free_number ?? ''}}" type="text"
                                    class="form-control wizard-required" id="toll_free_number">
                                <label for="toll_free_number" class="wizard-form-text-label">15. Toll Free Number (if
                                    applicable)</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="fax_number"   value="{{optional($merchant)->fax_number ?? ''}}" type="text"
                                    class="form-control wizard-required" id="fax_number">
                                <label for="fax_number" class="wizard-form-text-label">16. Fax Number</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="mobile_phone"   value="{{optional($merchant)->mobile_phone ?? ''}}" type="text"
                                    class="form-control wizard-required" id="mobile_phone">
                                <label for="mobile_phone" class="wizard-form-text-label">17. Mobile / Cell Phone (if
                                    applicable)</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="email_address"  value="{{optional($merchant)->email_address ?? ''}}" type="email"
                                    class="form-control wizard-required" id="email_address">
                                <label for="email_address" class="wizard-form-text-label">18. Email Address</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="federal_tax_id"   value="{{optional($merchant)->federal_tax_id ?? ''}}" type="text"
                                    class="form-control wizard-required" id="federal_tax_id">
                                <label for="federal_tax_id" class="wizard-form-text-label">19. Federal Tax ID#</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <label style="font-weight:bold; font-size:150%">Ownership Information
                                </label>

                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="owner_partner"   value="{{optional($merchant)->owner_partner ?? ''}}" type="text"
                                    class="form-control wizard-required" id="owner_partner">
                                <label for="owner_partner" class="wizard-form-text-label">20. Owner / Partner</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="ownership_first_name"   value="{{optional($merchant)->ownership_first_name ?? ''}}" type="text"
                                    class="form-control wizard-required" id="ownership_first_name">
                                <label for="ownership_first_name" class="wizard-form-text-label">21. First Name</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="ownership_mi"   value="{{optional($merchant)->ownership_mi ?? ''}}" type="text"
                                    class="form-control wizard-required" id="ownership_mi">
                                <label for="ownership_mi" class="wizard-form-text-label">22. MI</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="ownership_last_name"   value="{{optional($merchant)->ownership_last_name ?? ''}}" type="text"
                                    class="form-control wizard-required" id="ownership_last_name">
                                <label for="ownership_last_name" class="wizard-form-text-label">23. Last Name</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="ownership_ssn"   value="{{optional($merchant)->ownership_ssn ?? ''}}" type="text"
                                    class="form-control wizard-required" id="ownership_ssn">
                                <label for="ownership_ssn" class="wizard-form-text-label">24. Social Security
                                    Number</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="ownership_title"   value="{{optional($merchant)->ownership_title ?? ''}}" type="text"
                                    class="form-control wizard-required" id="ownership_title">
                                <label for="ownership_title" class="wizard-form-text-label">25. Title in Business</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="ownership_telephone"   value="{{optional($merchant)->ownership_telephone ?? ''}}" type="text"
                                    class="form-control wizard-required" id="ownership_telephone">
                                <label for="ownership_telephone" class="wizard-form-text-label">26. Telephone
                                    Number</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="ownership_percentage"    value="{{optional($merchant)->ownership_percentage ?? ''}}" type="number"
                                    class="form-control wizard-required" id="ownership_percentage">
                                <label for="ownership_percentage" class="wizard-form-text-label">27. Ownership
                                    Percentage</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="ownership_dob"   value="{{optional($merchant)->ownership_dob ?? ''}}" type="date"
                                    class="form-control wizard-required" id="ownership_dob">
                                <label for="ownership_dob" class="wizard-form-text-label">28. DOB</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="ownership_home_address"   value="{{optional($merchant)->ownership_home_address ?? ''}}" type="text"
                                    class="form-control wizard-required" id="ownership_home_address">
                                <label for="ownership_home_address" class="wizard-form-text-label">29. Home
                                    Address</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <select class="form-control" name="ownership_state" id="ownership_state" >
                                    <option>Select State</option>
                                    <option value="Alabama" {{ optional($merchant)->ownership_state == 'Alabama' ? 'selected' : '' }}>Alabama</option>
                                    <option value="Alaska" {{ optional($merchant)->ownership_state == 'Alaska' ? 'selected' : '' }}>Alaska</option>
                                    <option value="Arizona" {{ optional($merchant)->ownership_state == 'Arizona' ? 'selected' : '' }}>Arizona</option>
                                    <option value="Arkansas" {{ optional($merchant)->ownership_state == 'Arkansas' ? 'selected' : '' }}>Arkansas</option>
                                    <option value="California" {{ optional($merchant)->ownership_state == 'California' ? 'selected' : '' }}>California</option>
                                    <option value="Colorado" {{ optional($merchant)->ownership_state == 'Colorado' ? 'selected' : '' }}>Colorado</option>
                                    <option value="Connecticut" {{ optional($merchant)->ownership_state == 'Connecticut' ? 'selected' : '' }}>Connecticut</option>
                                    <option value="Delaware" {{ optional($merchant)->ownership_state == 'Delaware' ? 'selected' : '' }}>Delaware</option>
                                    <option value="District Of Columbia" {{ optional($merchant)->ownership_state == 'District Of Columbia' ? 'selected' : '' }}>District Of Columbia</option>
                                    <option value="Florida" {{ optional($merchant)->ownership_state == 'Florida' ? 'selected' : '' }}>Florida</option>
                                    <option value="Georgia" {{ optional($merchant)->ownership_state == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                    <option value="Hawaii" {{ optional($merchant)->ownership_state == 'Hawaii' ? 'selected' : '' }}>Hawaii</option>
                                    <option value="Idaho" {{ optional($merchant)->ownership_state == 'Idaho' ? 'selected' : '' }}>Idaho</option>
                                    <option value="Illinois" {{ optional($merchant)->ownership_state == 'Illinois' ? 'selected' : '' }}>Illinois</option>
                                    <option value="Indiana" {{ optional($merchant)->ownership_state == 'Indiana' ? 'selected' : '' }}>Indiana</option>
                                    <option value="Iowa" {{ optional($merchant)->ownership_state == 'Iowa' ? 'selected' : '' }}>Iowa</option>
                                    <option value="Kansas" {{ optional($merchant)->ownership_state == 'Kansas' ? 'selected' : '' }}>Kansas</option>
                                    <option value="Kentucky" {{ optional($merchant)->ownership_state == 'Kentucky' ? 'selected' : '' }}>Kentucky</option>
                                    <option value="Louisiana" {{ optional($merchant)->ownership_state == 'Louisiana' ? 'selected' : '' }}>Louisiana</option>
                                    <option value="Maine" {{ optional($merchant)->ownership_state == 'Maine' ? 'selected' : '' }}>Maine</option>
                                    <option value="Maryland" {{ optional($merchant)->ownership_state == 'Maryland' ? 'selected' : '' }}>Maryland</option>
                                    <option value="Massachusetts" {{ optional($merchant)->ownership_state == 'Massachusetts' ? 'selected' : '' }}>Massachusetts</option>
                                    <option value="Michigan" {{ optional($merchant)->ownership_state == 'Michigan' ? 'selected' : '' }}>Michigan</option>
                                    <option value="Minnesota" {{ optional($merchant)->ownership_state == 'Minnesota' ? 'selected' : '' }}>Minnesota</option>
                                    <option value="Mississippi" {{ optional($merchant)->ownership_state == 'Mississippi' ? 'selected' : '' }}>Mississippi</option>
                                    <option value="Missouri" {{ optional($merchant)->ownership_state == 'Missouri' ? 'selected' : '' }}>Missouri</option>
                                    <option value="Montana" {{ optional($merchant)->ownership_state == 'Montana' ? 'selected' : '' }}>Montana</option>
                                    <option value="Nebraska" {{ optional($merchant)->ownership_state == 'Nebraska' ? 'selected' : '' }}>Nebraska</option>
                                    <option value="Nevada" {{ optional($merchant)->ownership_state == 'Nevada' ? 'selected' : '' }}>Nevada</option>
                                    <option value="New Hampshire" {{ optional($merchant)->ownership_state == 'New Hampshire' ? 'selected' : '' }}>New Hampshire</option>
                                    <option value="New Jersey" {{ optional($merchant)->ownership_state == 'New Jersey' ? 'selected' : '' }}>New Jersey</option>
                                    <option value="New Mexico" {{ optional($merchant)->ownership_state == 'New Mexico' ? 'selected' : '' }}>New Mexico</option>
                                    <option value="New York" {{ optional($merchant)->ownership_state == 'New York' ? 'selected' : '' }}>New York</option>
                                    <option value="North Carolina" {{ optional($merchant)->ownership_state == 'North Carolina' ? 'selected' : '' }}>North Carolina</option>
                                    <option value="North Dakota" {{ optional($merchant)->ownership_state == 'North Dakota' ? 'selected' : '' }}>North Dakota</option>
                                    <option value="Ohio" {{ optional($merchant)->ownership_state == 'Ohio' ? 'selected' : '' }}>Ohio</option>
                                    <option value="Oklahoma" {{ optional($merchant)->ownership_state == 'Oklahoma' ? 'selected' : '' }}>Oklahoma</option>
                                    <option value="Oregon" {{ optional($merchant)->ownership_state == 'Oregon' ? 'selected' : '' }}>Oregon</option>
                                    <option value="Pennsylvania" {{ optional($merchant)->ownership_state == 'Pennsylvania' ? 'selected' : '' }}>Pennsylvania</option>
                                    <option value="Rhode Island" {{ optional($merchant)->ownership_state == 'Rhode Island' ? 'selected' : '' }}>Rhode Island</option>
                                    <option value="South Carolina" {{ optional($merchant)->ownership_state == 'South Carolina' ? 'selected' : '' }}>South Carolina</option>
                                    <option value="South Dakota" {{ optional($merchant)->ownership_state == 'South Dakota' ? 'selected' : '' }}>South Dakota</option>
                                    <option value="Tennessee" {{ optional($merchant)->ownership_state == 'Tennessee' ? 'selected' : '' }}>Tennessee</option>
                                    <option value="Texas" {{ optional($merchant)->ownership_state == 'Texas' ? 'selected' : '' }}>Texas</option>
                                    <option value="Utah" {{ optional($merchant)->ownership_state == 'Utah' ? 'selected' : '' }}>Utah</option>
                                    <option value="Vermont" {{ optional($merchant)->ownership_state == 'Vermont' ? 'selected' : '' }}>Vermont</option>
                                    <option value="Virginia" {{ optional($merchant)->ownership_state == 'Virginia' ? 'selected' : '' }}>Virginia</option>
                                    <option value="Washington" {{ optional($merchant)->ownership_state == 'Washington' ? 'selected' : '' }}>Washington</option>
                                    <option value="West Virginia"{{ optional($merchant)->ownership_state == 'West Virginia' ? 'selected' : '' }}>West Virginia</option>
                                    <option value="Wisconsin" {{ optional($merchant)->ownership_state == 'Wisconsin' ? 'selected' : '' }}>Wisconsin</option>
                                    <option value="Wyoming" {{ optional($merchant)->ownership_state == 'Wyoming' ? 'selected' : '' }}>Wyoming</option>

                                </select>
                                <label for="ownership_state" class="wizard-form-text-label">30. State</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">

                                <select class="form-control" name="ownership_city" id="ownership_city" >
                                    <option value="{{optional($merchant)->ownership_city}}" selected>{{optional($merchant)->ownership_city}}</option>

                                </select>

                                <label for="ownership_city" class="wizard-form-text-label">31. City</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="ownership_zip"   value="{{optional($merchant)->ownership_zip ?? ''}}" type="text"
                                    class="form-control wizard-required" id="ownership_zip">
                                <label for="ownership_zip" class="wizard-form-text-label">32. Zip</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <select name="business_structure" class="form-control wizard-required"
                                    id="business_structure">
                                    <option {{ optional($merchant)->business_structure == '' ? 'selected' : '' }}></option>
                                    <option value="c-corp" {{ optional($merchant)->business_structure == 'c-corp' ? 'selected' : '' }}>C-Corp</option>
                                    <option value="contractorship" {{ optional($merchant)->business_structure == 'contractorship' ? 'selected' : '' }}>Contractorship</option>
                                    <option value="cooperative" {{ optional($merchant)->business_structure == 'cooperative' ? 'selected' : '' }}>Cooperative</option>
                                    <option value="dba" {{ optional($merchant)->business_structure == 'dba' ? 'selected' : '' }}>DBA</option>
                                    <option value="llc" {{ optional($merchant)->business_structure == 'llc' ? 'selected' : '' }}>LLC</option>
                                    <option value="pc" {{ optional($merchant)->business_structure == 'pc' ? 'selected' : '' }}>PC</option>
                                    <option value="s-corp" {{ optional($merchant)->business_structure == 's-corp' ? 'selected' : '' }}>S-Corp</option>
                                    <option value="sole_proprietorship" {{ optional($merchant)->business_structure == 'sole_proprietorship' ? 'selected' : '' }}>Sole Proprietorship</option>
                                </select>
                                <label for="business_structure" class="wizard-form-text-label">33. What is the structure
                                    of your business ?</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                34. Are you a home based business? [Y/N]
                                <div class="wizard-form-radio">
                                    <input name="home_based_business" @if(optional($merchant)->home_based_business == 1) checked  @endif value="1"  id="home_based_business_yes"
                                        type="radio">
                                    <label for="home_based_business">Yes</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="home_based_business"  @if(empty(optional($merchant)) || optional($merchant)->home_based_business == 0) checked  @endif  value="0" id="home_based_business_no"
                                        type="radio">
                                    <label for="home_based_business">No</label>
                                </div>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <select name="num_employees" class="form-control wizard-required" id="num_employees">
                                    <option {{ optional($merchant)->num_employees == '' ? 'selected' : '' }}></option>
                                    <option value="1_50" {{ optional($merchant)->num_employees == '1_50' ? 'selected' : '' }}>1-50</option>
                                    <option value="50_500" {{ optional($merchant)->num_employees == '50_500' ? 'selected' : '' }}>50-500</option>
                                    <option value="500_1000" {{ optional($merchant)->num_employees == '500_1000' ? 'selected' : '' }}>500-1000</option>
                                    <option value="1000_5000" {{ optional($merchant)->num_employees == '1000_5000' ? 'selected' : '' }}>1000-5000</option>
                                    <option value="5000_10000" {{ optional($merchant)->num_employees == '5000_10000' ? 'selected' : '' }}>5000-10000</option>
                                    <option value="10000_plus" {{ optional($merchant)->num_employees == '10000_plus' ? 'selected' : '' }}>10000+</option>
                                </select>
                                <label for="num_employees" class="wizard-form-text-label">35. What is the number of
                                    employees at your physical location ?</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <select name="sales_per_month" class="form-control wizard-required" id="sales_per_month">
                                    <option {{ optional($merchant)->sales_per_month == '' ? 'selected' : '' }}></option>
                                    <option value="0_3000" {{ optional($merchant)->sales_per_month == '0_3000' ? 'selected' : '' }}>$0-$3000</option>
                                    <option value="3000_10000" {{ optional($merchant)->sales_per_month == '3000_10000' ? 'selected' : '' }}>$3000-$10000</option>
                                    <option value="10000_40000" {{ optional($merchant)->sales_per_month == '10000_40000' ? 'selected' : '' }}>$10000-$40000</option>
                                    <option value="40000_75000" {{ optional($merchant)->sales_per_month == '40000_75000' ? 'selected' : '' }}>$40000-$75000</option>
                                    <option value="75000_100000" {{ optional($merchant)->sales_per_month == '75000_100000' ? 'selected' : '' }}>$75000-$100000</option>
                                    <option value="100000_plus" {{ optional($merchant)->sales_per_month == '100000_plus' ? 'selected' : '' }}>$100000+</option>
                                </select>
                                <label for="sales_per_month" class="wizard-form-text-label">36. What are your sales in U.S. Dollars per month?
                                </label>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <label style="font-weight:bold; font-size:150%">Are you a?
                                </label>

                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                37. Tier 1: any merchant processing over six million transactions annually, across all
                                channels, or any merchant that has suffered a data breach?
                                <div class="wizard-form-radio">
                                    <input name="tier1_merchant"  @if(optional($merchant)->tier1_merchant == 1) checked  @endif value="1" id="tier1_merchant_yes" type="radio">
                                    <label for="tier1_merchant_yes">Yes</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="tier1_merchant" @if(empty(optional($merchant)) || optional($merchant)->tier1_merchant == 0) checked  @endif  value="0" id="tier1_merchant_no" type="radio">
                                    <label for="tier1_merchant_no">No</label>
                                </div>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                38. Tier 2: any merchant processing between one million and six million total transactions
                                annually?
                                <div class="wizard-form-radio">
                                    <input name="tier2_merchant"  @if(optional($merchant)->tier2_merchant == 1) checked  @endif value="1" id="tier2_merchant_yes" type="radio">
                                    <label for="tier2_merchant_yes">Yes</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="tier2_merchant" @if(empty(optional($merchant)) || optional($merchant)->tier2_merchant == 0) checked  @endif  value="0" id="tier2_merchant_no" type="radio">
                                    <label for="tier2_merchant_no">No</label>
                                </div>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                39. Tier 3: any merchant processing between twenty thousand and one million transactions
                                annually?
                                <div class="wizard-form-radio">
                                    <input name="tier3_merchant"  @if(optional($merchant)->tier3_merchant == 1) checked  @endif value="1" id="tier3_merchant_yes" type="radio">
                                    <label for="tier3_merchant_yes">Yes</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="tier3_merchant" @if(empty(optional($merchant)) || optional($merchant)->tier3_merchant == 0) checked  @endif  value="0" id="tier3_merchant_no" type="radio">
                                    <label for="tier3_merchant_no">No</label>
                                </div>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                40. Tier 4: any merchant processing less than 20,000 transactions annually, or any merchant
                                processing a maximum of one million regular transactions annually?
                                <div class="wizard-form-radio">
                                    <input name="tier4_merchant"  @if(optional($merchant)->tier4_merchant == 1) checked  @endif value="1" id="tier4_merchant_yes" type="radio">
                                    <label for="tier4_merchant_yes">Yes</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="tier4_merchant" @if(empty(optional($merchant)) || optional($merchant)->tier4_merchant == 0) checked  @endif  value="0" id="tier4_merchant_no" type="radio">
                                    <label for="tier4_merchant_no">No</label>
                                </div>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>


                        <div class="col-md-8 col-lg-8">
                            <div class="form-group">
                                <label for="bank_name" class="wizard-form-text-label">41. What is the Name of your
                                    merchant bank or Acquirer?</label>
                                <input name="bank_name"   value="{{optional($merchant)->bank_name ?? ''}}" type="text"
                                    class="form-control wizard-required" id="bank_name">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="bank_account_manager_fn" class="wizard-form-text-label">42. Account Manager’s
                                    First Name</label>
                                <input name="bank_account_manager_fn"   value="{{optional($merchant)->bank_account_manager_fn ?? ''}}" type="text"
                                    class="form-control wizard-required" id="bank_account_manager_fn">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="bank_account_manager_ln" class="wizard-form-text-label">43. Account Manager’s
                                    Last Name</label>
                                <input name="bank_account_manager_ln"   value="{{optional($merchant)->bank_account_manager_ln ?? ''}}" type="text"
                                    class="form-control wizard-required" id="bank_account_manager_ln">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="bank_account_manager_address" class="wizard-form-text-label">44. Account
                                    Manager’s Physical Address</label>
                                <input name="bank_account_manager_address"   value="{{optional($merchant)->bank_account_manager_address ?? ''}}" type="text"
                                    class="form-control wizard-required" id="bank_account_manager_address">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="bank_account_manager_state" class="wizard-form-text-label">45. State</label>
                                <select class="form-control" name="bank_account_manager_state"
                                    id="bank_account_manager_state" >
                                    <option>Select State</option>
                                    <option value="Alabama" {{ optional($merchant)->bank_account_manager_state == 'Alabama' ? 'selected' : '' }}>Alabama</option>
                                    <option value="Alaska" {{ optional($merchant)->bank_account_manager_state == 'Alaska' ? 'selected' : '' }}>Alaska</option>
                                    <option value="Arizona" {{ optional($merchant)->bank_account_manager_state == 'Arizona' ? 'selected' : '' }}>Arizona</option>
                                    <option value="Arkansas" {{ optional($merchant)->bank_account_manager_state == 'Arkansas' ? 'selected' : '' }}>Arkansas</option>
                                    <option value="California" {{ optional($merchant)->bank_account_manager_state == 'California' ? 'selected' : '' }}>California</option>
                                    <option value="Colorado" {{ optional($merchant)->bank_account_manager_state == 'Colorado' ? 'selected' : '' }}>Colorado</option>
                                    <option value="Connecticut" {{ optional($merchant)->bank_account_manager_state == 'Connecticut' ? 'selected' : '' }}>Connecticut</option>
                                    <option value="Delaware" {{ optional($merchant)->bank_account_manager_state == 'Delaware' ? 'selected' : '' }}>Delaware</option>
                                    <option value="District Of Columbia" {{ optional($merchant)->bank_account_manager_state == 'District Of Columbia' ? 'selected' : '' }}>District Of Columbia</option>
                                    <option value="Florida" {{ optional($merchant)->bank_account_manager_state == 'Florida' ? 'selected' : '' }}>Florida</option>
                                    <option value="Georgia" {{ optional($merchant)->bank_account_manager_state == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                                    <option value="Hawaii" {{ optional($merchant)->bank_account_manager_state == 'Hawaii' ? 'selected' : '' }}>Hawaii</option>
                                    <option value="Idaho" {{ optional($merchant)->bank_account_manager_state == 'Idaho' ? 'selected' : '' }}>Idaho</option>
                                    <option value="Illinois" {{ optional($merchant)->bank_account_manager_state == 'Illinois' ? 'selected' : '' }}>Illinois</option>
                                    <option value="Indiana" {{ optional($merchant)->bank_account_manager_state == 'Indiana' ? 'selected' : '' }}>Indiana</option>
                                    <option value="Iowa" {{ optional($merchant)->bank_account_manager_state == 'Iowa' ? 'selected' : '' }}>Iowa</option>
                                    <option value="Kansas" {{ optional($merchant)->bank_account_manager_state == 'Kansas' ? 'selected' : '' }}>Kansas</option>
                                    <option value="Kentucky" {{ optional($merchant)->bank_account_manager_state == 'Kentucky' ? 'selected' : '' }}>Kentucky</option>
                                    <option value="Louisiana" {{ optional($merchant)->bank_account_manager_state == 'Louisiana' ? 'selected' : '' }}>Louisiana</option>
                                    <option value="Maine" {{ optional($merchant)->bank_account_manager_state == 'Maine' ? 'selected' : '' }}>Maine</option>
                                    <option value="Maryland" {{ optional($merchant)->bank_account_manager_state == 'Maryland' ? 'selected' : '' }}>Maryland</option>
                                    <option value="Massachusetts" {{ optional($merchant)->bank_account_manager_state == 'Massachusetts' ? 'selected' : '' }}>Massachusetts</option>
                                    <option value="Michigan" {{ optional($merchant)->bank_account_manager_state == 'Michigan' ? 'selected' : '' }}>Michigan</option>
                                    <option value="Minnesota" {{ optional($merchant)->bank_account_manager_state == 'Minnesota' ? 'selected' : '' }}>Minnesota</option>
                                    <option value="Mississippi" {{ optional($merchant)->bank_account_manager_state == 'Mississippi' ? 'selected' : '' }}>Mississippi</option>
                                    <option value="Missouri" {{ optional($merchant)->bank_account_manager_state == 'Missouri' ? 'selected' : '' }}>Missouri</option>
                                    <option value="Montana" {{ optional($merchant)->bank_account_manager_state == 'Montana' ? 'selected' : '' }}>Montana</option>
                                    <option value="Nebraska" {{ optional($merchant)->bank_account_manager_state == 'Nebraska' ? 'selected' : '' }}>Nebraska</option>
                                    <option value="Nevada" {{ optional($merchant)->bank_account_manager_state == 'Nevada' ? 'selected' : '' }}>Nevada</option>
                                    <option value="New Hampshire" {{ optional($merchant)->bank_account_manager_state == 'New Hampshire' ? 'selected' : '' }}>New Hampshire</option>
                                    <option value="New Jersey" {{ optional($merchant)->bank_account_manager_state == 'New Jersey' ? 'selected' : '' }}>New Jersey</option>
                                    <option value="New Mexico" {{ optional($merchant)->bank_account_manager_state == 'New Mexico' ? 'selected' : '' }}>New Mexico</option>
                                    <option value="New York" {{ optional($merchant)->bank_account_manager_state == 'New York' ? 'selected' : '' }}>New York</option>
                                    <option value="North Carolina" {{ optional($merchant)->bank_account_manager_state == 'North Carolina' ? 'selected' : '' }}>North Carolina</option>
                                    <option value="North Dakota" {{ optional($merchant)->bank_account_manager_state == 'North Dakota' ? 'selected' : '' }}>North Dakota</option>
                                    <option value="Ohio" {{ optional($merchant)->bank_account_manager_state == 'Ohio' ? 'selected' : '' }}>Ohio</option>
                                    <option value="Oklahoma" {{ optional($merchant)->bank_account_manager_state == 'Oklahoma' ? 'selected' : '' }}>Oklahoma</option>
                                    <option value="Oregon" {{ optional($merchant)->bank_account_manager_state == 'Oregon' ? 'selected' : '' }}>Oregon</option>
                                    <option value="Pennsylvania" {{ optional($merchant)->bank_account_manager_state == 'Pennsylvania' ? 'selected' : '' }}>Pennsylvania</option>
                                    <option value="Rhode Island" {{ optional($merchant)->bank_account_manager_state == 'Rhode Island' ? 'selected' : '' }}>Rhode Island</option>
                                    <option value="South Carolina" {{ optional($merchant)->bank_account_manager_state == 'South Carolina' ? 'selected' : '' }}>South Carolina</option>
                                    <option value="South Dakota" {{ optional($merchant)->bank_account_manager_state == 'South Dakota' ? 'selected' : '' }}>South Dakota</option>
                                    <option value="Tennessee" {{ optional($merchant)->bank_account_manager_state == 'Tennessee' ? 'selected' : '' }}>Tennessee</option>
                                    <option value="Texas" {{ optional($merchant)->bank_account_manager_state == 'Texas' ? 'selected' : '' }}>Texas</option>
                                    <option value="Utah" {{ optional($merchant)->bank_account_manager_state == 'Utah' ? 'selected' : '' }}>Utah</option>
                                    <option value="Vermont" {{ optional($merchant)->bank_account_manager_state == 'Vermont' ? 'selected' : '' }}>Vermont</option>
                                    <option value="Virginia" {{ optional($merchant)->bank_account_manager_state == 'Virginia' ? 'selected' : '' }}>Virginia</option>
                                    <option value="Washington" {{ optional($merchant)->bank_account_manager_state == 'Washington' ? 'selected' : '' }}>Washington</option>
                                    <option value="West Virginia"{{ optional($merchant)->bank_account_manager_state == 'West Virginia' ? 'selected' : '' }}>West Virginia</option>
                                    <option value="Wisconsin" {{ optional($merchant)->bank_account_manager_state == 'Wisconsin' ? 'selected' : '' }}>Wisconsin</option>
                                    <option value="Wyoming" {{ optional($merchant)->bank_account_manager_state == 'Wyoming' ? 'selected' : '' }}>Wyoming</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="bank_account_manager_city" class="wizard-form-text-label">46. City</label>
                                <select class="form-control" name="bank_account_manager_city"
                                    id="bank_account_manager_city" >
                                    <option value="{{optional($merchant)->bank_account_manager_city}}" selected>{{optional($merchant)->bank_account_manager_city}}</option>
                                </select>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="bank_account_manager_zipcode" class="wizard-form-text-label">47. Zipcode
                                    </label>
                                <input name="bank_account_manager_zipcode"   value="{{optional($merchant)->bank_account_manager_zipcode ?? ''}}" type="text"
                                    class="form-control wizard-required" id="bank_account_manager_zipcode">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="bank_account_manager_telephone_number" class="wizard-form-text-label">48.
                                    Telephone Number</label>
                                <input name="bank_account_manager_telephone_number"   value="{{optional($merchant)->bank_account_manager_telephone_number ?? ''}}" type="text"
                                    class="form-control wizard-required" id="bank_account_manager_telephone_number">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="bank_account_manager_email" class="wizard-form-text-label">49. Account
                                    Manager’s Email Address</label>
                                <input name="bank_account_manager_email" value="{{optional($merchant)->bank_account_manager_email}}" type="email"
                                    class="form-control wizard-required" id="bank_account_manager_email">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="ein_number" class="wizard-form-text-label">50. What is your EIN
                                    Number?</label>
                                <input name="ein_number"   value="{{optional($merchant)->ein_number ?? ''}}" type="text"
                                    class="form-control wizard-required" id="ein_number" pattern="[0-9]{9}">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="primary_line_of_business" class="wizard-form-text-label">51. What is your
                                    primary line of business?</label>
                                <input name="primary_line_of_business"   value="{{optional($merchant)->primary_line_of_business ?? ''}}" type="text"
                                    class="form-control wizard-required" id="primary_line_of_business">
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="merchant_duns_number" class="wizard-form-text-label">52. What is your Merchant
                                    DUNS Number?</label>
                                <input name="merchant_duns_number"   value="{{optional($merchant)->merchant_duns_number ?? ''}}" type="text"
                                    class="form-control wizard-required" id="merchant_duns_number" pattern="[0-9]{9}">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <label style="font-weight:bold; font-size:150%">POINT OF SALE INFO
                                </label>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="business_description" class="wizard-form-text-label">53. What Industry best describes your business?</label>
                                <select name="business_description" class="form-control wizard-required"
                                id="business_description">
                                <option value="accommodation_and_food_services" @if (!empty($merchant) && $merchant->business_description == 'accommodation_and_food_services') selected @endif>Accommodation and Food Services</option>
                                <option value="administrative_and_support_and_waste_management_and_remediation_services" @if (!empty($merchant) && $merchant->business_description == 'administrative_and_support_and_waste_management_and_remediation_services') selected @endif>Administrative and Support and Waste Management and Remediation Services</option>
                                <option value="agriculture" @if (!empty($merchant) && $merchant->business_description == 'agriculture') selected @endif>Agriculture</option>
                                <option value="arts_entertainment_and_recreation" @if (!empty($merchant) && $merchant->business_description == 'arts_entertainment_and_recreation') selected @endif>Arts, Entertainment and Recreation</option>
                                <option value="electric" @if (!empty($merchant) && $merchant->business_description == 'electric') selected @endif>Electric</option>
                                <option value="gas" @if (!empty($merchant) && $merchant->business_description == 'gas') selected @endif>Gas</option>
                                <option value="solar_water_and_sewage" @if (!empty($merchant) && $merchant->business_description == 'solar_water_and_sewage') selected @endif>Solar water and sewage <sub ddm></option>
                                <option value="wind" @if (!empty($merchant) && $merchant->business_description == 'wind') selected @endif>Wind <sub ddm></option>
                                <option value="construction" @if (!empty($merchant) && $merchant->business_description == 'construction') selected @endif>Construction</option>
                                <option value="educational_services" @if (!empty($merchant) && $merchant->business_description == 'educational_services') selected @endif>Educational Services</option>
                                <option value="finance_and_insurance" @if (!empty($merchant) && $merchant->business_description == 'finance_and_insurance') selected @endif>Finance and Insurance</option>
                                <option value="fishing_and_forestry" @if (!empty($merchant) && $merchant->business_description == 'fishing_and_forestry') selected @endif>Fishing, and Forestry</option>
                                <option value="health_care_and_social_assistance" @if (!empty($merchant) && $merchant->business_description == 'health_care_and_social_assistance') selected @endif>Health Care and Social Assistance</option>
                                <option value="hunting" @if (!empty($merchant) && $merchant->business_description == 'hunting') selected @endif>Hunting</option>
                                <option value="information_technology" @if (!empty($merchant) && $merchant->business_description == 'information_technology') selected @endif>Information Technology</option>
                                <option value="management_of_companies" @if (!empty($merchant) && $merchant->business_description == 'management_of_companies') selected @endif>Management of Companies (holding companies)</option>
                                <option value="manufacturing" @if (!empty($merchant) && $merchant->business_description == 'manufacturing') selected @endif>Manufacturing</option>
                                <option value="mining" @if (!empty($merchant) && $merchant->business_description == 'mining') selected @endif>Mining</option>
                                <option value="other_services" @if (!empty($merchant) && $merchant->business_description == 'other_services') selected @endif>Other Services</option>
                                <option value="professional_scientific_and_technical_services" @if (!empty($merchant) && $merchant->business_description == 'professional_scientific_and_technical_services') selected @endif>Professional, Scientific, and Technical Services</option>
                                <option value="real_estate_and_rental_and_leasing" @if (!empty($merchant) && $merchant->business_description == 'real_estate_and_rental_and_leasing') selected @endif>Real-estate and Rental and Leasing</option>
                                <option value="retail_trade" @if (!empty($merchant) && $merchant->business_description == 'retail_trade') selected @endif>Retail Trade</option>
                                <option value="transportation_and_warehousing" @if (!empty($merchant) && $merchant->business_description == 'transportation_and_warehousing') selected @endif>Transportation and Warehousing</option>
                                <option value="travel" @if (!empty($merchant) && $merchant->business_description == 'travel') selected @endif>Travel</option>
                                <option value="utilities" @if (!empty($merchant) && $merchant->business_description == 'utilities') selected @endif>Utilities</option>
                                <option value="utility_company" @if (!empty($merchant) && $merchant->business_description == 'utility_company') selected @endif>Utility Company</option>
                                <option value="wholesale_trade" @if (!empty($merchant) && $merchant->business_description == 'wholesale_trade') selected @endif>Wholesale Trade</option>
                            </select>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="pos_estimated_number" class="wizard-form-text-label">54. What is the Estimated
                                    number of POS?</label>
                                <input name="pos_estimated_number" value="{{optional($merchant)->pos_estimated_number ?? ''}}" type="number"
                                    class="form-control wizard-required" id="pos_estimated_number" min="1"
                                    max="100">

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="pos_manufacturer" class="wizard-form-text-label">55. Who is your POS
                                    Manufacturer?</label>
                                <select name="pos_manufacturer" class="form-control wizard-required"
                                    id="pos_manufacturer">

                                    <option value="aloha_pos" {{ optional($merchant)->pos_manufacturer == 'aloha_pos' ? 'selected' : '' }}>Aloha POS</option>
                                    <option value="bottle_pos" {{ optional($merchant)->pos_manufacturer == 'bottle_pos' ? 'selected' : '' }}>Bottle POS</option>
                                    <option value="cardconnect" {{ optional($merchant)->pos_manufacturer == 'cardconnect' ? 'selected' : '' }}>CardConnect</option>
                                    <option value="clover" {{ optional($merchant)->pos_manufacturer == 'clover' ? 'selected' : '' }}>Clover</option>
                                    <option value="ehopper_pos" {{ optional($merchant)->pos_manufacturer == 'ehopper_pos' ? 'selected' : '' }}>eHopper POS</option>
                                    <option value="epicor" {{ optional($merchant)->pos_manufacturer == 'epicor' ? 'selected' : '' }}>Epicor</option>
                                    <option value="epos_now" {{ optional($merchant)->pos_manufacturer == 'epos_now' ? 'selected' : '' }}>Epos Now</option>
                                    <option value="godaddy" {{ optional($merchant)->pos_manufacturer == 'godaddy' ? 'selected' : '' }}>GoDaddy</option>
                                    <option value="helcim" {{ optional($merchant)->pos_manufacturer == 'helcim' ? 'selected' : '' }}>Helcim</option>
                                    <option value="intercomplus" {{ optional($merchant)->pos_manufacturer == 'intercomplus' ? 'selected' : '' }}>IntercomPlus</option>
                                    <option value="lavu" {{ optional($merchant)->pos_manufacturer == 'lavu' ? 'selected' : '' }}>Lavu</option>
                                    <option value="lightspeed" {{ optional($merchant)->pos_manufacturer == 'lightspeed' ? 'selected' : '' }}>Lightspeed</option>
                                    <option value="ls_retail" {{ optional($merchant)->pos_manufacturer == 'ls_retail' ? 'selected' : '' }}>LS Retail</option>
                                    <option value="micros" {{ optional($merchant)->pos_manufacturer == 'micros' ? 'selected' : '' }}>Micros</option>
                                    <option value="ncr" {{ optional($merchant)->pos_manufacturer == 'ncr' ? 'selected' : '' }}>NCR</option>
                                    <option value="nec_corp_of_america" {{ optional($merchant)->pos_manufacturer == 'nec_corp_of_america' ? 'selected' : '' }}>NEC Corp. of America</option>
                                    <option value="olo" {{ optional($merchant)->pos_manufacturer == 'olo' ? 'selected' : '' }}>Olo</option>
                                    <option value="oracles_micros_res_pos" {{ optional($merchant)->pos_manufacturer == 'oracles_micros_res_pos' ? 'selected' : '' }}>Oracle's MICROS RES POS</option>
                                    <option value="paypal_zettle" {{ optional($merchant)->pos_manufacturer == 'paypal_zettle' ? 'selected' : '' }}>PayPal Zettle</option>
                                    <option value="petrosoft_smartpos" {{ optional($merchant)->pos_manufacturer == 'petrosoft_smartpos' ? 'selected' : '' }}>Petrosoft SmartPOS</option>
                                    <option value="pos_nation" {{ optional($merchant)->pos_manufacturer == 'pos_nation' ? 'selected' : '' }}>POS Nation</option>
                                    <option value="radiant_systems" {{ optional($merchant)->pos_manufacturer == 'radiant_systems' ? 'selected' : '' }}>Radiant Systems</option>
                                    <option value="revel_systems" {{ optional($merchant)->pos_manufacturer == 'revel_systems' ? 'selected' : '' }}>Revel Systems</option>
                                    <option value="shopify" {{ optional($merchant)->pos_manufacturer == 'shopify' ? 'selected' : '' }}>Shopify</option>
                                    <option value="square" {{ optional($merchant)->pos_manufacturer == 'square' ? 'selected' : '' }}>Square</option>
                                    <option value="sumup" {{ optional($merchant)->pos_manufacturer == 'sumup' ? 'selected' : '' }}>SumUp</option>
                                    <option value="suse_linux_enterprise_point_of_service_slepos" {{ optional($merchant)->pos_manufacturer == 'suse_linux_enterprise_point_of_service_slepos' ? 'selected' : '' }}>SUSE Linux Enterprise Point-of-Service (SLEPOS)</option>
                                    <option value="toast" {{ optional($merchant)->pos_manufacturer == 'toast' ? 'selected' : '' }}>Toast</option>
                                    <option value="toshiba" {{ optional($merchant)->pos_manufacturer == 'toshiba' ? 'selected' : '' }}>Toshiba</option>
                                    <option value="touchbistro" {{ optional($merchant)->pos_manufacturer == 'touchbistro' ? 'selected' : '' }}>TouchBistro</option>
                                    <option value="upserve_pos" {{ optional($merchant)->pos_manufacturer == 'upserve_pos' ? 'selected' : '' }}>Upserve POS</option>
                                    <option value="verifone" {{ optional($merchant)->pos_manufacturer == 'verifone' ? 'selected' : '' }}>Verifone</option>
                                    <option value="other" {{ optional($merchant)->pos_manufacturer == 'other' ? 'selected' : '' }}>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <label style="font-weight:bold; font-size:150%">Have you experienced an account data
                                    compromise?
                                </label>

                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="when" class="wizard-form-text-label">56. Have you experienced an account data compromise?
                                    If yes, when</label>
                                <input name="when"   value="{{optional($merchant)->when ?? ''}}" type="date" class="form-control wizard-required"
                                    id="when">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="use_pos">57. Do you use point of sale terminal hardware and software, or a PCI
                                    DSS Certified Internet Gateway Provider, supplied by a merchant service provider, and do
                                    you confirm that you do not store cardholder data?</label>
                                <div class="wizard-form-radio">
                                    <input name="use_pos"  @if(optional($merchant)->use_pos == 1) checked  @endif value="1" id="pos_yes" type="radio">
                                    <label for="pos_yes">Yes</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="use_pos" @if(empty(optional($merchant)) || optional($merchant)->use_pos == 0) checked  @endif  value="0"  id="pos_no" type="radio">
                                    <label for="pos_no">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="third_party_vendor" class="wizard-form-text-label">58. If No, then what third
                                    party software company / vendor
                                    did you purchase your POS application from?</label>
                                <input name="third_party_vendor"   value="{{optional($merchant)->third_party_vendor ?? ''}}" type="text"
                                    class="form-control wizard-required" id="third_party_vendor">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="third_party_name" class="wizard-form-text-label">59. What is the name of the
                                    third party software?</label>
                                <input name="third_party_name"   value="{{optional($merchant)->third_party_name ?? ''}}" type="text"
                                    class="form-control wizard-required" id="third_party_name">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="third_party_version" class="wizard-form-text-label">60. What version
                                    number?</label>
                                <input name="third_party_version"   value="{{optional($merchant)->third_party_version ?? ''}}" type="number"
                                    class="form-control wizard-required" id="third_party_version">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="transactions_third_party">61. Do your transactions process through any other
                                    third parties, web hosting companies or gateways?</label>
                                <div class="wizard-form-radio">
                                    <input name="transactions_third_party"  @if(optional($merchant)->transactions_third_party == 1) checked  @endif value="1" id="transactions_yes"
                                        type="radio">
                                    <label for="transactions_yes">Yes</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="transactions_third_party"  @if(empty(optional($merchant)) || optional($merchant)->transactions_third_party == 0) checked  @endif  value="0" id="transactions_no"
                                        type="radio">
                                    <label for="transactions_no">No</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="third_party_name_transactions" class="wizard-form-text-label">62. If yes, with
                                    whom?</label>
                                <input name="third_party_name_transactions"   value="{{optional($merchant)->third_party_name_transactions ?? ''}}" type="text"
                                    class="form-control wizard-required" id="third_party_name_transactions">
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="cardholder_data">63. Do you or your vendor - receive, pass, transmit or store -
                                    the full cardholder number, electronically?</label>
                                <div class="wizard-form-radio">
                                    <input name="cardholder_data"  @if(optional($merchant)->cardholder_data == 1) checked  @endif value="1" id="cardholder_data_yes"
                                        type="radio">
                                    <label for="cardholder_data_yes">Yes</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="cardholder_data"  @if(empty(optional($merchant)) || optional($merchant)->cardholder_data == 0) checked  @endif  value="0" id="cardholder_data_no" type="radio">
                                    <label for="cardholder_data_no">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="card_data_store">64. If yes, where is the card data stored?</label>


                            </div>
                            <div class="form-check">
                                <input type="checkbox"  @if(optional($merchant)->card_data_store_merchant == 1) checked  @endif class="form-check-input" name="card_data_store_merchant">
                                <label class="form-check-label" for="card_data_store_merchant">Merchant</label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox"  @if(optional($merchant)->card_data_store_third_party_only == 1) checked  @endif class="form-check-input" name="card_data_store_third_party_only">
                                <label class="form-check-label" for="card_data_store_third_party_only">
                                    Third Party Only</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox"  @if(optional($merchant)->card_data_store_both == 1) checked  @endif class="form-check-input" name="card_data_store_both">
                                <label class="form-check-label" for="card_data_store_both">Both
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="pci_dss_compliant">65. Are you or your vendor PCI/DSS compliant?</label>
                                <div class="wizard-form-radio">
                                    <input name="pci_dss_compliant"  @if(optional($merchant)->pci_dss_compliant == 1) checked  @endif value="1" id="pci_dss_compliant_yes"
                                        type="radio">
                                    <label for="pci_dss_compliant_yes">Yes</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="pci_dss_compliant"  @if(empty(optional($merchant)) || optional($merchant)->pci_dss_compliant == 0) checked  @endif  value="0" id="pci_dss_compliant_no"
                                        type="radio">
                                    <label for="pci_dss_compliant_no">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="qsa_name" class="wizard-form-text-label">66. What is the name of your
                                    Qualified Security Assessor?</label>
                                <input name="qsa_name"   value="{{optional($merchant)->qsa_name ?? ''}}" type="text"
                                    class="form-control wizard-required" id="qsa_name">
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="compliance_date" class="wizard-form-text-label">67. Date of Compliance</label>
                                <input name="compliance_date"   value="{{optional($merchant)->compliance_date ?? ''}}" type="date"
                                    class="form-control wizard-required" id="compliance_date">
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="last_scan_date" class="wizard-form-text-label">68. Date of last scan</label>
                                <input name="last_scan_date"   value="{{optional($merchant)->last_scan_date ?? ''}}" type="date"
                                    class="form-control wizard-required" id="last_scan_date">
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-8">
                            <div class="form-group">
                                <label for="help_description" class="wizard-form-text-label">69. Describe in Detail How
                                    Ginicoe Can Help You.</label>
                                <textarea name="help_description" class="form-control wizard-required" id="help_description">{{optional($merchant)->help_description ?? ''}}</textarea>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>


                    </div>
                    <div class="form-group clearfix">

                        <button class="btn btn-success float-right" style="color:white" onclick="getinput()">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script src="{{ asset('public/frontend/js/extra_validation.js') }}"></script>
    <script src="{{ asset('public/backend/js/form_wizard.js') }}"></script>
    <script src="{{ asset('public/backend/js/merchent/update_my_info.js') }}"></script>
    
@endsection
