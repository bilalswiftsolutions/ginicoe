@extends('admin.admin_layouts')

@section('admin_content')
    <div class="card shadow mb-4">


        <div class="col-lg-12 col-md-12">
            <div class="form-wizard">
                <form id="this_is_me_form" action="" method="post" role="form">
                    <div class="form-wizard-header">
                        <div class="progress" style="height: 50px;">
                            <div id="progress_bar" class="progress-bar bg-danger" role="progressbar" style="width: 5.9%;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Pedigree Info</div>
                        </div>
                    </div>
                    <fieldset class="wizard-fieldset show mt-4" id="fieldset_one">
                        <h5>Personal Information</h5>
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <input  name="fname" type="text" class="form-control wizard-required"
                                        id="fname">
                                    <label for="fname" class="wizard-form-text-label">First Name</label>
                                    <p class="text_danger form_error" ></p>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <input name="lname" type="text" class="form-control wizard-required"
                                        >
                                    <label for="lname" class="wizard-form-text-label">Last Name</label>
                                    <p class="text_danger form_error" ></p>

                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <input name="middle_initial"  type="text"
                                        class="form-control wizard-required" id="middle_initial">
                                    <label for="middle_initial" class="wizard-form-text-label">Middle Initial</label>
                                    <p class="text_danger form_error" ></p>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <input name="suffix" type="text" class="form-control wizard-required"
                                        >
                                    <label for="suffix" class="wizard-form-text-label">Suffix</label>
                                    <p class="text_danger form_error" ></p>

                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <input name="nick_name" type="text" class="form-control wizard-required"
                                        >
                                    <label for="nick_name" class="wizard-form-text-label">Nick Name</label>
                                    <p class="text_danger form_error" ></p>

                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <input name="date_of_birth" value="{{date('Y-m-d')}}" type="date" class="form-control wizard-required"
                                        >
                                    <label for="middle_initial" class="wizard-form-text-label">Date of Birth</label>
                                    <p class="text_danger form_error" ></p>

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <input name="social_security_no" type="text"
                                        class="form-control wizard-required" id="social_security_no">
                                    <label for="" class="wizard-form-text-label">Social Security Number</label>
                                    <p class="text_danger form_error" ></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    <input id="verify_social_security_no" name="verify_social_security_no" type="text"
                                        class="form-control wizard-required" id="verify_social_security_no">
                                    <label for="verify_social_security_no" class="wizard-form-text-label">Verify Social
                                        Security Number</label>
                                        <p class="text_danger form_error" ></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    Do you use a credit privacy number or credit protection number or credit profile number
                                    (cpn)?
                                    <div class="wizard-form-radio">
                                        <input onclick="check_cpn_usage()"  name="cpn_usage" value="1" id="radio1"
                                            type="radio">
                                        <label for="radio1">Yes</label>
                                    </div>
                                    <div class="wizard-form-radio">
                                        <input onclick="check_cpn_usage()" checked name="cpn_usage" value="0"
                                            id="radio2" type="radio">
                                        <label for="radio2">No</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4 col-lg-4" id="cpn_no_div" style="display: none;">
                                <div class="form-group">
                                    <input name="cpn_no"  type="text"
                                        class="form-control wizard-required" id="cpn_no">
                                    <label for="cpn_no" class="wizard-form-text-label">Credit privacy number (cpn)
                                    </label>
                                    <p class="text_danger form_error" ></p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    Are you US Vetran?
                                    <div class="wizard-form-radio">
                                        <input  name="us_vetran" value="1" id="radio1" type="radio">
                                        <label for="radio1">Yes</label>
                                    </div>
                                    <div class="wizard-form-radio">
                                        <input checked name="us_vetran"  value="0" id="radio2"
                                            type="radio">
                                        <label for="radio2">No</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="form-group">
                                    Is the consumer presently incarcerated? Y/N
                                    <div class="wizard-form-radio">
                                        <input name="consumer_presently_incarcerated" value="1" id="radio1" type="radio">
                                        <label for="radio1">Yes</label>
                                    </div>
                                    <div class="wizard-form-radio">
                                        <input checked name="consumer_presently_incarcerated" value="0" id="radio2" type="radio">
                                        <label for="radio2">No</label>
                                    </div>
                                </div>
                            </div>


                        </div>
                        {{-- <div class="form-group">
								Gender
								<div class="wizard-form-radio">
									<input name="radio-name" check id="radio1" type="radio">
									<label for="radio1">Male</label>
								</div>
								<div class="wizard-form-radio">
									<input name="radio-name" id="radio2" type="radio">
									<label for="radio2">Female</label>
								</div>
							</div> --}}

                        <div class="form-group clearfix">
                            <a onclick="checkFieldSetPidegree()" href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                    </fieldset>
                    <fieldset class="wizard-fieldset">
                        <h5>Account Information</h5>
                        <div class="form-group">
                            <input type="email" class="form-control wizard-required" id="email">
                            <label for="email" class="wizard-form-text-label">Email*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="username">
                            <label for="username" class="wizard-form-text-label">User Name*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control wizard-required" id="pwd">
                            <label for="pwd" class="wizard-form-text-label">Password*</label>
                            <div class="wizard-form-error"></div>
                            <span class="wizard-password-eye"><i class="far fa-eye"></i></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control wizard-required" id="cpwd">
                            <label for="cpwd" class="wizard-form-text-label">Confirm Password*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                            <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                    </fieldset>
                    <fieldset class="wizard-fieldset">
                        <h5>Bank Information</h5>
                        <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="bname">
                            <label for="bname" class="wizard-form-text-label">Bank Name*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="brname">
                            <label for="brname" class="wizard-form-text-label">Branch Name*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="acname">
                            <label for="acname" class="wizard-form-text-label">Account Name*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="acon">
                            <label for="acon" class="wizard-form-text-label">Account Number*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                            <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                        </div>
                    </fieldset>
                    <fieldset class="wizard-fieldset">
                        <h5>Payment Information</h5>
                        <div class="form-group">
                            Payment Type
                            <div class="wizard-form-radio">
                                <input name="radio-name" id="mastercard" type="radio">
                                <label for="mastercard">Master Card</label>
                            </div>
                            <div class="wizard-form-radio">
                                <input name="radio-name" id="visacard" type="radio">
                                <label for="visacard">Visa Card</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control wizard-required" id="honame">
                            <label for="honame" class="wizard-form-text-label">Holder Name*</label>
                            <div class="wizard-form-error"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" id="cardname">
                                    <label for="cardname" class="wizard-form-text-label">Card Number*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" id="cvc">
                                    <label for="cvc" class="wizard-form-text-label">CVC*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">Expiry Date</div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Date</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                        <option value="">6</option>
                                        <option value="">7</option>
                                        <option value="">8</option>
                                        <option value="">9</option>
                                        <option value="">10</option>
                                        <option value="">11</option>
                                        <option value="">12</option>
                                        <option value="">13</option>
                                        <option value="">14</option>
                                        <option value="">15</option>
                                        <option value="">16</option>
                                        <option value="">17</option>
                                        <option value="">18</option>
                                        <option value="">19</option>
                                        <option value="">20</option>
                                        <option value="">21</option>
                                        <option value="">22</option>
                                        <option value="">23</option>
                                        <option value="">24</option>
                                        <option value="">25</option>
                                        <option value="">26</option>
                                        <option value="">27</option>
                                        <option value="">28</option>
                                        <option value="">29</option>
                                        <option value="">30</option>
                                        <option value="">31</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Month</option>
                                        <option value="">jan</option>
                                        <option value="">Feb</option>
                                        <option value="">March</option>
                                        <option value="">April</option>
                                        <option value="">May</option>
                                        <option value="">June</option>
                                        <option value="">Jully</option>
                                        <option value="">August</option>
                                        <option value="">Sept</option>
                                        <option value="">Oct</option>
                                        <option value="">Nov</option>
                                        <option value="">Dec</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">Years</option>
                                        <option value="">2019</option>
                                        <option value="">2020</option>
                                        <option value="">2021</option>
                                        <option value="">2022</option>
                                        <option value="">2023</option>
                                        <option value="">2024</option>
                                        <option value="">2025</option>
                                        <option value="">2026</option>
                                        <option value="">2027</option>
                                        <option value="">2028</option>
                                        <option value="">2029</option>
                                        <option value="">2030</option>
                                        <option value="">2031</option>
                                        <option value="">2032</option>
                                        <option value="">2033</option>
                                        <option value="">2034</option>
                                        <option value="">2035</option>
                                        <option value="">2036</option>
                                        <option value="">2037</option>
                                        <option value="">2038</option>
                                        <option value="">2039</option>
                                        <option value="">2040</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group clearfix">
                            <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                            <a href="javascript:;" class="form-wizard-submit float-right">Submit</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('public/backend/js/consumer_form/pidegree_info.js') }}"></script>
    <script src="{{ asset('public/frontend/js/extra_validation.js') }}"></script>
    <script src="{{ asset('public/backend/js/form_wizard.js') }}"></script>
@endsection
