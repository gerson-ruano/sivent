<?php
if ( !isset( $_POST["codigo"] ) ) exit();
$codigo = $_POST["codigo"];

if ( !defined( "RAIZ" ) ) 
{
	define( "RAIZ", dirname( dirname( dirname( __FILE__ ) ) ) );
}
require_once RAIZ . "/modulos/db.php";
require_once RAIZ . "/modulos/vendedor/vendedor.php";
$resultado = comprueba_si_existe_codigo_vendedor( $codigo_vendedor );
echo json_encode( $resultado );
?>