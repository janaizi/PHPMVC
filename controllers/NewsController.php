<?php

include_once ROOT. '/models/News.php';

class NewsController
{

    public function actionIndex()
    {
        $newsList=array();
        $newsList=News::getNewsList();
        /*
        echo '<pre>';
        print_r($newsList);
        echo '<pre>';
        */
        
        require_once (ROOT.'/views/news/news.php');
        
        
        //echo 'Список новостей';
        return true;
    }

    public function actionView($id)
    {
        if ($id) {
            $newsItem=News::getNewsItemById($id);
            
            require_once (ROOT.'/views/news/news_one.php');
            
            /*
            echo '<pre>';
            print_r($newsItem);
            echo '<pre>';
            */
        }
        return true;
    }
}
