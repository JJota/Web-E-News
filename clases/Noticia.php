<?php
	class Noticia
	{
		private $noticiasPerio = array();
		public function VerPeriodista($mail)
		{
			$sql = "select * from noticia where periodista = '$mail'";
			$consulta = mysql_query($sql);
			while($fila = mysql_fetch_array($consulta))
			{
				$this->noticiasPerio[]=$fila;
			}
			return $this->noticiasPerio;
		}

		public function Agregar($titulo, $imagen, $texto,$periodista,$categoria)
		{
			$fe = date('y-m-d');
			$sql = "INSERT INTO Noticia VALUES('$titulo','$imagen','$texto','$fe',0,null,'$periodista','$categoria');";
			$consulta= mysql_query($sql);
			return $consulta;
	    }

	    public function Eliminar($titulo)
		{
			$sql = "DELETE FROM Noticia where titulo = '$titulo'";
			$consulta= mysql_query($sql);
			return $consulta;
		}

		private $listaNoticias = array(); 
		public function BuscarTitulo($titulo)
		{
			$sql = "SELECT * FROM Noticia where titulo = '%$titulo%'";
			$consulta= mysql_query($sql);
			while($fila = mysql_fetch_array($consulta))
				{
					$this->listaNoticias[]=$fila;
				}
				return $this->listaNoticias;
		}

		private $lstNoticias = array(); 
		public function Listar()
		{
			$sql = "SELECT * FROM noticia where estado = 0";
			$consulta= mysql_query($sql);
			while($fila = mysql_fetch_array($consulta))
				{
					$this->lstNoticias[]=$fila;
				}
				return $this->lstNoticias;
		}

		public function Publicar($titulo,$edi)
		{
			$sql = "UPDATE noticia SET estado = 1, editor = '$edi' where titulo = '$titulo'";
			$consulta = mysql_query($sql);
			return $consulta;
		}

	}

?>