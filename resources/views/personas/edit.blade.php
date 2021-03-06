<!-- Vista del formulario para editar los valores de las variables la cual nos permite editar registros o eliminarlos por completo

Incluimos dos formularios uno normal para postear la informacion y otro con el metodo hidden para poder
eliminar algun registro

 -->


@extends("../layouts.plantilla")

@section("cabecera")
EDITAR REGISTROS
@endsection

@section("contenido")

	<form method="post" action="/personas/{{$persona->id}}" >

	<table>
		<tr>
			<td> Nombre: </td>
			<td>
		<input type="text" name="Nombre" value="{{$persona->Nombre}}">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="PUT">
			</td>
		</tr>
		<tr>
			<td> Apellido: </td>
			<td>
		<input type="text" name="Apellido" value="{{$persona->Apellido}}">
			</td>
		</tr>
		<tr>
			<td> Email: </td>
			<td>
		<input type="text" name="Email" value="{{$persona->Email}}">
			</td>
		</tr>
		<tr>
			<td> Edad: </td>
			<td>
		<input type="text" name="Edad" value="{{$persona->Edad}}">
			</td>
		</tr>
		<tr>
			<td> Teléfono: </td>
			<td>
		<input type="text" name="Telefono" value="{{$persona->Telefono}}">
			</td>
		</tr>

		<tr>
			<td>
		<input type="submit" name="enviar" value="Enviar">
		<input type="reset" name="Borrar" value="Borrar">
			</td>
		</tr>
	</table>
	</form>

	<form method="post" action="/personas/{{$persona->id}}" >
		{{csrf_field()}}
		<input type="hidden" name="_method" value="delete"> 
		<input type="submit" name="Borrar" value="Eliminar">
	</form>

@endsection

@section("pie")
@endsection