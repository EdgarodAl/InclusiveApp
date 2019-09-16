<?php 
	/*
	*
	*
	*/
	class Usuario{
		private $id;
		private $nombre;
		private $clave;
		private $foto;
		private $rol;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getClave(){
			return $this->clave;
		}

		public function setClave($clave){
			$this->clave = $clave;
		}

		public function getFoto(){
			return $this->foto;
		}

		public function setFoto($foto){
			$this->foto = $foto;
		}

		public function getRol(){
			return $this->rol;
		}

		public function setRol($rol){
			$this->rol = $rol;
		}

	}
?>