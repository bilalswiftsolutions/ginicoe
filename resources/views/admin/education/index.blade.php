@extends('admin.admin_layouts')

@section('admin_content')
    <div class="card shadow mb-4">


        <div class="col-lg-12 col-md-12">
            <form id="update_my_info_form" action="{{route('admin.education.update_my_info.store')}}" method="post" role="form">
               @csrf
                <div class="form-wizard">

                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="first_name" value="{{optional($education)->first_name ?? ''}}" type="text"
                                    class="form-control wizard-required" id="first_name">
                                <label for="first_name" class="wizard-form-text-label">1. First Name</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="last_name" value="{{optional($education)->last_name ?? ''}}" type="text"
                                    class="form-control wizard-required" id="last_name">
                                <label for="last_name" class="wizard-form-text-label">2. Last Name</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="email" value="{{optional($education)->email ?? ''}}" type="email"
                                    class="form-control wizard-required" id="email">
                                <label for="email" class="wizard-form-text-label">3. Email</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="country_code" value="{{optional($education)->country_code ?? ''}}" type="text"
                                    class="form-control wizard-required" id="country_code">
                                <label for="country_code" class="wizard-form-text-label">3. Country Code</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6">
                            <div class="form-group">
                                <input name="telephone_no" value="{{optional($education)->telephone_no ?? ''}}" type="text"
                                    class="form-control wizard-required" id="telephone_no">
                                <label for="telephone_no" class="wizard-form-text-label">4. Telephone No.</label>
                                <p class="text_danger form_error"></p>
                            </div>
                        </div>

                        
                    
                        <div class="col-md-8 col-lg-8">
                            <div class="form-group">
                                <label for="help_description" class="wizard-form-text-label">5. Describe in Detail How
                                    Ginicoe Can Help You.</label>
                                <textarea name="help_description" class="form-control wizard-required" id="help_description">{{optional($education)->help_description ?? ''}}</textarea>
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
    <script src="{{ asset('public/backend/js/education/update_my_info.js') }}"></script>
    
@endsection
