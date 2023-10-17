<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('images/favicon.ico')}}" />

    <!-- App css -->
    <link href="{{url('css/bootstrap-creative.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="{{url('css/app-creative.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="{{url('css/bootstrap-creative-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled />
    <link href="{{url('css/app-creative-dark.min.css')}}" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled />

    <!-- icons -->
    <link href="{{url('css/icons.min.css')}}" rel="stylesheet" type="text/css" />

</head>

<body class="authentication-bg authentication-bg-pattern" style="background-color: whitesmoke;">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-pattern">

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <div class="auth-logo">
                                    <!-- <a href="index.html" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="../assets/images/logo-dark.png" alt="" height="22">
                                            </span>
                                        </a> -->

                                    <a href="index.html" class="logo logo-light text-center">
                                        <span class="logo-lg">
                                            <img src="../assets/images/logo-light.png" alt="" height="22">
                                        </span>
                                    </a>
                                </div>
                                <p class="text-muted mb-4 mt-3">Change Account Password</p>
                            </div>

                            <form method="POST" action="{{ route('password.change') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="current_password">Current Password</label>
                                    <div class="input-group input-group-merge">
                                        <input id="current_password" type="password" class="form-control" name="current_password" required placeholder="Enter your Current password">
                                        <div class="input-group-append" data-password="false"></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <div class="input-group input-group-merge">
                                        <input id="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" name="new_password" required placeholder="Enter your new password">
                                        <div class="input-group-append" data-password="false">
                                            <div class="input-group-text">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                        @error('new_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="new_password_confirmation">Confirm New Password</label>
                                    <div class="input-group input-group-merge">
                                        <input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation" required placeholder="Confirm your new password">
                                        <div class="input-group-append" data-password="false"></div>
                                    </div>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary btn-block" type="submit">Change Password</button>
                                </div>

                                <a href="{{ route('login') }}" class="float-right mt-2 font-15">Login</a>
                            </form>


                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->


    <!-- Vendor js -->
    <script src="{{url('js/vendor.min.js')}}"></script>
    <!-- App js -->
    <script src="{{url('js/app.min.js')}}"></script>
</body>

</html>