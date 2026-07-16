@extends('layouts.app')

 @section('content')
 <div class="container">
 	<div class="row justify-content-md-center">
 		<div class="col-lg-10">
 			<div class="card" style="width: 100%">
 				<div class="card-header">
 					Editar Publicación
 				</div>
 				<div class="card-body">
				    {!! Form::model($post,['route' => ['posts.update', $post->id],
				    'method' => 'PUT', 'files' => true]) !!}
				    	@include('admin.posts.partials.form')
				    {!! Form::close() !!}
				    <hr>
							@if(count($images) >= 1)
							    <h2>Imágenes</h2>
								<table class="table table-hover">
								  <thead>
								    <tr>
								      <th scope="col">nombre</th>
								      <th scope="col">imagen</th>
								      <th scope="col">Borrar</th>
								    </tr>
								  </thead>
								  <tbody>
								  	@foreach($images as $image )
								    <tr>
								      
								      <td>{{$image->name}}</td>
								      <td><img src="{{$image->file}}" width=100></td>
								      <td>
								      	{!! Form::open(['route'=>['images.destroy', $image->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("¿Eliminar esta imagen? Esta acción no se puede deshacer.")']) !!}
					    					<button class="btn btn-danger btn-sm">
					    						Eliminar
					    					</button>
					    				{!! Form::close() !!}
								      </td>
								    </tr>
								    @endforeach
								    <!-- <tr>
								      <th scope="row">2</th>
								      <td>Jacob</td>
								      <td>Thornton</td>
								      <td>@fat</td>
								    </tr>
								    <tr>
								      <th scope="row">3</th>
								      <td colspan="2">Larry the Bird</td>
								      <td>@twitter</td>
								    </tr> -->
								  </tbody>
								</table>
							@endif	


							<a href="{{ route('images.show',$post->id) }}"><h3>Añadir Imágenes</h3></a>
							<hr>
							<!-- <div class="div_add_image">
								{!! Form::open(['route' => 'images.store', 'files'=> true]) !!}

								{{ Form::hidden('user_id', auth()->user()->id) }}
								{{ Form::hidden('post_id', $post->id) }}



								<div class="form-group">
									{{ Form::label('file', 'imagen') }}
									{{ Form::file('file')}}
								</div>

								<div class="form-group">
									{{ Form::label('name', 'alt para imagen') }}
									{{ Form::text('name', null, 
									[
											'class' 	=> 'form-control', 
											'id' 		=> 'name',
											'onload'	=> 'crearURL(this.value)',
											'onkeyup'	=> 'crearURL(this.value)',

									])}}
								</div>

								<div class="form-group">
									{{ Form::label('slug', 'URL Amigable') }}
									{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug'])}}
								</div>

								<div class="form-group">
									{{ Form::submit('añadir', ['class' => 'btn btn-primary btn-sm']) }}
								</div>
							    {!! Form::close() !!}

							</div> -->
 				</div>
 			</div>
 		</div>
    </div>
</div>
 @endsection