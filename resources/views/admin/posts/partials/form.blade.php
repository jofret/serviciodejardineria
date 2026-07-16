{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="row">
	<div class=" col-md-6">
		<div class="form-group">
			{{ Form::label('name', 'Titulo de la Publicación') }}
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
	</div>

	<div class="col-md-6">
		<div class="form-group">
			{{ Form::label('category_id', 'Categoría') }}
			{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
		</div>

	</div>

	
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
	{{ Form::label('tags', 'Etiquetas') }}
	<div>
		@foreach($tags as $tag)
		<label>
			{{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
		</label>
		@endforeach
	</div>
</div>

<div class="form-group">
	{{ Form::label('excerpt', 'Extracto') }}
	{{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>

<div class="form-group">
	{{ Form::label('body', 'Descripción') }}
	{{ Form::textarea('body', null, ['class' => 'form-control','class' => 'textarea']) }}
</div>


<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-sm']) }}
</div>

@section('scripts')

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

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

	


    ClassicEditor
        .create( document.querySelector( '.textarea' ) )
        .catch( error => {
            console.error( error );
        } );

</script>
@endsection()