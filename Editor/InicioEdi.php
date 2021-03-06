<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio Editor</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<?php
	require_once("../clases/Conexion.php");
	require_once("../clases/Editor.php");

	$con = new Conexion();
	$con->Conectar();
	$edi = new Editor();
	session_start();			
	if(isset($_SESSION['editor']))
	{

		$EdiEnc = $edi->Nombre($_SESSION['editor']);
	}
	else
	{
		header('Location: ../Inicio.php');	
	}

	if(isset($_GET["edi"]))
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
		        <li class="active"><a href="">Inicio</a></li>
		        <li><a href="Publicar.php">Publicar Noticias</a></li>
		        <li><a href="">Ver Noticias Publicadas</a></li>
		    </ul>
		    <form class="navbar-form navbar-left" role="search">
			    <div class="form-group">
			        <input type="text" class="form-control" placeholder="Ej: Obama">
			    </div>
			    <button type="submit" class="btn btn-primary">Buscar</button>
		    </form>
		    <ul class="nav navbar-nav navbar-right">
			    <li><p class="navbar-text navbar-right"><?php if(isset($EdiEnc)) echo $EdiEnc[0]["nombre"] ?></p></li>
			    <li><a href="InicioEdi.php?edi=<?php echo $_SESSION['editor']; ?>">Cerrar Sesion</a></li>
			</ul>
		</div>
	</nav>
	<!-- FIN Cabecera Menu -->
</body>
</html>