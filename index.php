<?php

/*
# ФОРМАТ dd-mm-yyyy
$string ='21-11-2015';
$pattern='/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
$replacement='Год $3, месяц $2, день $1';
# ФУНКЦИЯ ИЩЕТ В СТРОКЕ $string, ПО ШАБЛОНУ $pattern И МЕНЯЕТ НА $replacement
echo preg_replace($pattern,$replacement,$string);
die;
*/

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
