<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
				
	<title>CUENTA</title>

<link rel="stylesheet" type="text/css" href="style/ajustes.css">
<link rel="stylesheet" type="text/css" href="style/forms.css">
<link rel="stylesheet" type="text/css" href="style/menu.css">
<link rel="stylesheet" type="text/css" href="style/botones.css">
<link rel="stylesheet" type="text/css" href="style/principal.css">

</head>
<body>

<div class="menu">
 
<a href="inicio.html">
	<div class="btnmenu" style="float:right;"><CENTER>
		<img src="images/menu/salir.png">
		SALIR
	</CENTER></div>
</a>
 			</div></div>



<div class="contenedorindex">
<div class="contformtextred"> Iniciar Sesión</div>
<div class="contform">




		<form action="validar.php" method="post"> <center>

		

		Correo: <br>
			 <input class="texto"  type="text" name="mail"><br>

		Contraseña:<br> 
		<input class="texto" type="password" name="pass"><br>
		
		

		</center>
		
		</div>

		<div class="btnbluesubmit"><center><input class="submit" type="submit" name="" value="Aceptar"></center></div>
</form>

<!-- formulario registro -->
<div id="register" class="contform" style="padding-top:50px;padding-bottom:50px;">Si no posees una cuenta ¡Registrate!<BR>Puedes hacerlo aquí abajo. </div>
<form method="post" action="" >
  
  <div class="contformtextred"> Registrate</div><center>
<div class="contform">
    
    <div>
      Ingresa tu nombre<br>
      <input type="text" name="realname" class="texto"  />
    </div>
    <div >
      Ingresa tu email<br>
      <input type="text" name="nick" class="texto" />
    </div>
    <div >
      Ingresa tu Password<br>
      <input type="password" name="pass" class="texto"  />
    </div>
    <div ">
      Repite tu contraseña<br>
      <input type="password" name="rpass" class="texto" required />
    </div>
      
    </div>
   </center>
    <div class="btnbluesubmit"><center><input class="submit" type="submit" name="submit" value="¡Registrame!"></center></div>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		
		</div></center></div></center>

	<br><br><br><br><br><br>
</body>
</html>