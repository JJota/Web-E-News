<?php
	class Usuario
	{
		public function Agregar($mail,$nombre,$pass,$fechaN,$genero)
		{
			$sql = "insert into usuario values ('$mail','$nombre','$pass','$fechaN','$genero')";
			$consulta = mysql_query($sql);
			return $consulta;
		}

		public function Buscar($mail,$pass)
		{
			$sql = "select * from usuario where mail = '$mail' and pass = '$pass'";
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
	}
?>