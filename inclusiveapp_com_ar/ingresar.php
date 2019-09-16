<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style>
<?php
session_start();
//print ($_SESSION['estado']);
//if ($_SESSION['estado']) { 
//print ($_POST['estado']);
if ($_SESSION['estado']=="0"){
		echo ".logo{display:block;}";
	echo ".registro{display:none;}";
		echo ".login{display:block;}";
			echo ".error{display:none;}";
			echo ".logueado{display:none;}";
			$ancho=300;
			$alto=180;
	}

if ($_SESSION['estado']=="1"){
			echo ".logo{display:none;}";
	echo ".registro{display:none;}";
		echo ".login{display:block;}";
			echo ".error{display:none;}";
			echo ".logueado{display:none;}";
			$ancho=300;
			$alto=180;
	}
	if ($_SESSION['estado']=="2"){ //Registro
				echo ".logo{display:none;}";
	echo ".registro{display:none;}";
		echo ".login{display:none;}";
			echo ".error{display:none;}";
						echo ".logueado{display:block;}";
									$ancho=200;
			$alto=120;
	}
	if ($_SESSION['estado']=="3"){
					echo ".logo{display:none;}";
	echo ".registro{display:none;}";
		echo ".login{display:block;}";
			echo ".error{display:block;}";
						echo ".logueado{display:none;}";
									$ancho=300;
			$alto=220;
	}
	
	echo ":root {--ancho: ".$ancho."px;--alto: ".$alto."px;}";

?>

.botonlogin{
	/*float:right;*/
	position:absolute;
	width: 150px;
	height:40px;
	border-radius:10px;
	box-shadow: 5px 5px 20px #000000;
	/*padding:15px 15px 15px 15px;*/
	overflow:hidden;
	
	/*transition: 0.5s;
	}
	.botonlogin:hover{*/
		/*width: var(--ancho);
	height:var(--alto);	
	transition: 0.5s;*/
	padding:2%; 
  top:32%;
  left:32%;
	width: 32%;
	height:31%;	
		}
	
.fondoinclusive{
	
	}
	body{
		/*background-color:#000000;*/}
	.fondotecnologia{
		position:absolute;
		top:0px;
		left:0px;
		width:70%;
		height:30%;
		background-color:#CCCCCC;
		}
	.fondosalud{
		position:absolute;
		top:0%;
		left:70%;
		width:30%;
		height:70%;
		background-color:#B1B7E9;
		}
	.fondorecreacion{
		position:absolute;
		top:70%;
		left:30%;
		width:70%;
		height:30%;
		background-color:#8CCA77;
		}
	.fondotrabajo{
		position:absolute;
		top:30%;
		left:0%;
		width:30%;
		height:70%;
		background-color:#F88588;
		}		
	
</style></head>

<body>

<div class="fondotecnologia"></div>
<div class="fondosalud"></div>
<div class="fondorecreacion"></div>
<div class="fondotrabajo"></div>

<div class="botonlogin">
<div class="logo"><h3>InclusiveApp</h3></div>
<input type="button" onclick="history.back()" name="volver" value="volver atrás" Style="float:right">
<div class="login">	<div>
	<div>
		<h3>InclusiveApp</h3>
	</div>

	<form action="controller_login.php" method="post">
		<p>
			<label >
				Usuario
			</label>
			<input type="text" name="usuario">
		</p>
		<p>
			<label >Contraseña</label>
			<input  type="password" name="pas">    <div style="color:#F00"><strong><?PHP print ($_SESSION['error']); ?></strong></div>

			<!-- <input type="hidden" name="entrar" value="entrar"> -->
			<button name="entrar" value="entrar">Aceptar</button>
      <button name="registrarse" value="registrarse">Registrar Nuevo Usuario</button>
		</p>
		
	</form>
  </div></div>
<div class="registro">Registro</div>
<div class="error">Error</strong></div>
<div class="logueado">  <div><?PHP //print_r($_SESSION['usuario']);
	echo "<h1 style=\"text-align:center\">";
	print_r($_SESSION['nombre']);
	
//$usuario=	$_SESSION['usuario'];
//echo "$usuario";
//$nombre=$usuario->getNombre;
	//echo "$nombre";
	
	 //<img src="discapacidad_final.jpg" width="60" height="60" style="border-radius:20px;margin:5px;">?>
   </div><?PHP echo "</h1>";?>
	<p></p>
	<form  action="controller_login.php" method="post">
		<input type="hidden" name="salir" value="salir">
		<button >Salir</button>
	</form></div>

</div>


</body>
</html>