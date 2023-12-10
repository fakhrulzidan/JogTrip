<?php
session_start();

include("../template/koneksi.php");

if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

?>
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
    include "../template/home-user-login.php";

    include "../template/footer.php";

    include "../template/back-to-top.php";
    
    include "../template/js.php"
    ?>
    </div>
    <!--Body Inner end-->
</body>

</html>