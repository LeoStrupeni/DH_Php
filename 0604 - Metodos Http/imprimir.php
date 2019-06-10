<?php


var_dump ($_POST);
echo "<br>";
foreach ($_POST as $valor) {
    echo $valor."<br>";
}

echo "<hr>";

echo "<br>";
var_dump (getallheaders());
foreach (getallheaders() as $nombre => $valor) {

    echo $nombre.": ".$valor."<br>";
}

echo "<br>";
echo "<hr>";

// var_dump($_SERVER);
// var_dump($_FILES);
var_dump($_REQUEST);
// var_dump($_SESSION);
// var_dump($_COOKIE);
// var_dump($GLOBALS);


?>
