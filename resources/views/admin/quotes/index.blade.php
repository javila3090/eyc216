@extends('admin.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Cotizaciones</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="#">Cotizaciones</a></li>
                        <li class="breadcrumb-item active">Lista</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">

        <!--Incluir mensaje de error-->
        @if (count($errors) > 0)
        @include('admin.partials.errors')
        @endif

        <!--Incluir mensaje de éxito-->
        @include('admin.partials.messages')

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <p>Cotizaciones sin leer: <b>{{$unread_quotes}}</b></p>
                        <p>Total: <b>{{count($quotes)}} cotizaciones</b></p>
                        <br/>
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Solicitante</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        <th>Fecha inicio</th>
                                        <th>Hora inicio</th>
                                        <th>Creada</th>
                                        <th>Descargar receta</th>                                        
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($quotes as $v)
                                    <tr>
                                        <td>{{$v->name}}</td>
                                        <td>{{$v->email}}</td>
                                        <td>{!!$v->phone!!}</td>
                                        <td>{!!$v->start_date!!}</td>
                                        <td>{!!$v->start_hour!!}</td>
                                        <td>{!!$v->created_at!!}</td>
                                        @if($v->image)
                                        <td><a class="btn btn-warning btn-sm" href="{{ route('download_quote', $v) }}" title="Descargar receta"><i class="fa fa-download"></i></a></td>
                                        @else
                                        <td>---</td>
                                        @endif
                                        <td>
                                            @if($v->read_at==NULL)
                                            <a class="btn btn-success btn-sm" href="{{ route('show_quote', $v) }}" title="Abrir mensaje"><i class="fa fa-envelope"></i></a>
                                            @else
                                            <a class="btn btn-primary btn-sm" href="{{ route('show_quote', $v) }}" title="Ver detalles"><i class="fa fa-envelope-open"></i></a>
                                            @endif
                                            <button data-id="{{$v->id}}" class="btn btn-danger btn-sm delete-quote" title="Eliminar "><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>               
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

<div id="confirm" class="modal hide fade">
    <div class="modal-body">
        ¿Estás seguro?
    </div>
    <div class="modal-footer">
        <button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Borrar</button>
        <button type="button" data-dismiss="modal" class="btn">Cancelar</button>
    </div>
</div>
@endsection