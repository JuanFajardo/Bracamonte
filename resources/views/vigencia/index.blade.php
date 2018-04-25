@extends('gamp')

@section('vigencia') style='background-color:white; color:balck; '  @endsection
@section('titulo') Tesoreria, Garantia de Boletas @endsection
@section('direccion') Garantia de Boletas @endsection

@section('modal1')
<div id="modalAgregar" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel panel-primary lg">

      <div class="modal-header panel-heading">
        <b>Nueva Boleta de garantia</b>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body panel-body">
        {!! Form::open(['accept-charset'=>'UTF-8', 'enctype'=>'multipart/form-data', 'method'=>'POST', 'files'=>true, 'autocomplete'=>'off', 'id'=>'form-insert'] ) !!}

        <div class="row">
          <div class="col-md-5">
            <label for="empresa_id_" >Empresa</label>
            {!! Form::select('empresa_id', \App\Empresa::pluck('empresa', 'id'), null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'empresa_id_', 'required']) !!}
          </div>
          <div class="col-md-5">
            <label for="empleado_id_" >Empleado</label>
            {!! Form::select('empleado_id', \App\Empleado::pluck('empleado', 'id'), null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'empleado_id_', 'required']) !!}
          </div>
          <div class="col-md-2">
            <label for="boleta_id_" >Boleta</label>
            {!! Form::select('boleta_id', \App\Boleta::pluck('boleta', 'id'), null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'boleta_id_', 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col-md-8">
            <label for="cuce_" >cuce</label>
            {!! Form::text('cuce', null, ['class'=>'form-control', 'placeholder'=>'CUCE', 'id'=>'cuce_', 'required']) !!}
          </div>
          <div class="col-md-4">
            <label for="imagen_" >Imagen</label>
            {!! Form::file('imagen', null, ['class'=>'form-control',  'id'=>'imagen_', 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <label for="fecha_recepcion_" >Fecha Recepcion</label>
            {!! Form::text('fecha_recepcion', date('Y-m-d'), ['class'=>'form-control', 'placeholder'=>'Fecha Recepcion', 'id'=>'fecha_recepcion_', 'required']) !!}
          </div>
          <div class="col-md-4">
            <label for="fecha_vencimiento_" >Fecha de Vencimiento</label>
            {!! Form::text('fecha_vencimiento', null, ['class'=>'form-control', 'placeholder'=>'Tipo de boleta', 'id'=>'fecha_vencimiento_', 'required']) !!}
          </div>
          <div class="col-md-4">
            <label for="fecha_baja_" >Fecha dado de Baja</label>
            {!! Form::text('fecha_baja', null, ['class'=>'form-control', 'placeholder'=>'Fecha dado de Baja', 'id'=>'fecha_baja_', 'readonly']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <label for="obervacion_" >obervacion</label>
            {!! Form::text('obervacion', null, ['class'=>'form-control', 'placeholder'=>'Descripcion', 'id'=>'descripcion_', 'required']) !!}
          </div>
        </div>
        <br>
        {!! Form::hidden('id_usuario', '1') !!}
        {!! Form::hidden('llamar', '0') !!}
        {!! Form::hidden('baja', '0') !!}
        {!! Form::submit('A&ntilde;adir', ['class'=>'agregar btn btn-primary']) !!}
        {!! Form::close() !!}
      </div>

    </div>
  </div>
</div>
@endsection

@section('modal2')
    <div id="modalModifiar" class="modal fade" role="dialog">
        <div class="modal-dialog  modal-lg">
            <div class="modal-content panel panel-warning">
                <div class="modal-header panel-heading">
                    <b>Actualizar boleta de garantia</b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body panel-body">
                    {!! Form::open(['route'=>['Vigencia.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}

                    <div class="row">
                      <div class="col-md-5">
                        <label for="empresa_id" >Empresa</label>
                        {!! Form::select('empresa_id', \App\Empresa::pluck('empresa', 'id'), null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'empresa_id', 'required']) !!}
                      </div>
                      <div class="col-md-5">
                        <label for="empleado_id" >Empleado</label>
                        {!! Form::select('empleado_id', \App\Empleado::pluck('empleado', 'id'), null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'empleado_id', 'required']) !!}
                      </div>
                      <div class="col-md-2">
                        <label for="boleta_id" >Boleta</label>
                        {!! Form::select('boleta_id', \App\Boleta::pluck('boleta', 'id'), null, ['class'=>'form-control', 'placeholder'=>'', 'id'=>'boleta_id', 'required']) !!}
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-7">
                        <label for="cuce" >Cuce</label>
                        {!! Form::text('cuce', null, ['class'=>'form-control', 'placeholder'=>'CUCE', 'id'=>'cuce', 'required']) !!}
                      </div>
                      <div class="col-md-2">
                        <label for="imagen" >Baja</label>

                      </div>
                      <div class="col-md-2">
                        <label for="imagen" >Llamar</label>

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label for="fecha_recepcion" >Fecha Recepcion</label>
                        {!! Form::text('fecha_recepcion', date('Y-m-d'), ['class'=>'form-control', 'placeholder'=>'Fecha Recepcion', 'id'=>'fecha_recepcion', 'required']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="fecha_vencimiento" >Fecha de Vencimiento</label>
                        {!! Form::text('fecha_vencimiento', null, ['class'=>'form-control', 'placeholder'=>'Tipo de boleta', 'id'=>'fecha_vencimiento']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="fecha_baja" >Fecha dado de Baja</label>
                        {!! Form::text('fecha_baja', null, ['class'=>'form-control', 'placeholder'=>'Fecha dado de Baja', 'id'=>'fecha_baja', 'readonly']) !!}
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <label for="fecha_recepcion" >Fecha Recepcion</label>
                        {!! Form::text('fecha_recepcion', date('Y-m-d'), ['class'=>'form-control', 'placeholder'=>'Fecha Recepcion', 'id'=>'fecha_recepcion', 'required']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="fecha_vencimiento" >Fecha de Vencimiento</label>
                        {!! Form::text('fecha_vencimiento', null, ['class'=>'form-control', 'placeholder'=>'Tipo de boleta', 'id'=>'fecha_vencimiento']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="fecha_baja" >Fecha dado de Baja</label>
                        {!! Form::text('fecha_baja', null, ['class'=>'form-control', 'placeholder'=>'Fecha dado de Baja', 'id'=>'fecha_baja', 'readonly']) !!}
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <label for="obervacion" >obervacion</label>
                        {!! Form::text('obervacion', null, ['class'=>'form-control', 'placeholder'=>'Descripcion', 'id'=>'obervacion', 'required']) !!}
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <label for="iamgen_" >Imagen</label>
                        <img src="" id="img" width="250">
                      </div>
                    </div>
                    <br>


                    {!! Form::hidden('id_usuario', '1') !!}

                    {!! Form::submit('Actualizar ', ['class'=>'btn btn-warning']) !!}
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
@endsection


@section('cuerpo')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="#modalAgregar"   data-toggle="modal" data-target=""> <li class="fa fa-plus"></li> Nueva boleta de garantia</a>  </div>
                    <div class="panel-body">
                        <table id="tablaAgenda" class="table display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Empleado</th>
                                    <th>Empresa</th>
                                    <th>Fecha Recepion</th>
                                    <th>Fecha Vencimiento</th>
                                    <th>Dias</th>
                                    <th>Fecha Baja</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datos as $dato)
                                   <?php
                                   $start_ts = strtotime( date('Y-m-d') );
                                   $end_ts   = strtotime( $dato->fecha_vencimiento );
                                   $diff     = $end_ts - $start_ts;
                                   $dias     = round($diff / 86400);



                                    if($dias <=15 && $dias >10 ){
                                      $stylo = "background-color: #F5F396;";
                                    }elseif ($dias <= 10  && $dias >5  ){
                                      $stylo = "background-color: #F29554;";
                                    }elseif ($dias <= 5 ){
                                      $stylo = "background-color: #F33A2C;";
                                    }else {
                                      $stylo = "background-color: #fff;";
                                    }
                                   ?>

                                    <tr data-id="{{ $dato->id }}" style="{{$stylo}}">
                                        <td>{{$dato->id}}</td>
                                        <td>{{$dato->empleado}}</td>
                                        <td>{{$dato->empresa}}</td>
                                        <td>{{$dato->fecha_recepcion}}</td>
                                        <td>{{$dato->fecha_vencimiento}}</td>
                                        <td> @if( $dias == 0 || $dias < 0)
                                              <b> Fenecio la boleta {{ $dias }} </b>
                                              @else
                                              {{ $dias }}
                                              @endif
                                        </td>
                                        <td>{{$dato->fecha_baja}}</td>
                                        <td>
                                              <a href="#modalModifiar"  data-toggle="modal" data-target="" class="actualizar" style="color: #B8823B;"> <li class="fa fa-edit"></li>Editar</a> &nbsp;&nbsp;&nbsp;
                                              @if($dato->llamar == 0)
                                                <a href="#"  data-toggle="modal" data-target="" style="color: #ff0000;" class="llamar"> <li class="fa fa-phone"></li> Llamar</a>&nbsp;&nbsp;&nbsp;
                                              @else
                                                <a href="#"  data-toggle="modal" data-target="" style="color: #66a80f;" class="llamar"> <li class="fa fa-phone"></li> Dejar de Llamar</a>&nbsp;&nbsp;&nbsp;
                                              @endif
                                              @if($dato->baja == 0)
                                                <a href="#"  data-toggle="modal" data-target="" style="color: #007bff;" class="baja"> <li class="fa fa-eye"></li> Activo</a>
                                              @else
                                                <a href="#"  data-toggle="modal" data-target="" style="color: #007bff;" class="baja"> <li class="fa fa-eye-slash"></li> De Baja</a>
                                              @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! Form::open(['route'=>['Boleta.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>

@endsection

@section('js')
    <script type="text/javascript">

        $(document).ready(function(){
            $('#tablaAgenda').DataTable({
                "order": [[ 4, 'asc']],
                "language": {
                    "bDeferRender": true,
                    "sEmtpyTable": "No ay registros",
                    "decimal": ",",
                    "thousands": ".",
                    "lengthMenu": "Mostrar _MENU_ datos por registros",
                    "zeroRecords": "No se encontro nada,  lo siento",
                    "info": "Mostrar paginas [_PAGE_] de [_PAGES_]",
                    "infoEmpty": "No ay entradas permitidas",
                    "search": "Buscar ",
                    "infoFiltered": "(Busqueda de _MAX_ registros en total)",
                    "oPaginate":{
                        "sLast":"Final",
                        "sFirst":"Principio",
                        "sNext":"Siguiente",
                        "sPrevious":"Anterior"
                    }
                }
            });
        });


        $('.actualizar').click(function(event){
            event.preventDefault();
            var fila = $(this).parents('tr');
            var id = fila.data('id');
            var form = $('#form-update')
            var url = form.attr('action').replace(':DATO_ID', id);
            form.get(0).setAttribute('action', url);
            link  = '{{ asset("/index.php/Vigencia/")}}/'+id;

            $.getJSON(link, function(data, textStatus) {
                if(data.length > 0){
                    $.each(data, function(index, el) {
                      $('#fecha_recepcion').val(el.fecha_recepcion);
                      $('#fecha_vencimiento').val(el.fecha_vencimiento);
                      $('#fecha_baja').val(el.fecha_baja);
                      $('#baja').val(el.baja);
                      $('#cuce').val(el.cuce);
                      $('#imagen').val(el.imagen);
                      $('#obervacion').val(el.obervacion);
                      $('#llamar').val(el.llamar);
                      $('#empresa_id').val(el.empresa_id);
                      $('#empleado_id').val(el.empleado_id);
                      $('#boleta_id').val(el.boleta_id);
                      var ruta = "{{asset('RughHXvNTFm9zzBett0zzPpFGaE2r7mjB9/')}}/" + el.imagen;
                      $('#img').attr('src', ruta);
                    });
                }else{
                    //
                }
            });
        });

        $('.llamar').click(function(event) {
            event.preventDefault();
            var fila = $(this).parents('tr');
            var id   = fila.data('id');
            var url  = "{{asset('/index.php/Vigencia/comando/llamar/')}}/" + id;
            if(confirm('Esta seguro de ACTIVAR/DESACTIVAR la llamada'))
            {
                $.get(url, function(result, textStatus, xhr) {
                    alert(result);
                    location.href = "{{asset('index.php/Vigencia')}}";
                });
            }
        });

        $('.baja').click(function(event) {
            event.preventDefault();
            var fila = $(this).parents('tr');
            var id = fila.data('id');
            var url  = "{{asset('/index.php/Vigencia/comando/baja/')}}/" + id;
            if(confirm('Esta seguro de ACTIVAR/DESACTIVAR la boleta'))
            {
                $.get(url, function(result, textStatus, xhr) {
                    alert(result);
                    location.href = "{{asset('index.php/Vigencia')}}";
                });
            }
        });

    </script>
@endsection
