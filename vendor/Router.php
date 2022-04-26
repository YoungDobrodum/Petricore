<?php


class Router
{
    public static $urls = [];

    public static function addPages($url, $page_name)
    {
        self::$urls[] = [
            "url" => $url,
            "page" => $page_name
        ];
    }


    public static function demonstrate()
    {
        $query = $_GET['q'];
        foreach(self::$urls as $url)
        {
            if($url["url"] === '/' . $query){
                include_once 'Views/'.$url['page'] . '.php';
            }
        }
        self::notFound();
    }


    static public function notFound(){
        http_response_code(404);
        //TODO pretty view for 404 status
        exit();
    }


}