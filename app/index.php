<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 26.03.2017
 * Time: 11:29
 */

//FRONT CONTROLLER

//1. Общие настройки
ini_set('display_errors', 1); //Включение отображения ошибок
error_reporting('E_ALL');

//2. Подключение файлов системы
define('ROOT', $_SERVER['DOCUMENT_ROOT'].'/app/');
require_once(ROOT.'components/router.php');

$router = new Router();
$router->run();


?>
