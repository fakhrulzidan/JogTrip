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
        include "../template/navbar.php";

        
        include "../template/koneksi.php";

        $sql = "SELECT nama_resto, deskripsi_resto, gambar_resto, lokasi_resto FROM resto";

        $datas = $koneksi->query($sql);
        $nama_data = 'resto';

        include "../template/fitur.php";

        include "../template/footer.php";

        include "../template/back-to-top.php";
        ?>
        <!-- End Back to Top-->

        <?php
        include "../template/js.php"
        ?>
    </div>
    <!--Body Inner end-->
</body>

</html>