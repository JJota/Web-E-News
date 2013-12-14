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
	require_once("../clases/Editor.php");

	$con = new Conexion();
	$con->Conectar();
	$edi = new Editor();

	session_start();

	if (isset($_POST['btnAddEditor'])) 
	{
		$add = $edi->Agregar($_POST["txtCorreo"],$_POST["txtNombre"],$_POST["txtContraseña"],$_POST["txtFecha"],$_POST["genero"]);
		if($add)
		{
			$error = "Exito en el registro";
		}
		else
		{
			$error = "Problemas en el registro intenta luego";
		}
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
			</ul>
		</div>
	</nav>
	<!-- FIN Cabecera Menu -->

	<!-- Contenido Pricipal -->
	<section class="container">
		<div class="row">
			<article class="col-md-6">
				<h3>Datos Del Nuevo Editor</h3>
				<form role="form" action="" id="formAddEditor" name="formAddEditor" method="post">
            	    	<div class="form-group">
            	    		<label for="txtCorreo">E-Mail</label>
                    		<input class="form-control" type="text" id="txtCorreo" name="txtCorreo" placeholder="Ingresa Tu E-Mail">

                    		<label for="txtNombre">Nombre</label>
                    		<input class="form-control" type="text" id="txtNombre" name="txtNombre" placeholder="Ingresa Tu Nombre">

                    		<label for="txtContraseña">Contraseña</label>
                    		<input class="form-control" type="password" id="txtContraseña" name="txtContraseña" placeholder="Ingresa Tu Contraseña">
						
							<label for="txtFecha">Fecha Nacimiento</label>
                    		<input class="form-control" type="date" id="txtFecha" name="txtFecha">

							<label>Genero</label>
							<br>
                    		<div class="btn-group" data-toggle="buttons">
							  <label class="btn btn-default">
							    <input type="radio" name="genero" id="rbM" value="Masculino"> Masculino
							  </label>
							  <label class="btn btn-default">
							    <input type="radio" name="genero" id="rbF" value="Femenino"> Femenino
							  </label>
							</div>
            	    	</div>
            	    	<input type="submit" class="btn btn-primary" name="btnAddEditor" id="btnAddEditor" value="Agregar">
            	    	<input type="reset" class="btn btn-danger" name="btnLimpiar" id="btnLimpiar" value="Limpiar"> 
    	    	</form>	
			</article>
		</div>
	</section>
	<!-- FIN Contenido Pricipal (Noticias) -->

	<script type="text/javascript" src="../js/holder.js"></script>
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src = "../js/bootstrap.js"></script>
</body>
</html>