@extends('layouts.base')

@section('content')

    <!-- ##### Breadcumb Area End ##### -->
    <div class="breadcumb-area box-shadow bg-overlay-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-12">
                    <div class="breadcumb-text text-center">
                        <h2>Miembros</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### About Area Start ##### -->
    <section class="cryptos-about-area section-padding-50">
        <div class="container">
            <div class="mt-50">
                <div class=" align-items-center" >
                    <div class=" mb-100">
                        <div class="about-content text-justify">
                            <div class="row">
                                <div class="col-12 col-md-3 col-lg-3">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><b>Secretaría</b></a>
                                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><b>Vigilantes</b></a>
                                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><b>Calendario</b></a>
                                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false"><b>Planchas</b></a>
                                        <a class="nav-link" id="v-pills-lections-tab" data-toggle="pill" href="#v-pills-lections" role="tab" aria-controls="v-pills-lections" aria-selected="false"><b>Lecciones</b></a>
                                        <a class="nav-link" id="v-pills-library-tab" data-toggle="pill" href="#v-pills-library" role="tab" aria-controls="v-pills-library" aria-selected="false"><b>Biblioteca virtual</b></a>
                                        <a class="nav-link" id="v-pills-msg-tab" data-toggle="pill" href="#v-pills-msg" role="tab" aria-controls="v-pills-msg" aria-selected="false"><b>Mensajes</b></a>
                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <div class="col-12 col-md-9 col-lg-9">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <h5>Información de Secretaría</h5>
                                            <hr>
                                            <h6>Comunicados oficiales de Escuadra y Compás 216</h6>
                                            <br>
                                            @if(Auth::guard('members')->user()->hasRole('admin') || Auth::guard('members')->user()->hasRole('secretary'))
                                                <a class="cryptos-btn btn" href="{{route('members.upload.form',1)}}">Subir archivo</a>
                                                <br>
                                                <br>
                                            @endif
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-bordered table-striped text-center">
                                                    <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Descripción</th>
                                                        <th>Creado</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($files_sec as $item)
                                                            <tr>
                                                                <td>{{$item->name}}</td>
                                                                <td>{{$item->description}}</td>
                                                                <td>{{$item->created_at}}</td>
                                                                <td>
                                                                    <a href="{{ route('file.download', $item->id) }}" class="btn btn-primary btn-sm" title="Descargar"><i class="fa fa-download"></i></a>
                                                                    @if(Auth::guard('members')->user()->id==$item->user_id || Auth::guard('members')->user()->hasRole('admin'))
                                                                        <button data-id="{{$item->id}}" class="btn btn-danger btn-sm delete-file" title="Eliminar "><i class="fa fa-trash"></i></button>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="4">No hay archivos para mostrar</td>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                            <h5>Documentos de Vigilantes</h5>
                                            <hr>
                                            @if(Auth::guard('members')->user()->hasRole('admin') || Auth::guard('members')->user()->hasRole('vigilant_1') || Auth::guard('members')->user()->hasRole('vigilant_2') || Auth::guard('members')->user()->hasRole('secretary'))
                                                <a class="cryptos-btn btn" href="{{route('members.upload.form',2)}}">Subir archivo</a>
                                                <br>
                                                <br>
                                            @endif
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-bordered table-striped text-center">
                                                    <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Descripción</th>
                                                        <th>Creado</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse($files_vig as $item)
                                                            <tr>
                                                                <td>{{$item->name}}</td>
                                                                <td>{{$item->description}}</td>
                                                                <td>{{$item->created_at}}</td>
                                                                <td>
                                                                    <a href="{{ route('file.download', $item->id) }}" class="btn btn-primary btn-sm" title="Descargar"><i class="fa fa-download"></i></a>
                                                                    @if(Auth::guard('members')->user()->id==$item->user_id || Auth::guard('members')->user()->hasRole('admin'))
                                                                        <button data-id="{{$item->id}}" class="btn btn-danger btn-sm delete-file" title="Eliminar "><i class="fa fa-trash"></i></button
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="4">No hay archivos para mostrar</td>
                                                            </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                            <h5>Calendario de actividades</h5>
                                            <hr>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                            <h5>Planchas</h5>
                                            <hr>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-lections" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                            <h5>Lecciones</h5>
                                            <hr>
                                            <a class="cryptos-btn btn" href="{{route('members.upload.form',3)}}">Subir archivo</a>
                                            <br>
                                            <br>
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-bordered table-striped text-center">
                                                    <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Descripción</th>
                                                        <th>Creado</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($files_lec as $item)
                                                        <tr>
                                                            <td>{{$item->name}}</td>
                                                            <td>{{$item->description}}</td>
                                                            <td>{{$item->created_at}}</td>
                                                            <td>
                                                                <a href="{{ route('file.download', $item->id) }}" class="btn btn-primary btn-sm" title="Descargar"><i class="fa fa-download"></i></a>
                                                                @if(Auth::guard('members')->user()->id==$item->user_id || Auth::guard('members')->user()->hasRole('admin'))
                                                                    <button data-id="{{$item->id}}" class="btn btn-danger btn-sm delete-file" title="Eliminar "><i class="fa fa-trash"></i></button
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="4">No hay archivos para mostrar</td>
                                                        </tr>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-library" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                            <h5>Biblioteca virtual</h5>
                                            <hr>
                                            <a class="cryptos-btn btn" href="{{route('members.upload.form',3)}}">Subir archivo</a>
                                            <br>
                                            <br>
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-bordered table-striped text-center">
                                                    <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Descripción</th>
                                                        <th>Creado</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($files_lib as $item)
                                                        <tr>
                                                            <td>{{$item->name}}</td>
                                                            <td>{{$item->description}}</td>
                                                            <td>{{$item->created_at}}</td>
                                                            <td>
                                                                <a href="{{ route('file.download', $item->id) }}" class="btn btn-primary btn-sm" title="Descargar"><i class="fa fa-download"></i></a>
                                                                @if(Auth::guard('members')->user()->id==$item->user_id || Auth::guard('members')->user()->hasRole('admin'))
                                                                    <button data-id="{{$item->id}}" class="btn btn-danger btn-sm delete-file" title="Eliminar "><i class="fa fa-trash"></i></button
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="4">No hay archivos para mostrar</td>
                                                        </tr>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-msg" role="tabpanel" aria-labelledby="v-pills-msg-tab">
                                            <h5>Mensajes</h5>
                                            <hr>
                                            <a class="cryptos-btn btn" href="{{route('members.message')}}">Nuevo mensaje</a>
                                            <br>
                                            <br>
                                            <div class="table-responsive">
                                                <table id="example1" class="table table-bordered table-striped text-center">
                                                    <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Asunto</th>
                                                        <th>Recibido</th>
                                                        <th>Opciones</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($messages as $item)
                                                        <tr>
                                                            <td>{{$item->member->name}}</td>
                                                            <td>{{$item->subject}}</td>
                                                            <td>{{$item->created_at}}</td>
                                                            <td>
                                                                <a href="{{ route('members.message.detail', $item->id) }}" class="btn btn-primary btn-sm" title="Descargar"><i class="fa fa-envelope"></i></a>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="4">No hay archivos para mostrar</td>
                                                        </tr>
                                                    @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
