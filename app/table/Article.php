<?php
namespace App\table;

use App\app;
class Article{

    public static function getLast(){
       return App::getDb()->query("select * from chiffre",__CLASS__);
    }

    public function __get($key){
        $method= 'get' . ucfirst($key);
        $this->$key=$this->$method();
       return $this->$key;

}

    public function getUrl(){
        return 'index.php?p=article&id=' . $this->id;
    }

    public function getExtrait(){
        return $this->Commentaire;
    }

}