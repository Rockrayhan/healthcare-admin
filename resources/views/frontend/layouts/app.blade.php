<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Equipment - PPE Kit Responsive HTML Template</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/fav.png')}}" type="image/x-icon">
</head>
<body>
<!-- preloader start -->

<!-- preloader end -->
<!-- main wrapper start -->
<div class="cv-main-wrapper">
    <!-- top header start -->
    <!-- top header end -->
    <!-- main header start -->
    @include('frontend.layouts.header') ;
    <!-- main header end -->


    @yield('content')


    <!-- footer start -->
    <!-- footer end -->
    <!-- copyright start -->
    @include('frontend.layouts.footer')
    <!-- copyright end -->

    {{-- check if need --}}
    <!-- login start -->
    <div class="cv-login">
        <div class="modal fade" id="loginModel">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="cv-login-close close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="cv-login-box">
                            <div class="cv-login-wlcm-box">
                                <div class="cv-login-wlcm">
                                    <h2>Sign Up</h2>
                                    <p>If you don't have a personal account please sign up</p>
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#signUpModal" data-bs-dismiss="modal" aria-label="Close" class="cv-btn">Sign up</a>
                                </div>
                            </div>
                            <div class="cv-login-form">
                                <h2>Sign in to your account</h2>
                                <p>Use your email for login</p>
                                <form>
                                    <input type="text" placeholder="Email"/>
                                    <input type="password" placeholder="Password"/>
                                    <a href="javascript:;" class="pa-forgot-password" data-bs-toggle="modal" data-bs-target="#forgotModal" data-bs-dismiss="modal" aria-label="Close">Forgot your password?</a>
                                    <button class="cv-btn">Sign in</button>
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login end -->
    <!-- sign up start -->
    <div class="cv-login">
        <div class="modal fade" id="signUpModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="cv-login-close close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="cv-login-box">
                            <div class="cv-login-wlcm-box">
                                <div class="cv-login-wlcm">
                                    <h2>Sign In</h2>
                                    <p>If you have a personal account, please sign in</p>
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#loginModel" data-bs-dismiss="modal" aria-label="Close" class="cv-btn">Sign in</a>
                                </div>
                            </div>
                            <div class="cv-login-form">
                                <h2>Create Account</h2>
                                <p>Use your email for registration</p>
                                <form>
                                    <input type="text" placeholder="Full Name"/>
                                    <input type="text" placeholder="Email"/>
                                    <input type="password" placeholder="Password"/>
                                    <button class="cv-btn">Sign up</button>
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sign up end -->
    <!-- forgot start -->
    <div class="cv-login">
        <div class="modal fade" id="forgotModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="cv-login-close close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body">
                        <div class="cv-login-box">
                            <div class="cv-login-wlcm-box">
                                <div class="cv-login-wlcm">
                                    <h2>Sign In</h2>
                                    <p>If you have a personal account, please sign in</p>
                                    <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#loginModel" data-bs-dismiss="modal" aria-label="Close" class="cv-btn">Sign in</a>
                                </div>
                            </div>
                            <div class="cv-login-form">
                                <h2>Forgot Password</h2>
                                <p>Use your email for reset password</p>
                                <form>
                                    <input type="text" placeholder="Email"/>
                                    <button class="cv-btn">submit</button>
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- forgot end -->
</div>
<!-- main wrapper end -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/SmoothScroll.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>