@extends('layouts.base')

@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area box-shadow bg-overlay-header">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-12">
                <div class="breadcumb-text text-center">
                    <h2>Noticias</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cryptos-blog-posts">
                    <div class="row">

                        <!-- Single Blog Area -->
                        <div class="container">
                            @forelse($posts as $post)
                            <div class="single-blog-area blog-style-2 mb-100">
                                <!-- Thumbnail -->
                                <div class="blog-thumbnail">
                                    <img src="{{$post->image}}" alt="">
                                </div>
                                <!-- Content -->
                                <div class="blog-content text-justify" style="word-wrap: break-word;">
                                    <a href="blog/post/{{$post->id}}" class="post-title">{{$post->title}}</a>
                                    <div class="meta-data">
                                        <span><b>{{$post->tag->name}}</b></span> |
                                        <a href="#">{{$post->created_at}}</a>
                                    </div>
                                    <div style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                        {!!$post->content!!}
                                    </div>
                                    <a href="/noticias/{{$post->id}}" class="btn cryptos-btn mt-50">Leer más</a>
                                </div>
                            </div>
                            @empty
                                <div class="single-blog-area blog-style-2 mb-100">

                                    <!-- Content -->
                                    <div class="blog-content text-justify" style="word-wrap: break-word;">
                                        <div style="">
                                            <h3>No hay noticias para mostrar</h3>
                                        </div>
                                        <a href="/" class="btn cryptos-btn mt-50">Regresar</a>
                                    </div>
                                </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($last_posts) && count($last_posts)>0)
            <div class="col-12 col-lg-4">
                <div class="cryptos-blog-sidebar-area">

                    <!-- Section Heading -->
                    <div class="blog-section-heading mb-50">
                        <h3>Últimas entradas</h3>
                    </div>
                    @foreach($last_posts as $last_post)
                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Content -->
                        <div class="blog-content">
                            <a href="#" class="post-title">{{$last_post->title}}</a>
                            <div class="meta-data">
                                <span><b>{{$post->tag->name}}</b></span> |
                                <a href="#">{{$last_post->created_at}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->
@endsection