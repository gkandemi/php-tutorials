<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ürün Listesi</title>
    <script src="jquery-3.1.1.min.js"></script>
    <script src="custom.js"></script>

</head>
<body>
<?php

include "db.php";

$query = $db->query("SELECT * FROM urun", PDO::FETCH_ASSOC);
$rows  = $query->fetchAll();

?>


<form action="http://localhost/php/actions.php" method="get">

    <select name="urun_id" id="urun">
        <?php foreach($rows as $row) { ?>
            <option value="<?php echo $row["id"]; ?>"><?php echo $row["urunAdi"]; ?></option>
        <?php } ?>
    </select>

    <input type="text" name="fiyat" id="fiyat">
    <input type="text" name="adet">
    <button type="submit">Sepete Ekle</button>

</form>


</body>
</html>


