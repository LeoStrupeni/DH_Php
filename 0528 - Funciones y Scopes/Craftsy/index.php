<?php 
$producto1 = [
	"id" => 1,
	"Nombre" => "Producto 1",
	"Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
	"Foto" => "img-phone-01.jpg",
	"precio" => rand(10000,20000)
];
$producto2 = [
	"id" => 2,
	"Nombre" => "Producto 2",
	"Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
	"Foto" => "img-phone-02.jpg",
	"precio" => rand(10000,20000)
];
$producto3 = [
	"id" => 3,
	"Nombre" => "Producto 3",
	"Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
	"Foto" => "img-phone-03.jpg",
	"precio" => rand(10000,20000)
];
$producto4 = [
	"id" => 4,
	"Nombre" => "Producto 4",
	"Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
	"Foto" => "img-phone-01.jpg",
	"precio" => rand(10000,20000)
];
$producto5 = [
	"id" => 5,
	"Nombre" => "Producto 5",
	"Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
	"Foto" => "img-phone-02.jpg",
	"precio" => rand(10000,20000)
];
$producto6 = [
	"id" => 6,
	"Nombre" => "Producto 6",
	"Descripcion" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.",
	"Foto" => "img-phone-03.jpg",
	"precio" => rand(10000,20000)
];

$productos = [$producto1,$producto2,$producto3,$producto4,$producto5,$producto6];


function descripcionLarga($nombreArticulo){
	global $productos;
	foreach ($productos as $producto) {
		if($producto["nombre"]==$nombreArticulo){
			return "La descripcion del producto ".$nombreArticulo." es ".$producto["Descripcion"]." con precio: ".$producto["precio"];
		}
	}
}


?>

<!DOCTYPE html>
<html>
<?php
	$nombre="Home";
	require_once("head.php");
?>
	<body>
		<div class="container"> <!-- Contenedor ppal -->
		<?php
			require_once("header.php");
		?>
			<main> <!-- Cuerpo principal del sitio -->
				<section class="product-container"><!-- Contenedor de todos los productos -->
				<?php foreach($productos as $producto) :?>

					<article class="producto"><!-- Contenedor de cada producto -->
						<img class="main-photo" src="img/<?= $producto["Foto"]?>" alt="id-<?=$producto["id"]?>">
						<h2 class="name">
							<?=$producto["Nombre"]?>
						</h2>
						<h3>$$$ 
							<?=$producto["precio"]?>
						</h3>
						<p>
							<?=$producto["Descripcion"]?>
						</p>
						<a class="more" href="#">ver más</a> 
					
					</article>

				<?php endforeach;?>
				</section>

				<aside class="left-column">
					<h2>Tutoriales</h2>
					<section class="tutorials-container">
						<article class="tutorial">
						<img src="img/aside-01.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-02.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-03.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
						<article class="tutorial">
						<img src="img/aside-04.jpg" alt="">
						<p>Título del tutorial de reparación.</p>
						</article>
					</section>
					<h2>Publicidad</h2>
					<section class="ads-container">
						<article class="ads">
							<img src="img/ad-01.jpg" alt="">
						</article>
						<article class="ads">
							<img src="img/ad-02.jpg" alt="">
						</article>
					</section>

				</aside>
			</main>
		<?php
			require_once("footer.php");
		?>
		</div>
	</body>
</html>
