<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lamlam | Professional Web Builder - Domain &amp; Hosting Seller</title>

        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Penyedia Web Builder, Hosting, dan Domain Terpercaya di Seluruh Indonesia">
        <meta name="keywords" content="Web Builder, Domain, Hosting">
        <meta name="author" content="LamLam">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Icon -->
        <link rel="shortcut icon" href="{{ asset('assets/auth/images/icons/lamlam-logo.ico') }}">
        <link rel="icon" sizes="130x128" href="{{ asset('assets/auth/images/icons/lamlam-logo.ico') }}">
        <link rel="apple-touch-icon" sizes="130x128" href="{{ asset('assets/auth/images/icons/lamlam-logo.ico') }}">

        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/plugins/font.awesome.4.7.0/css/font-awesome.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/auth/plugins/jquery.fancybox.1.3.4/fancybox/jquery.fancybox-1.3.4.css') }}">

    </head>
    <body>

            <!-- Homepage Navbar -->
        <header class="header-nav">
            <nav class="navbar navbar-default navbar-home">
                <div class="container-fluid">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('assets/auth/images/lamlam-logo.png') }}" width="185" height="63" alt="Logo LamLam Web Builder" class="img-responsive">
                        </a>
                        <a href="signup.html" class="reg-link"><span>&reg;</span></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse animated" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ url('/') }}">Fitur</a></li>
                            <li><a href="{{ url('/template') }}">Template</a></li>
                            <li><a href="{{ url('/price') }}">Harga</a></li>
                            <li><a href="{{ url('/support') }}">Support</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('/signup') }}">Daftar</a></li>
                            <li class="navbar-login"><a href="{{ url('/signin') }}" class="btn btn-orange">Masuk</a></li>
                            <li><a href="{{ url('/cart') }}" class="cart"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <!-- End Homepage Navbar -->

        @yield('content')

        <!-- Footer -->
        <footer class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 footer-desc">
                        <div class="footer-brand">
                            <img src="{{ asset('assets/auth/images/lamlam-logo.png') }}" width="165" height="30" alt="LamLam Logo" class="img-responsive">
                        </div>
                        <p class="footer-caption">
                            Lamlam adalah platform yang memudahkan anda untuk membangun website anda sendiri dengan bantuan website
                            builder. Lamlam menyediakan hosting dan domain secara gratis untuk membantu anda membuat website secara
                            instan.
                        </p>
                        <p class="footer-cp">
                            &copy; Copyright 2017 Lamlam.co.id
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-2">
                        <h3>Navigasi</h3>
                        <ul class="footer-menu">
                            <li><a href="#">Fitur</a></li>
                            <li><a href="{{ url('/template') }}">Template</a></li>
                            <li><a href="{{ url('/price') }}">Harga</a></li>
                            <li><a href="{{ url('/signup') }}">Daftar</a></li>
                            <li><a href="#">Member Area</a></li>
                            <li><a href="{{ url('/support') }}">Support</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-2">
                        <h3>Support</h3>
                        <ul class="footer-menu">
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Bantuan</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Live Chat</a></li>
                            <li><a href="#">Hubungi Kami</a></li>
                            <li><a href="#">Technical Support</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 footer-office">
                        <div class="row">
                            <h3>Kantor</h3>
                            <div class="col-md-6">
                                <p class="office-place">Jakarta</p>
                                <p class="office-address">
                                    Sudirman Building
                                    <br>
                                    Jl. KH. Mas Mansyur No. 223
                                    <br>
                                    Karet Tengsin, Jakarta Pusat
                                </p>
                                <a href="#" class="footer-map">View Map</a>
                            </div>
                            <div class="col-md-6">
                                <p class="office-place">Malang</p>
                                <p class="office-address">
                                    Perumahan Puri Nirwana Keben 7
                                    <br>
                                    Kecamatan Sukun
                                    <br>
                                    Kota Malang
                                </p>
                                <a href="#" class="footer-map">View Map</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Javascript -->
        <script type="text/javascript" src="{{ asset('assets/auth/js/jquery.3.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/auth/js/bootstrap.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $(".input-group > input").focus(function(e){
                    $(this).parent().addClass("input-group-focus");
                }).blur(function(e){
                    $(this).parent().removeClass("input-group-focus");
                });
            });
        </script>

        {{-- support --}}
        <script type="text/javascript">
            $('.faq-question a').click(function(){
                var dataItem = parseInt($(this).attr("data-item"));
                var setItem = '#faq'+dataItem+'';

                $(setItem).toggleClass('open');

            });
        </script>

        {{-- template --}}
        <script type="text/javascript" src="{{ asset('assets/auth/plugins/jquery.fancybox.1.3.4/jquery-1.4.3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/auth/plugins/jquery.fancybox.1.3.4/fancybox/jquery.mousewheel-3.0.4.pack.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/auth/plugins/jquery.fancybox.1.3.4/fancybox/jquery.fancybox-1.3.4.js') }}"></script>
        <script type="text/javascript">
            $("a[rel=example_group]").fancybox({
                'transitionIn'		: 'none',
                'transitionOut'		: 'none',
                'titlePosition' 	: 'over',
                'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
                    return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                }
            });
        </script>

        {{-- cart --}}
        <!-- Textfield Plus Minus -->
        <script type="text/javascript">
            $( document ).ready(function() {
                $('.btn-counter').click(function(e){
                    e.preventDefault();

                    var fieldName = $(this).attr('data-field');
                    var type      = $(this).attr('data-type');
                    var input = $("input[name='"+fieldName+"']");
                    var currentVal = parseInt(input.val());
                    if (!isNaN(currentVal)) {
                        if(type == 'minus') {
                            var minValue = parseInt(input.attr('min'));
                            if(!minValue) minValue = 0;
                            if(currentVal > minValue) {
                                input.val(currentVal - 1).change();
                            }
                            if(parseInt(input.val()) == minValue) {
                                $(this).attr('disabled', true);
                            }

                        } else if(type == 'plus') {
                            var maxValue = parseInt(input.attr('max'));
                            if(!maxValue) maxValue = 9999999999999;
                            if(currentVal < maxValue) {
                                input.val(currentVal + 1).change();
                            }
                            if(parseInt(input.val()) == maxValue) {
                                $(this).attr('disabled', true);
                            }

                        }
                    } else {
                        input.val(0);
                    }
                });
                $('.counter-nomina').focusin(function(){
                   $(this).data('oldValue', $(this).val());
                });
                $('.counter-nomina').change(function() {

                    var minValue =  parseInt($(this).attr('min'));
                    var maxValue =  parseInt($(this).attr('max'));
                    if(!minValue) minValue = 0;
                    if(!maxValue) maxValue = 9999999999999;
                    var valueCurrent = parseInt($(this).val());

                    var name = $(this).attr('name');
                    if(valueCurrent >= minValue) {
                        $(".btn-counter[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
                    } else {
                        alert('Sorry, the minimum value was reached');
                        $(this).val($(this).data('oldValue'));
                    }
                    if(valueCurrent <= maxValue) {
                        $(".btn-counter[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
                    } else {
                        alert('Sorry, the maximum value was reached');
                        $(this).val($(this).data('oldValue'));
                    }


                });
                $(".counter-nomina").keydown(function (e) {
                        // Allow: backspace, delete, tab, escape, enter and .
                        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                             // Allow: Ctrl+A
                            (e.keyCode == 65 && e.ctrlKey === true) ||
                             // Allow: home, end, left, right
                            (e.keyCode >= 35 && e.keyCode <= 39)) {
                                 // let it happen, don't do anything
                                 return;
                        }
                        // Ensure that it is a number and stop the keypress
                        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                            e.preventDefault();
                        }
                });
            });
        </script>
    </body>
</html>
