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
                            <li class="breadcrumb-item"><a href="/admin">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="/admin/quotes">Cotizaciones</a></li>
                            <li class="breadcrumb-item active">Ver</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!--Incluir mensaje de error-->
        @if (count($errors) > 0)
            @include('admin.partials.errors')
        @endif

        <!--Incluir mensaje de éxito-->
            @include('admin.partials.messages')

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-info card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                Cotización #{{$quote->id}}
                            </h3>
                            <!-- tools box -->
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool btn-sm"
                                        data-widget="collapse"
                                        data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.card-header -->
                        {!! Form::model($quote,['route' => ['update_section', $quote], 'method' => 'PUT','enctype' => 'multipart/form-data']) !!}
                        {{ csrf_field() }}
                        <div class="card-body">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#details" role="tab" data-toggle="tab">Detalles</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#therapies" role="tab" data-toggle="tab">Terapias</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="details">
                                    <br>
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                                        <div class="col-md-6">
                                            {!! Form::text('name', null, ['class' => 'form-control' , 'readonly'=>'true']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>
                                        <div class="col-md-6">
                                            {!! Form::email('email', null, ['class' => 'form-control' , 'readonly'=>'true']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>
                                        <div class="col-md-6">
                                            {!! Form::text('phone', null, ['class' => 'form-control' ,'readonly'=>'true']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Fecha tratamiento') }}</label>
                                        <div class="col-md-6">
                                            {!! Form::text('start_date', null, ['class' => 'form-control' ,'readonly'=>'true']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Hora tratamiento') }}</label>
                                        <div class="col-md-6">
                                            {!! Form::text('start_hour', null, ['class' => 'form-control' ,'readonly'=>'true']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Forma de pago') }}</label>
                                        <div class="col-md-6">
                                            {!! Form::text('pay_way', null, ['class' => 'form-control' ,'readonly'=>'true']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="message" class="col-md-4 col-form-label text-md-right">{{ __('Comentarios') }}</label>
                                        <div class="col-md-6">
                                            {!! Form::textarea('comments', null, ['class' => 'form-control' ,'readonly'=>'true']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="therapies">
                                    <br>
                                    <div class="row">
                                        <div class="container">
                                            <table id="" class="table table-bordered table-striped text-center">
                                                <thead>
                                                <tr>
                                                    <th>Tipo de terapia</th>
                                                    <th>Cantidad</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($quote->therapy as $item)
                                                    <tr>
                                                        <td>{{$item->therapy_type->name}}</td>
                                                        <td>{{$item->quantity}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{url('admin/quotes')}}" class="btn btn-danger">Volver</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
@endsection
