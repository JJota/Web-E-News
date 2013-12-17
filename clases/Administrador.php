<?php
	class Administrador
	{
		public function Buscar($mail,$pass)
		{
			$sql = "select * from admin where mail = '$mail' and pass = '$pass'";
			$consulta = mysql_query($sql);
			$filas = mysql_num_rows($consulta);
			if($filas == 1)
			{
				return true;
			}
			else
			{
				return false;
			}
		}

		private $admEnc = array();
		public function Nombre($mail)
		{
			$sql = "select * from admin where mail = '$mail'";
			$consulta = mysql_query($sql);
			while($fila = mysql_fetch_array($consulta))
			{
				$this->admEnc[]=$fila;
			}
			return $this->admEnc;
		}
	}
?>