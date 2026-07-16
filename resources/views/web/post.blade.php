@extends('layouts.post')
@section('title')
<title>{{$post->name}}</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="corte de pasto, jardineria, corte de cesped" name="keywords">
<meta content="{{$post->body}}" name="description">
@endsection
@section('web_dates')
<meta property="fb:app_id"   content="662918338782216" />
      <meta property="og:url"           content="{{asset('publicaciones/'.$post->slug)}}" />
      <meta property="og:type"          content="website" />
      <meta property="og:image"         content="{{$post->image->file}}" />
      <meta property="og:title"         content="{{$post->name}}" />
      <meta property="og:image:alt"         content="{{$post->name}}" />
      <meta property="og:image:secure_url" content="{{$post->image->file}}" />
      <meta property="og:image:type" content="image/jpg" />
      <meta property="og:description"   content="{{$post->body}}. Corte de cesped mantenimiento y jardineria: teléfono 11 388 72 953"/>
@endsection
@section ('carousel_posts')
<div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('layout/imgs/corte_de_pasto.jpg')}}" alt="{{$post->name}}">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <h4 class="text-white"><a href="{{route('blog')}}" style="color:white"> Inicio > </a> {{$post->category->name}}</h4>
                                    <h1 class="display-1 text-white mb-5 animated slideInDown">{{$post->name}}</h1>
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
<!--  Section Services Start -->


<section class="section service border-top" id="publicacion">
  <div class="container">

    <div class="row justify-content-center">

      <div class="col-lg-8">
        <div class="section-title">
          <h1 class="h1  pt-3 pb-3">
          <span class="text-color" style="text-transform: uppercase">{{$post->name}}</span>
        </h1>
          <div class="card mb-3">
            <div class="owl-carousel owl-theme">
              @foreach($images as $image)
                <div class="item"><img src="{{$image->file}}" alt=""></div>
              @endforeach
            </div>

    			  <div class="card-body">
    			    <h5 class="card-title"></h5>
    			    <p class="card-text">{!!$post->body!!}</p>
    			    <p class="card-text"><small class="text-muted"><i class="lni lni-plane"></i> <strong>Admin</strong></small></p>

              <div class="fb-like" data-href="{{asset('publicaciones/'.$post->slug)}}#publicaciones" data-width="" data-layout="box_count" data-action="like" data-size="small" data-share="true"></div>
    			  </div>

    		  </div>
		  <a href="{{route('blog')}}#publicaciones" class="btn btn-main mt-3 btn-round-full">Volver</a>
        </div>
      </div>

      <div class="col-lg-4">

        <div id="posts" style="margin-top: 120px">
          <h1 class="m-0 mb-3">Alto<span style="color:#5bc142">Parque</span></h1>
  
          <p><i class="lni lni-map-marker"></i> Buenos Aires - Argentina</p>
          <p><i class="lni lni-envelope"></i> info@serviciodejardineria.com.ar</p>
          <p><i class="lni lni-whatsapp"></i> 
11 7178-9529
          </p>
        </div>
        

        <!-- <div id="categorias_de_servicio">
          <hr>
          <h4 class="m-0">Categorías de Servicio</h1>
          <hr>
          <ul>
            @foreach($categories as $category)
            <li><a href="">{{$category->name}}</a></li>
            @endforeach
          </ul>
        </div> -->

        <div id="categorias_de_servicio">
          <hr>
          <h4 class="m-0">Últimas Publicaciones</h1>
          <hr>
          <ul>
            @foreach($posts_lateral_menu as $post)
            <li>
              <div class="row">
                <div class="col-md-3">
                  <a href="{{route('post',$post->slug)}}#publicacion">
                    <img src="{{$post->image->file}}" alt="{{$post->name}}" class="img-fluid" style="padding: 5%">
                  </a>
                </div>
                <div class="col-md-9">
                  <a href="{{route('post',$post->slug)}}#publicacion">{{$post->name}}</a>
                  <p><i class="lni lni-user"></i> <strong>Admin</strong></p>
                </div>
              </div>
              <hr>
            </li>
            @endforeach
          </ul>
        </div>
        
      </div>
    </div>
  </div>
</section>
<!--  Section Services End -->
@endsection