<?php

$source = $_FILES["file"]["tmp_name"];
$target = "upload/" . $_FILES["file"]["name"];

if(move_uploaded_file($source, $target)){
//    echo "Basarili";
    echo $_POST["personel_name"];
}else{
    echo "basarisiz";
}

?>