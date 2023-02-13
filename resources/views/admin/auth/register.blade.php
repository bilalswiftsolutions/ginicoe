@php
    $general_setting = DB::table('general_settings')
        ->where('id', 1)
        ->first();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login</title>

    @include('admin.includes.styles')

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    @include('admin.includes.scripts')

</head>

<body class="bg-gradient-primary">
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
                                        <h1 class="h4 text-gray-900 mb-4">Admin Registration</h1>
                                    </div>

                                    <form id="adminRegisterForm" action="{{ route('admin.register.store') }}"
                                        class="user" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input id="name" type="text" class="form-control form-control-user"
                                                name="name" value="{{ old('name') }}" autocomplete="name" autofocus
                                                placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input id="email" type="email" class="form-control form-control-user"
                                                name="email" value="{{ old('email') }}" autocomplete="email"
                                                autofocus placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" class="form-control form-control-user"
                                                name="password" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input id="confirm_password" type="password"
                                                class="form-control form-control-user" name="confirm_password"
                                                placeholder="Confirm Password">
                                        </div>
                                        <div class="row mt-1 mb-2">
                                        @foreach($roles as $role)
                                        @if($role->role_name != 'Admin')
                                        <div class="col-md-6">
                                        <div class="form-check">
                                            <input class=" form-check-input" @if($loop->iteration == 2) checked @endif type="radio" value="{{$role->id}}"
                                                name="role_id" >
                                            <label class="form-check-label" for="flexCheckDefault">
                                                {{$role->role_name}}
                                            </label>
                                        </div>
                                        </div>
                                        @endif
                                        @endforeach
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>
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

    @include('admin.includes.scripts-footer')

</body>

</html>