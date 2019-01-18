@extends('layouts.base')

@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area box-shadow bg-overlay-header">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-12">
                <div class="breadcumb-text text-center">
                    <h2>Blog</h2>
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
                            <div class="single-blog-area blog-style-2 mb-100">
                                <!-- Thumbnail -->
                                <div class="blog-thumbnail">
                                    <img src="{{asset($post->image)}}" alt="">
                                </div>
                                <!-- Content -->                            
                                <div class="blog-content text-justify" >
                                    <a href="#" class="post-title">{{$post->title}}</a>
                                    <div class="meta-data">
                                        <a href="#">{{$post->tag->name}}</a> |
                                        <a href="#">{{$post->created_at}}</a>
                                    </div>
                                    {!!$post->content!!}
                                    <a href="/blog" class="btn cryptos-btn mt-50">Regresar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="cryptos-blog-sidebar-area">

                    <!-- Section Heading -->
                    <div class="blog-section-heading mb-50">
                        <h3>Últimas entradas</h3>
                    </div>
                    @foreach($last_posts as $last_post)
                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Thumbnail -->

                        <!-- Content -->
                        <div class="blog-content">
                            <a href="/blog/post/{{$last_post->id}}" class="post-title">{{$last_post->title}}</a>
                            <div class="meta-data">
                                <a href="#">{{$last_post->tag->name}}</a> |
                                <a href="#">{{$last_post->created_at}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->
@endsection