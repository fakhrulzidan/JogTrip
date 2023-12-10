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
    $sql1       = "delete from hotel where id_hotel = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses = "Berhasil hapus data";
    } else {
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from hotel where id_hotel = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nama       = $r1['nama_hotel'];
    $daerah     = $r1['daerah_hotel'];
    $deskripsi  = $r1['deskripsi_hotel'];
    $lokasi     = $r1['lokasi_hotel'];
    $gambar     = $r1['gambar_hotel'];
    $status     = $r1['status_hotel'];

    if ($nama == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $nama       = $_POST['nama_hotel'];
    $daerah     = $_POST['daerah_hotel'];
    $deskripsi  = $_POST['deskripsi_hotel'];
    $lokasi     = $_POST['lokasi_hotel'];
    $gambar     = $_POST['gambar_hotel'];
    $status     = $_POST['status_hotel'];

    if ($nama && $deskripsi && $lokasi && $daerah && $gambar && $status) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update hotel set nama_hotel='$nama',daerah_hotel = '$daerah', lokasi_hotel = '$lokasi',deskripsi_hotel='$deskripsi' ,gambar_hotel= '$gambar', status_hotel= '$status' where id_hotel = '$id' ";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into hotel(nama_hotel,daerah_hotel,deskripsi_hotel,lokasi_hotel,gambar_hotel, status_hotel) values ('$nama','$daerah','$lokasi','$deskripsi','$gambar', '$status')";
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
                Create / Edit Data hotel
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
                        <label for="nama" class="col-sm-2 col-form-label">Nama Hotel</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama_hotel" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="daerah" class="col-sm-2 col-form-label">Daerah</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="daerah_hotel" id="daerah">
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
                            <input type="text" class="form-control" id="gambar" name="gambar_hotel" value="<?php echo $gambar ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="lokasi" class="col-sm-2 col-form-label">URL Lokasi Maps</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lokasi" name="lokasi_hotel" value="<?php echo $lokasi ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi hotel</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi_hotel" value="<?php echo $deskripsi ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">Status Hotel</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="status_hotel" id="status">
                                <option value="">- Pilih status hotel -</option>
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
                Data hotel
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
                            <th scope="col">Status Hotel</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from hotel order by id_hotel desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id_hotel'];
                            $nama       = $r2['nama_hotel'];
                            $daerah     = $r2['daerah_hotel'];
                            $deskripsi  = $r2['deskripsi_hotel'];
                            $gambar     = $r2['gambar_hotel'];
                            $lokasi     = $r2['lokasi_hotel'];
                            $status     = $r2['status_hotel'];
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
                                    <a href="CRUD-hotel.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="CRUD-hotel.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>
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