<?php

class Router{
     
    private $routes;
    
    public function __construct(){
        $routerPath=ROOT.'/config/routes.php';
        $this->routes=include($routerPath);
    }

    # ПРИВАТНАЯ ФУНКЦИЯ ВОЗВРАШАЮШИЙ URI В ВИДЕ СТРОКИ
    private function getURI(){
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }
    
    public function run(){
        
        // ПОЛУЧИТЬ СТРОКУ ЗАПРОСА
        $uri=$this->getURI();
        
        // ПРОВЕРКА НАЛИЧИЕ ТАКОГО ЗАПРОСА
        foreach($this->routes as $uriPattern=>$path){

            // ЕСЛИ ЕСТЬ СОВПАДЕНИЕ
            # СРАВНЕНИЕ $uriPattern И $uri
            if (preg_match("~$uriPattern~",$uri)) {
                /*
                echo $path;
                echo $uriPattern;
                */

                //ОПРЕДЕЛИТЬ КАКОЙ КОНТРОЛЛЕР И ACTION ОБРАБАТЫВАЮТ ЗАПРОС
                
                $internalRoute=preg_replace("~$uriPattern~",$path,$uri);
                
                $segments=explode('/',$internalRoute);
                /*
                echo "<pre>";
                print_r($segments);
                echo "</pre>";
                */

                # ИЗВЛЕКАЕМ ПЕРВЫЙ ЭЛЕМЕНТ МАССИВА
                # СОЕДИНЯЕМ К НЕМУ СТРОКУ 'Controller' 
                # И ПРИСВАЕВАЕМ К ПЕРЕМЕННОЙ $controllerName
                $controllerName=array_shift($segments).'Controller';

                # УВЕЛИЧИВАЕМ ПЕРВЫЙ СИМВОЛ В СТРОКЕ И ПЕРЕПРИСВАЕВАЕМ
                $controllerName=ucfirst($controllerName);
                //echo $controllerName; //Имя контроллера (класса)

                # ТАК ЖЕ КАК И ВЫШЕ ИЗВЛЕКАЕМ ПЕРВЫЙ ЭЛЕМЕМЕНТ ИЗ ЭЛЕМЕНТОВ ОСТАВШИХСЯ В МАССИВЕ
                # ДОБАВЛЯЕМ С ПЕРЕДИ СТРОКУ 'action'
                $actionName='action'.ucfirst(array_shift($segments));
                
              //  echo '<br>';
              //  echo $controllerName; //Имя controller (контроллнер)
              //  echo '<br>';
              //  echo $actionName; //Имя action (метода)
                
              //  echo '<br>';
                $parameters=$segments;
              //  print_r($parameters); //Имя param (параметр запроса)
                
                // ПОДКЛЮЧИТЬ ФАЙЛ КЛАССА-КОНТРОЛЛЕРА

                # ОПРЕДЕЛЯЕМ ФАЙЛ, ПУТЬ И НАЗВАНИЕ
                $controllerFile= ROOT . '/controllers/' .$controllerName. '.php';

                # ПРОВЕРЯЕМ СУШЕСТВУЕТ ЛИ ТАКОЙ ФАЙЛ ПО УКАЗСННОМУ ПУТИ
                if(file_exists($controllerFile)){
                    include_once($controllerFile);
                }

                // СОЗДАТЬ ОБЪЕКТ, ВЫЗВАТЬ МЕТОД (Т.Е. ACTION)
                $controllerObject = new $controllerName;
                
               // $result=$controllerObject->$actionName($parameters);
                
                $result=call_user_func_array(array($controllerObject,$actionName), $parameters);

                if ($result!=null) {
                    break;
                }

            }
            
        }
        
        
        // СОЗДАТЬ ОБЪЕКТ, ВЫЗВАТЬ МЕТОД (Т.Е. ACTION)
        
        
        // 
    }
    
}