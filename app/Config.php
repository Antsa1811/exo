<?php
/**
 * Created by PhpStorm.
 * User: Tahiry Lalaina
 * Date: 03/03/2019
 * Time: 17:18
 */

namespace App;


class Config
{

    private $settings=[];
    private static $_instance;

    public function __construct(){
         $this->settings = require dirname(__DIR__ ).'/config/config.php';
    }

    public static function getInstance(){
        if(is_null(self::$_instance))
        {
            self::$_instance =new Config();
        }
        return self::$_instance;
    }

    public function get($key){
        if(!isset($key)){
            return null;
        }
        return $this->settings[$key];
    }
}


?>