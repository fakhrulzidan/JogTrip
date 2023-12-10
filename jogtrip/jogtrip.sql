-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2023 pada 06.32
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jogtrip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `id_hotel` int(11) NOT NULL,
  `nama_hotel` varchar(100) NOT NULL,
  `deskripsi_hotel` varchar(1000) NOT NULL,
  `daerah_hotel` varchar(100) NOT NULL,
  `gambar_hotel` text NOT NULL,
  `status_hotel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`id_hotel`, `nama_hotel`, `deskripsi_hotel`, `daerah_hotel`, `gambar_hotel`, `status_hotel`) VALUES
(1, 'OYO', 'OYO Rooms, umumnya dikenal sebagai OYO, adalah jaringan layanan perhotelan dan hotel hemat di India. Didirikan pada 2013 oleh Ritesh Agarwal dan sejak itu berkembang menjadi sekitar 8.500 hotel di kota-kota di India, Malaysia, Nepal, Tiongkok, dan Indonesia.', 'Sleman', 'https://images.oyoroomscdn.com/uploads/hotel_image/49915/5efb305b6231718c.jpg', 'rekomendasi'),
(3, 'Reddoorz', 'RedDoorz merupakan jaringan penginapan budget online terbesar di Indonesia. Berfokus pada perkembangan penginapan dan distribusi penjualan secara online. RedDoorz akan memilih properti yang berpotensi untuk bekerja sama secara langsung dan terikat komitmen dengan brand RedDoorz.', 'Sleman', 'https://reddoorz-near-jogja-city-mall-3-yogyakarta.hotelmix.id/data/Photos/OriginalPhoto/8102/810290/810290574/Reddoorz-Near-Jogja-City-Mall-3-Sleman-Exterior.JPEG', 'rekomendasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_wisata`
--

