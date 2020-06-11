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
        <link rel="shortcut icon" href="{{asset('assets/admin/images/icons/lamlam-logo.ico') }}">
        <link rel="icon" sizes="130x128" href="{{asset('assets/admin/images/icons/lamlam-logo.ico') }}">
        <link rel="apple-touch-icon" sizes="130x128" href="{{asset('assets/admin/images/icons/lamlam-logo.ico') }}">

        <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/plugins/chosen/chosen.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/plugins/font.awesome.4.7.0/css/font-awesome.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/js/jeasyui/themes/default/easyui.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/js/jeasyui/themes/icon.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/js/jeasyui/demo/demo.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/admin/css/style.css') }}">
        <link rel="preload" as="font" href="{{asset('assets/admin/fonts/robotoregular.woff') }}">
<!--        <link rel="stylesheet" type="text/css" href="plugins/highcharts/css/highcharts.css">-->

    </head>
    <body>

        <!-- Sidebar -->
        <div class="dashboard-container right">

            <div class="dashboard-sidebar animated left">
                <div class="dashboard-logo">
                    <a href="index.html">
                        <img src="{{asset('assets/admin/images/lamlam-logo.png') }}" width="915" height="415" alt="LamLam Logo" class="img-responsive">
                    </a>
                    <button type="button" class="navbar-toggle sidebar-toggle" data-toggle="offcanvas">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <ul class="list-group sidebar-menu">
                    <li>
                        <a href="{{ url('/admin') }}" class="list-group-item active"><span class="sidebar-icon fa fa-tachometer"></span> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/transaction') }}" class="list-group-item"><span class="sidebar-icon fa fa-handshake-o"></span> Transaction</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/voucher') }}" class="list-group-item"><span class="sidebar-icon fa fa-credit-card"></span> Voucher</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/package') }}" class="list-group-item"><span class="sidebar-icon fa fa-database"></span> Package</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/pagebuilder') }}" class="list-group-item"><span class="sidebar-icon fa fa-file-o"></span> Page Builder</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/domain') }}" class="list-group-item"><span class="sidebar-icon fa fa-globe"></span> Domain</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/domainprice') }}" class="list-group-item"><span class="sidebar-icon glyphicon glyphicon-usd"></span> Domain Price</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/log') }}" class="list-group-item"><span class="sidebar-icon fa fa-history"></span> Log</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/webmail') }}" class="list-group-item"><span class="sidebar-icon fa fa-at"></span> WebMail</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/contact') }}" class="list-group-item"><span class="sidebar-icon fa fa-phone-square"></span> Kontak</a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/support') }}" class="list-group-item"><span class="sidebar-icon fa fa-support"></span> Support</a>
                    </li>
                    <li>
                        <a href="#" class="list-group-item"><span class="sidebar-icon fa fa-user-secret"></span> Auth</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="user.html" class="list-group-item"><span class="sidebar-icon fa fa-chevron-right"></span> User</a>
                                <a href="group.html" class="list-group-item"><span class="sidebar-icon fa fa-chevron-right"></span> Groups</a>
                                <a href="permission.html" class="list-group-item"><span class="sidebar-icon fa fa-chevron-right"></span> Access</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <hr class="stats-separator">
                    </li>
                    <li>
                        <a href="pengaturan.html" class="list-group-item"><span class="sidebar-icon glyphicon glyphicon-cog"></span> Pengaturan</a>
                    </li>
                </ul>
            </div>

            <!-- Content -->
            <div class="dashboard-content">
                <div class="dashboard-navbar">
                    <nav class="navbar navbar-default navbar-search">

                        <ul class="nav navbar-nav">
                            <form class="navbar-form navbar-left">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="fa fa-search"></span></div>
                                        <input type="text" class="form-control search-control" placeholder="Ketik untuk cari...">
                                    </div>
                                </div>
                            </form>
                        </ul>

                        <ul class="nav navbar-nav navbar-right navbar-profile">
                            <li class="dropdown menu-profile">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{asset('assets/admin/images/profile/andy-zain2.png') }}" width="44" height="44" alt="Profile" class="img-responsive">
                                    <span class="name">Andy Zain</span>
                                    <span class="glyphicon glyphicon-triangle-bottom"></span>
                                </a>
                                <ul class="dropdown-menu profile-detail">
                                    <li>
                                        <img src="{{asset('assets/admin/images/profile/andy-zain2.png') }}" width="90" height="90" alt="Profile" class="img-responsive profile-img">
                                        <div class="profile-desc">
                                            <p class="detail-name">Andy Zain</p>
                                            <p class="detail-tipe">User</p>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <div class="text-left profile-button">
                                            <a href="profile.html" class="btn btn-dashboard btn-orange">Profile</a>
                                        </div>
                                        <div class="text-right profile-button">
                                            <a href="#" class="btn btn-dashboard btn-transparent">Sign Out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="navbar-notif">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="fa fa-bell"></span>
                                </a>
                            </li>
                        </ul>

                    </nav>
                </div>

                @yield('content')
            </div>

        </div>

        <!-- Javascript -->
        <script type="text/javascript" src="{{asset('assets/admin/js/jquery.3.2.1.min.js') }}"></script>
        <script type="text/javascript" src="{{asset('assets/admin/js/bootstrap.js') }}"></script>

        <!-- Sidebar Submenu -->
        <script type="text/javascript">

            $('.sub-menu').hide();

            $("li:has(ul)").click(function(){
                $("ul",this).toggle('slow');
            });

        </script>

        {{-- chart --}}
        <script type="text/javascript">
            window.onload = function () {

                var chart = new CanvasJS.Chart("chartContainer",{
                    title: {
                    text: ""
                    },
                    axisX:{
                        gridThickness: 1,
                        gridDashType: "dot",
                        gridColor: "#e2703c",
                        lineColor: "#2d3957",
                        tickColor: "#E1E1E1",
                        tickLength: 10,
                        tickThickness: 1
                    },
                    toolTip: {
                        fontColor: "#e2703c"
                    },
                    axisY:{
                        lineColor: "#FFFFFF",
                        gridThickness: 1,
                        gridDashType: "dot",
                        gridColor: "#e2703c",
                        tickLength: 5,
                        tickColor: "white",
                        tickThickness: 5,
                        interval: 20
                    },
                    data: [{
                        type: "area",
                        markerBorderColor : "#e2703c",
                        markerBorderThickness: 3,
                        lineColor: "#e2703c",
                        color: "rgba(251, 240, 228, 0.5)",
                        markerColor: "#ffffff",
                        dataPoints: [//array
                            { y: 55, label: "Senin" },
                            { y: 35, label: "Selasa" },
                            { y: 20, label: "Rabu" },
                            { y: 40, label: "Kamis" },
                            { y: 57, label: "Jum'at" },
                            { y: 54, label: "Sabtu" },
                            { y: 40, label: "Minggu" }
                        ]
                    }]
                });

                chart.render();
        }
    </script>

    <script src="{{asset('assets/admin/plugins/canvas/canvasjs.min.js') }}"></script>

    {{-- jEasyUi --}}
    <script type="text/javascript" src="{{ asset('assets/admin/js/jeasyui/jquery.easyui.min.js') }}"></script>
    <script type="text/javascript">
        $('#dg').datagrid({singleSelect:(this.value==0)});
    </script>

    {{-- sidebar toggle --}}
    <script type="text/javascript">
        $(document).ready(function() {
            var action = 1;

            $("[data-toggle=offcanvas]").on("click", viewSomething);

            function viewSomething() {
                if ( action == 1 ) {
                    $('.right').addClass('active');
                    $('.left').addClass('active');

                    $('.animated').addClass('slideInLeft');
                    $('.animated').removeClass('slideInRight');

                    action = 2;
                } else {
                    $('.animated').removeClass('slideInLeft');
                    $('.animated').addClass('slideInRight');

                    $('.right').removeClass('active');
                    $('.left').removeClass('active');

                    action = 1;
                }
            }
        });
        </script>

        {{-- voucher --}}
        <!-- Chosen -->
        <script type="text/javascript" src="{{ asset('assets/admin/plugins/chosen/chosen.js') }}"></script>
        <script type="text/javascript">
            var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
            }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }
        </script>
</body>
</html>
