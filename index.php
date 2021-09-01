<?php
include('conexion/conexion.php');
?>

<link href="https://fonts.googleapis.com/css2?family=Bitter&family=Montserrat&family=Quattrocento+Sans:wght@700&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="css/iconfont/material-icons.css">
<link rel="stylesheet" href="css/bootstrap-3.3.7.min.css">
<link rel="stylesheet" href="css/bootstrap-4.3.1.min.css">
<link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/formularios.css">
<script src="js/jquery-3.4.0.min.js"></script>
<script src="js/bootstrap-4.3.1.min.js"></script>
<head>
	<title>Laboratorio 1</title>
</head>
<body>
	<nav class="nav">
		<div class="content">
			<img src="images/libros2.png">
			<ul>
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Datos</a></li>
			</ul>
		</div>	
	</nav>
		<form name="registro" action="" method="post" enctype="multipart/form-data">
		<div class="container">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="form-row">
						<div class="col-md-8">
							<h2>Registra un nuevo libro</h2>
						</div>
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<label>Título del libro: </label>
						<input type="text" class="form-control" name="txtTitulo" id="txtTitulo">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-8">
						<label>Autor: </label>
						<input type="text" name="txtAutor" class="form-control" id="txtAutor">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label>Cantidad de páginas: </label>
						<input type="number" name="txtPagina" class="form-control" id="txtPagina">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-8">
						<label>Género: </label>
						<input type="text" name="txtGenero" id="txtGenero" class="form-control">
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-8">
						<label>Idioma original: </label>
						<input type="text" name="txtIdioma" id="txtIdioma" class="form-control">
					</div>
				</div>
			  <button type="button" class="btn btn-success" onClick="ValidarNuevo();"><i
              class="material-icons">&#xe163;</i><span>Enviar</span></button>
            </div>
			</div>
		</div>
	</form>
</body>