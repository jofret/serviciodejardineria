@extends('layouts.app')

 @section('content')
 <div class="container">
 	<div class="row justify-content-md-center">
 		<div class="col-lg-10">
 			<div class="card" style="width: 100%">
 				<div class="card-header">
 					Lista de Publicaciones
 					<a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right">
 						Crear
 					</a>
 				</div>
 				<div class="card-body">
				    <table class="table table-striped table-hover">
				    	<thead>
				    		<tr>
				    			<th width="10px">ID</th>
				    			<th>Nombre</th>
				    			<th colspan="3">&nbsp;</th>
				    		</tr>
				    	</thead>
				    	<tbody>
				    		@foreach($posts as $post)
				    		<tr>
				    			<td>{{ $post->id }}</td>
				    			<td>{{ $post->name }}</td>
				    			<td width="10px">
				    				<a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-secondary btn-sm">
				    					Ver
				    				</a>
				    			</td>
				    			<td width="10px">
				    				<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-secondary btn-sm">
				    					editar
				    				</a>
				    			</td>
				    			<td width="10px">
				    				{!! Form::open(['route'=>['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
				    					<button class="btn btn-danger btn-sm">
				    						Eliminar
				    					</button>
				    				{!! Form::close() !!}
				    			</td>
				    		</tr>
				    		@endforeach
				    	</tbody>
				    </table>
			    {{ $posts->render() }}
 				</div>
 			</div>
 		</div>
 	</div>
</div>
 @endsection