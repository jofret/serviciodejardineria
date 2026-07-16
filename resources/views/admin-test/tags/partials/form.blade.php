<div class="form-group">
	{{ Form::label('namme', 'Nombre de la etiqueta') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name'])}}
</div>

<div class="form-group">
	{{ Form::label('slug', 'URL Amigable') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug'])}}
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-primary btn-sm']) }}
</div>


@section('scripts')
<script src="{{ asset('assets/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
	$(document).ready(function(){
		$("#name, #slug").stringToSlug({
			callback: function(text){
				$("#slug").val(text);
			}
		});
	});
</script>
@endsection