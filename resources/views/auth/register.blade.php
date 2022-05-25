<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Registrasi - Keuangan Syariah</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">

    <!-- plugins css -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('bower_components/PACE/themes/blue/pace-theme-minimal.css') }}" />
    <link rel="stylesheet" href="{{ asset('bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" />

    <!-- core css -->
    <link href="{{ asset('assets/css/ei-icon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_old/css/register.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/material-icon/css/material-design-iconic-font.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <style>
        .not-match {
            font-size: 12px;
            color: red;
            font-weight: 700;
        }

        .agreement input.active,
        .agreement label.active {
            color: red;
        }
    </style>
</head>



<body>
    {{-- <div class="app">
        <div class="authentication">
            <div class="sign-up">
                <div class="row no-mrg-horizon">
                    <div class="col-md-4 no-pdd-horizon hidden-xs hidden-sm">
                        <div class="full-height bg" style="background-image: url('assets/images/others/img-31.jpg')">
                            <div class="vertical-align full-height pdd-horizon-70">
                                <div class="table-cell">
                                    <div class="row">
                                        <div class="mr-auto ml-auto col-md-10">
                                            <div class="text-right">
                                                <img class="img-responsive mrg-left-auto mrg-btm-15" src="assets/images/logo/logo-white.png" alt="" width="170">
                                                <p class="text-white lead text-opacity lh-1-7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                
                              

                              

                    <div class="col-md-8 bg-white no-pdd-horizon">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="full-height height-100">
                                    <div class="vertical-align full-height pdd-horizon-70">
                                        <div class="table-cell">
                                            <div class="pdd-horizon-15">
                                                <h1 class="mrg-btm-30">Create Your account</h1>
                                                <form action="{{ route('register.post') }}" method="POST" > 
                                                  @csrf

                                                    <div class="form-group">
                                                        <label class="text-normal text-dark">Entitas Syariah</label>
                                                        <input type="text" class="form-control @error('entitas') is-invalid @enderror" placeholder="Entitas Syariah" name="entitas" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-normal text-dark">Type Entitas</label>
                                                        <select name="type" class="form-control @error('type') is-invalid @enderror" placeholder="Type Entitas etc, Masjid" name="type" required>
                                                        <option value="">pilih salah satu</option>
                                                        @foreach ($type as $types)
                                                            <option value="{{ $types->entitas_type_id }}">{{ $types->entitas_type_name }}</option>
                                                        @endforeach    
                                                        
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-normal text-dark">Email</label>
                                                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="e-mail" name="email" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-normal text-dark">Password</label>
                                                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-normal text-dark">Confirm Password</label>
                                                        <input type="password" id="repassword" class="form-control @error('repassword') is-invalid @enderror" placeholder="Confirm Password"  name="repassword" required>
                                                    </div>
                                                    <div class="checkbox font-size-13 mrg-btm-20">
                                                        <input id="agreement" name="agreement" type="checkbox" checked="">
                                                        <label for="agreement">Remember Me</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" id="btnSubmit" class="btn btn-primary btn-block border-radius-6">Create New Account</button>
                                                    </div>
                                                </form>
                                                <p>Already have an account? <a href="{{ url('/')}}">Sign In</a></p>
                                                <hr>
                                                <small>By signing up you agree to out <a href="#">Terms & Policy</a></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="wraper">
        <div class="main">
            <form action="{{ route('register.post') }}" method="POST" >
                @csrf
            <section class="signup">
                <!-- <img src="images/signup-bg.jpg" alt=""> -->
                <div class="container">
                    <div class="signup-content">
                        <form method="POST" id="signup-form" class="signup-form">
                            <h2 class="form-title">Create account</h2>
                            <div class="form-group">
                                <input type="text" class="form-input @error('entitas') is-invalid @enderror" name="entitas" id="entitas" placeholder="Entitas Syariah" required/>
                            </div>
    
                            <div class="form-group">
                                <label class="text-normal text-dark">Type Entitas</label>
                                <select name="type" class="form-input @error('type') is-invalid @enderror" placeholder="Type Entitas etc, Masjid" name="type" required>
                                <option value="">pilih salah satu</option>
                                @foreach ($type as $types)
                                    <option value="{{ $types->entitas_type_id }}">{{ $types->entitas_type_name }}</option>
                                @endforeach    
                                
                                </select>
                            </div>
    
                            <div class="form-group">
                                <input type="email" class="form-input @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-input password-new @error('password') is-invalid @enderror"  name="password" id="password-f" placeholder="Password" required/>
                                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group w-not-match">
                                <input type="password" class="form-input @error('repassword') is-invalid @enderror" name="repassword" id="re_password-f" placeholder="Repeat your password" required/>
                            </div>
                            <div class="form-group agreement">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="btnSubmit" class="form-submit" value="Sign up"/>
                            </div>
                        </form>
                        <p class="loginhere">
                            Have already an account ? <a href="{{ route('login') }}" class="loginhere-link">Login here</a>
                        </p>
                    </div>
                </div>
            </section>
            </form>
    
        </div>
    </div>
   

    <script src="{{ asset('assets/js/vendor.js') }}"></script>

    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- page js -->

    <script>
       
        let statusCheckbox = false;
        $('#re_password-f').on('keyup', function () { 
            var a = 0;
                if ($('#password-f').val() == $('#re_password-f').val()) {
                    // toastr.success("Password Sama");
                    console.log("password sama")
                    a = 1;
            
                } else {
                    // toastr.error("Password Tidak Sama");
                    console.log("password tidak sama")
                    if($('.w-not-match').children().length < 2){
                        $('.w-not-match').append(`<span class="not-match">Password not match</span>`)
                    }
                    return false;
                }

                if(a == 1){
                    $('.not-match').remove()
                }
        });

        $('#agree-term').on('change', function(){
            let thisbox = this;
            if(thisbox.checked == true){
                $('.agreement input, .agreement label').removeClass("active");
                statusCheckbox = true;
            }else {
                statusCheckbox = false;
            }
        })

    </script>

<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#password-f").val();
            var confirmPassword = $("#re_password-f").val();
            if (password != confirmPassword) {
                // alert("Passwords do not match.");
                return false;
            }

            if (!statusCheckbox){
                
                $('.agreement input, .agreement label').addClass("active");
                return false;
            }

            return true;
            
        });
        $(".toggle-password").click(function() {
            console.log("success");
            $(this).toggleClass("zmdi-eye zmdi-eye-off");
            var pass = $(".password-new");
            if (pass.attr("type") == "password") {
                pass.attr("type", "text");
            } else {
                pass.attr("type", "password");
            }
            });
    });
</script>

<!-- Notifikasi menggunakan flash session data -->
    @if (Session('success'))
    <script>
        toastr.success("{!! Session::get('success') !!}");
    </script>

    @endif

    @if (session('error'))
    <script>
       toastr.error("{!! Session::get('error') !!}");
    </script>
    @endif


</html>