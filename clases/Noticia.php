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

		private $lstHoy = array();
		public function Hoy()
		{
			$sql = "SELECT * FROM noticia WHERE fechap = date(now()) and estado = 1 ORDER BY RAND( ) LIMIT 0,3";
			$consulta= mysql_query($sql);
			while($fila = mysql_fetch_array($consulta))
				{
					$this->lstHoy[]=$fila;
				}
				return $this->lstHoy;
		}

		private $lstInternacional = array();
		public function Internacional()
		{
			$sql = "SELECT * FROM noticia WHERE estado = 1 and categoria = 'Internacional' ORDER BY RAND( )";
			$consulta= mysql_query($sql);
			while($fila = mysql_fetch_array($consulta))
				{
					$this->lstInternacional[]=$fila;
				}
				return $this->lstInternacional;
		}

		private $lstDeportes = array();
		public function Deportes()
		{
			$sql = "SELECT * FROM noticia WHERE estado = 1 and categoria = 'Deportes' ORDER BY RAND( )";
			$consulta= mysql_query($sql);
			while($fila = mysql_fetch_array($consulta))
				{
					$this->lstDeportes[]=$fila;
				}
				return $this->lstDeportes;
		}

		private $lstEconomia = array();
		public function Economia()
		{
			$sql = "SELECT * FROM noticia WHERE estado = 1 and categoria = 'Economia' ORDER BY RAND( )";
			$consulta= mysql_query($sql);
			while($fila = mysql_fetch_array($consulta))
				{
					$this->lstEconomia[]=$fila;
				}
				return $this->lstEconomia;
		}

		private $lstInternet = array();
		public function Internet()
		{
			$sql = "SELECT * FROM noticia WHERE estado = 1 and categoria = 'Internet' ORDER BY RAND( )";
			$consulta= mysql_query($sql);
			while($fila = mysql_fetch_array($consulta))
				{
					$this->lstInternet[]=$fila;
				}
				return $this->lstInternet;
		}

		private $lstNacional = array();
		public function Nacional()
		{
			$sql = "SELECT * FROM noticia WHERE estado = 1 and categoria = 'Nacional' ORDER BY RAND( )";
			$consulta= mysql_query($sql);
			while($fila = mysql_fetch_array($consulta))
				{
					$this->lstNacional[]=$fila;
				}
				return $this->lstNacional;
		}

		private $lstPolitica = array();
		public function Politica()
		{
			$sql = "SELECT * FROM noticia WHERE estado = 1 and categoria = 'Politica' ORDER BY RAND( )";
			$consulta= mysql_query($sql);
			while($fila = mysql_fetch_array($consulta))
				{
					$this->lstPolitica[]=$fila;
				}
				return $this->lstPolitica;
		}

	}

?>