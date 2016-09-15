<!DOCTYPE html>
<script>
		window.addEventListener('load', function () {
			var time = document.getElementById('time');
			var date = new Date();
			var str = "Reloj:   " + date.getHours() + ":" + date.getMinutes();
			time.innerHTML = str;
		});

	</script>

<div class="menu">
 	
<a href="principal.php">
	<div class="btnmenu"><CENTER>
		<img src="images/menu/principal.png">
		TMKN
	</CENTER></div>
</a>

<a href="principal.php">
	<div class="btnmenu"><CENTER>
		<img src="images/menu/registro.png">
		Registro
	</CENTER></div>
</a>

<a href="Ajustes.php">
	<div class="btnmenu"><CENTER>
		<img src="images/menu/ajustes.png">
		Ajustes
	</CENTER></div>
</a>



<a href="desconectar.php">
	<div class="btnmenu" style="float:right;"><CENTER>
		<img src="images/menu/salir.png">
		SALIR
	</CENTER></div>
</a>


 			</div></div>
 <div class="contenedorcabecera">
	<div style="font-size: 13px; color:white; background:#222; padding: 5px;>
		
		<form action="#" class="navbar-search form-inline" >
		</form>
		
				<a href="">Bienvenid@ <strong><?php echo $_SESSION['user'];?></strong> </a><br> 
				<div style="color:#01A9DB"id="time"></div>
			  			 
	</div>	

	 
</html>