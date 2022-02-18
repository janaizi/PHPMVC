<?php

// FRONT CONTROLLER ============================================


// 1.ОБЩИЕ НАСТРОЙКИ ===========================================
#ВРЕМЕНЫЕ ВУНКЦИИ ДЛЯ ОТАБРАЖЕНИЯ ОШИБОК
ini_set('display_errors',1);
error_reporting(E_ALL);

// 2.ПОДКЛЮЧЕНИЕ ФАЙЛОВ СИСТЕМЫ ================================
#ОПРЕДЕЛЕНИЕ КОРНЕВОГО КАТАЛОГА
define('ROOT',dirname(__FILE__));

#ПОДКЛЮЧЕНИЕ КЛАССА ROUTER
require_once(ROOT.'/components/Router.php');

// 3.УСТАНОВКА СОЕДИНЕНИЯ С БД =================================


// 4.ВЫЗОВ ROUTER ==============================================
$router=new Router();
$router->run();