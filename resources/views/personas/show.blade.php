<!-- A traves de esta vista podemos mostramos mediante solicitud url de un ID especifico que querramos ver 
es decir, debemos anotar en la dirección URL despues de   http://127.0.0.1:8000/personas/   el valor del id interesado.

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