@extends('layout.layout')

@section('contenido')
<form method="post" action="{{URL::to('crearSopa')}}">
	{!!csrf_field()!!}
	
	ingresar cantidad de filas: <input type="text" name="fila" id="fila">
	<br>
	ingresar cantidad de columnas: <input type="text" name="columna" id="columna">
	
	<input type="submit" name="enviar" value="Crear">
</form>
@endsection