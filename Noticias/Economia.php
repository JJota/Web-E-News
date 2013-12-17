<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Economia</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<?php 
	require_once("../clases/Conexion.php");
	require_once("../clases/Usuario.php");
	require_once("../clases/Noticia.php");

	$con = new Conexion();
	$con->Conectar();
	$usu = new Usuario();
	$not = new Noticia();
	session_start();			
	if(isset($_SESSION['usuario']))
	{

		$usuEnc = $usu->Nombre($_SESSION['usuario']);
	}
	else
	{
		header('Location: ../Inicio.php');	
	}

	if(isset($_GET["usuario"]))
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
		        <li><a href="Internacional.php">Internacional</a></li>
		        <li><a href="Nacional.php">Nacional</a></li>
		        <li class="active"><a href="Economia.php">Economia</a></li>
		        <li><a href="Politica.php">Politica</a></li>
		        <li><a href="Deportes.php">Deportes</a></li>
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
			    <li><a href="Economia.php?usuario=<?php echo $_SESSION['usuario']; ?>">Cerrar Sesion</a></li>
			</ul>
		</div>
	</nav>
	<!-- FIN Cabecera Menu -->

	<!-- Contenido Pricipal -->
	<section class="container">
		<div class="row">
			<article class="col-md-12">
				<table class="table " border="0" cellspacing="0" cellpadding="0" align="center">
				<?php
					$fila = $not->Economia();
				  for($i=0; $i<count($fila);$i++)
				  {
				  ?>
				  <tr>
				    
				    <th><?php echo $fila[$i]["titulo"];   ?></th>
				    
				    
				    
				  </tr>
				  <tr>
				  	<td><img src="../Noticias/img/<?php echo $fila[$i]["imagen"];   ?>" alt="" width="300"></td>
				  </tr>
				  <tr>
				  	<td><?php echo $fila[$i]["texto"];   ?></td>
				  </tr>
				  <tr>
				  	<td>Publicada El : <?php echo $fila[$i]["fechaP"];   ?></td>
				    <td>Periodista :<?php echo $fila[$i]["periodista"];   ?></td>
				  </tr>
				<?php
				}
				?>
            </table>
			</article>
		</div>
	</section>
	<!-- FIN Contenido Pricipal (Noticias) -->
</body>
</html>