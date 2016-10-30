<?php
/**
 * Created by PhpStorm.
 * User: gkandemir-pc
 * Date: 30.10.2016
 * Time: 17:37
 */

try{
    $db = new PDO("mysql:host=localhost;dbname=sepet;charset=utf8","root","");
}catch(PDOException $e){
    die($e->getMessage());
}

?>