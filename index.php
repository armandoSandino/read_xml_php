<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Read XML</title>
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">
		*{
			font-family:monoscope;
			font-size:110%;
			background: white;
		}
	</style>
</head>

<body>
<?php
$file  = simplexml_load_file("herramientas.xml");
if( !$file ){//si la lectura del fichero devulve false, significa que el documento esta construido(formateado o anidado)
	echo "<script type='text/javascript'>window.alert('Error al leer el fichero.'')</script>";
	exit();
}
echo "*******************<br/>\n";
echo "DATOS DEL XML<br/>\n";
echo "*******************<br/>\n";
printf("%s%'.20s%'.20s%'.20s%'.20s<br/>\n",
"Identificador",
"Nombre",
"Precio",
"Atributo 1",
"Atributo 2"
);
foreach ($file as $index ) {
	printf("%s%'.20s%'.20s%'.20s%'.20s<br/> \n",$index->id,
$index->nombre,
$index->categoria,
$index->precio,
$index['code'],
$index['color']);
}

?>
</body>
<footer>
</footer>
</html>
