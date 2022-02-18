<?php

class Router{
     
    private $routes;
    
    public function __construct(){
        $routerPath=ROOT.'/config/routes.php';
        $this->routes=include($routerPath);
    }
    
    public function run(){
        // ПОЛУЧИТЬ СТРОКУ ЗАПРОСА
        if(!empty($_SERVER['REQUEST_URI'])){
            $uri=trim($_SERVER['REQUEST_URI'],'/');
        }
        
        echo $uri;
        
        // ПРОВЕРКА НАЛИЧИЕ ТАКОГО ЗАПРОСА
        
        
        // ЕСЛИ ЕСТЬ СОВПАДЕНИЕ, ОПРЕДЕЛИТЬ КАКОЙ КОНТРОЛЛЕР
        // И ACTION ОБРАБАТЫВАЮТ ЗАПРОС
        
        
        // ПОДКЛЮЧИТЬ ФАЙЛ КЛАССА-КОНТРОЛЛЕРА
        
        
        // СОЗДАТЬ ОБЪЕКТ, ВЫЗВАТЬ МЕТОД (Т.Е. ACTION)
        
        
        // 
    }
    
}