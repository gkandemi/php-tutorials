<?php
/**
 * Created by PhpStorm.
 * User: gkandemir-pc
 * Date: 30.10.2016
 * Time: 17:44
 */

include "db.php";

if($_POST){

    $id = $_POST["id"];

    $statement = $db->prepare("SELECT * FROM urun WHERE id=:id");
    $data = array(
        "id" => $id
    );

    $statement->execute($data);
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    echo json_encode($row);
}
if($_GET){
    $urun_id = $_GET["urun_id"];
    $adet    = $_GET["adet"];
    $fiyat   = $_GET["fiyat"];
    $toplam_fiyat = $adet * $fiyat;

    session_start();

    $data = array(
        "adet"          => $adet,
        "fiyat"         => $fiyat,
        "toplam_fiyat"  => $toplam_fiyat
    );

    $_SESSION["sepet"]["urunler"][$urun_id] = $data;

    $urunler = $_SESSION["sepet"]["urunler"];

    $toplam_tutar = 0.0;
    foreach($urunler as $urun){
        $toplam_tutar += $urun["toplam_fiyat"];
    }


    $_SESSION["sepet"]["toplam_tutar"] = $toplam_tutar;


}