 <?php

return array(
    
    // news/sport/114
    // 'news/([a-z]+)/([0-9]+)'=>'news/view/$1/$2', 
    'news/([0-9]+)'=>'news/view/$1',
    
    'news'=>'news/index',           # actionIndex в NewsController
    'products'=>'product/list',     # actionList в ProductController

    
);
