<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio Administrador</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<?php
	require_once("../clases/Conexion.php");
	require_once("../clases/Administrador.php");

	$con = new Conexion();
	$con->Conectar();
	$adm = new Administrador();
	session_start();			
	if(isset($_SESSION['admin']))
	{

		$admEnc = $adm->Nombre($_SESSION['admin']);
	}
	else
	{
		header('Location: ../Inicio.php');	
	}

	if(isset($_GET["adm"]))
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
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario<b class="caret"></b></a>
		        	<ul class="dropdown-menu">
			          <li><a href="AddUsuario.php">Agregar Usuario</a></li>
			          <li><a href="">Modificar Usuario</a></li>
			          <li><a href="DelUsuario.php">Eliminar Usuario</a></li>
		        	</ul>
		        </li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Editor<b class="caret"></b></a>
		        	<ul class="dropdown-menu">
			          <li><a href="AddEditor.php">Agregar Editor</a></li>
			          <li><a href="#">Modificar Editor</a></li>
			          <li><a href="DelEditor.php">Eliminar Editor</a></li>
		        	</ul>
		        </li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Periodista<b class="caret"></b></a>
		        	<ul class="dropdown-menu">
			          <li><a href="AddPeriodista.php">Agregar Periodista</a></li>
			          <li><a href="#">Modificar Periodista</a></li>
			          <li><a href="DelPeriodista.php">Eliminar Periodista</a></li>
		        	</ul>
		        </li>
		    </ul>
		    <form class="navbar-form navbar-left" role="search">
			    <div class="form-group">
			        <input type="text" class="form-control" placeholder="Ej: Obama">
			    </div>
			    <button type="submit" class="btn btn-primary">Buscar</button>
		    </form>
		    <ul class="nav navbar-nav navbar-right">
			    <li><p class="navbar-text navbar-right"><?php if(isset($admEnc)) echo $admEnc[0]["nombre"] ?></p></li>
			    <li><a href="InicioAdm.php?adm=<?php echo $_SESSION['admin']; ?>">Cerrar Sesion</a></li>
			</ul>
		</div>
	</nav>
	<!-- FIN Cabecera Menu -->

	<script type="text/javascript" src="../js/holder.js"></script>
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src = "../js/bootstrap.js"></script>
</body>
</html>