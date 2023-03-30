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
  cursor: pointer;

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
.permanent_color{
  color:skyblue;
}
</style>
    <div class="card shadow mb-4">


        <div class="col-lg-12 col-md-12">
            <div class="form-wizard">
                <form id="this_is_me_form" action="" method="post" role="form">
                    <div class="form-wizard-header">
                        <div class="stepper-wrapper">
                            <div class="stepper-item  @if(empty($this_is_me_return_back_data) || $this_is_me_return_back_data->fieldset_id == 'fieldset_one') active @endif" onclick="switchFieldset('fieldset_one',this)" id="pedigree_bar">
                              <div class="step-counter">1</div>
                              <div class="step-name mt-3" >My Pedigree Info</div>
                            </div>
                            <div class="stepper-item  @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_two') active @endif"  onclick="switchFieldset('fieldset_two',this)"  id="find_me_here_bar">
                              <div class="step-counter">2</div>
                              <div class="step-name mt-3" >Find Me Here</div>
                            </div>
                            <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_three') active @endif" onclick="switchFieldset('fieldset_three',this)" id="gender_identity_bar">
                              <div class="step-counter">3</div>
                              <div class="step-name mt-3" >Gender Identity Information</div>
                            </div>
                            <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_four') active @endif"  onclick="switchFieldset('fieldset_four',this)" id="enthnicity_bar">
                              <div class="step-counter">4</div>
                              <div class="step-name mt-3" >Ethnicity Information</div>
                            </div>

                            <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_five') active @endif" onclick="switchFieldset('fieldset_five',this)" id="neighborhood_bar">
                                <div class="step-counter" >5</div>
                                <div class="step-name mt-3" >My Neighborhood is</div>
                              </div>

                              <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_six') active @endif" onclick="switchFieldset('fieldset_six',this)" id="employment_bar">
                                <div class="step-counter">6</div>
                                <div class="step-name mt-3" >Employment Information</div>
                              </div>

                              <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_seven') active @endif" onclick="switchFieldset('fieldset_seven',this)" id="protect_cards_bar">
                                <div class="step-counter">7</div>
                                <div class="step-name mt-3" >Protect These Charge Cards</div>
                              </div>
                              <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_eight') active @endif" onclick="switchFieldset('fieldset_eight',this)" id="facial_image_upload_bar">
                                <div class="step-counter">8</div>
                                <div class="step-name mt-3" >Facial Image Upload</div>
                              </div>
                              <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_nine') active @endif" onclick="switchFieldset('fieldset_nine',this)" id="head_n_face_bar">
                                <div class="step-counter">9</div>
                                <div class="step-name mt-3" >Head & Face Info</div>
                              </div>

                              <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_ten') active @endif" onclick="switchFieldset('fieldset_ten',this)" id="hair_bar">
                                <div class="step-counter">10</div>
                                <div class="step-name mt-3" >Hair</div>
                              </div>

                              
                              <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_eleven') active @endif" onclick="switchFieldset('fieldset_eleven',this)" id="distinguish_bar">
                                <div class="step-counter">11</div>
                                <div class="step-name mt-3" >Distinguishing Identifiers</div>
                              </div>

                              <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_twelve') active @endif" onclick="switchFieldset('fieldset_twelve',this)" id="twin_identifier_bar">
                                <div class="step-counter">12</div>
                                <div class="step-name mt-3" >Twin Identifier</div>
                              </div>
                              {{-- <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_thirteen') active @endif" onclick="switchFieldset('fieldset_thirteen',this)" id="open_bar">
                                <div class="step-counter">13</div>
                                <div class="step-name mt-3" >Open</div>
                              </div> --}}
                              <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_fourteen') active @endif" onclick="switchFieldset('fieldset_fourteen',this)" id="medical_info_bar">
                                <div class="step-counter">14</div>
                                <div class="step-name mt-3" >Medical Info</div>
                              </div>

                              <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_fifteen') active @endif" onclick="switchFieldset('fieldset_fifteen',this)" id="family_history_bar">
                                <div class="step-counter">15</div>
                                <div class="step-name mt-3" >Family & Medical History</div>
                              </div>

                              <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_sixteen') active @endif" onclick="switchFieldset('fieldset_sixteen',this)" id="travel_info_bar">
                                <div class="step-counter">16</div>
                                <div class="step-name mt-3" >Special Licenses</div>
                              </div>

                              <div class="stepper-item @if(!empty($this_is_me_return_back_data) && $this_is_me_return_back_data->fieldset_id == 'fieldset_seventeen') active @endif" onclick="switchFieldset('fieldset_seventeen',this)" id="attestation_bar">
                                <div class="step-counter">17</div>
                                <div class="step-name mt-3" >Attestation</div>
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
                    @include('admin.includes.consumer.this_is_me_form.twin_identifier')
                    {{-- @include('admin.includes.consumer.this_is_me_form.open') --}}
                    @include('admin.includes.consumer.this_is_me_form.medical_info')
                    @include('admin.includes.consumer.this_is_me_form.family_and_medical_history')
                    @include('admin.includes.consumer.this_is_me_form.travel_info')
                    @include('admin.includes.consumer.this_is_me_form.attestation')
                   
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
    <script src="{{ asset('public/backend/js/consumer_form/distinguish_identifiers.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/twin_identifier.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/open.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/medical_info.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/family_and_medical_history.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/travel_info.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/attestation.js') }}"></script>
    <script src="{{ asset('public/frontend/js/extra_validation.js') }}"></script>
    <script src="{{ asset('public/backend/js/form_wizard.js') }}"></script>
@endsection
