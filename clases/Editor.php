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
	}
?>