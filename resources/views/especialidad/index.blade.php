@extends('diegoCuerpo')
@section('especialidad')  cta @endsection

@section('tituloCuerpo')
Especialidades
<a href="#modalAgregar"  data-toggle="modal" data-target=""> <i class="icon-plus"></i> </a>
@endsection

@section('modal1')
<div id="modalAgregar" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content panel panel-primary">

      <div class="modal-header panel-heading">
        <b>Insertar</b>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body panel-body">
        {!! Form::open(['accept-charset'=>'UTF-8', 'enctype'=>'multipart/form-data', 'method'=>'POST', 'files'=>true, 'autocomplete'=>'off', 'id'=>'form-insert'] ) !!}

        <div class="form-group">
          <label for="especialidad_" >Especialidad</label>
          {!! Form::text('especialidad', null, ['class'=>'form-control', 'placeholder'=>'Especialidad', 'id'=>'especialidad_', 'required']) !!}
        </div>
        <div class="form-group">
          <label for="descripcion_" >Descripcion</label>
          {!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Descripcion', 'id'=>'descripcion_', 'required']) !!}
        </div>

        {!! Form::hidden('id_usuario', '1') !!}
        {!! Form::submit('A&ntilde;adir', ['class'=>'agregar btn btn-primary']) !!}
        {!! Form::close() !!}
      </div>

    </div>
  </div>
</div>
@endsection

@section('modal2')
    <div id="modalModifiar" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content panel panel-warning">

                <div class="modal-header panel-heading">
                    <b>Actualizar</b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body panel-body">
                    {!! Form::open(['route'=>['Especialidad.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}

                    <div class="form-group">
                      <label for="especialidad_" >Especialidad</label>
                      {!! Form::text('especialidad', null, ['class'=>'form-control', 'placeholder'=>'Especialidad', 'id'=>'especialidad', 'required']) !!}
                    </div>
                    <div class="form-group">
                      <label for="descripcion_" >Descripcion</label>
                      {!! Form::text('descripcion', null, ['class'=>'form-control', 'placeholder'=>'Descripcion', 'id'=>'descripcion', 'required']) !!}
                    </div>

                    {!! Form::hidden('id_usuario', '1') !!}

                    {!! Form::submit('Actualizar ', ['class'=>'btn btn-warning']) !!}
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
@endsection


@section('cuerpo')
<table id="tablaAgenda" class="table display" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Id</th>
      <th>Especialidad</th>
      <th>Descripcion</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
    <tr data-id="{{ $dato->id }}">
      <td>{{$dato->id}}</td>
      <td>{{$dato->especialidad}}</td>
      <td>{{$dato->descripcion}}</td>
      <td>
        <a href="#modalModifiar"  data-toggle="modal" data-target="" class="actualizar" style="color: #B8823B;"> <i class="icon-pencil"></i> </a>
        <a href="#"  data-toggle="modal" data-target="" style="color: #ff0000;" class="eliminar"> <i class="icon-trash"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{!! Form::open(['route'=>['Especialidad.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
{!! Form::close() !!}
@endsection

@section('js')
    <script type="text/javascript">

        $(document).ready(function(){
            $('#tablaAgenda').DataTable({
                "order": [[ 0, 'desc']],
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
            link  = '{{ asset("/index.php/Especialidad/")}}/'+id;

            $.getJSON(link, function(data, textStatus) {
                if(data.length > 0){
                    $.each(data, function(index, el) {
                      $('#especialidad').val(el.especialidad);
                      $('#descripcion').val(el.descripcion);
                    });
                }
            });
        });


        $('.eliminar').click(function(event) {
            event.preventDefault();
            var fila = $(this).parents('tr');
            var id = fila.data('id');
            var form = $('#form-delete');
            var url = form.attr('action').replace(':DATO_ID',id);
            var data = form.serialize();

            if(confirm('Esta seguro de eliminar el Especialidad'))
            {
                $.post(url, data, function(result, textStatus, xhr) {
                    alert(result);
                    fila.fadeOut();
                }).fail(function(esp){
                    fila.show();
                });
            }
        });


    </script>
@endsection
