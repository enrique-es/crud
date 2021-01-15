<!-- Plantilla base para las distintas páginas aunque en realidad no se utilizo algun formato o estilo para las diferentes secciones, simplemente sirve como referencia para su escalabilidad -->


<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>

<style>
	.cabecera{
		text-align: center;
		font-size: x-large;
		margin-bottom: 100px;
	}	
</style>

<style>
	.contenido{
		margin-bottom: 10px;
	}	
</style>

</head>

<body>
<div class = "cabecera"> </div>
	@yield("cabecera")

<div class = "contenido"> </div>
	@yield("contenido")

<div class = "pie"> </div>
	@yield("pie")
</body>
</html>