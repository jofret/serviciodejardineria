@extends('layouts.app')

@section('content')
<div class="container">
<h3>Imágenes del Post</h3>
	<hr>
	<div class="div_add_image">
		{!! Form::open(['route' => 'images.store', 'files'=> true]) !!}

		{{ Form::hidden('user_id', $post->user_id) }}
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

	</div>
</div>
 @endsection

 @section('scripts')

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="{{asset('assets/stringToSlug/dist/speakingurl.min.js')}}"></script>
<script src="{{asset('assets/stringToSlug/dist/jquery.stringtoslug.min.js')}}"></script>
<script>
	$(document).ready(function(){
		$("#name, #slug").stringToSlug({
			callback: function(text){
				$("#slug").val(text);
			}
		});
	});

	
</script>
@endsection()