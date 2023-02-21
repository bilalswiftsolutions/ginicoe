@extends('admin.admin_layouts')

@section('admin_content')
    <div class="card shadow mb-4">


        <div class="col-lg-12 col-md-12">
            <div class="form-wizard">
                <form id="this_is_me_form" action="" method="post" role="form">
                    <div class="form-wizard-header">
                        <div class="progress" style="height: 50px;">
                            <div id="progress_bar" class="progress-bar bg-success " role="progressbar" style="width: 5.9%;"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1. Pedigree Info</div>
                        </div>
                    </div>
                    @include('admin.includes.consumer.this_is_me_form.pidegree_info')
                    @include('admin.includes.consumer.this_is_me_form.find_me_here')
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

    <script src="{{ asset('public/backend/js/consumer_form/this_is_me_form.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/pidegree_info.js') }}"></script>
    <script src="{{ asset('public/backend/js/consumer_form/find_me_here.js') }}"></script>
    <script src="{{ asset('public/frontend/js/extra_validation.js') }}"></script>
    <script src="{{ asset('public/backend/js/form_wizard.js') }}"></script>
@endsection
