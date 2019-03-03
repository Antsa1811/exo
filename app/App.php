<?php
namespace App;

class App{

    /*
    const DB_NAME ='calcul';
    const DB_USER = 'root';
    const DB_PASS='';
    const DB_HOST='localhost';

    private static $database;


    public static function  getDb(){

        if(self::$database === null){
            self::$database = new Database(self::DB_NAME,self::DB_USER,self::DB_PASS,self::DB_HOST);
        }

        return self::$database;
    }
    */

    private static  $db_instance;


    public static function getDb(){
        $config = Config::getInstance();
        if(is_null(self::$db_instance)){

            self::$db_instance= new Database($config->get('db_name'),$config->get('db_user'),$config->get('db_pass'),$config->get('db_host'));
        }
        return self::$db_instance;

    }

    public static function getTable($name){

        $class_name ="App\\Table\\Table". ucfirst($name);
        return new $class_name();
    }



}