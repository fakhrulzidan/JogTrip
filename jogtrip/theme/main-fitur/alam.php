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

    $sql = "SELECT nama_wisata, deskripsi_wisata, gambar_wisata, lokasi_wisata FROM wisata WHERE jenis_wisata = 'alam'"; 
                     
    $datas = $koneksi->query($sql);
    $nama_data = 'wisata';

    include "../template/fitur.php";

    include "../template/footer.php";

    include "../template/back-to-top.php";

    include "../template/js.php"
    ?>
    </div>
    <!--Body Inner end-->
</body>

</html>