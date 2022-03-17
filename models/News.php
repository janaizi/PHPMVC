<?php

class News
{

    public static function getNewsItemById($id)
    {
        $id = intval($id);

        if ($id) {
            /*
             * $host = 'localhost';
             * $dbname = 'mvc_site';
             * $user = 'root';
             * $password = '';
             *
             * $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
             */

            $db = Db::getConnection();

            $result = $db->query('select id, title, date, short_content from news where id=' . $id);

            // $result->setFetchMode(PDO::FETCH_NUM);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $newsList = $result->fetch();

            return $newsList;
        }
    }

    public static function getNewsList()
    {
        /*
        $host = 'localhost';
        $dbname = 'mvc_site';
        $user = 'root';
        $password = '';

        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        */
        
        $db = Db::getConnection();
        
        $result = $db->query('select id, title, date, short_content from news order by date desc limit 10');

        $newsList = array();

        $i = 0;
        while ($row = $result->fetch()) {

            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
            $i ++;
        }

        return $newsList;
    }
}