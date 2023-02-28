@extends('admin.admin_layouts')

@section('admin_content')
<style>
    .stepper-wrapper {
  margin-top: auto;
  display: flex;
  justify-content: space-between;
  margin-bottom: 20px;
}
.stepper-item {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  flex: 1;

  @media (max-width: 768px) {
    font-size: 12px;
  }
}

.stepper-item::before {
  position: absolute;
  content: "";
  border-bottom: 2px solid #ccc;
  width: 100%;
  top: 20px;
  left: -50%;
  z-index: 2;
}

.stepper-item::after {
  position: absolute;
  content: "";
  border-bottom: 2px solid #ccc;
  width: 100%;
  top: 20px;
  left: 50%;
  z-index: 2;
}

.stepper-item .step-counter {
  position: relative;
  z-index: 5;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #ccc;
  margin-bottom: 6px;
}

.stepper-item.active {
  font-weight: bold;
}

.stepper-item.completed .step-counter {
  background-color: #4bb543;
}

.stepper-item.completed::after {
  position: absolute;
  content: "";
  border-bottom: 2px solid #4bb543;
  width: 100%;
  top: 20px;
  left: 50%;
  z-index: 3;
}

.stepper-item:first-child::before {
  content: none;
}
.stepper-item:last-child::after {
  content: none;
}
</style>
    <div class="card shadow mb-4">


        <div class="col-lg-12 col-md-12">
            <div class="form-wizard">
                <form id="this_is_me_form" action="" method="post" role="form">
                    <div class="form-wizard-header">
                        <div class="stepper-wrapper">
                            <div class="stepper-item active" id="pedigree_bar">
                              <div class="step-counter">1</div>
                              <div class="step-name">My Pedigree Info</div>
                            </div>
                            <div class="stepper-item" id="find_me_here_bar">
                              <div class="step-counter">2</div>
                              <div class="step-name">Find Me Here</div>
                            </div>
                            <div class="stepper-item" id="gender_identity_bar">
                              <div class="step-counter">3</div>
                              <div class="step-name">Gender Identity Information</div>
                            </div>
                            <div class="stepper-item" id="enthnicity_bar">
                              <div class="step-counter">4</div>
                              <div class="step-name">Ethnicity Information</div>
                            </div>

                            <div class="stepper-item" id="neighborhood_bar">
                                <div class="step-counter" >5</div>
                                <div class="step-name">My Neighborhood is</div>
                              </div>

                              <div class="stepper-item" id="employment_bar">
                                <div class="step-counter">6</div>
                                <div class="step-name">Employment Information</div>
                              </div>

                              <div class="stepper-item" id="protect_cards_bar">
                                <div class="step-counter">7</div>
                                <div class="step-name">Protect These Charge Cards</div>
                              </div>
                              <div class="stepper-item" id="facial_image_upload_bar">
                                <div class="step-counter">8</div>
                                <div class="step-name">Facial Image Upload</div>
                              </div>
                              <div class="stepper-item" id="head_n_face_bar">
                                <div class="step-counter">9</div>
                                <div class="step-name">Head & Face Info</div>
                              </div>

                              <div class="stepper-item" id="hair_bar">
                                <div class="step-counter">10</div>
                                <div class="step-name">Hair</div>
                              </div>

                             
                        </div>
                    </div>
                    @include('admin.includes.consumer.this_is_me_form.pidegree_info')
                    @include('admin.includes.consumer.this_is_me_form.find_me_here')
                    @include('admin.includes.consumer.this_is_me_form.gender_identity_information')
                    @include('admin.includes.consumer.this_is_me_form.ethnicity_information')
                    @include('admin.includes.consumer.this_is_me_form.my_neighborhood')
                    @include('admin.includes.consumer.this_is_me_form.employment_information')
                    @include('admin.includes.consumer.this_is_me_form.charges_card')
                    @include('admin.includes.consumer.this_is_me_form.facial_image')
                    @include('admin.includes.consumer.this_is_me_form.head_and_face_info')
                    @include('admin.includes.consumer.this_is_me_form.hair')
                    @include('admin.includes.consumer.this_is_me_form.distinguish_identifier')
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

    <script src="{{ asset('public/backend/js/consumer_form/this_is_me_form.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/pidegree_info.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/find_me_here.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/gender_identity_information.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/ethnicity_info.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/my_neighborhood.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/employment_information.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/charges_card.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/facial_image_upload.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/head_and_face_info.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/hair.js') }}"></script>
    <script src="{{ asset('public/frontend/js/extra_validation.js') }}"></script>
    <script src="{{ asset('public/backend/js/form_wizard.js') }}"></script>
@endsection
