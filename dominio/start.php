<?php
	include "langsettings.php";
	require_once("maxWhois.class.php");
	$whois = new maxWhois();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta name="author" content="Kai Oswald Seidler, Kay Vogelgesang, Carsten Wiedmann">
		<link href="xampp.css" rel="stylesheet" type="text/css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Buscador de Dominios Matute - Diseño Web</title>
		<link href="style/style.css" rel="stylesheet" type="text/css" />
	</head>

	<body>
					<?php
				    $whois->processWhois();
				?>
	</body>
</html>
