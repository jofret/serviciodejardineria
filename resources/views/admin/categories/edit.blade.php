@extends('layouts.app')

 @section('content')
 <div class="container">
 	<div class="row justify-content-md-center">
 		<div class="col-lg-10">
 			<div class="card" style="width: 100%">
 				<div class="card-header">
 					Editar Categoría
 				</div>
 				<div class="card-body">
				    {!! Form::model($category,['route' => ['categories.update', $category->id],
				    'method' => 'PUT']) !!}
				    	@include('admin.categories.partials.form')
				    {!! Form::close() !!}
 				</div>
 			</div>
 		</div>
    </div>
</div>
 @endsection