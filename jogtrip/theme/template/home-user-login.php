

<!-- slider page -->
   <div class="carousel slide" id="main-slide" data-ride="carousel">
         <!-- Indicators-->
      <ol class="carousel-indicators visible-lg visible-md">
         <li class="active" data-target="#main-slide" data-slide-to="0"></li>
         <li data-target="#main-slide" data-slide-to="1"></li>
         <li data-target="#main-slide" data-slide-to="2"></li>
      </ol>
         <!-- Indicators end-->
         <!-- Carousel inner-->
      <div class="carousel-inner">
         <div class="carousel-item active" style="background-image:url(../images/slider/prambanan.jpg);">
            <div class="container">
               <div class="slider-content text-left">
                  <div class="col-md-12">
                     <h2 class="slide-title title-light">Jelajahi Jogja</h2>
                     <h3 class="slide-sub-title">Temukan Wisata Impianmu</h3>
                     <p class="slider-description lead">JogTrip, Panduan Modern untuk Petualanganmu!</p>
                     <p><a class="slider btn btn-primary" href="#">Gass!</a></p>
                  </div>
                     <!-- Col end-->
               </div>
                  <!-- Slider content end-->
            </div>
               <!-- Container end-->
         </div>
            <!-- Carousel item 1 end-->
         <div class="carousel-item" style="background-image:url(../images/slider/hotel-tentrem.jpg);">
            <div class="container">
               <div class="slider-content text-center">
                  <div class="col-md-12">
                     <h2 class="slide-title title-light">Rasakan Kenyamanan,</h2>
                     <h3 class="slide-sub-title">Menginap di Hotel Impian</h3>
                     <p class="slider-description lead">JogTrip, Temukan Hotel Berkelas dengan Hanya Satu Sentuhan!</p>
                     <p><a class="slider btn btn-primary" href="#">Gass!</a></p>
                  </div>
                     <!-- Col end-->
               </div>
                  <!-- Slider content end-->
            </div>
               <!-- Container end-->
         </div>
            <!-- Carousel item 2 end-->
         <div class="carousel-item" style="background-image:url(../images/slider/gudeg.jpg);">
            <div class="container">
               <div class="slider-content text-right">
                  <div class="col-md-12">
                     <h2 class="slide-title title-light">Goyangkan Lidahmu</h2>
                     <h3 class="slide-sub-title">Jelajahi Citra Rasa Baru di Jogja</h3>
                     <p><a class="slider btn btn-primary" href="#">Gass!</a></p>
                  </div>
                     <!-- Col end-->
               </div>
                  <!-- Slider content end-->
            </div>
               <!-- Container end-->
         </div>
            <!-- Carousel item 3 end-->
      </div>
         <!-- Carousel inner end-->
         <!-- Controllers--><a class="left carousel-control carousel-control-prev" href="#main-slide" data-slide="prev"><span><i class="fa fa-angle-left"></i></span></a>
         <a class="right carousel-control carousel-control-next" href="#main-slide" data-slide="next"><span><i class="fa fa-angle-right"></i></span></a>
   </div>
<!-- Carousel end-->
      
<!-- 3 feature -->
      <section id="ts-features-light" class="ts-features-light">
         <div class="container">
            <div class="row feature-light-row">
               <div class="col-md-3 text-center">
                  <div class="ts-feature-box">
                     <div class="ts-feature-info">
                        <div class="feature-img">
                           <img src="../images/icon/fitur-wisata.png" alt="" />
                        </div>
                        <h3 class="ts-feature-title">Wisata Alam</h3>
                        <p>Dengan JogTrip, Temukan Spot Wisata Alam Tersembunyi dan Rasakan Keindahan yang Jauh dari Kata Biasa. Mulailah Petualanganmu, Alam Menunggu!</p>
                        <a class="slider btn btn-primary" href="#">Go</a>
                     </div>
                  </div>
                  <!-- feature box-1 end-->
               </div>
               <!-- col-1 end-->
               <div class="col-md-3 text-center border-left">
                  <div class="ts-feature-box">
                     <div class="ts-feature-info">
                        <div class="feature-img">
                           <img src="../images/icon/fitur-hotel.png" alt="" />
                        </div>
                        <h3 class="ts-feature-title">Wisata Seni Budaya</h3>
                        <p>JogTrip, Panduan Seni Budaya Modern yang Mencerahkan Perjalananmu. Dari Galeri Keren hingga Pertunjukan Spektakuler, Semua Ada di Sini!</p>
                        <a class="slider btn btn-primary" href="#">Go</a>
                     </div>
                  </div>
                  <!-- feature box-2 end-->
               </div>
               <div class="col-md-3 text-center border-left">
                  <div class="ts-feature-box">
                     <div class="ts-feature-info">
                        <div class="feature-img">
                           <img src="../images/icon/fitur-hotel.png" alt="" />
                        </div>
                        <h3 class="ts-feature-title">Hotel</h3>
                        <p>Temukan hotel-hotel trendy, cozy, dan Instagramable yang sesuai dengan gaya hidupmu hanya dengan sekali klik.</p>
                        <a class="slider btn btn-primary" href="#">Go</a>
                     </div>
                  </div>
                  <!-- feature box-2 end-->
               </div>
               <!-- col-2 end-->
               <div class="col-md-3 text-center border-left">
                  <div class="ts-feature-box">
                     <div class="ts-feature-info">
                        <div class="feature-img">
                           <img src="../images/icon/fitur-restaurant.png" alt="" />
                        </div>
                        <!--<i class="icon icon-clock3"></i>-->
                        <h3 class="ts-feature-title">Restaurant</h3>
                        <p>Jelajahi tempat makan kekinian dan Instagramable di Jogja dengan rekomendasi restoran terbaik dan menu andalan.</p>
                        <a class="slider btn btn-primary" href="#">Go</a>
                     </div>
                  </div>
                  <!-- feature box-2 end-->
               </div>
               <!-- col-3 end-->
            </div>
         </div>
      </section>
