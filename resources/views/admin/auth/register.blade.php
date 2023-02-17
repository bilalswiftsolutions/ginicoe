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
                                        <h1 class="h4 text-gray-900 mb-4">SignUp to</h1>
                                        <h1 class="h4 text-gray-900 mb-4">Advance Social Justice</h1>
                                    </div>

                                    <form id="adminRegisterForm" action="{{ route('admin.register.store') }}" class="user"
                                        method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input id="name" type="text" class="form-control form-control-user"
                                                name="name" value="{{ old('name') }}" autocomplete="name" autofocus
                                                placeholder="Name">
                                            <p style="color:red;"></p>
                                        </div>


                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control form-control-user"
                                                name="email" value="{{ old('email') }}" autocomplete="email" autofocus
                                                placeholder="Email Address">
                                            <p style="color:red;"></p>
                                        </div>

                                        <div class="form-group">
                                            <input id="phone" type="text" class="form-control form-control-user"
                                                name="phone" value="{{ old('phone') }}" autocomplete="phone" autofocus
                                                placeholder="Phone No.">
                                            <p style="color:red;"></p>
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control form-control-user"
                                                name="password" placeholder="Password">
                                            <p style="color:red"></p>
                                        </div>
                                        <div class="form-group">
                                            <input id="confirm_password" type="password"
                                                class="form-control form-control-user" name="confirm_password"
                                                placeholder="Confirm Password">
                                            <p style="color:red"></p>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    @foreach ($roles as $role)
                                                        @if ($role->role_name != 'Admin')
                                                            <div class="col-md-6">
                                                                <div class="form-check" style="float: left">
                                                                    <input class=" form-check-input"
                                                                        @if ($loop->iteration == 2) checked @endif
                                                                        type="radio" value="{{ $role->id }}"
                                                                        name="role_id">
                                                                    <label class="form-check-label" for="flexCheckDefault">
                                                                        {{ $role->role_name }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">SignUp</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('admin.forget_password') }}">Forgot
                                            Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('admin.login') }}">Already Have an Account?</a>
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
        $("#adminRegisterForm").validate({

            errorPlacement: function(error, element) {

                error.appendTo(element.siblings('p'));
            },
            onkeyup: function(element) {
                var element_id = $(element).attr('id');
                if (this.settings.rules[element_id].onkeyup !== false) {
                    $(element).valid();
                }
            },
            rules: {
                name: {
                    required: true,
                    maxlength: 25,
                    lettersonly: true,

                },
                password: {
                    required: true,
                    minlength: 8,
                    maxlength: 25,
                    strong_password: true,

                },
                confirm_password: {
                    required: true,
                    minlength: 8,
                    equalTo: "#password",
                    maxlength: 25
                },
                email: {
                    required: true,
                    email: true,
                    maxlength: 50,
                    noemail: true,

                },
                phone: {
                    required: true,
                    maxlength: 10,
                    numeric_only: true,
                    minlength: 10,


                },
                role_id: {
                    required: true,
                }


            },
            messages: {


                phone: {
                    maxlength: "Please enter at least 10 digits",
                    minlength: "Please enter at least 10 digits",
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 8 characters long"
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 8 characters long",
                    equalTo: "Please enter the same password as above"
                },
                email: "Please enter a valid email address",

            }
        });
    </script>
@endsection
