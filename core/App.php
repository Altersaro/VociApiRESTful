<?php

namespace App\Core;


class App {


    protected static $item = [];

    public static function bind($key, $value){

        static::$item[$key] = $value;


    }

    public static function get($key){

        if(! array_key_exists($key, static::$item)){

            throw new \Exception("No {$key} is bound in the container");


        }

        return static::$item[$key];


    }

    
}

?>