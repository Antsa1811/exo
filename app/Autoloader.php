<?php
namespace App;

class Autoloader{

    public static function register(){
        spl_autoload_register(array(__CLASS__,'autoload'));
    }

    public static function Autoload($class_name){

            if(strpos($class_name,__NAMESPACE__.'\\') === null ){
                $class_name= str_replace(__NAMESPACE__.'\\','',$class_name);
                $class_name= str_replace('\\','/',$class_name);
            }

            require __DIR__.'\\'.$class_name .'.php';
    }

}


?>