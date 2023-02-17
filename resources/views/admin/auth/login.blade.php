@php
    $general_setting = DB::table('general_settings')
        ->where('id', 1)
        ->first();
@endphp
@php
    $general_setting = DB::table('general_settings')
        ->where('id', 1)
        ->first();
@endphp
@extends('layouts.app')

@section('content')
    <div class="container v-center">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"
                                style="background-image: url({{ asset('public/uploads/' . $general_setting->login_bg) }});">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">

                                    <div class="text-center">
                                        <h2 class="h4 text-gray-900 mb-4">Welcome Back Social Justice Warrior</h2>
                                    </div>

                                    <form id="adminLoginForm" action="{{ route('admin.login.store') }}" class="user"
                                        method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control form-control-user"
                                                name="email" value="{{ old('email') }}" autocomplete="email"
                                                autofocus placeholder="Email Address">
                                                <p style="color:red;"></p>
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control form-control-user"
                                                name="password" placeholder="Password">
                                                <p style="color:red;"></p>
                                        </div>

                                        @if ($g_setting->google_recaptcha_status == 'Show')
                                            {{-- <div class="form-group">
                                                <div class="g-recaptcha"
                                                    data-sitekey="{{ $g_setting->google_recaptcha_site_key }}"></div>

                                            </div> --}}
                                            <div class="form-group">
                                           
                                                <div class="row ml-2">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <h3 id="first_number" class="m-2"></h3>
                                                            <h3 class="m-2">+</h3>
                                                            <h3 id="second_number" class="m-2"></h3>
                                                            <h3 class="m-2"> = </h3>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input  onkeyup="checkAnswer()" id="captcha" type="number" class="form-control form-control-user"
                                                            name="captcha" placeholder="Captcha">
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <button disabled id="submit" type="submit" class="btn btn-primary btn-user btn-block">SignIn</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('admin.forget_password') }}">Forgot
                                            Password?</a>
                                    </div>

                                    <div class="text-center">
                                        <a class="small" href="{{ route('admin.register') }}">New User?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <script>
        var first_number = Math.floor(Math.random() * 11);
        var second_number = Math.floor(Math.random() * 11);
    
        var answer = 0;
        $('#first_number').text(first_number)
        $('#second_number').text(second_number)
        answer = first_number + second_number;
        function checkAnswer()
        {

            user_answer = $('#captcha').val();

            if(user_answer == answer)
            {
               $('#submit').prop('disabled', false);

            }else{
                $('#submit').prop('disabled', true);
            }
        }

        $("#adminLoginForm").validate({
            errorPlacement: function(error, element) {

                error.appendTo(element.siblings('p'));
            },
            onkeyup: function(element) {
                var element_id = $(element).attr('id');
                if (this.settings?.rules[element_id]?.onkeyup !== false) {
                    $(element).valid();
                }
            },
            rules: {
               
                password: {
                    required: true,
                    minlength: 8,
                    maxlength: 32,
                    
                 
                },
               
                email: {
                    required: true,
                    email: true,
                    maxlength: 50,
                    noemail: true,
                },
              

            },
            messages: {
         
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 8 characters long"
                },
                
                email: "Please enter a valid email address",

            }
        });
    </script>
    @include('admin.includes.scripts-footer')

    @endsection
