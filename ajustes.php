<!DOCTYPE html>


<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}
?>

<html lang="es">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no">

    <meta name="description" content="">
    <meta name="author" content="Emiliano Pamont">

<link rel="stylesheet" type="text/css" href="style/Ajustes.css">
<link rel="stylesheet" type="text/css" href="style/Forms.css">
<link rel="stylesheet" type="text/css" href="style/menu.css">
<link rel="stylesheet" type="text/css" href="style/principal.css">
<link rel="stylesheet" type="text/css" href="style/botones.css">

	<title>Ajustes</title>
</head>
<body>
<?php
include("include/menu.php");
?>
<div class="señaladordepagina">Estás en: Ajustes </div>
<?php
	include("include/cabecera.php");
	?>






<br>
<form>
<div class="contformtextred">
 	Horas a Realizar
 </div>	
 <div class="contform"> Escribe cuantas horas vas a realizar, recuerda separar horas y minutos con un ":" (HH:MM) asegurate de escribir el formato completo.
 <br><br><br>

<center><input class="tiempo" type="text" name="horasTotalRest"></center>
	<br>

</div>


<br>

<div class="contformtextred">
 	Semana en Automatico
 </div>	
 <div class="contform"> Escribe cuantas horas vas a realizar cada día de la semana (Hora de entrada y hora de salida) y así las horas de cada día se calcularán en automatico.</div>

<div class="contformtextblue">
 	Lunes
 </div>	
 <div class="contform"><center> 
 <br>
Entrada:<br><br>
<center><input class="tiempo" type="text" name="LunesEnt"></center><br>
Salida:
<center><input class="tiempo" type="text" name="LunesSal"><font size="20px;"></center>	
</center>
</div>

<div class="contformtextblue">
 	Martes
 </div>	
 <div class="contform"><center> 
 <br>
Entrada:<br><br>
<center><input class="tiempo" type="text" name="MartesEnt"></center><br>
Salida:
<center><input class="tiempo" type="text" name="MartesSal"><font size="20px;"></center>	
</center>
</div>

<div class="contformtextblue">
 	Miércoles
 </div>	
 <div class="contform"><center> 
 <br>
Entrada:<br><br>
<center><input class="tiempo" type="text" name="MiercolesEnt"></center><br>
Salida:
<center><input class="tiempo" type="text" name="MiercolesSal"><font size="20px;"></center>	
</center>
</div>

<div class="contformtextblue">
 	Jueves
 </div>	
 <div class="contform"><center> 
 <br>
Entrada:<br><br>
<center><input class="tiempo" type="text" name="JuevesEnt"></center><br>
Salida:
<center><input class="tiempo" type="text" name="JuevesSal"><font size="20px;"></center>	
</center>
</div>

<div class="contformtextblue">
 	Viernes
 </div>	
 <div class="contform"><center> 
 <br>
Entrada:<br><br>
<center><input class="tiempo" type="text" name="ViernesEnt"></center><br>
Salida:
<center><input class="tiempo" type="text" name="ViernesSal"><font size="20px;"></center>	
</center>
</div>
<div class="btnbluesubmit"><center><input class="submit" type="submit" name="submit" value="Guardar"></center></div>

</form>




</body>
</html>