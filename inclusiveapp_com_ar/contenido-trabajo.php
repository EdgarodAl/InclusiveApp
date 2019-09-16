<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>InclusiveApp - Treabajo</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="grillafluida.css" rel="stylesheet" type="text/css">
<link href="estilo-botones.css?v=<?php echo(rand()); ?>" rel="stylesheet" type="text/css">
<link href="estilo-texto.css?v=<?php echo(rand()); ?>" rel="stylesheet" type="text/css">
<link href="colores.css?v=<?php echo(rand()); ?>" rel="stylesheet" type="text/css">
<link href="listas.css?v=<?php echo(rand()); ?>" rel="stylesheet" type="text/css">
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


<script src="respond.min.js"></script>
</head>
<body class="color-trabajo">
<div class="gridContainer clearfix">
      <div id="LayoutDiv3"><div class="encabezado">
      <div class="textoflotante">Trabajo</div></div></div>
  <div id="LayoutDiv1">
  
  <?php include "menu-lateral.php";?>
 

</div>
  
  <div id="LayoutDiv2">
   <iframe src="lista-trabajo.php" class="ventanalista"></iframe> 
  <?php //include "lista-tecnologia.php";?></div>
    <div id="LayoutDiv4">Menu inferior</div>
</div>
</body>
</html>
