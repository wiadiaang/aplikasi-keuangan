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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="app">
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
    </div>

    <script src="{{ asset('assets/js/vendor.js') }}"></script>

    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- page js -->

    <script>
        $('#password, #repassword').on('keyup', function () {
            if ($('#password').val() == $('#repassword').val()) {

                toastr.success("Password Sama");
               
            } else 
            toastr.error("Password Tidak Sama");
        });    
    </script>

<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#password").val();
            var confirmPassword = $("#repassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
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