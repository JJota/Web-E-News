<?php
	class Conexion
	{
		private $servidor;
		private $usuario;
		private $password;
		private $basedatos;

		public function Conexion()
		{
			$this->servidor = "localhost";
			$this->usuario = "root";
			$this->password = "";
			$this->basedatos = "enews";
		}

		public function Conectar()
		{
			$con = mysql_connect($this->servidor,$this->usuario,$this->password);
			mysql_set_charset("utf8");
			$bd = mysql_select_db($this->basedatos);
		}
	}
?>