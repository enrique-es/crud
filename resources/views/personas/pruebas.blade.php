@extends("../layouts.plantilla")

@section("cabecera")
INTERVALO DE REGISTROS
@endsection

@section("contenido")

<table>
    @foreach($tiempo as $valor)
    <tr>
        <td> <dir>{{$valor["id"]}} </dir> </td>
        <td> <dir>{{$valor["Fecha"]}} </dir> </td>
    </tr>
    @endforeach
	</table>

@endsection

@section("pie")
@endsection

