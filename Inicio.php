<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head><title>Inicio Sesion</title></head>
  <body>
    <?php 
	  if(isset($_POST['nombre']) && isset($_POST['password'])){
	      
	      if ($_POST['nombre']=='root' && $_POST['password']=='admin'){
			$_SESSION['nombre']=$_POST['nombre'];
			echo "Bienvenido usuario: " . $_POST['nombre'];
	      }
	      else {
			echo "Acceso Restringido";
	      }
	  } 
	  else{

	      if (isset($_SESSION['nombre'])){
			echo "Sesion de: ". $_SESSION['nombre'];
			echo "</br><a href='Cerrar.php'>Salir de la sesion</a>";
	      }
	      else{
				echo "Acceso Restringido";      
	      }
	 }
	?>
	</br><a href="Sesion.php">Pagina principal</a>
  </body>
</html>