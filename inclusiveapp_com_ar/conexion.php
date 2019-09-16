<?php 
	class Db{
		private static $conexion=null;
		private function __construct(){}

		public static function conectar(){
			//$servername = "mysql.hostinger.com";
//$username = "u823359572_admin";
//$database = "u823359572_inclu";
//$password = "chispita25";
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			//self::$conexion=new PDO('mysql:host=localhost;dbname=baselogin','root','',$pdo_options);
//			self::$conexion=new PDO('mysql:host=localhost;dbname=u823359572_inclu','u823359572_admin','chispita25',$pdo_options);
			self::$conexion = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
			return self::$conexion;
		}
	}
?>