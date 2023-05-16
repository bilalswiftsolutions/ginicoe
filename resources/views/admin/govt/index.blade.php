@extends('admin.admin_layouts')

@section('admin_content')
    <div class="card shadow mb-4">


        <div class="col-lg-12 col-md-12">
            <form id="update_my_info_form" action="{{ route('admin.govt.update_my_info.store') }}" method="post"
                role="form">
                @csrf
                <div class="form-wizard">

                    <div class="row">


                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input value="{{$govt->first_name ?? ""}}" name="first_name" type="text" class="form-control wizard-required">
                                <label class="wizard-form-text-label">1. What is Your First Name?</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input value="{{$govt->last_name ?? ""}}" name="last_name" type="text" class="form-control wizard-required">
                                <label for="last_name" class="wizard-form-text-label">2. What is Your First Name?</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <select class="form-control" name="title" id="title">
                                    <option></option>
                                    <option @if (!empty($govt) && $govt->title == 'director') selected @endif value="director" selected>Director</option>
                                    <option @if (!empty($govt) && $govt->title == 'chief') selected @endif value="chief" selected>Chief</option>

                                </select>
                                <label for="title" class="wizard-form-text-label">3. What is your Title</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input value="{{$govt->building_no ?? ""}}" name="building_no" type="text" class="form-control wizard-required"
                                    id="building_no">
                                <label for="building_no" class="wizard-form-text-label">4. Building No</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input value="{{$govt->street_name ?? ""}}" name="street_name" type="text" class="form-control wizard-required"
                                    id="street_name">
                                <label for="street_name" class="wizard-form-text-label">5. What is your Office / Agency
                                    Physical Street Name? </label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">

                                <label for="urbanization_name" class="wizard-form-text-label">6. Urbanization
                                    Name</label>
                                <select class="form-control" name="urbanization_name" id="urbanization_name">
                                   
                                    <option @if (!empty($govt) && $govt->urbanization_name == 'puerto_rico') selected @endif value="puerto_rico">Puerto Rico</option>
                                    <option @if (!empty($govt) && $govt->urbanization_name == 'virgin_island') selected @endif value="virgin_island">Virgin Island</option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">

                                <label for="state" class="wizard-form-text-label">7. State</label>
                                <select class="form-control" name="state" id="state" required>

                                    <option value="{{ $govt->state ?? '' }}" selected>{{ $govt->state ?? '' }}</option>
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
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="city" class="wizard-form-text-label">8. City</label>
                                <select class="form-control" name="city" id="city" required>
                                    <option value="{{ $govt->city ?? '' }}" selected>{{ $govt->city ?? '' }}</option>
                                </select>
                                <p class="text_danger form_error"></p>
                
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input value="{{$govt->county ?? ""}}"  name="county" type="text"
                                    class="form-control wizard-required" id="county" >
                                <label for="county" class="wizard-form-text-label">9. County </label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input value="{{$govt->zipcode ?? ""}}"  name="zipcode" type="number"
                                    class="form-control wizard-required" id="zipcode" >
                                <label for="zipcode" class="wizard-form-text-label">10. Zipcode </label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input value="{{$govt->country_code ?? ""}}" name="country_code" type="number" class="form-control wizard-required"
                                    id="country_code">
                                <label for="country_code" class="wizard-form-text-label">11. Country code</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input value="{{$govt->primary_telephone_no ?? ""}}" name="primary_telephone_no" type="number" class="form-control wizard-required"
                                    id="primary_telephone_no">
                                <label for="primary_telephone_no" class="wizard-form-text-label">12. What is your Office / Agency Primary Telephone Number?  </label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>


                        


                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="agency">13. is your agency?</label>
                                <div class="wizard-form-radio">
                                    <input  name="agency" value="fedral" @if(empty($govt) || $govt->agency == 'fedral') checked @endif type="radio">
                                    <label for="agency">Fedral</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="agency" value="state" @if(!empty($govt) && $govt->agency == 'state') checked @endif type="radio">
                                    <label for="agency">State</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="agency" value="county" @if(!empty($govt) && $govt->agency == 'county') checked @endif type="radio">
                                    <label for="agency">County</label>
                                </div>

                                <div class="wizard-form-radio">
                                    <input name="agency" value="city" @if(!empty($govt) && $govt->agency == 'city') checked @endif type="radio">
                                    <label for="agency">City</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="agency" value="village" @if(!empty($govt) && $govt->agency == 'village') checked @endif type="radio">
                                    <label for="agency">Village</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="agency" value="township" @if(!empty($govt) && $govt->agency == 'township') checked @endif type="radio">
                                    <label for="agency">Township</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="agency" value="parish" @if(!empty($govt) && $govt->agency == 'parish') checked @endif type="radio">
                                    <label for="agency">Parish</label>
                                </div>


                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <select class="form-control" name="agency_description" id="agency_description">
                                    <option value="border_surveillance" @if (!empty($govt) && $govt->agency_description == 'border_surveillance') selected @endif>Border Surveillance</option>
                                    <option value="chemical_sector" @if (!empty($govt) && $govt->agency_description == 'chemical_sector') selected @endif>Chemical Sector</option>
                                    <option value="commercial_facilities_sector" @if (!empty($govt) && $govt->agency_description == 'commercial_facilities_sector') selected @endif>Commercial Facilities Sector</option>
                                    <option value="commercial_sector" @if (!empty($govt) && $govt->agency_description == 'commercial_sector') selected @endif>Commercial Sector</option>
                                    <option value="critical_manufacturing_sector" @if (!empty($govt) && $govt->agency_description == 'critical_manufacturing_sector') selected @endif>Critical Manufacturing Sector</option>
                                    <option value="dams_sector" @if (!empty($govt) && $govt->agency_description == 'dams_sector') selected @endif>Dams Sector</option>
                                    <option value="defense_industrial_base_sector" @if (!empty($govt) && $govt->agency_description == 'defense_industrial_base_sector') selected @endif>Defense Industrial Base Sector</option>
                                    <option value="emergency_services_sector" @if (!empty($govt) && $govt->agency_description == 'emergency_services_sector') selected @endif>Emergency Services Sector</option>
                                    <option value="energy_sector" @if (!empty($govt) && $govt->agency_description == 'energy_sector') selected @endif>Energy Sector</option>
                                    <option value="financial_services_sector" @if (!empty($govt) && $govt->agency_description == 'financial_services_sector') selected @endif>Financial Services Sector</option>
                                    <option value="food_and_agriculture_sector" @if (!empty($govt) && $govt->agency_description == 'food_and_agriculture_sector') selected @endif>Food and Agriculture Sector</option>
                                    <option value="government_facilities_sector" @if (!empty($govt) && $govt->agency_description == 'government_facilities_sector') selected @endif>Government Facilities Sector</option>
                                    <option value="healthcare_and_public_health_sector" @if (!empty($govt) && $govt->agency_description == 'healthcare_and_public_health_sector') selected @endif>Healthcare and Public Health Sector</option>
                                    <option value="homeland_security" @if (!empty($govt) && $govt->agency_description == 'homeland_security') selected @endif>Homeland Security</option>
                                    <option value="information_technology_sector" @if (!empty($govt) && $govt->agency_description == 'information_technology_sector') selected @endif>Information Technology Sector</option>
                                    <option value="materials_and_waste_sector" @if (!empty($govt) && $govt->agency_description == 'materials_and_waste_sector') selected @endif>Materials and Waste Sector</option>
                                    <option value="nuclear_reactors" @if (!empty($govt) && $govt->agency_description == 'nuclear_reactors') selected @endif>Nuclear Reactors</option>
                                    <option value="transportation_systems_sector" @if (!empty($govt) && $govt->agency_description == 'transportation_systems_sector') selected @endif>Transportation Systems Sector</option>
                                    <option value="waste_and_wastewater_systems_sector" @if (!empty($govt) && $govt->agency_description == 'waste_and_wastewater_systems_sector') selected @endif>Waste and Wastewater Systems Sector</option>

                                </select>
                                <label for="agency_description" class="wizard-form-text-label">16. What Sector Best
                                    Describes Your Agency?</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>



                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input value="{{$govt->agency_name ?? ""}}" name="agency_name" type="text" class="form-control wizard-required"
                                    id="agency_name">
                                <label class="wizard-form-text-label">14. What is the Name of the Agency that You
                                    Represent?</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="budgeting_authority">15. Do You Have Budgeting / Procurement Authority?</label>
                                <div class="wizard-form-radio">
                                    <input name="budgeting_authority" value="1" @if(empty($govt) || $govt->budgeting_authority == 1) checked @endif type="radio">
                                    <label for="budgeting_authority">Yes</label>
                                </div>
                                <div class="wizard-form-radio">
                                    <input name="budgeting_authority" value="0" @if(!empty($govt) && $govt->budgeting_authority == 0) checked @endif type="radio">
                                    <label for="budgeting_authority">No</label>
                                </div>



                            </div>
                        </div>


                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <select class="form-control" name="budgeting_amount" id="budgeting_amount">
                                    <option>
                                    </option>
                                    <option value="0_100000" @if (!empty($govt) && $govt->budgeting_amount >= 0 && $govt->budgeting_amount <= 100000) selected @endif>$0 – $100,000</option>
                                    <option value="100000_250000" @if (!empty($govt) && $govt->budgeting_amount > 100000 && $govt->budgeting_amount <= 250000) selected @endif>$100,000 - $250,000</option>
                                    <option value="250000_500000" @if (!empty($govt) && $govt->budgeting_amount > 250000 && $govt->budgeting_amount <= 500000) selected @endif>$250,000 - $500,000</option>
                                    <option value="500000_1000000" @if (!empty($govt) && $govt->budgeting_amount > 500000 && $govt->budgeting_amount <= 1000000) selected @endif>$500,000 - $1,000,000</option>
                                    <option value="1000000_3000000" @if (!empty($govt) && $govt->budgeting_amount > 1000000 && $govt->budgeting_amount <= 3000000) selected @endif>$1,000,000 - $3,000,000</option>
                                    <option value="3000000_5000000" @if (!empty($govt) && $govt->budgeting_amount > 3000000 && $govt->budgeting_amount <= 5000000) selected @endif>$3,000,000 – $5,000,000</option>
                                    <option value="5000000_plus" @if (!empty($govt) && $govt->budgeting_amount > 5000000) selected @endif>$5,000,000 +</option>
                                    

                                </select>
                                <label class="wizard-form-text-label">16. what is Your Approximate Amount of Budgeting
                                    Authority?</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="help_description" class="wizard-form-text-label">17. Describe in Detail How
                                    Ginicoe Can Help You.</label>
                                <textarea name="help_description" class="form-control wizard-required" id="help_description"> {{$govt->help_description ?? ""}}</textarea>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>


                    </div>




                </div>

                <div class="form-group clearfix">

                    <button class="btn btn-success float-right" style="color:white">Submit</button>
                </div>
        </div>
    </div>
    </form>
    </div>
    </div>
    <script src="{{ asset('public/frontend/js/extra_validation.js') }}"></script>
    <script src="{{ asset('public/backend/js/form_wizard.js') }}"></script>
    <script src="{{ asset('public/backend/js/govt/update_my_info.js') }}"></script>
@endsection
