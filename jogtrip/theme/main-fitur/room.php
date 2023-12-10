<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include "../template/head.php";
  ?>
</head>

<body>

  <div class="body-inner">
    <!-- Header -->
    <?php
    include "../template/navbar.php"
    ?>

    <!-- fitur start -->
    <?php

    include "../template/koneksi.php";

    $sql = "SELECT nama_hotel, deskripsi_hotel, gambar_hotel, lokasi_hotel FROM hotel";

    $datas = $koneksi->query($sql);
    $nama_data = 'hotel';

    include "../template/fitur.php"
    ?>

    <!-- Site footer -->
    <?php
    include "../template/footer.php";
    ?>

    <?php
    include "../template/back-to-top.php"
    ?>
    <!-- End Back to Top-->

    <?php
    include "../template/js.php"
    ?>
  </div>
  <!--Body Inner end-->
</body>

</html>