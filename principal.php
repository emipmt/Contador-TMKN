<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>

<html lang="es">
  <head>
  <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta charset="utf-8">
    <title>TMKN (Pagina Principal)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Emiliano Pamont">

<link rel="stylesheet" type="text/css" href="style/Ajustes.css">
<link rel="stylesheet" type="text/css" href="style/Forms.css">
<link rel="stylesheet" type="text/css" href="style/menu.css">
<link rel="stylesheet" type="text/css" href="style/principal.css">

  </head>
<body >

<?php

include("include/menu.php");

?>
<div class="señaladordepagina">Estás en: TMKN (Pagina Principal) </div>

<?php
	include("include/cabecera.php");
	?>

<div class="contenedor">
<div class="contformtextred">
  Horas Realizadas: 
  <input style="float:right;" type="text" class="tiempo" name="">
  <br><br>

</div>


<div class="contformtextblue">
  Horas Restantes: 
  <input style="float:right;" type="text" class="tiempo" name="">
  <br><br>
  
</div>

<div class="contform">
  
Miau Miau Miau Miau Miau Miau <br>miau<br>miau<br>miau<br>miau<br><br><br><br><br><br>

</div>



</div>


  </body>
</html>