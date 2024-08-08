<?php
class App{
    protected static $arrayData = [];
    public static function bind($key, $data){
       return static::$arrayData[$key] = $data;
    }
    public static function get($key){
        return static::$arrayData[$key];
    }
}