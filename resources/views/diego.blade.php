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

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-4">Hospital de tercer nivel Daniel Bracamonte</h1>
            <p>Lo más valioso es tu salud</p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-services">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4 ftco-animate py-5 nav-link-wrap">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              @foreach($especialidads as $especialidad)
                <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill" href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true"><span class="mr-3 flaticon-cardiogram"></span> {{ $especialidad->especialidad }}</a>
              @endforeach
            </div>
          </div>
          <div class="col-md-8 ftco-animate p-4 p-md-5 d-flex align-items-center">
            <div class="tab-content pl-md-5" id="v-pills-tabContent">
              @foreach($especialidads as $especialidad)
                <div class="tab-pane fade show active py-5" id="v-pills-master" role="tabpanel" aria-labelledby="v-pills-master-tab">
                  <span class="icon mb-3 d-block flaticon-cardiogram"></span>
                  @foreach($atencions as $atencion)
                    @if($atencion->especialidad == $especialidad->especialidad)
                    <h2 class="mb-4">{{$atencion->medico}}</h2>
                    <p>{{$atencion->horario}}</p>
                    @endif
                  @endforeach
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section testimony-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Medicos</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-12 ftco-animate">
            <div class="carousel-testimony owl-carousel">

              @foreach($medicos as $medico)
              <div class="item">
                <div class="testimony-wrap text-center">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">{{ $medico->descripcion }}</p>
                    <p class="name">{{ $medico->medico }}</p>
                    <span class="position">Doctor</span>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Noticias</h2>
          </div>
        </div>

        <div class="row d-flex">
          <div class="col-md-12 ftco-animate">
            <div class="blog-entry align-self-stretch d-flex">
              <a href="blog-single.html" class="block-20 order-md-last" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#">Fecha {{date('Y-m-d')}}</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#">Titulo</a></h3>
                <p>Cuerpo de la noticia.</p>
              </div>
            </div>
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

  </body>
</html>
