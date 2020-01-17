<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="index.html"><i class="flaticon-pharmacy"></i><span>Hospital</span>Bracamonte</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item @yield('inicio')"><a href="{{asset('index.php')}}" class="nav-link">Inicio</a></li>
        <li class="nav-item @yield('medico')"><a href="{{asset('index.php/Medico')}}" class="nav-link">Medico</a></li>
        <li class="nav-item @yield('especialidad')"><a href="{{asset('index.php/Especialidad')}}" class="nav-link">Especialidad</a></li>
        
        <li class="nav-item @yield('horario')"><a href="{{asset('index.php/Horario')}}" class="nav-link">Horario</a></li>
        <li class="nav-item @yield('atencion')"><a href="{{asset('index.php/Atencion')}}" class="nav-link">Atencion</a></li>
        <li class="nav-item @yield('noticia')"><a href="{{asset('index.php/Noticia')}}" class="nav-link">Noticias</a></li>

      </ul>
    </div>
  </div>
</nav>
