<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Biblioteca de Talentos</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">

		<div id="interfaz">
			<h1>Biblioteca de Talentos</h1>
			<form>

				<div class="boxsearch">
				<input type="text" name="busqueda" placeholder="Buscar">
				<button type="submit"><img src="img/logobusqueda.png"></button>
				</div>
				<br/>

				<div class="opcionesb">
				<select id="sano" name="sano">
					  <option value="Año">Año</option>

					  <?php foreach(range(1970, 2024) as $año): ?>
				      <option value="<?php echo $año; ?>"><?php echo $año; ?></option>
					  <?php endforeach ?>
					  
				</select>

				<select id="scategoria" name="categoria">
					<option value="Categoria">Categoria</option>
					<option value="Categoria 1">Categoria 1</option>
				</select>

				<select id="seditorial" name="editorial">
					<option value="Editorial">Editorial</option>
					<option value="Editorial 2">Editorial 2</option>
					<option value="Editorial 2">Editorial 3</option>
				</select>

				<select id="sdisponible" name="disponible">
					<option value="Disponible">Disponible</option>
					<option value="Apartado">Apartado</option>
				</select>
				</div>

			</form>

		</div>

	<div id="libros">

		<div class="libro">
			<img class="portada" src="">

			<div class="info-libro">
				<div class="n_unidades">
					<h4>1</h4><span>Unidades</span>
				</div>

				<h3>Titulo del libro</h3>
				<p>Resumen de opiniones. Los usuario mencionan que esta tarjeta gráfica ofrece una experiencia de juego fluida y gráficos impresionantes, incluso en configuraciones de alta resolución. Además, destacan su sistema de refrigeración eficiente que mantiene la temperatura bajo control y su diseño elegante.</p>

				
	    	</div>
		</div>

		<div class="libro">
			<img class="portada" src="">

			<div class="info-libro">
				<div class="n_unidades">
					<h4>1</h4><span>Unidades</span>
				</div>

				<h3>Titulo del libro</h3>
				<p>Resumen de opiniones. Los usuario mencionan que esta tarjeta gráfica ofrece una experiencia de juego fluida y gráficos impresionantes, incluso en configuraciones de alta resolución. Además, destacan su sistema de refrigeración eficiente que mantiene la temperatura bajo control y su diseño elegante.</p>

				
	    	</div>
		</div>

		<div class="libro">
			<img class="portada" src="">

			<div class="info-libro">
				<div class="n_unidades">
					<h4>1</h4><span>Unidades</span>
				</div>

				<h3>Titulo del libro</h3>
				<p>Resumen de opiniones. Los usuario mencionan que esta tarjeta gráfica ofrece una experiencia de juego fluida y gráficos impresionantes, incluso en configuraciones de alta resolución. Además, destacan su sistema de refrigeración eficiente que mantiene la temperatura bajo control y su diseño elegante.</p>

				
	    	</div>
		</div>
		


	</div>

	</div>

		
	</div>

</body>
</html>