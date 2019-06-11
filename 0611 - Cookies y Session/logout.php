<?php

session_start();
session_destroy();
setcookie("email","",-1);
setcookie("password","",-1);
header("Location: login.php");

?>