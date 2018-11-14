@extends('layouts.create')

@section('title', 'Nuevo docente')

@section('content')
<form class='form-control' method='POST' action="/persona">
	<div class="form-group">

        <label for="">CARNET</label>
		<input type="text" class="form-control"><br>
        
		<label for="">Nombre</label>
		<input type="text" class="form-control"><br>
        
        <label for="">Apellido</label>
		<input type="text" class="form-control"><br>
        
  		<label for="">Fecha de nacimiento</label>
		<input type="text" class="form-control"><br>
        		
        <label for="">Telefono</label>
		<input type="text" class="form-control"><br>
        		
        <label for="">Direccion</label>
		<input type="text" class="form-control"><br>
        	
        <label for="">E_mail</label>
		<input type="text" class="form-control"><br>
        		
        <label for="">Contraseña</label>
		<input type="psswd" class="form-control"><br>
	</div>
	<button type="submit" class="btn btn-primary">Insertar</button>
	
</form>

@endsection
