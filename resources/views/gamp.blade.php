<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> Tesoreria 1.0 - @yield('titulo') </title>

  <link rel="stylesheet" href="{{ URL::asset('asset/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset/DataTables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset/fontawesome/web-fonts-with-css/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('asset/theme/css/sb-admin.css') }}">
  <link rel="shortcut icon" href="{{ URL::asset('favicon.ico') }}"/>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"> Tesoreria </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">


        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables" @yield('vigencia')>
          <a class="nav-link" href="{{asset('/index.php/Vigencia')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Vigencia</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables" @yield('empleado')>
          <a class="nav-link" href="{{asset('/index.php/Empleado')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Empleados</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables" @yield('empresa')>
          <a class="nav-link" href="{{asset('/index.php/Empresa')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Empresas</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables" @yield('boleta')>
          <a class="nav-link" href="{{asset('/index.php/Boleta')}}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Boleta</span>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Cerrar Session</a>
        </li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Tesoreria</a>
        </li>
        <li class="breadcrumb-item active">@yield('direccion')</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user"></i>
              </div>
              <div class="mr-5"> <a href="{{asset('/index.php/Empleado')}}" style="color:white;">Empleados</a></div>
            </div>

          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-home"></i>
              </div>
              <div class="mr-5"> <a href="{{asset('/index.php/Empresa')}}" style="color:white;">Empresas</a></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-edit"></i>
              </div>
              <div class="mr-5"> <a href="{{asset('/index.php/Vigencia')}}" style="color:white;">Boleta de Garantia</a></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-book"></i>
              </div>
              <div class="mr-5"> <a href="{{asset('/index.php/Boleta')}}" style="color:white;">Tipo de Boletas</a></div>
            </div>
          </div>
        </div>

        <div class="col-xl-12 col-sm-12">
          <div class="panel text-black ">
            <div class="panel-body">
              @yield('cuerpo')
            </div>
          </div>
        </div>
      </div>

    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Gobierno Autonomo Municipal de Potosi  2018</small>
        </div>
      </div>
    </footer>


    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿ Cerrar Session?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body"> Para <b>Cerrar Session</b> de click en CERRAR <br>
            caso contrario CANCELAR   </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="login.html">Cerrar</a>
          </div>
        </div>
      </div>
    </div>

    @yield('modal1')
    @yield('modal2')
    @yield('modal3')
    @yield('modal4')

    <script src="{{ URL::asset('asset/DataTables/jQuery-3.2.1/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('asset/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('asset/DataTables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('asset/jquery-easing/jquery.easing.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('asset/theme/js/sb-admin.min.js') }}" type="text/javascript"></script>
  </div>
  @yield('js')
</body>

</html>
