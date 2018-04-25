@extends('layouts.angular')

@section('contenido')
<div class="container">
  <div class="row">
      <div class="col-md-10">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title"><strong>Datos de Usuario</strong> </h3>
              </div>
              <div class="panel-body">
                {!! Form::model($user, [ 'id'=>'form-create', 'class'=>'form-horizontal', 'role'=>'form' ])!!}
                  <h4>Datos de usuario</h4>
                  <hr>
                  <div class="form-group">
                      <label for="name" class="col-md-4 control-label">Grupo</label>
                      <div class="col-md-6">
                        {!! Form::select('grupo_id', ['1'=>'Administrador', '2'=>'Contador', '3'=>'Reportes'], null, ['id'=>'grupo_id', 'class'=>'form-control']) !!}
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                      <label for="name" class="col-md-4 control-label">Usuario</label>
                      <div class="col-md-6">
                          {!! Form::text('name',  old('name'), ['id'=>'name', 'class'=>'form-control', 'placeholder'=>'nombres y apellidos']) !!}
                          @if ($errors->has('name'))
                              <span class="help-block">{{ $errors->first('name') }}</span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                      <label for="email" class="col-md-4 control-label">Correo electrónico</label>
                      <div class="col-md-6">
                          {!! Form::email('email',  old('email'), ['id'=>'email', 'class'=>'form-control', 'placeholder'=>'correo@correo.com']) !!}
                          @if ($errors->has('email'))
                              <span class="help-block">{{ $errors->first('email') }}</span>
                          @endif
                      </div>
                  </div>

                  <h4>Datos de personales</h4>
                  <hr>
                  <div class="form-group{{ $errors->has('nombres') ? ' has-error' : '' }}">
                      <label for="nombres" class="col-md-4 control-label">Nombres</label>
                      <div class="col-md-6">
                          {!! Form::text('nombres',  old('nombres'), ['id'=>'nombres', 'class'=>'form-control', 'placeholder'=>'Ingrese sus nombres']) !!}
                          @if ($errors->has('nombres'))
                              <span class="help-block">{{ $errors->first('nombres') }}</span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                      <label for="apellidos" class="col-md-4 control-label">Apellidos</label>
                      <div class="col-md-6">
                          {!! Form::text('apellidos',  old('apellidos'), ['id'=>'apellidos', 'class'=>'form-control', 'placeholder'=>'Ingrese sus apellidos']) !!}
                          @if ($errors->has('apellidos'))
                              <span class="help-block">{{ $errors->first('apellidos') }}</span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('ci') ? ' has-error' : '' }}">
                      <label for="ci" class="col-md-4 control-label">Cédula de identidad</label>
                      <div class="col-md-6">
                          {!! Form::text('ci',  old('ci'), ['id'=>'ci', 'class'=>'form-control', 'placeholder'=>'Cédula de identidad']) !!}
                          @if ($errors->has('ci'))
                              <span class="help-block">{{ $errors->first('ci') }}</span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                      <label for="direccion" class="col-md-4 control-label">Dirección</label>
                      <div class="col-md-6">
                          {!! Form::text('direccion',  old('direccion'), ['id'=>'direccion', 'class'=>'form-control', 'placeholder'=>'Dirección de residencia']) !!}
                          @if ($errors->has('direccion'))
                              <span class="help-block">{{ $errors->first('direccion') }}</span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                      <label for="telefono" class="col-md-4 control-label">Teléfono</label>
                      <div class="col-md-6">
                          {!! Form::text('telefono',  old('telefono'), ['id'=>'telefono', 'class'=>'form-control', 'placeholder'=>'Número de teléfono']) !!}
                          @if ($errors->has('telefono'))
                              <span class="help-block">{{ $errors->first('telefono') }}</span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('observacion') ? ' has-error' : '' }}">
                      <label for="observacion" class="col-md-4 control-label">Cargo</label>
                      <div class="col-md-6">
                          {!! Form::text('observacion',  old('observacion'), ['id'=>'observacion', 'class'=>'form-control', 'placeholder'=>'Observacion del usuario']) !!}
                          @if ($errors->has('observacion'))
                              <span class="help-block">{{ $errors->first('observacion') }}</span>
                          @endif
                      </div>
                  </div>
                  <div class="form-group{{ $errors->has('estado') ? ' has-error' : '' }}">
                      <label for="estado" class="col-md-4 control-label">Estado</label>
                      <div class="col-md-6">
                          {!! Form::checkbox('estado', 'on', true, ['id'=>'estado', 'class'=>'form-control']) !!}
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-md-6 col-md-offset-4">
                          <a href="{{asset('/home')}}" class="btn btn-primary">
                            <i class="fa fa-btn fa-times-circle"></i> Cancelar</a>
                      </div>
                  </div>
          {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection
