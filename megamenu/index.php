<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mega Menu</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="css/menu.min.css">
  </head>
  <body>

  <?php include("db.php"); ?>

    <div class="menu-wrapper" role="navigation">
      <ul class="nav" role="menubar">
        <li role="menuitem">
          <a href="#">Urunler</a>
          <div class="mega-menu" aria-hidden="true" role="menu">
            <?php foreach($kategoriler as $kategori){ ?>
              <div class="nav-column">
                <h3><?php echo $kategori["kategori_adi"]; ?></h3>

                <?php
                  $kategori_id = $kategori["id"];
                  $urunler = $db->query("SELECT * FROM urun WHERE kategori_id=$kategori_id", PDO::FETCH_ASSOC);
                ?>
                <ul>
                  <?php foreach($urunler as $urun){ ?>
                    <li role="menuitem"><a href="<?php echo $urun["url"]; ?>"><?php echo $urun["baslik"]; ?></a></li>
                  <?php } ?>
                </ul>
              </div>
            <?php } ?>
          </div>


        </li>

















        <li role="menuitem"><a href="#">Menu Item 2</a></li>
        <li role="menuitem"><a href="#">Menu Item 3</a></li>
        <li role="menuitem"><a href="#">Menu Item 4</a></li>
        <li role="menuitem"><a href="#">Menu Item 5</a></li>
        <li role="menuitem" class="nav-search">
          <form action="#">
            <label for="search"></label>
            <input type="text" id="search" title="Search..." placeholder="Search...">
            <input type="submit" value="">
          </form>
        </li>
      </ul>
    </div>
  </body>
</html>