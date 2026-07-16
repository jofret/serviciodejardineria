{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="row">
	<div class=" col-md-6">
		<div class="form-group">
			{{ Form::label('name', 'Nombre del Grupo') }}
			{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name'])}}
		</div>

		<div class="form-group">
			{{ Form::label('slug', 'URL Amigable') }}
			{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug'])}}
		</div>
	</div>

	<div class="col-md-6">
		<div class="form-group">
			{{ Form::label('category_id', 'Localidad') }}
			{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
		</div>

		<div class="form-group">
			{{ Form::label('name', 'Dirección') }}
			{{ Form::text('address', null, ['class' => 'form-control', 'id' => 'address'])}}
		</div>
	</div>

	
</div>

<div class="form-group">
	{{ Form::label('file', 'imagen') }}
	{{ Form::file('file')}}
</div>


<!-- <div class="form-group">
	{{ Form::label('prescenciales', 'Hacen Reuniones Prescenciales') }}
	<label>
		{{ Form::radio('prescenciales', 1 ) }} Si
	</label>
	<label>
		{{ Form::radio('prescenciales', 0 ) }} No
	</label>
</div>

<div class="form-group">
	{{ Form::label('viartuales', 'Reuniones Virtuales') }}
	<label>
		{{ Form::radio('virtuales', 1 ) }} Si
	</label>
	<label>
		{{ Form::radio('virtuales', 0 ) }} No
	</label>
</div> -->


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
	{{ Form::label('body', 'Descripción') }}
	{{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
			{{ Form::label('name', 'Mapa de Google') }}
			{{ Form::text('google_map', null, ['class' => 'form-control', 'id' => 'google_map'])}}
		</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-sm']) }}
</div>


@section('scripts')

  <script>tinymce.init({ selector:'body' });</script>


<script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('assets/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
	$(document).ready(function(){
		$("#name, #slug").stringToSlug({
			callback: function(text){
				$("#slug").val(text);
			}
		});
	});

	CKEDITOR.config.height = 100;
	CKEDITOR.config.width = 'auto';

	CKEDITOR.replace('body');
</script>
@endsection()