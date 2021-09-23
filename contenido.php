<?php

switch( $opcion )
{
	
	case 1:
		include("servicioTecnico.php");
		break;
	case 2:
		include("informacion.php");
		break;
	case 3:
		include("experiencia.php");
		break;
	case 4:
		include("catalogo.php");
		break;
	case 5:
		include("sobreMi.php");
		break;
	case 6:
		include("contacto.php");
		break;

		default: include("servicioTecnico.php"); ;
	
}	

?>
