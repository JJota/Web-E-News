<?php
	class Periodista
	{
		public function Buscar($mail,$pass)
		{
			$sql = "select * from periodista where mail = '$mail' and pass = '$pass'";
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

		private $perEnc = array();
		public function Nombre($mail)
		{
			$sql = "select * from periodista where mail = '$mail'";
			$consulta = mysql_query($sql);
			while($fila = mysql_fetch_array($consulta))
			{
				$this->perEnc[]=$fila;
			}
			return $this->perEnc;
		}

		public function Agregar($mail,$nombre,$pass,$fechaN,$categoria,$genero)
		{
			$sql = "insert into periodista values ('$mail','$nombre','$pass','$fechaN','$categoria','$genero')";
			$consulta = mysql_query($sql);
			return $consulta;
		}

		public function Eliminar($mail)
		{
			$sql = "delete from periodista where mail = '$mail'";
			$consulta = mysql_query($sql);
			return $consulta;
		}

		private $todasLosPeriodistas = array();
		public function listarTodo()
		{
			$sql = "select * from periodista";
			$consulta = mysql_query($sql);
			while($fila = mysql_fetch_array($consulta))
			{
				$this->todasLosPeriodistas[]=$fila;
			}
			return $this->todasLosPeriodistas;
		}
	}
?>