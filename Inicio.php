<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido - E-News</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
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
		        <li><a href="#">Internetas</a></li>
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
            <p class = "navbar-text">Desarrollado por LA ALDEA GANGRENA</p>
        </div>
    </div>
	<!-- FIN Footer -->
	
	<!-- Modal Ingreso -->
	<div class="modal fade" id ="ingresar" role ="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Formulario de Ingreso</h4>
                </div>
        		<div class="modal-body">
					<p>Aqui podria el formulario de ingreso si tuviera uno</p>
	            	<hr>
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text                                   ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not                                        only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            	</div>
	            <div class = "modal-footer">
                    <a class="btn btn-primary" href="index.html">Aceptar</a>    
                    <a class="btn btn-danger" data-dismiss="modal">Cerrar</a>
	            </div>
            </div>
        </div>
    </div>
    <!-- FIN Modal Ingreso -->

    <!-- Modal Registro -->
    <div class="modal fade" id ="registro" role ="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Formulario de Registro</h4>
                </div>
        		<div class="modal-body">
					<p>Aqui podria el formulario de registro si tuviera uno</p>
	            	<hr>
	                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text                                   ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not                                        only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
            	</div>
	            <div class = "modal-footer">
                    <a class="btn btn-primary" href="index.html">Aceptar</a>    
                    <a class="btn btn-danger" data-dismiss="modal">Cerrar</a>
	            </div>
            </div>
        </div>
    </div>
    <!-- FIN Modal Registro -->
	
	<script type="text/javascript" src="js/holder.js"></script>
	<script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src = "js/bootstrap.js"></script>
</body>
</html>