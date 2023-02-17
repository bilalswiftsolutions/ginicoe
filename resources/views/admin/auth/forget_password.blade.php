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
                                        <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                                    </div>

                                    <form id="adminForgetPassworForm"
                                        action="{{ route('admin.forget_password.store') }}" class="user"
                                        method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control form-control-user"
                                                name="email" value="{{ old('email') }}" autocomplete="email"
                                                autofocus placeholder="Email Address">

                                                <p style="color:red;"></p>

                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Send
                                            Verification Link</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('admin.login') }}">Back to Login Page</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    @include('admin.includes.scripts-footer')


    <script>
        $("#adminForgetPassworForm").validate({
            errorPlacement: function(error, element) {

                error.appendTo(element.siblings('p'));
            },
            rules: {
                email: {
                    required: true,
                    email: true,
                    maxlength: 50,
                    noemail: true,
                },
            },
            messages: {         
                email: "Please enter a valid email address",
            }
        });
    </script>
  @endsection