<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido - E-News</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<?php
	require_once("clases/Conexion.php");
	require_once("clases/Usuario.php");
	require_once("clases/Administrador.php");

	$con = new Conexion();
	$con->Conectar();
	$usu = new Usuario();
	$adm = new Administrador();
	session_start();
	if (isset($_POST['btnRegistrar'])) 
	{
		$add = $usu->Agregar($_POST["txtCorreo"],$_POST["txtNombre"],$_POST["txtContraseña"],$_POST["txtFecha"],$_POST["genero"]);
		if($add)
		{
			$error = "Exito en el registro";
		}
		else
		{
			$error = "Problemas en el registro intenta luego";
		}
	}

	if (isset($_POST['btnIngresar'])) 
	{
		$bus = $usu->Buscar($_POST["txtMail"],$_POST["txtPass"]);
		if ($bus) 
		{
			
			$_SESSION['usuario'] = $_POST["txtMail"];
			header('Location: Noticias/Internacional.php');
		}
		else
		{
			header('Location: Inicio.php');
		}
	}

	if (isset($_POST['btnIngresarAdm']))
	{
		$busAdm = $adm->Buscar($_POST["txtMailAdm"],$_POST["txtPassAdm"]);
		if ($busAdm)
		{
			$_SESSION['admin'] = $_POST["txtMailAdm"];
			header('Location: Admin/InicioAdm.php');
		}
		else
		{
			header('Location: Error.php');
			$_SESSION['error'] = $_POST["txtMailAdm"];
		}
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
				<li class="active"><a href="#">Hoy</a></li>
		        <li><a href="#">Internacional</a></li>
		        <li><a href="#">Nacional</a></li>
		        <li><a href="#">Economia</a></li>
		        <li><a href="#">Politica</a></li>
		        <li><a href="#">Deportes</a></li>
		        <li><a href="#">Internet</a></li>
		    </ul>
		    <form class="navbar-form navbar-left" role="search">
			    <div class="form-group">
			        <input type="text" class="form-control" placeholder="Ej: Obama">
			    </div>
			    <button type="submit" class="btn btn-primary">Buscar</button>
		    </form>
		    <ul class="nav navbar-nav navbar-right">
			    <li><a href="#ingresar" data-toggle="modal">Ingresar</a></li>
			    <li><a href="#registro" data-toggle="modal">Registrate</a></li>
			</ul>
		</div>
	</nav>
	<!-- FIN Cabecera Menu -->

	<!-- Contenido Pricipal (Noticias) -->
	<section class="container">
		<div class="row">
			<article class="col-md-8">
				<img src="holder.js/100%x300/text:Principal/#CC1414:#FFF" alt="">	
			</article>
			<article class="col-md-4">
				<h3>Titulo</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, quae, quasi, consequatur unde magni labore reiciendis error veniam et voluptas dolorem eligendi temporibus accusamus aliquam ratione deleniti at! Accusantium, ab.</p>
			</article>
		</div>
		<div class="row">
			<article class="col-md-4">
				<h3 class="text-center">Titulo</h3>
				<img src="holder.js/350x200/text:Deportes/#CC1414:#FFF" alt="">					
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, quae, quasi, consequatur unde magni labore reiciendis error veniam et voluptas dolorem eligendi temporibus accusamus aliquam ratione deleniti at! Accusantium, ab.</p>
			</article>
			<article class="col-md-4">
				<h3 class="text-center">Titulo</h3>
				<img src="holder.js/350x200/text:Internacional/#CC1414:#FFF" alt="">	
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, quae, quasi, consequatur unde magni labore reiciendis error veniam et voluptas dolorem eligendi temporibus accusamus aliquam ratione deleniti at! Accusantium, ab.</p>
			</article>
			<article class="col-md-4">
				<h3 class="text-center">Titulo</h3>
				<img src="holder.js/350x200/text:Politica/#CC1414:#FFF" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit, quae, quasi, consequatur unde magni labore reiciendis error veniam et voluptas dolorem eligendi temporibus accusamus aliquam ratione deleniti at! Accusantium, ab.</p>
			</article>
		</div>
	</section>
	<!-- FIN Contenido Pricipal (Noticias) -->

	<!-- Footer -->
	<div class="navbar navbar-default navbar-fixed-bottom">
        <div class = "container">
        	<ul class="nav navbar-nav">
			    <li><a href="#ingresarAdm" data-toggle="modal">Administrador</a></li>
			    <li><a href="#ingresarEdi" data-toggle="modal">Editor</a></li>
			    <li><a href="#ingresarPer" data-toggle="modal">Periodista</a></li>
			</ul>
            <p class = "navbar-text navbar-right">Desarrollado por JCD &copy Copyright 2013</p>
        </div>
    </div>
	<!-- FIN Footer -->
	
	<!-- Modal Ingreso -->
	<div class="modal fade" id ="ingresar" role ="dialog">
        <div class="modal-dialog">
            <div class
            ="modal-content">
                <div class="modal-header">
                    <h4>Formulario de Ingreso</h4>
                </div>
        		<div class="modal-body">
            	    <form role="form" id="formIngreso" action="" name="formIngreso" method="POST">
            	    	<div class="form-group">
            	    		<label for="txtMail">E-Mail</label>
                    		<input class="form-control" type="text" id="txtMail" name="txtMail" placeholder="Ingresa Tu E-Mail">

                    		<label for="txtPass">Contraseña</label>
                    		<input class="form-control" type="password" id="txtPass" name="txtPass" placeholder="Ingresa Tu Contraseña">
            	    	</div>
            	</div>
	            <div class = "modal-footer">
                    <input type="submit" class="btn btn-primary" name="btnIngresar" id="btnIngresar" value="Ingresar">    
                    <a class="btn btn-danger" data-dismiss="modal">Cerrar</a>
	            </div>
	            </form>
            </div>
        </div>
    </div>
    <!-- FIN Modal Ingreso -->

    <!-- Modal Ingreso Admin -->
	<div class="modal fade" id ="ingresarAdm" role ="dialog">
        <div class="modal-dialog">
            <div class
            ="modal-content">
                <div class="modal-header">
                    <h4>Formulario de Ingreso Administrador</h4>
                </div>
        		<div class="modal-body">
            	    <form role="form" id="formIngresoAdm" action="" name="formIngresoAdm" method="POST">
            	    	<div class="form-group">
            	    		<label for="txtMailAdm">E-Mail</label>
                    		<input class="form-control" type="text" id="txtMailAdm" name="txtMailAdm" placeholder="Ingresa Tu E-Mail">

                    		<label for="txtPassAdm">Contraseña</label>
                    		<input class="form-control" type="password" id="txtPassAdm" name="txtPassAdm" placeholder="Ingresa Tu Contraseña">
            	    	</div>
            	</div>
	            <div class = "modal-footer">
                    <input type="submit" class="btn btn-primary" name="btnIngresarAdm" id="btnIngresarAdm" value="Ingresar">    
                    <a class="btn btn-danger" data-dismiss="modal">Cerrar</a>
	            </div>
	            </form>
            </div>
        </div>
    </div>
    <!-- FIN Modal Ingreso Admin -->

    <!-- Modal Registro -->
    <div class="modal fade" id ="registro" role ="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Formulario de Registro</h4>
                </div>
        		<div class="modal-body">
            		<form role="form" action="Inicio.php" id="formRegistro" name="formRegistro" method="post">
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
                    
            	</div>
	            <div class = "modal-footer">
                    <input type="submit" class="btn btn-primary" name="btnRegistrar" id="btnRegistrar" value="Registrar"> 
                    <a class="btn btn-danger" data-dismiss="modal">Cerrar</a>
	            </div>
	            </form>
            </div>
        </div>
    </div>
    <!-- FIN Modal Registro -->
	
	<script type="text/javascript" src="js/holder.js"></script>
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src = "js/bootstrap.js"></script>
</body>
</html>