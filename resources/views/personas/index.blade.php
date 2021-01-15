<!--Vista de los diferentes registros-->


@extends("../layouts.plantilla")

@section("cabecera")

<b>LECTURA DE REGISTROS</b>
@endsection

@section("contenido")

<!-- Campos de la tabla -->
<table>

<tr>
	<td><b> Nombre </b></td>
	<td><b> Apellido </b> </td>
	<td><b> Email </b></td>
	<td><b> Edad </b></td>
	<td><b> Telefono </b></td>
</tr>

<!-- Se crea una fila con cada uno de las propiedades del objeto persona -->
	@foreach($personas as $persona)
<tr>
	<td><a href="{{route("personas.edit",$persona->id)}}">{{$persona->Nombre}}</a></td> <!-- Para la primer propiedad (Nombre), creamos enlaces hacia la vista de su correspondiente registro paa editar o eliminar,-->
	<td>{{$persona->Apellido}}</td>
	<td>{{$persona->Email}}</td>
	<td>{{$persona->Edad}}</td>
	<td>{{$persona->Telefono}}</td>
</tr>
	@endforeach

@endsection

@section("pie")
@endsection
