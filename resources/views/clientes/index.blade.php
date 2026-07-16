@extends('layouts.app')

 @section('content')
 <div class="container">
 	<div class="row justify-content-md-center">
 		<div class="col-lg-10">
 			<div class="card" style="width: 100%">
 				<div class="card-header">
 					Lista de Clientes
 				</div>
 				<div class="card-body">
				    <table class="table table-striped table-hover">
				    	<thead>
				    		<tr>
				    			<th width="10px">ID</th>
				    			<th>Nombre</th>
				    			<th>Estado</th>
				    			<th colspan="3">&nbsp;</th>
				    		</tr>
				    	</thead>
				    	<tbody>
				    		@foreach($clientes as $cliente)
				    		<tr>
				    			<td>{{ $cliente->id }}</td>
				    			<td>{{ $cliente->name }}</td>
				    			<td><span class="{{$cliente->status}}">{{ $cliente->status }}</span></td>
				    			<td width="10px">
				    				<a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-outline-secondary btn-sm">
				    					Ver
				    				</a>
				    			</td>
				    			<td width="10px">
				    				<a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-outline-secondary btn-sm">
				    					editar
				    				</a>
				    			</td>
				    			<td width="10px">
				    				{!! Form::open(['route'=>['clientes.destroy', $cliente->id], 'method' => 'DELETE']) !!}
				    					<button class="btn btn-danger btn-sm">
				    						Eliminar
				    					</button>
				    				{!! Form::close() !!}
				    			</td>
				    		</tr>
				    		@endforeach
				    	</tbody>
				    </table>
			    {{ $clientes->render() }}
 				</div>
 			</div>
 		</div>
 	</div>
</div>
 @endsection