<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Register Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Match and Work Register" name="description" />
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

        <!-- Log In page -->
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
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Let's Get Started</h4>
                                        <p class="text-muted  mb-0">Register to continue .</p>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="nav-border nav nav-pills" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#Register_Tab" role="tab">Register</a>
                                        </li>
                                    </ul>
                                     <!-- Tab panes -->
                                    <div class="tab-content">

                                        <div class="tab-pane active px-3 pt-3" id="Register_Tab" role="tabpanel">
                                            <form class="form-horizontal auth-form" action="{{ route('register') }}" method="POST">
                                              @csrf
                                              <div class="row">
                                                <div class="col-md-6">
                                                  <div class="form-group mb-2">
                                                    <label class="form-label" for="username">First Name</label>
                                                    <div class="input-group">
                                                      <input type="text" class="form-control" name="first_name" id="username" placeholder="Enter First Name" required>
                                                    </div>
                                                  </div><!--end form-group-->
                                                </div>
                                                <div class="col-md-6">
                                                  <div class="form-group mb-2">
                                                    <label class="form-label" for="last_name">Last Name</label>
                                                    <div class="input-group">
                                                      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last Name" required>
                                                    </div>
                                                  </div><!--end form-group-->
                                                </div>
                                              </div>

                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="useremail">Email</label>
                                                    <div class="input-group">
                                                        <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter Email" required>
                                                    </div>
                                                </div><!--end form-group-->



                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="userpassword">Password</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password" minlengh="8" onkeyup="check();" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                                                    </div>
                                                </div><!--end form-group-->

                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="conf_password">Confirm Password</label>
                                                    <div class="input-group">
                                                        <input type="password" onkeyup="check();"  class="form-control" name="password_confirmation" id="conf_password" placeholder="Enter Confirm Password" minlengh="8" required>
                                                    </div>
                                                    <span id="message"></span>
                                                </div><!--end form-group-->

                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="mo_number">Whatsapp Number</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" required name="whatsappnumber" id="mo_number" placeholder="Enter Mobile Number">
                                                    </div>
                                                </div><!--end form-group-->



                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 waves-effect waves-light" id="submit" type="submit">Register <i class="fas fa-sign-in-alt ms-1"></i></button>
                                                    </div><!--end col-->
                                                </div> <!--end form-group-->
                                            </form><!--end form-->
                                            <p class="my-3 text-muted">Already have an account ?<a href="{{route('login')}}" class="text-primary ms-2">Log in</a></p>

                                            <div class="account-social">
                                                <h6 class="mb-3">Or Register With</h6>
                                            </div>
                                            <div class="btn-group w-100">
                                                <button type="button" class="btn btn-sm btn-outline-secondary"> <i class="fab fa-google"></i> Google Account</button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--end card-body-->
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
        <!-- End Log In page -->




        <!-- jQuery  -->
        <script src="{{URL::asset('panel/assets/js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('panel/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{URL::asset('panel/assets/js/waves.js')}}"></script>
        <script src="{{URL::asset('panel/assets/js/feather.min.js')}}"></script>
        <script src="{{URL::asset('panel/assets/js/simplebar.min.js')}}"></script>
        <script type="text/javascript">
          function check(){
            if(document.getElementById('userpassword').value == document.getElementById('conf_password').value){
              document.getElementById('message').style.color='green';
              document.getElementById('message').innerHTML ='password same!';
              document.getElementById('submit').disabled=false;
            }else {
              document.getElementById('message').style.color='red';
              document.getElementById('message').innerHTML ="password didn't match!";
              document.getElementById('submit').disabled=true;
            }
          }
        </script>

    </body>


</html>
