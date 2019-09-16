<!doctype html>
<html>
<?php session_start();
if(isset($_SESSION['nombre'])){
	$NombreUsuario=$_SESSION['nombre'];
	}else{$NombreUsuario="";}

?>
<head>
<meta charset="utf-8">
<title>InclusiveApp - Tecnología</title>
<link href="boilerplate.css?v=<?php echo(rand()); ?>" rel="stylesheet" type="text/css">
<link href="grillafluida.css?v=<?php echo(rand()); ?>" rel="stylesheet" type="text/css">
<link href="estilo-botones.css?v=<?php echo(rand()); ?>" rel="stylesheet" type="text/css">
<link href="estilo-texto.css?v=<?php echo(rand()); ?>" rel="stylesheet" type="text/css">
<link href="colores.css?v=<?php echo(rand()); ?>" rel="stylesheet" type="text/css">
<link href="listas.css" rel="stylesheet" type="text/css">
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 689px;
	top: 4px;
	width: 253px;
	height: 50px;
	z-index: 1;
}
</style>
<link href="botones.css" rel="stylesheet" type="text/css">
<script src="respond.min.js"></script>
</head>
<body class="color-tecnologia">
<div class="gridContainer clearfix">
      <div id="LayoutDiv3"><div class="encabezado">
      <div class="textoflotante">Tecnología</div>
           <div><div class="texto-flotante-nombre"><?PHP echo "$NombreUsuario"; ?></div>
					 </div>
            <div class="login-encabezado"><a href="ingresar.php">
      <button class="boton-inclusive-chico" style="vertical-align:middle"><span>InclusiveApp</span></button>
      </a></div>
      
      
      </div></div>
  <div id="LayoutDiv1">
  
  <?php include "menu-lateral.php";?>
 

</div>
  
  <div id="LayoutDiv2">
   <iframe src="lista-tecnologia.php" class="ventanalista"></iframe> 
  <?php //include "lista-tecnologia.php";?></div>
    <div id="LayoutDiv4">
      <p>Facebook</p>
      e-Mail
    </div>
</div>
</body>
</html>
