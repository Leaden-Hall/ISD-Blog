<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/storage/assets/admin/img/apple-icon.png')}}">

    <link rel="icon" type="image/png" href="{{asset('/storage/assets/admin/img/favicon.png')}}">
    <title>VIETPOINTER BLOGS</title>
    <!--     Fonts and icons     -->
{{--     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
 --}}
    <link rel="stylesheet" href="{{asset('/storage/assets/admin/font-awesome/latest/css/font-awesome.min.css')}}" />
    <!-- CSS Files -->
    <link href="{{asset('/storage/assets/admin/css/bootstrap.min.css')}}" rel="stylesheet" />

    <link href="{{asset('/storage/assets/admin/css/light-bootstrap-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->

    <link href="{{asset('/storage/assets/admin/css/demo.css')}}" rel="stylesheet" />
    <link href="{{asset('/storage/assets/admin/css/admin.css')}}" rel="stylesheet" />
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
    <!-- End Google Tag Manager -->
    </head>

    <body>
      <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <div class="sidebar" data-color="orange" data-image="{{asset('/storage/assets/admin/img/sidebar-5.jpg')}}">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="https://www.creative-tim.com" class="simple-text logo-mini">
                        
                    </a>
                    <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                        VIETPOINTER
                    </a>
                </div>
                <div class="user">
                    <div class="photo">
                        <img src="{{asset('/storage/assets/admin/img/default-avatar.jpg')}}" />
                    </div>
<div class="info ">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>Thanh Nguyen
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a class="profile-dropdown" href="#pablo">
                                        <span class="sidebar-mini">MP</span>
                                        <span class="sidebar-normal">My Profile</span>
                                    </a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="{!! url('admin'); !!}">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    
                    <li class="nav-item ">
                        <a class="nav-link" href="{!! url('admin/users'); !!}">
                            <i class="fa fa-users"></i>
                            <p>User management</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{!! url('admin/posts'); !!}">
                            <i class="fa fa-clipboard"></i>
                            <p>Post management</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{!! url('admin/events'); !!}">
                            <i class="fa fa-calendar"></i>
                            <p>Event management</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{!! url('admin/announcements'); !!}">
                            <i class="fa fa-bell"></i>
                            <p>Announcement management</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{!! url('admin/reports'); !!}">
                            <i class="fa fa-file"></i>
                            <p>Report management</p>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-warning btn-fill btn-round btn-icon d-none d-lg-block">
                                <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
                                <i class="fa fa-navicon visible-on-sidebar-mini"></i>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo"> Dashboard </a>
                    </div>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="nav navbar-nav mr-auto">
                            <form class="navbar-form navbar-left navbar-search-form" role="search">
                                <div class="input-group">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                </div>
                            </form>
                        </ul>
                        <ul class="navbar-nav">
                            
                            <li class="dropdown nav-item" style="margin-right: 50px;">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    @yield('admin_content')
                </div>
            </div>
                    
                    
                            <div class="fixed-plugin">
                                <div class="dropdown show-dropdown">
                                    <a href="#" data-toggle="dropdown">
                                        <i class="fa fa-cog fa-2x"> </i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="header-title"> Sidebar Style</li>
                                        <li class="adjustments-line">
                                            <a href="javascript:void(0)" class="switch-trigger">
                                                <p>Background Image</p>
                                                <label class="switch-image">
                                                    <input type="checkbox" data-toggle="switch" checked="" data-on-color="info" data-off-color="info">
                                                    <span class="toggle"></span>
                                                </label>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="adjustments-line">
                                            <a href="javascript:void(0)" class="switch-trigger">
                                                <p>Sidebar Mini</p>
                                                <label class="switch-mini">
                                                    <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                                                    <span class="toggle"></span>
                                                </label>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="adjustments-line">
                                            <a href="javascript:void(0)" class="switch-trigger">
                                                <p>Fixed Navbar</p>
                                                <label class="switch-nav">
                                                    <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                                                    <span class="toggle"></span>
                                                </label>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="adjustments-line">
                                            <a href="javascript:void(0)" class="switch-trigger background-color">
                                                <p>Filters</p>
                                                <div class="pull-right">
                                                    <span class="badge filter badge-black" data-color="black"></span>
                                                    <span class="badge filter badge-azure" data-color="azure"></span>
                                                    <span class="badge filter badge-green" data-color="green"></span>
                                                    <span class="badge filter badge-orange active" data-color="orange"></span>
                                                    <span class="badge filter badge-red" data-color="red"></span>
                                                    <span class="badge filter badge-purple" data-color="purple"></span>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a>
                                        </li>
                                        <li class="header-title">Sidebar Images</li>
                                        <li class="active">
                                            <a class="img-holder switch-trigger" href="javascript:void(0)">
                                                <img src="{{asset('/storage/assets/admin/img/sidebar-1.jpg')}}" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a class="img-holder switch-trigger" href="javascript:void(0)">
                                                <img src="{{asset('/storage/assets/admin/img/sidebar-3.jpg')}}" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a class="img-holder switch-trigger" href="javascript:void(0)">
                                                <img src="{{asset('/storage/assets/admin/img/sidebar-4.jpg')}}" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a class="img-holder switch-trigger" href="javascript:void(0)">
                                                <img src="{{asset('/storage/assets/admin/img/sidebar-5.jpg')}}" alt="" />
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>

