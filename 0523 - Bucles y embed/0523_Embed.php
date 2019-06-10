<?php
    $nombre="Leo";
    $sorteo=rand(0,1);
    $listado =[
      "Google" =>"https://google.com",
      "Facebook" => "https://facebook.com",
      "Twitter"=> "https://twitter.com"];


    for ($i=1; $i < 11; $i++) {
      $valor = rand(100,500);
      $oferta = rand(0,1);
      $listaProductos[]= 
                        ($productos = [
                            "Id" => $i,
                            "Titulo" => "Lorem ipsum",
                            "Descripcion" => "Lorem ipsum",
                            "Precio" => $valor,
                            "Imagen" => "img-pdto-".$i.".jpg",
                            "EnOferta"=> $oferta == 0 
                        ]);
    };
    var_dump ($listaProductos);
    echo "<hr>"."<br>";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <?php
    echo "<h2>Bienvenido ". $nombre ."</h2>"
     ?>
    <h3>¿Es usted un ganador?</h3>
    <?php
      if ($sorteo==1) {
        echo "Si";
      } else {
        echo "No";
      } 
    ?>
    <h3>Algunos sitios interesantes:</h3>
    <?php
      foreach ($listado as $nombre => $url){
        echo "<li>
                  <a href=".$url.">".$nombre."</a>
                </li>
              ";
      }
    ?>
   

  </body>
</html>
