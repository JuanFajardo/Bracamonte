@extends('layouts.angular')

@section('etiquetaTitle')
SISFA - Usuarios
@endsection

@section('usuarios')
active
@endsection

@section('contenido')
<div class="container">
<div class="row">
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Usuarios</h3>
                <a href="{{url('usuarios/create')}}" class="btn  btn-info pull-right">Nuevo <i class="fa fa-plus"></i></a>
            </div>
            <div class="panel-body">
                <table id="datosTabla" class="table datatable">
                    <thead>
                        <tr>
                            <th>Nombres y Apellidos</th>
                            <th>Usuario</th>
                            <th>Correo</th>
                            <th>Grupo</th>
                            <th>Estado</th>
                            <th>Ver</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->nombres}} {{$usuario->apellidos}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td> @if( $usuario->grupo_id == 1 ) Administrador @elseif( $usuario->grupo_id == 2 ) Contador  @elseif( $usuario->grupo_id == 3 ) Reportes @endif</td>
                            <td> @if ($usuario->estado)  <span class="label label-success">Activo</span> @else <span class="label label-danger">Inactivo</span> @endif</td>
                            <td><a href="{{ url('usuarios/'.$usuario->id) }}">  <i class="fa fa-eye" aria-hidden="true"></i> </a></td>
                            <td><a href="{{ url('usuarios/'.$usuario->id.'/edit') }}" style="color:#f0ad4e;"> <i class="fa fa-pencil" aria-hidden="true"></i>  </a></td>
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Eliminar</h4>
      </div>
      <div class="modal-body">
        <p>¿Esta seguro que desea eliminar este usuario: <strong>
          @if(isset($usuario))
            {{$usuario->nombres}}
          @endif
        </strong>?
        </p>
      </div>
      <div class="modal-footer">
        @if(isset($usuario))
        <a type="button" class="btn btn-info" href="{{url('usuarios/'.$usuario->id)}}">Aceptar</a>
        @endif
        <a type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</a>
      </div>
    </div>
  </div>
</div>
@endsection

@section('angular')
<script type="text/javascript">
  $('#datosTabla').DataTable({
      "order": [[ 0, 'asc']],
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
</script>
@endsection
