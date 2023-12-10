<?php
include "koneksi.php";

$id         = "";
$nama       = "";
$daerah     = "";
$deskripsi  = "";
$lokasi     = "";
$gambar     = "";
$status     = "";
$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if ($op == 'delete') {
    $id         = $_GET['id'];
    $sql1       = "delete from resto where id_resto = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses = "Berhasil hapus data";
    } else {
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from resto where id_resto = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nama       = $r1['nama_resto'];
    $daerah     = $r1['daerah_resto'];
    $deskripsi  = $r1['deskripsi_resto'];
    $lokasi     = $r1['lokasi_resto'];
    $gambar     = $r1['gambar_resto'];
    $status     = $r1['status_resto'];

    if ($nama == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $nama       = $_POST['nama_resto'];
    $daerah     = $_POST['daerah_resto'];
    $deskripsi  = $_POST['deskripsi_resto'];
    $gambar     = $_POST['gambar_resto'];
    $lokasi     = $_POST['lokasi_resto'];
    $status     = $_POST['status_resto'];

    if ($nama && $deskripsi && $daerah && $lokasi && $gambar && $status) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update resto set nama_resto='$nama',daerah_resto = '$daerah',lokasi_resto = '$lokasi',deskripsi_resto='$deskripsi' ,gambar_resto= '$gambar', status_resto= '$status' where id_resto = '$id' ";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into resto(nama_resto,daerah_resto,deskripsi_resto,lokasi_resto,gambar_resto) values ('$nama','$daerah','$deskripsi','$lokasi','$gambar', '$status')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "head.php"
    ?>
</head>

<body>

    <?php
    include "navbar.php"
    ?>

    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">

            <div class="card-header">
                Create / Edit Data Restaurant
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Restaurant</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama_resto" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="daerah" class="col-sm-2 col-form-label">Daerah</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="daerah_resto" id="daerah">
                                <option value="">- Pilih daerah -</option>
                                <option value="Yogyakarta" <?php if ($daerah == "Yogyakarta") echo "selected" ?>>Yogyakarta</option>
                                <option value="Bantul" <?php if ($daerah == "Bantul") echo "selected" ?>>Bantul</option>
                                <option value="Sleman" <?php if ($daerah == "Sleman") echo "selected" ?>>Sleman</option>
                                <option value="Gunung Kidul" <?php if ($daerah == "Gunung Kidul") echo "selected" ?>>Gunung Kidul</option>
                                <option value="Kulon Progo" <?php if ($daerah == "Kulon Progo") echo "selected" ?>>Kulon Progo</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="gambar" class="col-sm-2 col-form-label">URL Gambar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="gambar" name="gambar_resto" value="<?php echo $gambar ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="lokasi" class="col-sm-2 col-form-label">URL Lokasi Maps</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lokasi" name="lokasi_resto" value="<?php echo $lokasi ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Restaurant</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi_resto" value="<?php echo $deskripsi ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">Status Restaurant</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="status_resto" id="status">
                                <option value="">- Pilih status resto -</option>
                                <option value="-" <?php if ($status == "-") echo "selected" ?>>-</option>
                                <option value="rekomendasi" <?php if ($status == "rekomendasi") echo "selected" ?>>rekomendasi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Data Restaurant
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">daerah</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">URL Gambar</th>
                            <th scope="col">URL Lokasi Maps</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from resto order by id_resto desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id_resto'];
                            $nama       = $r2['nama_resto'];
                            $daerah     = $r2['daerah_resto'];
                            $deskripsi  = $r2['deskripsi_resto'];
                            $gambar     = $r2['gambar_resto'];
                            $lokasi     = $r2['lokasi_resto'];
                            $status     = $r2['status_resto'];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $nama ?></td>
                                <td scope="row"><?php echo $lokasi ?></td>
                                <td scope="row"><?php echo $deskripsi ?></td>
                                <td scope="row"><?php echo $gambar ?></td>
                                <td scope="row"><?php echo $lokasi ?></td>
                                <td scope="row"><?php echo $status ?></td>
                                <td scope="row">
                                    <a href="CRUD-restaurant.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="CRUD-restaurant.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <?php
    include "footer.php"
    ?>

    <?php
    include "back-to-top.php"
    ?>

</body>

</html>