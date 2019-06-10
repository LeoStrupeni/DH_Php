<?php
    $archivo=0;
    for ($i=1;$i<4;$i++){
        $archivo = $i;
    }
        echo "<article class='producto'><!-- Contenedor de cada producto -->
                <img class='main-photo' src='img/img-phone-0".$i.".jpg' alt=''>
                <h2 class='name'>Nombre del Producto</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                <a class='more' href='#'>ver más</a>
            </article>";
    
?>



