@extends('gamp')

@section('empresa') style='background-color:white; color:balck; '  @endsection
@section('titulo') Tesoreria, Empresas @endsection
@section('direccion') Empresas @endsection

@section('modal1')
<div id="modalAgregar" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content panel panel-primary">

      <div class="modal-header panel-heading">
        <b>Insertar nueva Empresa</b>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body panel-body">
        {!! Form::open(['accept-charset'=>'UTF-8', 'enctype'=>'multipart/form-data', 'method'=>'POST', 'files'=>true, 'autocomplete'=>'off', 'id'=>'form-insert'] ) !!}

        <div class="form-group">
          <label for="empresa_" >Nombre de la Empresa</label>
          {!! Form::text('empresa', null, ['class'=>'form-control', 'placeholder'=>'Empresa', 'id'=>'empresa_', 'required']) !!}
        </div>
        <div class="form-group">
          <label for="celular_" >Numero de Celular de la Empresa o  Encargado</label>
          {!! Form::text('celular', null, ['class'=>'form-control', 'placeholder'=>'Celular', 'id'=>'celular_', 'required']) !!}
        </div>
        <div class="form-group">
          <label for="direccion_" >Direccion de la Empresa</label>
          {!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Direccion', 'id'=>'direccion_', 'required']) !!}
        </div>
        <div class="form-group">
          <label for="representante_" >Represntante legal de la Empresa</label>
          {!! Form::text('representante', null, ['class'=>'form-control', 'placeholder'=>'Representante', 'id'=>'representante_', 'required']) !!}
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
                    <b>Actualizar Empresa</b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body panel-body">
                    {!! Form::open(['route'=>['Empresa.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}

                    <div class="form-group">
                      <label for="empresa_" >Nombre de la Empresa</label>
                      {!! Form::text('empresa', null, ['class'=>'form-control', 'placeholder'=>'Empresa', 'id'=>'empresa', 'required']) !!}
                    </div>
                    <div class="form-group">
                      <label for="celular_" >Numero de Celular de la Empresa o  Encargado</label>
                      {!! Form::text('celular', null, ['class'=>'form-control', 'placeholder'=>'Celular', 'id'=>'celular', 'required']) !!}
                    </div>
                    <div class="form-group">
                      <label for="direccion_" >Direccion de la Empresa</label>
                      {!! Form::text('direccion', null, ['class'=>'form-control', 'placeholder'=>'Direccion', 'id'=>'direccion', 'required']) !!}
                    </div>
                    <div class="form-group">
                      <label for="representante_" >Represntante legal de la Empresa</label>
                      {!! Form::text('representante', null, ['class'=>'form-control', 'placeholder'=>'Representante', 'id'=>'representante', 'required']) !!}
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
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="#modalAgregar"   data-toggle="modal" data-target=""> <li class="fa fa-plus"></li> Nuevo Empresa</a>  </div>
                    <div class="panel-body">
                        <table id="tablaAgenda" class="table display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Empresa</th>
                                    <th>Celular</th>
                                    <th>Direccion</th>
                                    <th>Represntante</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($datos as $dato)
                                    <tr data-id="{{ $dato->id }}">
                                        <td>{{$dato->id}}</td>
                                        <td>{{$dato->empresa}}</td>
                                        <td>{{$dato->celular}}</td>
                                        <td>{{$dato->direccion}}</td>
                                        <td>{{$dato->representante}}</td>
                                        <td>
                                              <a href="#modalModifiar"  data-toggle="modal" data-target="" class="actualizar" style="color: #B8823B;"> <li class="fa fa-edit"></li>Editar</a> &nbsp;&nbsp;&nbsp;
                                              <a href="#"  data-toggle="modal" data-target="" style="color: #ff0000;" class="eliminar"> <li class="fa fa-trash"></li>Eliminar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! Form::open(['route'=>['Empresa.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
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
            link  = '{{ asset("/index.php/Empresa/")}}/'+id;

            $.getJSON(link, function(data, textStatus) {
                if(data.length > 0){
                    $.each(data, function(index, el) {
                      $('#empresa').val(el.empresa);
                      $('#celular').val(el.celular);
                      $('#direccion').val(el.direccion);
                      $('#representante').val(el.representante);
                    });
                }else{
                    //
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

            if(confirm('Esta seguro de eliminar la Empresa'))
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
