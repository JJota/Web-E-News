<?php
	class Usuario
	{
		public function Agregar($mail,$nombre,$pass,$fechaN,$genero)
		{
			$sql = "insert into usuario values ('$mail','$nombre','$pass','$fechaN','$genero')";
			$consulta = mysql_query($sql);
			return $consulta;
		}
	}
?>