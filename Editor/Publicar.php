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
	require_once("../clases/Noticia.php");
	require_once("../clases/Editor.php");

	$con = new Conexion();
	$con->Conectar();
	$edi = new Editor();
	$not = new Noticia();

	session_start();			
	if(isset($_SESSION['editor']))
	{

		$EdiEnc = $edi->Nombre($_SESSION['editor']);
	}
	else
	{
		header('Location: ../Inicio.php');	
	}

	if(isset($_GET["titulo"]))
    {
        $upd = $not->Publicar($_GET["titulo"],$EdiEnc[0]["mail"]);
        if (!$upd) {
            $error = "no se logro eliminar";
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
			</ul>
		</div>
	</nav>
	<!-- FIN Cabecera Menu -->

	<!-- Contenido Pricipal -->
	<section class="container">
		<div class="row">
			<article class="col-md-12">
				<h3>Lista De Noticias No Publicadas</h3>
				<table class="table " border="0" cellspacing="0" cellpadding="0" align="center">
				<tr>
					<th>Noticia</th>					
					<th>Fecha Publicacion</th>
					<th>Periodista</th>
					<th>Categoria</th>
					
					<th>Publicar</th>
				</tr>	
				<?php
					$fila = $not->Listar();
				  for($i=0; $i<count($fila);$i++)
				  {
				  ?>
				  <tr>
				    
				    
				    <td><img src="holder.js/300x300/text:Imagen De Noticia/#CC1414:#FFF" alt=""></td>
				    <td><?php echo $fila[$i]["fechaP"];   ?></td>
				    <td><?php echo $fila[$i]["periodista"];   ?></td>
				    <td><?php echo $fila[$i]["categoria"];   ?></td>
				    
				    <td><a href="Publicar.php?titulo=<?php echo $fila[$i]["titulo"]; ?>"><img src="../img/Up.png"/> </a></td>
				  </tr>
				  <tr>
				  	<td><?php echo $fila[$i]["titulo"];   ?></td>
				  </tr>
				  <tr>
				  	<td><?php echo $fila[$i]["texto"];   ?></td>
				  </tr>
				<?php
				}
				?>
            </table>
			</article>
		</div>
	</section>
	<!-- FIN Contenido Pricipal (Noticias) -->

	<script type="text/javascript" src="../js/holder.js"></script>
</body>
</html>