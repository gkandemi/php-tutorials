<?php
/**
 * Created by PhpStorm.
 * User: gkandemir-pc
 * Date: 11.11.2016
 * Time: 17:52
 */

try{
    $db = new PDO("mysql:host=localhost;dbname=megamenu;charset?utf8","root","");
}catch(PDOException $e){
    echo $e->getMessage();
}

$kategoriler = $db->query("SELECT * FROM kategori", PDO::FETCH_ASSOC);