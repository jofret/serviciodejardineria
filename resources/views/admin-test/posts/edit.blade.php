@extends('layouts.app')

 @section('content')
 <div class="container">
 	<div class="row justify-content-md-center">
 		<div class="col-lg-10">
 			<div class="card" style="width: 100%">
 				<div class="card-header">
 					Editar Publicación
 				</div>
 				<div class="card-body">
				    {!! Form::model($post,['route' => ['posts.update', $post->id],
				    'method' => 'PUT', 'files' => true]) !!}
				    	@include('admin.posts.partials.form')
				    {!! Form::close() !!}
				    <hr>
							@if(count($meets) >= 1)
							    <h2>Reuniones</h2>
								<table class="table table-hover">
								  <thead>
								    <tr>
								      
								      <th scope="col">Día</th>
								      <th scope="col">Desde</th>
								      <th scope="col">Hasta</th>
								      <th scope="col">Modalidad</th>
								      <th scope="col">Plataforma</th>
								      <th scope="col">Borrar</th>
								    </tr>
								  </thead>
								  <tbody>
								  	@foreach($meets as $meet )
								    <tr>
								     
								      <td>{{$meet->day}}</td>
								      <td>{{$meet->start_time}}</td>
								      <td>{{$meet->end_time}}</td>
								      
								      <td>{{$meet->modal}}</td>
								      <td>{{$meet->platform}}</td>
								      <td>
								      	{!! Form::open(['route'=>['meets.destroy', $meet->id], 'method' => 'DELETE']) !!}
					    					<button class="btn btn-danger btn-sm">
					    						Eliminar
					    					</button>
					    				{!! Form::close() !!}
								      </td>
								    </tr>
								    @endforeach
								    <!-- <tr>
								      <th scope="row">2</th>
								      <td>Jacob</td>
								      <td>Thornton</td>
								      <td>@fat</td>
								    </tr>
								    <tr>
								      <th scope="row">3</th>
								      <td colspan="2">Larry the Bird</td>
								      <td>@twitter</td>
								    </tr> -->
								  </tbody>
								</table>
							@endif	


							<button  class="btn btn-danger add_meet" >Añadir Reunión</button>
							<hr>
							<div class="div_add_meet">
								{!! Form::open(['route' => 'meets.store']) !!}

									{{ Form::hidden('user_id', auth()->user()->id) }}
									{{ Form::hidden('post_id', $post->id) }}
									
									<div class="form-group">
										{{ Form::label('Reunión día', 'Día') }}
										<!-- {{ Form::text('day', null, ['class' => 'form-control', 'id' => 'day'])}} -->
										{{ Form::select('day', [ 
											'Lunes'     =>  'Lunes', 
											'Martes'    =>  'Martes',
											'Miércoles' =>  'Miercoles',
											'Jueves'    =>  'Jueves',
											'Viernes'   =>  'Viernes',
											'Sábado'    =>  'Sábado',
											'Domingo'   =>  'Domingo'
											], null, ['placeholder' => 'Elige un día']) 
										}}
									</div>


									<div class="form-group">
										{{ Form::label('modal', 'Modalidad') }}
										<label class="click">
											{{ Form::radio('modal', 'presencial' )}} presencial
										</label>
										<label class="disclick">
											{{ Form::radio('modal', 'virtual' ) }} virtual
										</label>

									</div>


									<div class="form-group col-md-6">
										{{ Form::label('Hora de Inicio', 'Inicio') }}
										<!-- {{ Form::text('time', null, ['class' => 'form-control', 'id' => 'time'])}} -->
										
										
										<select name="start_time">
								            <option value="06.00">06.00</option>
								        <?php
								        	
								            for ($i=6; $i <22 ; $i++) { 
								            	
								            	for ($x=0; $x <4 ; $x++){
								            		$y=$x*15;
	
								            		if($i<10){
								            			echo "<option value=" ."0". $i.".";
								            			if($y==0){
								            				echo "0".($y) . ">" . "0".$i.".";
								            				echo "0".$y. "</option>";
								            			}else{
								            				echo ($y) . ">" . "0".$i.".";
								            				echo $y. "</option>";
								            			}
								            			
													}else{
														echo "<option value=" . $i.".";
														if($y==0){
															echo "0".($y) . ">" . $i.".";
								            				echo "0".$y. "</option>";
								            			}else{
								            				echo $y . ">" . $i.".";
								            				echo $y. "</option>";
								            			}	
													}

								               		//revisar:
								               //ww		https:w.delftstack.com/es/howto/php/how-to-properly-format-a-number-with-leading-zeros-in-php/
								           		}
								            }

								            ?>
								        </select>
								        {{ Form::label('hasta', 'hasta') }}
										<!-- {{ Form::text('time', null, ['class' => 'form-control', 'id' => 'time'])}} -->

								        <select name="end_time">
								            <option value="06.00">06.00;</option>
								        <?php
								        	
								            for ($i=6; $i <22 ; $i++) { 
								            	
								            	for ($x=0; $x <4 ; $x++){
								            		$y=$x*15;
								               		if($i<10){
								            			echo "<option value=" ."0". $i.".";
								            			if($y==0){
								            				echo "0".($y) . ">" . "0".$i.".";
								            				echo "0".$y. "</option>";
								            			}else{
								            				echo ($y) . ">" . "0".$i.".";
								            				echo $y. "</option>";
								            			}
								            			
													}else{
														echo "<option value=" . $i.".";
														if($y==0){
															echo "0".($y) . ">" . $i.".";
								            				echo "0".$y. "</option>";
								            			}else{
								            				echo $y . ">" . $i.".";
								            				echo $y. "</option>";
								            			}	
													}
								               		
								           		}
								            }

								            ?>
								        </select>
								        {{ Form::label('plataform', 'plataforma') }}
										<!-- {{ Form::text('day', null, ['class' => 'form-control', 'id' => 'day'])}} -->
										{{ Form::select('platform', [ 
											'Zoom'     =>  'Zoom', 
											'Meet'    =>  'Meet',
											'Whatsapp' =>  'Whatsapp',
											'Skype' =>  'Skype',
											'Otros' =>  'Otros',
											
											], null, ['placeholder' => 'Plataforma', 'id'=>'platform']) 
										}}
									</div>


									<div class="form-group col-md-6">
										{{ Form::label('Enlace a Plataform', 'Enlace a Plataforma') }}
										{{ Form::text('enlace_platform', null, ['class' => 'form-control', 'id' => 'enlace_platform'])}}
									</div>
								
									<div class="form-group">
										{{ Form::submit('añadir', ['class' => 'btn btn-primary btn-sm']) }}
									</div>
								    {!! Form::close() !!}
								</div>

								
								<hr>
							
 				</div>
 			</div>
 		</div>
    </div>
</div>
 @endsection