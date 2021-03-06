@extends('layouts.app')

@section('titulo','Clientes Create');

@section('content')
	<table class="table table-dark">
		<thead>
		    <tr>
		      <th scope="col">Telefono</th>
		      <th scope="col">Nombres</th>
		      <th scope="col">Apellido</th>
		      <th scope="col">Direccion</th>
		      <th scope="col">Latitud</th>
		      <th scope="col">Longitud</th>
		    </tr>
		</thead>
	</table>
	<form method="POST" action="/clientes">
		@csrf
	  <div class="form-row align-items-center">
	  	<div class="col-auto">
	      <label class="sr-only" for="inlineFormInputGroup">Telefono</label>
	      <div class="input-group mb-2">
	        <input type="text" name="telefono" class="form-control" id="inlineFormInputGroup" placeholder="Telefono">
	      </div>
	    </div>

	    <div class="col-auto">
	      <label class="sr-only" for="inlineFormInput">Nombre</label>
	      <input type="text" name="nombre" class="form-control mb-2" id="inlineFormInput" placeholder="Nombre">
	    </div>
	    <div class="col-auto">
	      <label class="sr-only" for="inlineFormInputGroup">Apellido</label>
	      <div class="input-group mb-2">
	        <input type="text" name="apellido" class="form-control" id="inlineFormInputGroup" placeholder="Apellido">
	      </div>
	    </div>
	    <div class="col-auto">
	      <label class="sr-only" for="inlineFormInputGroup">Direccion</label>
	      <div class="input-group mb-2">
	        <input type="text" name="direccion" class="form-control" id="inlineFormInputGroup" placeholder="Direccion">
	      </div>
	    </div>


	    <div class="col-auto">
	      <label class="sr-only" for="inlineFormInputGroup">Latitud</label>
	      <div class="input-group mb-2">
	        <input type="text" name="latitud" class="form-control" id="inlineFormInputGroup" placeholder="Latitud">
	      </div>
	    </div>

	    <div class="col-auto">
	      <label class="sr-only" for="inlineFormInputGroup">Longitud</label>
	      <div class="input-group mb-2">
	        <input type="text" name="longitud" class="form-control" id="inlineFormInputGroup" placeholder="Longitud">
	      </div>
	    </div>

	    <div class="col-auto">
	      <button type="submit" class="btn btn-primary mb-2">Registrar</button>
	    </div>
	  </div>
	</form>

@endsection