CREATE TABLE `jenis_wisata` (
  `id_jenis` int(11) NOT NULL,
  `nama-jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis_wisata`
--

INSERT INTO `jenis_wisata` (`id_jenis`, `nama-jenis`) VALUES
(1, 'seni dan budaya'),
(2, 'alam\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resto`
--

CREATE TABLE `resto` (
  `id_resto` int(11) NOT NULL,
  `nama_resto` varchar(100) NOT NULL,
  `daerah_resto` varchar(100) NOT NULL,
  `deskripsi_resto` varchar(10000) NOT NULL,
  `gambar_resto` text NOT NULL,
  `status_resto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `resto`
--

INSERT INTO `resto` (`id_resto`, `nama_resto`, `daerah_resto`, `deskripsi_resto`, `gambar_resto`, `status_resto`) VALUES
(1, 'Mang Engking', 'Yogyakarta', 'Mang Engking berasal dari Tasikmalaya, berawal dari kehidupan yang sederhana ditahun 1996 Mang Engking dan keluarga hijrah ke Yogyakarta untuk mengembangkan keahliannya dalam bidang budidaya udang galah dan ikan air tawar, keahlian tyersebut didapatnya secara turun temurun dari keluarganya.', 'https://visitingjogja.jogjaprov.go.id/wp-content/uploads/2021/04/87864548_581910465733336_3076366544207267639_n.jpg', 'rekomendasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_login`
--

CREATE TABLE `user_login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_login`
--

INSERT INTO `user_login` (`id_user`, `username`, `namalengkap`, `email`, `password`) VALUES
(8, '', 'fakhrul zidan', 'jidon@jidon', 'asd'),
(9, '', 'pp', 'p@p', 'ppp'),
(10, 'fakhrul', '', 'zidan@zidan', '$2y$10$8Uei1j.FxceaZCLygLs68ODfAIPY.KeLjaei9IH3p5T9yuncfQN0m'),
(11, 'zapran', '', 'a@a', '$2y$10$2ZfiFQLzlkOmjjOslQ1TCeSFcPVdgWArfIAuJU63g7setD/zwuEaS'),
(12, 'admin', '', 'admin@admin', '$2y$10$tc3JD1upV3aIIVNfxpJgWOs5PTOQwG7wDSRf5neDRtA.k.IUcTrHq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `daerah_wisata` varchar(100) NOT NULL,
  `deskripsi_wisata` varchar(1000) NOT NULL,
  `gambar_wisata` text NOT NULL,
  `jenis_wisata` varchar(50) NOT NULL,
  `status_wisata` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `nama_wisata`, `daerah_wisata`, `deskripsi_wisata`, `gambar_wisata`, `jenis_wisata`, `status_wisata`) VALUES
(1, 'bukit paralayang', 'Bantul', 'Bukit Paralayang merupakan bukit yang digunakan untuk terbang layang dengan menikmati hamparan kebun teh yang menghijau. tidak hanya itu, ditempat ini kita juga dapat camping, outbound atau hanya sekedar bersantai menikmati pemandangan.', 'https://visitingjogja.jogjaprov.go.id/wp-content/uploads/2022/08/watu-gupit-by-@asaljepret39.jpg', 'alam', ''),
(8, 'Heha Sky View', 'Gunung Kidul', 'Heha Sky View merupakan salah satu objek wisata yang terletak di kawasan perbukitan tepatnya di Jl. Dlingo No 02, Patuk,Gunungkidul, Daerah Istimewa Yogyakarta. Didirikan pada 18 September 2019 oleh Herry Zudianto, mantan Walikota Yogyakarta dan rekannya Handoyo Mawardi.', 'https://bob.kemenparekraf.go.id/wp-content/uploads/2021/05/118781441_306738327097253_4000647999436703134_n.jpg', 'alam', 'rekomendasi'),
(9, 'Jeep lava tour', 'Sleman', 'Jeep lava tour merupakan perjalanan wisata singkat menyusuri kawasan terdampak erupsi Gunung Merapi dengan mengendarai mobil berjenis jeep. Jeep lava tour akan mengajak wisatawan untuk menyusuri puing-puing sisa erupsi Gunung Merapi pada tahun 2010 yang lalu.', 'https://i.pinimg.com/564x/e5/6c/ed/e56cedb2f409a5438a83774c8ad94f6d.jpg\r\n', 'alam', ''),
(10, 'Wisata Alam Kali Biru', 'Kulon Progo', 'Kalibiru merupakan harmonisasi antara hijaunya hutan dengan hamparan berbukit yang sangat luas dengan pemandangan yang indah. Tepat terletak di Hargowilis, Kokap, kabupaten Kulon Progo dengan jarak kurang lebih 40 km dari pusat kota.', 'https://s-light.tiket.photos/t/01E25EBZS3W0FY9GTG6C42E1SE/rsfit19201280gsm/events/2022/02/11/253e2394-2e8c-4ff1-84f6-697a173bfe36-1644582202846-5f8fdcb08b487a22c588a769d69fbd4e.jpg', 'alam', ''),
(11, 'Museum Sonobudoyo', 'Yogyakarta', 'Museum Negeri Sonobudoyo merupakan Unit Pelaksana Teknis Daerah pada Dinas Kebudayaan Provinsi Daerah Istimewa Yogyakarta, mempunyai fungsi pengelolaan benda museum yang memiliki nilai budaya ilmiah, meliputi koleksi pengembangan dan bimbingan edukatif kultural.', 'https://dijogja.co/images/gallery_direktori/dijogja-museum-negeri-sonobudoyo-pengelola-benda-bersejarah-dan-pusat-budaya-di-yogyakarta42.jpeg', 'seni dan budaya', ''),
(14, 'Pantai Parangkritis', 'Bantul', 'Pantai Parangtritis (Jawa: ꦥꦱꦶꦱꦶꦂ ꦥꦫꦁꦠꦿꦶꦠꦶꦱ꧀, translit. Pasisir Parangtritis) adalah tempat wisata yang terletak di Kalurahan Parangtritis, Kapanéwon Kretek, Kabupaten Bantul, Daerah Istimewa Yogyakarta. Jaraknya kurang lebih 27 km dari pusat kota.', 'https://www.beritadaerah.co.id/wp-content/uploads/2020/09/Pantai-Parangtritis-Menyimpan-Keindahan-Tersendiri-Foto-Handoko-Kontributor-Beritadaerah-1.jpg', 'alam', 'rekomendasi'),
(15, 'Keraton', 'Yogyakarta', 'Kraton Yogyakarta berdiri pada 1755 sebagai hasil dari Perjanjian Giyanti. Kraton Yogyakarta sebagai cikal bakal keberadaan pemukiman di wilayah Yogyakarta meninggalkan jejak-jejak sejarah yang masih dapat kita jumpai sampai saat ini. Kawasan ini merupakan living monument, yang masih hidup dan juga memiliki luas.', 'https://budaya.blog.unisbank.ac.id/wp-content/uploads/2022/01/Sejarah-Singkat-Keraton-Yogyakarta-1.jpeg', 'seni dan budaya', ''),
(18, 'Malioboro', 'Yogyakarta', 'Kawasan Malioboro terletak sangat strategis yaitu diantara Kraton Ngayogyakarta Hadiningrat dan Tugu Pal Putih. Bagi sebagian besar wisatawan baik lokal maupun mancanegara, Malioboro sudah tak asing sebagai tempat berwisata belanja paling diminati di Yogyakarta. Denyut aktivitas perdagangan sangat terasa di tempat ini.', 'https://cdn-image.hipwee.com/wp-content/uploads/2017/06/hipwee-Malioboro_rz85.jpg', 'seni dan budaya', 'rekomendasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indeks untuk tabel `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `resto`
--
ALTER TABLE `resto`
  ADD PRIMARY KEY (`id_resto`);

--
-- Indeks untuk tabel `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `resto`
--
ALTER TABLE `resto`
  MODIFY `id_resto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
