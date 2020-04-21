<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!        {{ asset('sufee-admin-dashboard-master/     ') }}        -->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>donorkan</title>
    <meta name="description" content="donorkan">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('sufee-admin-dashboard-master/apple-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('Remember/ico/favicon.png') }}">


    <link rel="stylesheet" href="{{ asset('sufee-admin-dashboard-master/vendors/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sufee-admin-dashboard-master/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sufee-admin-dashboard-master/vendors/themify-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('sufee-admin-dashboard-master/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('sufee-admin-dashboard-master/vendors/selectFX/css/cs-skin-elastic.css') }}">

    <link rel="stylesheet" href="{{ asset('sufee-admin-dashboard-master/assets/css/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="{{ url('/') }}">
                        <img class="align-content" src="{{ asset('sufee-admin-dashboard-master/images/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="login-form">
                <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name" >{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group">
                            <label for="email" >{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password" >{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                        </div>

                       
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <script src="{{ asset('sufee-admin-dashboard-master/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('sufee-admin-dashboard-master/vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('sufee-admin-dashboard-master/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('sufee-admin-dashboard-master/assets/js/main.js') }}"></script>


</body>

</html>
