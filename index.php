<?php

//Вариант 1 autoload
/*
function __autoload($class) {
	require_once "clasess/$class.php";
}
*/

// Вариант 2 autoload
spl_autoload_register( 'LoadClass' );
spl_autoload_register( 'LoadPlugin' );
function LoadClass($class) {
	if (@include_once "classes/$class.php")
		include_once "classes/$class.php";
	/*if (@include_once "plugins/$class.php")
		include_once "plugins/$class.php";*/
}
function LoadPlugin($class){
	if (@include_once "plugins/$class.php")
		include_once "plugins/$class.php";
}

$controller = new Main();
//Если есть такой folder по $_GET['plugin'], тогда подгружаем его информацию
if (isset($_GET['plugin']) && is_dir('plugins/'.$_GET['plugin'])) {
	$controller->switchByGet( $_GET['plugin'] );
}

elseif (isset($_GET['page']) && ($_GET['page'] == 'contact')){
	echo $controller->getHeader( 'Contact Us' );
	echo $controller->getMenu($controller->pluginsList);
	echo $controller->getPage('Contact Us', '', 'contact');
	echo $controller->getFooter();
}


// Если нет, то просто по default подгружаем страницу index.php
else {
	echo $controller->getHeader( 'WordPress Developer' );
	echo $controller->getMenu($controller->pluginsList);
	echo $controller->getPage('Welcome!', '', 'main');
	echo $controller->getFooter();
}
