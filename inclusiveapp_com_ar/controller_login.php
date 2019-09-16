<?php 
	require_once('usuario.php');
	require_once('crud_usuario.php');
	require_once('conexion.php');

	//inicio de sesion
	session_start();
	//$_SESSION['estado']="0";
$_SESSION['error']="";
	$usuario=new Usuario();
	$crud=new CrudUsuario();
	//verifica si la variable registrarse está definida
	//se da que está definicda cuando el usuario se loguea, ya que la envía en la petición
	if (isset($_POST['registrarse'])) {
		$usuario->setNombre($_POST['usuario']);
		$usuario->setClave($_POST['pas']);
		if ($crud->buscarUsuario($_POST['usuario'])) {
			$crud->insertar($usuario); 
			//header('Location: login.php');
			$_SESSION['usuario']=$usuario;
			$_SESSION['nombre']=$usuario->getNombre();
			$_SESSION['estado']="2";
			$_SESSION['error']="";
			//header('Location: cuenta.php');
			header('Location: ingresar.php');
		}else{
			//header('Location: error.php?mensaje=El nombre de usuario ya existe');
			$_SESSION['error']="El nombre de usuario ya existe";
			header('Location: ingresar.php');
		}		
		
	}elseif (isset($_POST['entrar'])) { //verifica si la variable entrar está definida
		$usuario=$crud->obtenerUsuario($_POST['usuario'],$_POST['pas']);
		// si el id del objeto retornado no es null, quiere decir que encontro un registro en la base
		if ($usuario->getId()!=NULL) {
			$_SESSION['usuario']=$usuario; //si el usuario se encuentra, crea la sesión de usuario
			$_SESSION['nombre']=$usuario->getNombre();
			$_SESSION['estado']="2";
			$_SESSION['error']="";
//			header('Location: cuenta.php'); //envia a la página que simula la cuenta
			//header('Location: ingresar.php');
			header('Location: contenido-tecnologia.php');
		}else{
			$_SESSION['estado']="1";
			$_SESSION['error']="Tus nombre de usuario o clave son incorrectos";
//			header('Location: error.php?mensaje=Tus nombre de usuario o clave son incorrectos'); // cuando los datos son incorrectos envia a la página de error
			header('Location: ingresar.php');
		}
	}elseif(isset($_POST['salir'])){ // cuando presiona el botòn salir
	$_SESSION['estado']="1";
				$_SESSION['error']="";
				$_SESSION['nombre']="";
//		header('Location: login.php');
		//header('Location: ingresar.php');
		unset($_SESSION['usuario']); //destruye la sesión
		header('Location: contenido-tecnologia.php');
		
	}
?>