@extends('admin.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Solicitudes de convenios</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="/admin/agreements">Convenios</a></li>
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
                        <p>Solicitud de convenios sin leer: <b>{{$unread_agreements}}</b></p>
                        <p>Total: <b>{{count($agreements)}} solicitudes</b></p>
                        <br/>
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th>Solicitante</th>
                                        <th>Email</th>
                                        <th>Teléfono</th>
                                        <th>Comuna</th>
                                        <th>Dirección</th>
                                        <th>Empresa</th>
                                        <th>Creada</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($agreements as $v)
                                    <tr>
                                        <td>{{$v->name}}</td>
                                        <td>{{$v->email}}</td>
                                        <td>{!!$v->phone!!}</td>
                                        <td>{!!$v->commune!!}</td>
                                        <td>{!!$v->address!!}</td>
                                        <td>{!!$v->company!!}</td>
                                        <td>{{$v->created_at}}</td>
                                        <td>
                                            @if($v->read_at==NULL)
                                            <a class="btn btn-success btn-sm" href="{{ route('show_agreement', $v) }}" title="Abrir mensaje"><i class="fa fa-envelope"></i></a>
                                            @else
                                            <a class="btn btn-primary btn-sm" href="{{ route('show_agreement', $v) }}" title="Ver detalles"><i class="fa fa-envelope-open"></i></a>
                                            @endif
                                            <button data-id="{{$v->id}}" class="btn btn-danger btn-sm delete-agreement" title="Eliminar "><i class="fa fa-trash"></i></button>
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

@endsection