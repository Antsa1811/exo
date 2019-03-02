<?php
namespace App\table;


class Article{

    public function __get($key){
        $method= 'get' . ucfirst($key);

        $this->$key=$this->$method();
       return $this->$key;

}

    public function getUrl(){
        return 'index.php?p=article&id=' . $this->id;
    }

}