<!-- ts-feature light end -->



<!-- wisata -->
      <section class="ts-services solid-bg" id="ts-services">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                  <h2 class="section-title"><span>Rekomendasi</span>Wisata</h2>
               </div>
            </div>
            <!-- Title row end-->
            <div class="row ts-service-row-box">
               <?php
               include "koneksi.php";
               $sql = "SELECT nama_wisata, deskripsi_wisata, gambar_wisata
                     FROM wisata
                     WHERE status_wisata = 'rekomendasi'
                     LIMIT 3"; 
                     
               $datas = $koneksi->query($sql);
               $nama_data = 'wisata';

               while ($data = $datas->fetch_assoc()) {
                  // var_dump($wisata);
                  $nama = $data['nama_' . $nama_data];
                  $deskripsi = $data['deskripsi_' . $nama_data];
                  $gambar = $data['gambar_' . $nama_data];
                  echo
                  '<div class="col-lg-4 col-md-12">
                     <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                           <img class="img-fluid" src=' . $gambar . ' alt="">
                        </div>
                        <div class="ts-service-content">
                           <h3 class="service-title">' . $nama . '</h3>
                           <p>' . $deskripsi . '</p>
                           <p><a class="link-more" href="service-single.html">Read More<i class="icon icon-right-arrow2"></i></a></p>
                        </div>
                     </div>
                  </div>';
               }
               ?>
               
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
<!-- Service wisata end-->

<!-- hotel -->
      <section class="ts-services solid-bg" id="ts-services-hotel">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                  <h2 class="section-title"><span>Rekomendasi</span>Hotel</h2>
               </div>
            </div>
            <!-- Title row end-->
            <div class="row ts-service-row-box">
               <?php
               include "koneksi.php";
               $sql = "SELECT nama_hotel, deskripsi_hotel, gambar_hotel
                     FROM hotel
                     WHERE status_hotel = 'rekomendasi'
                     LIMIT 3"; 
                     
               $datas = $koneksi->query($sql);
               $nama_data = 'hotel';

               while ($data = $datas->fetch_assoc()) {
                  $nama = $data['nama_' . $nama_data];
                  $deskripsi = $data['deskripsi_' . $nama_data];
                  $gambar = $data['gambar_' . $nama_data];
                  echo
                  '<div class="col-lg-4 col-md-12">
                     <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                           <img class="img-fluid" src=' . $gambar . ' alt="">
                        </div>
                        <div class="ts-service-content">
                           <h3 class="service-title">' . $nama . '</h3>
                           <p>' . $deskripsi . '</p>
                           <p><a class="link-more" href="service-single.html">Read More<i class="icon icon-right-arrow2"></i></a></p>
                        </div>
                     </div>
                  </div>';
               }
               ?>
               <!-- Col end-->
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
<!-- Service hotel end-->

<!-- restaurant -->
      <section class="ts-services solid-bg" id="ts-services">
         <div class="container">
            <div class="row text-center">
               <div class="col-md-12">
                  <h2 class="section-title"><span>Rekomendasi</span>Restaurant</h2>
               </div>
            </div>
            <!-- Title row end-->
            <div class="row ts-service-row-box">
               <?php
               include "koneksi.php";
               $sql = "SELECT nama_resto, deskripsi_resto, gambar_resto
                     FROM resto
                     WHERE status_resto = 'rekomendasi'
                     LIMIT 3"; 
                     
               $datas = $koneksi->query($sql);
               $nama_data = 'resto';

               while ($data = $datas->fetch_assoc()) {
                  $nama = $data['nama_' . $nama_data];
                  $deskripsi = $data['deskripsi_' . $nama_data];
                  $gambar = $data['gambar_' . $nama_data];
                  echo
                  '<div class="col-lg-4 col-md-12">
                     <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                           <img class="img-fluid" src=' . $gambar . ' alt="">
                        </div>
                        <div class="ts-service-content">
                           <h3 class="service-title">' . $nama . '</h3>
                           <p>' . $deskripsi . '</p>
                           <p><a class="link-more" href="service-single.html">Read More<i class="icon icon-right-arrow2"></i></a></p>
                        </div>
                     </div>
                  </div>';
               }
               ?>
            </div>
            <!-- Content row end-->
         </div>
         <!-- Container end-->
      </section>
<!-- Service restaurant end-->
