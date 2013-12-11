<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Deportes</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<?php 
	require_once("../clases/Conexion.php");
	require_once("../clases/Usuario.php");

	$con = new Conexion();
	$con->Conectar();
	$usu = new Usuario();
	session_start();			
	if(isset($_SESSION['usuario']))
	{

		$usuEnc = $usu->Nombre($_SESSION['usuario']);
	}
	else
	{
		header('Location:Index.php');	
	}
?>
<body>
	<!-- Cabecera Menu -->
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
	  		<div class="navbar-header">
		    	<a class="navbar-brand" href="#">E-News</a>
		  	</div> 
		    <ul class="nav navbar-nav">
		        <li><a href="Internacional.php">Internacional</a></li>
		        <li><a href="Nacional.php">Nacional</a></li>
		        <li><a href="Economia.php">Economia</a></li>
		        <li><a href="Politica.php">Politica</a></li>
		        <li class="active"><a href="Deportes.php">Deportes</a></li>
		        <li><a href="Internet.php">Internet</a></li>
		    </ul>
		    <form class="navbar-form navbar-left" role="search">
			    <div class="form-group">
			        <input type="text" class="form-control" placeholder="Ej: Obama">
			    </div>
			    <button type="submit" class="btn btn-primary">Buscar</button>
		    </form>
		    <ul class="nav navbar-nav navbar-right">
			    <li><p class="navbar-text navbar-right"><?php if(isset($usuEnc)) echo $usuEnc[0]["nombre"] ?></p></li>
			</ul>
		</div>
	</nav>
	<!-- FIN Cabecera Menu -->
</body>
</html>