<?php  

	class Redirection{
		public static function go($url)
		{
			return header('Location:'.Rutas::getDireccion($url));
		}
	}

?>