<?php


require_once('vendor/Symfony/Component/ClassLoader/UniversalClassLoader.php');

use Symfony\Component\ClassLoader\UniversalClassLoader;


$loader = new UniversalClassLoader();

//Registramos nuestra aplicacion para el autoloader
$loader->registerNamespaces(array(
	"vendor" => __DIR__
	));

$loader->register();

?>