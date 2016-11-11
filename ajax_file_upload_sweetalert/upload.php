<?php

$source = $_FILES["file"]["tmp_name"];
$target = "upload/" . $_FILES["file"]["name"];
$data = array();

if(move_uploaded_file($source, $target)){

    $data["status"]     = "success";
    $data["message"]    = "Yükleme İşlemi Başarılıdır..";

}else{

    $data["status"]     = "error";
    $data["message"]    = "Yükleme İşlemi Sırasında Problem Oluştu.";
}

echo json_encode($data);

?>