<!--   Core JS Files   -->
<script src="{{asset('/storage/assets/admin/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>

<script src="{{asset('/storage/assets/admin/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/storage/assets/admin/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{asset('/storage/assets/admin/js/plugins/bootstrap-switch.js')}}"></script>
<!--  Google Maps Plugin    -->
{{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
 --}}
<!--  Chartist Plugin  -->
{{-- <script src="{{asset('/storage/assets/admin/js/plugins/chartist.min.js')}}"></script>
 --}}<!--  Notifications Plugin    -->
<script src="{{asset('/storage/assets/admin/js/plugins/bootstrap-notify.js')}}"></script>
<!--  Share Plugin -->
<script src="{{asset('/storage/assets/admin/js/plugins/jquery.sharrre.js')}}"></script>
<!--  jVector Map  -->
<script src="{{asset('/storage/assets/admin/js/plugins/jquery-jvectormap.js')}}" type="text/javascript"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{asset('/storage/assets/admin/js/plugins/moment.min.js')}}"></script>
<!--  DatetimePicker   -->
<script src="{{asset('/storage/assets/admin/js/plugins/bootstrap-datetimepicker.js')}}"></script>
<!--  Sweet Alert  -->
<script src="{{asset('/storage/assets/admin/js/plugins/sweetalert2.min.js')}}" type="text/javascript"></script>
<!--  Tags Input  -->
<script src="{{asset('/storage/assets/admin/js/plugins/bootstrap-tagsinput.js')}}" type="text/javascript"></script>
<!--  Sliders  -->
<script src="{{asset('/storage/assets/admin/js/plugins/nouislider.js')}}" type="text/javascript"></script>
<!--  Bootstrap Select  -->
<script src="{{asset('/storage/assets/admin/js/plugins/bootstrap-selectpicker.js')}}" type="text/javascript"></script>
<!--  jQueryValidate  -->
<script src="{{asset('/storage/assets/admin/js/plugins/jquery.validate.min.js')}}" type="text/javascript"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{asset('/storage/assets/admin/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
<!--  Bootstrap Table Plugin -->
<script src="{{asset('/storage/assets/admin/js/plugins/bootstrap-table.js')}}"></script>
<!--  DataTable Plugin -->
<script src="{{asset('/storage/assets/admin/js/plugins/jquery.dataTables.min.js')}}"></script>
<!--  Full Calendar   -->
<script src="{{asset('/storage/assets/admin/js/plugins/fullcalendar.min.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('/storage/assets/admin/js/light-bootstrap-dashboard.js?v=2.0.1')}}" type="text/javascript"></script>
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('/storage/assets/admin/js/demo.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initVectorMap();
        demo.initLBDWizard();
    });
</script>
<!-- Facebook Pixel Code Don't Delete -->
<script>

    $(document).on('click', '#userDelete', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal({
                title: "Do you want to delete this?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn btn-info btn-fill",
                confirmButtonText: "Yes, delete it!",
                cancelButtonClass: "btn btn-danger btn-fill",
                closeOnConfirm: false,
            }, function() {
                $.ajax({
                    type: "GET",
                    url: "user/delete/" + id,
                    data: {id:id},
                    success: function (data) {
                            // swal("Deleted!", "This record has been deleted.", "success");
                            swal({
                                title: "Deleted!",
                                text: "This record has been deleted.",
                                type: "success",
                                confirmButtonClass: "btn btn-info btn-fill",
                                confirmButtonText: "Yes, delete it!",
                                closeOnConfirm: false,
                            }, function() {
                                location.reload();
                            });
                        }         
                });
            });
    });

    $(document).on('click', '#announDelete', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        swal({
                title: "Do you want to delete this?",
                text: "You won't be able to revert this!",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn btn-info btn-fill",
                confirmButtonText: "Yes, delete it!",
                cancelButtonClass: "btn btn-danger btn-fill",
                closeOnConfirm: false,
            }, function() {
                $.ajax({
                    type: "GET",
                    url: "announcement/delete/" + id,
                    data: {id:id},
                    success: function (data) {
                            // swal("Deleted!", "This record has been deleted.", "success");
                            swal({
                                title: "Deleted!",
                                text: "This record has been deleted.",
                                type: "success",
                                confirmButtonClass: "btn btn-info btn-fill",
                                confirmButtonText: "Yes, delete it!",
                                closeOnConfirm: false,
                            }, function() {
                                location.reload();
                            });
                        }         
                });
            });
    });

    $(document).on('click', '#reportContent', function (e) {
        e.preventDefault();
        var content = $(this).data('id');
        swal("Reason", content);
    });
</script>

</body>
</html>
