<!-- A traves de esta vista podemos mostrar mediante solicitud url de un ID especifico que querramos ver
es decir, debemos anotar en la dirección URL despues de   http://localhost/personas/   el valor del id interesado.

-->

@extends("../layouts.plantilla")

@section("cabecera")

<b>MOSTRAR REGISTROS</b>

@endsection

@section("contenido")

{{$persona->Nombre}}
{{$persona->Apellido}}
{{$persona->Email}}
{{$persona->Edad}}
{{$persona->Telefono}}

@endsection

@section("pie")
@endsection
