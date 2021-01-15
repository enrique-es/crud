

@extends("../layouts.plantilla")

@section("cabecera")

@endsection

@section("contenido")

	<form method="post" action="/personas">
<!-- Tabla con celdas para cada columna de los registros --> 

	<table>
		<tr>
			<td> Nombre: </td>
			<td>
		<input type="text" name="Nombre">
<!-- Las recientes versiones de laravel crean por defecto una proteccion contra ataques csrf para evitar que otros usuarios ingresen datos a nuestas DB. Laravel crea un token para el usuario del sistema, en este caso nosotros, y de esta forma comprueba que nosotros somos los que ingresamos la información. 
Solo debemos escribir la funcion que llamara a nuestro token dado por defecto.
 --> 	{{csrf_field()}}

			</td>
		</tr>

		<tr>
			<td>
		<input type="submit" name="enviar" value="Enviar">  <!-- Envia la información en el formulario --> 
		<input type="reset" name="Borrar" value="Borrar"> <!-- Borra la información en el formulario --> 
			</td>
		</tr>
	</table>
	</form>
@endsection

@section("pie")
@endsection