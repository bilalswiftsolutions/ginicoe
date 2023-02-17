@extends('layouts.app')

@section('content')
    <div class="page-banner" style="background-image: url({{ asset('public/uploads/'.$g_setting->banner_login) }})">
        <div class="bg-page"></div>
        <div class="text">
            <h1>Customer SignIn</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Customer SignIn</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="reg-login-form">
                        <div class="inner">
                            <form id="loginForm" action="{{ route('customer.login.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="">Email address</label>
                                    <input type="text" class="form-control" name="customer_email">
                                    <span style="float: left;color:red"> </span><br>
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" name="customer_password">
                                    <span style="float: left;color:red"> </span><br>
                                </div>

                                @if($g_setting->google_recaptcha_status == 'Show')
                                <div class="form-group">
                                    <div class="g-recaptcha" data-sitekey="{{ $g_setting->google_recaptcha_site_key }}"></div>
                                </div>
                                @endif

                                <button type="submit" class="btn btn-primary btn-arf">Login</button>
                                <a href="{{ route('customer.forget_password') }}" class="btn btn-warning">Forget Password</a>
                                <div class="new-user">
                                    <a href="{{ route('customer.registration') }}">New User? Make SignUp</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#loginForm").validate({
            errorPlacement: function(error, element) {

                error.appendTo(element.siblings("span"));
            },
            rules: {
                
                customer_password: {
                    required: true,
                    minlength: 8,
                    maxlength: 25
                },
                
                customer_email: {
                    required: true,
                    email: true,
                    maxlength: 50
                },


            },
            messages: {
    
                customer_password: {
                    required: "Please Don't forget to enter your Password to login",
                    minlength: "Your password must be at least 8 characters long"
                },
               
                customer_email: "Please enter a valid email address",

            }
        });
    </script>
@endsection
