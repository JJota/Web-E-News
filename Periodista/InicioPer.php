<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio Periodista</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<?php
	require_once("../clases/Conexion.php");
	require_once("../clases/Periodista.php");

	$con = new Conexion();
	$con->Conectar();
	$per = new Periodista();
	session_start();			
	if(isset($_SESSION['periodista']))
	{

		$PerEnc = $per->Nombre($_SESSION['periodista']);
	}
	else
	{
		header('Location: ../Inicio.php');	
	}

	if(isset($_GET["per"]))
    {
        session_destroy();
        header('Location: ../Inicio.php');
    }
?>
<body>
	<!-- Cabecera Menu -->
	<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
		<div class="container">
	  		<div class="navbar-header">
		    	<a class="navbar-brand" href="../Inicio.php">E-News</a>
		  	</div> 
		    <ul class="nav navbar-nav">
		        <li class="active"><a href="../Inicio.php">Inicio</a></li>
		        <li><a href="AddNoticia.php">Agregar Noticia</a></li>
		        <li><a href="">Editar Noticia</a></li>
		        <li><a href="">Ver Estado De Noticias</a></li>
		    </ul>
		    <form class="navbar-form navbar-left" role="search">
			    <div class="form-group">
			        <input type="text" class="form-control" placeholder="Ej: Obama">
			    </div>
			    <button type="submit" class="btn btn-primary">Buscar</button>
		    </form>
		    <ul class="nav navbar-nav navbar-right">
			    <li><p class="navbar-text navbar-right"><?php if(isset($PerEnc)) echo $PerEnc[0]["nombre"] ?></p></li>
			    <li><a href="InicioPer.php?per=<?php echo $_SESSION['periodista']; ?>">Cerrar Sesion</a></li>
			</ul>
		</div>
	</nav>
	<!-- FIN Cabecera Menu -->
</body>
</html>