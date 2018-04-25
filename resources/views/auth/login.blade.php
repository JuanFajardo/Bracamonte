<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>
    <title>SISFA</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" id="theme" href="{{asset('css/style.css')}}"/>
</head>
<body>
<div class="login-container">
  <div class="login-box animated fadeInDown">
    <div class="login-body">
      <div class="login-title"><strong style="color:black;">Gobierno Autonomo Municipal de Potosí</strong></div>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">Usuario</label>
              <div class="col-md-12">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                  @if ($errors->has('name'))
                      <span class="help-block"><strong>{{ $errors->first('name') }}</strong></span>
                  @endif
              </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
              <label for="password" class="col-md-4 control-label">Contraseña</label>
                <div class="col-md-12">
                  <input id="password" type="password" class="form-control" name="password"/>
                  @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
                </div>
            </div>
            <!-- <div class="form-group">
              <div class="col-md-12 col-md-offset-4">
                <div class="checkbox">
                  <label><input type="checkbox" name="remember"> Remember Me</label>
                </div>
              </div>
            </div> -->
            <div class="form-group">
              <div class="col-md-12 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-btn fa-sign-in"></i> Iniciar Sesión
                </button>
                <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a> -->
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
