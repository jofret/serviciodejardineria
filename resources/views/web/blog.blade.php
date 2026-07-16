@extends('layouts.plantilla')
@section('content')
<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Publicaciones</p>
                <h1 class="display-5 mb-5">Servicio de Corte de Pasto </h1>
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

        <div class="container" style="margin-top: 100px;">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Publicaciones</p>
                <h1 class="display-5 mb-5">Servicio de Poda de Altura </h1>
            </div>
            <div class="row g-4">
                @foreach($podaposts as $post)
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
        
        <div class="container" style="margin-top: 100px;">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Publicaciones</p>
                <h1 class="display-5 mb-5">Servicio Desmalezado y limpieza de Terrenos </h1>
            </div>
            <div class="row g-4">
                @foreach($limpiezadeterrenos as $post)
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
            <div class="container wow fadeInUp mt-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center ">
                            <a href="{{route('posts')}}" class="btn btn-primary py-sm-3 px-sm-4 "> Ver Todas <i class="lni lni-search-alt"></i></a>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection




