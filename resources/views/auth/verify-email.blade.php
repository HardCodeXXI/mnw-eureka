
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>Verify Email</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Match and Work Verify Email" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::asset('panel/assets/images/dark mnw.webp')}}">

        <!-- App css -->
        <link href="{{URL::asset('panel/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('panel/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('panel/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

        <!-- Lock screen page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index.html" class="logo logo-admin">
                                            <img src="{{URL::asset('panel/assets/images/dark mnw.webp')}}" height="50" alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Verify Email</h4>
                                        <p class="text-muted  mb-0">Hello {{Auth::user()->first_name}}, Please Verify your email to login into Match and Work System !</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal auth-form" action="{{ route('verification.send') }}" method="POST">
                                      @csrf
                                      <div class="form-group mb-0 row">
                                        <div class="col-12">
                                          <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Resend Verification Email <i class="fas fa-sign-in-alt ms-1"></i></button>
                                        </div><!--end col-->
                                      </div> <!--end form-group-->

                                    </form><!--end form-->
                                    
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <p class="text-muted mb-0 mt-3">Not your email ?  <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                               this.closest('form').submit();" class="text-primary ms-2">Log out</a></p>

                                    </form>
                                </div>
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">Match and Work © <script>
                                        document.write(new Date().getFullYear())
                                    </script></span>
                                </div>
                            </div><!--end card-->
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- End lock screen page -->




        <!-- jQuery  -->
        <script src="{{URL::asset('panel/assets/js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('panel/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{URL::asset('panel/assets/js/waves.js')}}"></script>
        <script src="{{URL::asset('panel/assets/js/feather.min.js')}}"></script>
        <script src="{{URL::asset('panel/assets/js/simplebar.min.js')}}"></script>


    </body>


</html>
