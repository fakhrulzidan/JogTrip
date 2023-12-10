<div class="banner-area" id="banner-area" style="background-image:url(../images/banner/banner-hotel.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="banner-heading">
                    <h1 class="banner-title"><?php echo strtoupper($nama_data) ?></h1>
                </div>
            </div>
            <!-- Col end-->
        </div>
        <!-- Row end-->
    </div>
    <!-- Container end-->
</div>
<!-- Banner area end-->

<!-- Room Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5">Explore Our <span style="color: red;"><?php echo strtoupper($nama_data) ?></span></h1>
        </div>
        <!-- <div class="search-box">
            <input type="text" placeholder="Mau cari apa?">
            <div class="search-icon"><i class="fa-solid fa-magnifying-glass"></i>   </div>
            <div class="cancel-icon"><i class="fa-solid fa-xmark"></i></div>
        </div> -->
        <div class="row g-4">

            <?php
            while ($data = $datas->fetch_assoc()) {
                // var_dump($wisata);
                $nama = $data['nama_' . $nama_data];
                $deskripsi = $data['deskripsi_' . $nama_data];
                $gambar = $data['gambar_' . $nama_data];
                $lokasi = $data['lokasi_' . $nama_data];
                echo
                '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src=' . $gambar . ' alt="">
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">' . $nama . '</h5>
                            </div>
                            <p class="text-body mb-3">' . $deskripsi . '</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href=' . $lokasi . '>
                                Maps</a>
                            </div>
                        </div>
                    </div>
                </div>
                ';
            }
            ?>
        </div>
    </div>
</div>
<!-- Room End -->

