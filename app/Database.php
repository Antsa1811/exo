<?php
/**
 * CLASS POUR LA CONNEXION A LA BASE DE DONNER
 */
namespace App;

use PDO;

class Database{

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name,$db_user='root',$db_pass='',$db_host='localhost'){

        $this->db_name=$db_name;
        $this->db_user=$db_user;
        $this->db_pass=$db_pass;
        $this->db_host=$db_host;

    }

    public function getPdo(){

        if($this->pdo === null){
            $pdo=new Pdo('mysql:host=localhost;dbname=calcule','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo=$pdo;
        }
        return $pdo;
    }

    public function query($sql,$class_name){
        $req=$this->getPdo()->query($sql);
         $data=$req->fetchAll(PDO::FETCH_CLASS,$class_name);
         return $data;
    }
}