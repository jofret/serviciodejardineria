@extends('layouts.app')

 @section('content')
 <div class="container">
 	<div class="row justify-content-md-center">
 		<div class="col-lg-10">
 			<div class="card" style="width: 100%">
 				<div class="card-header">
 					Editar Cliente
 				</div>
 				<div class="card-body">
				    {!! Form::model($cliente,['route' => ['clientes.update', $cliente->id],
				    'method' => 'PUT']) !!}
				    	<div class="form-group">
							{{ Form::label('name', 'Nombre del cliente') }}
							{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name'])}}
						</div>

						<div class="form-group">
							{{ Form::label('email', 'email') }}
							{{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email'])}}
						</div>

						<div class="form-group">
							{{ Form::label('profession', 'ocupación') }}
							{{ Form::text('profession', null, ['class' => 'form-control', 'id' => 'profession'])}}
						</div>


						<hr>
						<div class="form-group">
							{{ Form::label('body', 'Descripción') }}
							<br>
							{{ Form::textarea('body', null, ['class' => 'form-control','class' => 'textarea']) }}
						</div>

						<div class="form-group">
							{{ Form::label('status', 'Estado') }}
							<label>
								{{ Form::radio('status', 'PUBLISHED' ) }} Publicado
							</label>
							<label>
								{{ Form::radio('status', 'DRAFT' ) }} Borrador
							</label>
						</div>

						<div class="form-group">
							{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-sm']) }}
						</div>

				    {!! Form::close() !!}
 				</div>
 			</div>
 		</div>
    </div>
</div>
 @endsection