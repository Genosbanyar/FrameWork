<?php
class Database{
    public static function selectAll($config){
        try{
           return $pdo = new PDO("{$config['host']};dbname={$config['dbname']}", $config['name']);
        }catch(PDOException $err){
            echo $err->getmessage();
        }
    }
}
