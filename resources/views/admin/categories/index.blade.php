@extends('layouts.app')

 @section('content')
 <div class="container">
 	<div class="row justify-content-md-center">
 		<div class="col-lg-10">
 			<div class="card" style="width: 100%">
 				<div class="card-header">
 					Lista de Categorías
 					<a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm float-right">
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
				    		@foreach($categories as $category)
				    		<tr>
				    			<td>{{ $category->id }}</td>
				    			<td>{{ $category->name }}</td>
				    			<td width="10px">
				    				<a href="{{ route('categories.show', $category->id) }}" class="btn btn-outline-secondary btn-sm">
				    					Ver
				    				</a>
				    			</td>
				    			<td width="10px">
				    				<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-outline-secondary btn-sm">
				    					editar
				    				</a>
				    			</td>
				    			<td width="10px">
				    				{!! Form::open(['route'=>['categories.destroy', $category->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("¿Eliminar esta categoría? Esto borra también TODAS sus publicaciones, imágenes y etiquetas asociadas. Esta acción no se puede deshacer.")']) !!}
				    					<button class="btn btn-danger btn-sm">
				    						Eliminar
				    					</button>
				    				{!! Form::close() !!}
				    			</td>
				    		</tr>
				    		@endforeach
				    	</tbody>
				    </table>
			    {{ $categories->render() }}
 				</div>
 			</div>
 		</div>
 	</div>
</div>
 @endsection