<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Agregar Noticia</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<?php
	require_once("../clases/Conexion.php");
	require_once("../clases/Noticia.php");
	require_once("../clases/Periodista.php");

	$con = new Conexion();
	$con->Conectar();
	$per = new Periodista();
	$not = new Noticia();

	session_start();			
	if(isset($_SESSION['periodista']))
	{

		$PerEnc = $per->Nombre($_SESSION['periodista']);
	}
	else
	{
		header('Location: ../Inicio.php');	
	}

	if (isset($_POST["btnAddNot"]))
	{
		$add = $not->Agregar($_POST["txtTitulo"],$_FILES["txtImagen"]["name"],$_POST["txtTexto"],$PerEnc[0]["mail"],$PerEnc[0]["categoria"]);
		if($add)
		{
			move_uploaded_file($_FILES["txtImagen"]["tmp_name"], "../Noticias/img/".$_FILES["txtImagen"]["name"]);
		}
		else
		{
			$error = "No se agrego";
		}
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
			    <li><a href="AddNoticia.php?per=<?php echo $_SESSION['periodista']; ?>">Cerrar Sesion</a></li>
			</ul>
		</div>
	</nav>
	<!-- FIN Cabecera Menu -->
    
    <!-- Contenido Pricipal -->
	<section class="container">
		<div class="row">
			<article class="col-md-6">
				<h3>Nueva Noticia</h3>
				<form role="form" action="AddNoticia.php" id="formAddNoticia" name="formAddNoticia" method="post" enctype="multipart/form-data">
            	    	<div class="form-group">
            	    		<label for="txtTitulo">Titulo</label>
                    		<input class="form-control" type="text" id="txtTitulo" name="txtTitulo" placeholder="Ingresa el titulo">

                    		<label for="txtImagen">Imagen</label>
                    		<input  type="file" id="txtImagen" name="txtImagen">

                    		<label for="txtTexto">Contenido</label>
                    		<textarea class="form-control" id="txtTexto" name="txtTexto"></textarea>
                            
                            <br>
						
            	    	<input type="submit" class="btn btn-primary" name="btnAddNot" id="btnAddNot" value="Agregar">
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