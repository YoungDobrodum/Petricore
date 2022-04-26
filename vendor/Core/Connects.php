<?php

namespace Core;

class Connects
{
    public static function connects()
    {
        self::libs();
        self::connectDatabase();
    }

    public static function libs()
    {
        $config = include_once 'libraries/configLibs.php';
        foreach($config['libs'] as $lib){
            include_once 'libraries/' . $lib . '.php';
        }
    }

    public static function connectDatabase()
    {
        $config = include_once 'config/db_data.php';
//        var_dump($config);
//        exit();

        if($config['enable']){
            \R::setup( 'mysql:host='.$config['host']. ';port=' .$config['port'].';dbname=' .$config['database']. '',
                $config['username'], $config['password']);
            if(!\R::testConnection()) {
                die('Error database connection');
            }
        }
    }
}
