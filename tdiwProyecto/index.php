<?php

$accion = $_GET['accion']??NULL;

switch( $accion ) {	
	case 'listar_categorias':
		//include __DIR__.'/categoryPage.php';
		include __DIR__.'/home.php';
		break;
	case 'register':
		include __DIR__ .'/views/v_test.php';
		break;
	default:
		include __DIR__.'/home.php';
		break;
}

?>