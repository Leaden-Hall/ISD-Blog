<!doctype html>
<html lang="en">

   <head>
      <meta charset="utf-8" />
      <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/storage/assets/admin/img/apple-icon.png')}}">
      <link rel="icon" type="image/png" href="{{asset('/storage/assets/admin/img/favicon.png')}}">
      <title>VIETPOINTER BLOGS</title>
      <!--     Fonts and icons     -->
      {{--     
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
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
         })(window,document,'script','dataLayer','GTM-NKDMSK6');
      </script>
      <!-- End Google Tag Manager -->
   </head>

    <body>
      <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper wrapper-full-page">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
            <div class="container">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" style="font-size: 25px; padding-left: 345px;" href="#pablo">VIETPOINTER BLOG MANAGEMENT</a>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="full-page  section-image" data-color="black" data-image="{{asset('/storage/assets/admin/img/full-screen-image-3.jpg')}}" ;>
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        {{-- <form class="form" method="" action=""> --}}
                        {!! Form::open(array('url' => 'admin/login', 'method' => 'POST')) !!}
                            <div class="card card-login card-hidden">
                                <div class="card-header ">
                                    <h3 class="header text-center">Login</h3>
                                    @if($msg = Session::get('error') )
                                    <div class="alert alert-danger">
                                        <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                            <i class="nc-icon nc-simple-remove"></i>
                                        </button>
                                        <span>
                                            <b> Error - </b> {{$msg}}</span>
                                    </div>
                                    @endif
                                </div>
                                <div class="card-body ">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Email</label>
                                            {{-- <input type="username" placeholder="Enter username" class="form-control"> --}}
                                            {{Form::text('email',null, array('class' => 'form-control', 'type' => 'text', 'required' => 'true', 'placeholder' => 'Enter email...')) }}
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            {{-- <input type="password" placeholder="Password" class="form-control"> --}}
                                            {{Form::password('password', array('class' => 'form-control', 'type' => 'password', 'required' => 'true', 'placeholder' => 'Enter password...'))}}
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    {{-- <button type="submit" class="btn btn-warning btn-wd">Login</button> --}}
                                    {{Form::submit('Login', array('class' => 'btn btn-warning btn-wd')) }}
                                </div>
                            </div>
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
<!--   Core JS Files   -->
      <script src="{{asset('/storage/assets/admin/js/core/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('/storage/assets/admin/js/core/popper.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('/storage/assets/admin/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
      <!--  Plugin for Switches, full documentation here: https://www.jque.re/plugins/version3/bootstrap.switch/ -->
      <script src="{{asset('/storage/assets/admin/js/plugins/bootstrap-switch.js')}}"></script>
      <!--  Handling Ajax request    -->
      <script src="{{asset('/storage/assets/admin/js/ajaxHandling.js')}}"></script>
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
      <script>
          $(document).ready(function() {
              demo.checkFullPageBackgroundImage();

              setTimeout(function() {
                  // after 1000 ms we add the class animated to the login/register card
                  $('.card').removeClass('card-hidden');
              }, 700)
          });
      </script>

</html>
