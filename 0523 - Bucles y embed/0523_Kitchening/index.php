<?php
	$restaurante1 = [
		"id"		 =>1,
		"nombre"	 =>"Primer Restaurante",
		"descripcion"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
		"foto"		 =>"img-pdto-1.jpg",
		"tipo_img"	 =>"img-nuevo.png",
		"alt_img" 	 =>"plato nuevo",
		"enOferta"	 => false

	];
	$restaurante2 = [
		"id"		 =>2,
		"nombre"	 =>"Segundo Restaurante",
		"descripcion"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
		"foto"		 =>"img-pdto-2.jpg",
		"tipo_img"	 =>"img-gratis.png",
		"alt_img" 	 =>"gratis más de 3",
		"enOferta"	 => false
	];
	$restaurante3 = [
		"id"		 =>3,
		"nombre"	 =>"Tercer Restaurante",
		"descripcion"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
		"foto"		 =>"img-pdto-3.jpg",
		"tipo_img"	 =>"img-descuento.png",
		"alt_img" 	 =>"descuento efectivo",
		"enOferta"	 => True
	];
	$restaurante4 = [
		"id"		 =>4,
		"nombre"	 =>"Cuarto Restaurante",
		"descripcion"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
		"foto"		 =>"img-pdto-1.jpg",
		"tipo_img"	 =>"img-gratis.png",
		"alt_img" 	 =>"gratis más de 3",
		"enOferta"	 => false
	];
	$restaurante5 = [
		"id"		 =>5,
		"nombre"	 =>"Quinto Restaurante",
		"descripcion"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
		"foto"		 =>"img-pdto-2.jpg",
		"tipo_img"	 =>"img-nuevo.png",
		"alt_img" 	 =>"plato nuevo",
		"enOferta"	 => false
	];
	$restaurante6 = [
		"id"		 =>6,
		"nombre"	 =>"Sexto Restaurante",
		"descripcion"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
		"foto"		 =>"img-pdto-3.jpg",
		"tipo_img"	 =>"img-descuento.png",
		"alt_img" 	 =>"descuento efectivo",
		"enOferta"	 => True
	];

	$restaurantes = [$restaurante1,$restaurante2,$restaurante3,$restaurante4,$restaurante5,$restaurante6];


	$menuNav = ["home","quienes","servicios","portfolio","sucursales","contacto"]
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<title>Responsive Web Design</title>
	</head>
	<body>

	<div class="container">

		<!-- cabecera -->
		<header class="main-header">
			<img src="images/logo.jpg" alt="logotipo" class="logo">

			<a href="#" class="toggle-nav">
				<span class="fa fa-bars"></span>
			</a>

			<nav class="main-nav">
				<ul>
					<?php foreach ($menuNav as $lista) :?>
						<li><a href="#"><?=$lista?></a></li>
					<?php endforeach?>
				</ul>
			</nav>
		</header>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
		<section class="vip-products">

		<?php foreach ($restaurantes as $restaurante) :?>

			<article class="product">
				<div class="photo-container">
					<img class="photo" src="images/<?= $restaurante["foto"] ?>" alt="pdto 0<?=$restaurante["id"]?>">
					<img class="special" src="images/<?= $restaurante["tipo_img"] ?>" alt="<?= $restaurante["alt_img"] ?>">
					<a class="zoom" href="#">Ampliar foto</a>
				</div>
				<h2>
					<?= $restaurante["nombre"] ?><?php if ($restaurante["enOferta"]) {echo " - En Oferta";}?>
				</h2>
				<p>
					<?= $restaurante["descripcion"] ?>
				</p>
				<a class="more" href="#">ver más</a>
			</article>

		<?php endforeach; ?>

		</section>

		<footer class="main-footer">
			<ul>
				<li><a href="#">home</a></li>
				<li><a href="#">quienes</a></li>
				<li><a href="#">servicios</a></li>
				<li><a href="#">portfolio</a></li>
				<li><a href="#">sucursales</a></li>
				<li><a href="#">contacto</a></li>
			</ul>
		</footer>
	</div>

	</body>
</html>
