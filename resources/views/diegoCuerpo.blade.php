<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sistema Bracamonte</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('asset/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/jquery.timepicker.css')}}">

    <link rel="stylesheet" href="{{asset('asset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
  </head>
  <body>

  @include('menu')
    <!-- END nav -->
    

    <section class="ftco-section bg-light">
      <div class="container">

        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">@yield('tituloCuerpo')</h2>
          </div>
        </div>

        <div class="row d-flex">
          <div class="col-md-12 ftco-animate">
            @yield('cuerpo')
          </div>
        </div>
      </div>
    </section>


    @include('pie')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Modal -->
    <div class="modal fade" id="modalAppointment" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalAppointmentLabel">Appointment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form action="#">
              <div class="form-group">
                <label for="appointment_name" class="text-black">Full Name</label>
                <input type="text" class="form-control" id="appointment_name">
              </div>
              <div class="form-group">
                <label for="appointment_email" class="text-black">Email</label>
                <input type="text" class="form-control" id="appointment_email">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_date" class="text-black">Date</label>
                    <input type="text" class="form-control" id="appointment_date">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="appointment_time" class="text-black">Time</label>
                    <input type="text" class="form-control" id="appointment_time">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="appointment_message" class="text-black">Message</label>
                <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    @yield('modal1')
    @yield('modal2')
    @yield('modal3')
    @yield('modal4')

  <script src="{{asset('asset/js/jquery.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('asset/js/popper.min.js')}}"></script>
  <script src="{{asset('asset/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.easing.1.3.js')}}"></script>
  <script src="{{asset('asset/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('asset/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('asset/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('asset/js/aos.js')}}"></script>
  <script src="{{asset('asset/js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('asset/js/bootstrap-datepicker.js')}}"></script>
  <script src="{{asset('asset/js/jquery.timepicker.min.js')}}"></script>
  <script src="{{asset('asset/js/scrollax.min.js')}}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('asset/js/google-map.js')}}"></script>
  <script src="{{asset('asset/js/main.js')}}"></script>
  @yield('js')
  </body>
</html>
