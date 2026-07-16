@extends('layouts.plantilla')
@section('clientes_satisfechos')
<div class="" id="main_contact_form">
 	<div class="row justify-content-md-center">
 		<div class="col-lg-10">
 			<div class="card" style="width: 100%">
 				<div class="card-header">
 					Su Comentario Sobre Nuestro Servicio
 				</div>
 				<div class="card-body">
					<form action="{{ url('sendemail/send') }}#main_contact_form" method="POST" class="p-5 contact-form needs-validation" novalidate>
					{{ csrf_field() }}
						@if(count( $errors) > 0)
		                <div class="alert alert-danger" style="margin-top:10px">
		                    <button type="button" class="close" data-dismiss="alert">x</button>
		                    <ul>
		                        @foreach( $errors->all() as $error)
		                            <li>{{ $error }}</li>
		                        @endforeach
		                    </ul>
		                </div>
			            @endif

			            @if ($errors->has('g-recaptcha-response'))
			                <span class="help-block text-danger" role="alert">
			                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
			                </span>
			            @endif

			            @if($message = Session::get('success'))
			                <div class="alert alert-success alert-block" style="margin-top:10px">
			                    <button type="button" class="close" data-dismiss="alert">x</button>
			                    <strong>{{ $message }}</strong>
			                </div>
			            @endif

						@include('clientes.partials.form')

					</form>
				</div>
 			</div>
 		</div>
    </div>
</div>
@endsection