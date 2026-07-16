@extends('layouts.posts')
@section('title')
<title>servicio de jardineria</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="corte de pasto, jardineria, corte de cesped" name="keywords">
<meta content="servicio de jardineria" name="description">
@endsection
@section ('carousel_posts')
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('layout/imgs/corte_de_pasto.jpg')}}" alt="">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h4 class="text-white"><a href="{{route('blog')}}" style="color:white"> Inicio > </a> </h4>
                                    <h1 class="display-1 text-white mb-5 animated slideInDown"></h1>
                                    <a href="#publicacion" class="btn btn-primary py-sm-3 px-sm-4">Seguir Leyendo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Blog</p>
                <h1 class="display-5 mb-5">Publicaciones</h1>
            </div>
            <div class="row g-4">
                @foreach($posts as $post)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded">
                        <img class="img-fluid" src="{{$post->image->file}}" alt="{{$post->image->name}}">
                        <div class="team-text">
                            <a href="{{ route('category', $post->category->slug) }}"><p class="text-primary">{{$post->category->name}}</p></a>
                            <h4 class="mb-0">{{$post->name}}</h4>
                            <div class="team-social d-flex">
                                <a class="btn btn-success" href="{{route('post',$post->slug)}}#publicacion">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach()
            </div>
        </div>
        <div style="padding: 20px 0">{{ $posts->render() }}</div>
    </div>
@endsection