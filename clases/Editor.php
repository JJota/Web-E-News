<?php
	class Editor
	{
		public function Buscar($mail,$pass)
		{
			$sql = "select * from editor where mail = '$mail' and pass = '$pass'";
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

		public function Agregar($mail,$nombre,$pass,$fechaN,$genero)
		{
			$sql = "insert into editor values ('$mail','$nombre','$pass','$fechaN','$genero')";
			$consulta = mysql_query($sql);
			return $consulta;
		}

		public function Eliminar($mail)
		{
			$sql = "delete from editor where mail = '$mail'";
			$consulta = mysql_query($sql);
			return $consulta;
		}

		private $todasLosEditores = array();
		public function listarTodo()
		{
			$sql = "select * from editor";
			$consulta = mysql_query($sql);
			while($fila = mysql_fetch_array($consulta))
			{
				$this->todasLosEditores[]=$fila;
			}
			return $this->todasLosEditores;
		}
	}
?>