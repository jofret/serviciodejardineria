<div class="form-group">
	{{ Form::label('Genero', 'Género:') }}
	<div>
    	<label>
    		{{ Form::radio('gender', 'Masculino' ) }} Masculino
    	</label>
    	<label>
    		{{ Form::radio('gender', 'Femenino' ) }} Femenino
    	</label>
	</div>
</div>
<hr>
<div class="row">
	<div class="col-md-6">
		<div class="form-floating">
            <input name="name" type="text" class="form-control bg-light border-0" id="name" placeholder="Gurdian Name" required data-error="Por favor ingresa tu nombre">
            <label for="gname">Nombre</label>
        </div>
	</div>


	<div class="col-md-3">
		<div class="form-floating">
            <input name="email" type="email" class="form-control bg-light border-0" id="gmail" placeholder="Gurdian Email">
            <label for="gmail">Email</label>
        </div>
	</div>
	<div class="col-md-3">
		<div class="form-floating">
            <input name="profession" type="text" class="form-control bg-light border-0" id="gname" placeholder="Gurdian Name">
            <label for="gname">Ocupación</label>
        </div>
	</div>
</div>


<hr>

<h6>Fecha de Cumpleaños</h6>
<div class="row">
	<div class="col-md-1">
	    <select name="day" class="form-control bg-light border-0" required data-error="Por favor ingresa tu día">
		  <option value="0" selected>día</option>
		  <?php
		  for($i=0;$i<32;$i++){
			  echo "<option value=".$i." >".$i."</option>";
			}
		  ?>
		</select>
	</div>

	<div class="col-md-1">
		<select name="month" class="form-control bg-light border-0">
		  <option value="0" selected>mes</option>
		  <?php
		  for($i=0;$i<13;$i++){
			  echo "<option value=".$i." >".$i."</option>";
			}
		  ?>
		</select>
	</div>
</div>

<div class="col-12 mt-3">
    <div class="form-floating">
        <textarea name="body" class="form-control bg-light border-0" placeholder="Escriba su comentario" id="message" style="height: 100px"></textarea>
        <label for="message">Comentario</label>
    </div>
</div>

<div class="col-12 text-center mt-3 mb-5">
    <button class="btn btn-primary py-3 px-4" type="submit">Enviar Ahora</button>
</div>


