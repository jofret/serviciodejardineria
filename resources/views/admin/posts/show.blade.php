@extends('layouts.app')

 @section('content')
 <div class="container">
 	<div class="row justify-content-md-center">
 		<div class="col-lg-10">
 			<div class="card" style="width: 100%">
 				<div class="card-header">
 					Ver Publicación 
 				</div>
 				<div class="card-body">
				    <p><strong>Nombre: </strong> {{ $post->name }}</p>
				    <p><strong>Slug: </strong> {{ $post->slug }}</p>
				    <p><strong>Contenido: </strong> {{ $post->body }}</p>
 				</div>
 			</div>
 		</div>
    </div>
</div>
 @endsection