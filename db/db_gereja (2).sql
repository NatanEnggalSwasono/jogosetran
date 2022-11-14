-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2022 pada 16.10
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gereja`
--
CREATE DATABASE IF NOT EXISTS `db_gereja` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_gereja`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `kode_warta` int(11) NOT NULL,
  `judul_warta` varchar(200) NOT NULL,
  `jenis_warta` varchar(2000) DEFAULT NULL,
  `gambar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`kode_warta`, `judul_warta`, `jenis_warta`, `gambar`) VALUES
(14, 'Baptisan', 'Baptisan Kudus 5 jemaat GBI Jogosetran akan dilaksanakan di Gereja Baptis Indonesia Jogosetran setelah ibadah umum minggu jam 13.00 WIB', 'portfolio-7.jpg'),
(15, 'Pernikahan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad \r\nearum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo \r\nfugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore \r\nsuscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium\r\nmodi minima sunt esse temporibus sint culpa, recusandae aliquam numquam \r\ntotam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam \r\nquasi aliquam eligendi, placeat qui corporis!', 'f6d855bc-f316-463e-935b-953b3b3ff9611.jpg'),
(16, 'Perjamuan Kasih', 'Makan bersama setelah ibadah umum', 'portfolio-11.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `foto`) VALUES
(18, 'portfolio-1.jpg'),
(20, 'portfolio-71.jpg'),
(21, 'portfolio-4.jpg'),
(23, 'main-qimg-e10d66ae0e58a6b0a8271c692436da50-lq1111.jpg'),
(24, 'f6d855bc-f316-463e-935b-953b3b3ff9611.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `judul_informasi` varchar(200) NOT NULL,
  `isi_informasi` varchar(4000) DEFAULT NULL,
  `tanggal_informasi` date DEFAULT NULL,
  `file` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul_informasi`, `isi_informasi`, `tanggal_informasi`, `file`) VALUES
(14, 'Natal 2022', 'Perayaan Ibadah natal 2020 GBI Jogosetran akan dilaksanakan tanggal 25 Desember 2022 pukul 16.00 wib.', '2022-10-03', 'Jadwal_TAS_Gasal_2020.pdf'),
(15, 'Paskah', 'lorem ipsum vovoiijlkljkbvh ygvyggyguyfyyuvgcgcsezvkv n k m m nhvhvhghgchgchgcgcghcghcghcgcujugigugklyfgftdtgjkbkjbyufyhb jbjv', '2022-10-12', '8_-_Desain_DW.pdf'),
(16, 'Jumat Agung', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad \r\nearum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo \r\nfugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore \r\nsuscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium\r\nmodi minima sunt esse temporibus sint culpa, recusandae aliquam numquam \r\ntotam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam \r\nquasi aliquam eligendi, placeat qui corporis!', '2022-11-02', '3_-_Modifikasi_Tabel1.pdf'),
(17, 'Paskah Terbaru', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad \r\nearum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo \r\nfugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore \r\nsuscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium\r\nmodi minima sunt esse temporibus sint culpa, recusandae aliquam numquam \r\ntotam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam \r\nquasi aliquam eligendi, placeat qui corporis!', '2022-11-03', '8_-_Desain_DW11.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nama_ibadah` varchar(200) NOT NULL,
  `tanggal` varchar(128) DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `keterangan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nama_ibadah`, `tanggal`, `waktu`, `keterangan`) VALUES
(2, 'Kebaktian Umum ', 'Minggu', '08:00:00', 'Ibadah umum jemaat GBI Jogosetran sesi 1'),
(5, 'Sekolah Minggu Anak', 'Minggu', '07:30:00', 'Ibadah sekolah minggu anak anak GBI Jogosetran'),
(6, 'Kebaktian Muda - Mudi', 'Sabtu', '18:00:00', 'Ibadah anak muda diadakan setiap hari sabtu'),
(8, 'Kabaktian Pasutri', 'Jumat', '18:30:00', 'Kebaktian untuk pasangan suami istri jemaat GBI Jogosetran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `no_telepon` varchar(14) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `no_telepon`, `email`, `alamat`) VALUES
(10, '081234567890', 'jogosetran@gmail.com', 'Boyogaten, Dusun I, Jogosetran, Kec. Kalikotes, Kabupaten Klaten, Jawa Tengah 57451');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `nama_gereja` varchar(128) NOT NULL,
  `logo` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `logo`
--

INSERT INTO `logo` (`id`, `nama_gereja`, `logo`) VALUES
(3, 'GBI Jogosetran', 'LOGO_GEREJA_BAPTIS_KLATEN13.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendeta`
--

CREATE TABLE `pendeta` (
  `id_pendeta` int(11) NOT NULL,
  `nama_pendeta` varchar(200) NOT NULL,
  `background_pendeta` varchar(3000) NOT NULL,
  `foto_pendeta` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendeta`
--

INSERT INTO `pendeta` (`id_pendeta`, `nama_pendeta`, `background_pendeta`, `foto_pendeta`) VALUES
(3, 'Pdt. Lorem Ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid.', 'main-qimg-e10d66ae0e58a6b0a8271c692436da50-lq111.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `renungan`
--

CREATE TABLE `renungan` (
  `id_renungan` int(11) NOT NULL,
  `judul_renungan` varchar(200) NOT NULL,
  `isi_renungan` varchar(5000) NOT NULL,
  `tanggal_renungan` date DEFAULT NULL,
  `gambar_renungan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `renungan`
--

INSERT INTO `renungan` (`id_renungan`, `judul_renungan`, `isi_renungan`, `tanggal_renungan`, `gambar_renungan`) VALUES
(2, 'Milik-Nya', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit  upsum', '2022-09-22', 'portfolio-7.jpg'),
(3, 'Menembus Sekat Kehidupan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit ', '2022-09-21', 'portfolio-2.jpg'),
(8, 'Garam dan Terang Dunia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque. Quaerat provident commodi consectetur veniam similique ad \r\nearum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo \r\nfugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore \r\nsuscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium\r\nmodi minima sunt esse temporibus sint culpa, recusandae aliquam numquam \r\ntotam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam \r\nquasi aliquam eligendi, placeat qui corporis!', '2022-11-01', 'portfolio-4.jpg'),
(9, 'Doa', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos \r\nsapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam\r\nrecusandae alias error harum maxime adipisci amet laborum. Perspiciatis \r\nminima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit \r\nquibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur \r\nfugiat, temporibus enim commodi iusto libero magni deleniti quod quam \r\nconsequuntur! Commodi minima excepturi repudiandae velit hic maxime\r\ndoloremque.', '2022-11-03', 'portfolio-9.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `social_media`
--

CREATE TABLE `social_media` (
  `id_sc` int(11) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `website` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `social_media`
--

INSERT INTO `social_media` (`id_sc`, `instagram`, `facebook`, `twitter`, `website`) VALUES
(2, 'http://www.instagram.com/natan_swasono', 'https://www.facebook.com/natan.e.swasono', 'https://twitter.com/NatanEnggal', 'http://localhost/gbi-jogosetran/web_profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tema`
--

CREATE TABLE `tema` (
  `id_tema` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `tema` varchar(3000) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tema`
--

INSERT INTO `tema` (`id_tema`, `judul`, `tema`, `gambar`) VALUES
(2, 'GBI Jogosetran', 'Selamat datang di website resmi GBI Jogosetran\r\nKiranya Tuhan memberkati ibadah dan pelayanan kita dan marilah memberi yang terbaik bagi Tuhan', 'IMG_08661.JPG'),
(4, 'adhsjf', 'bdavWDMA BNAEFYOTRDBAS', 'Screenshot_20221111_110618.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `nama_gereja` varchar(200) DEFAULT NULL,
  `deskripsi_gereja` varchar(2000) DEFAULT NULL,
  `visi` varchar(500) DEFAULT NULL,
  `misi` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `nama_gereja`, `deskripsi_gereja`, `visi`, `misi`) VALUES
(5, 'Gereja Baptis Indonesia Jogosetran', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut!', '\"Gereja yang bertumbuh ke arah Kristus\"\r\n(Efesus 4:13)', 'Mencari kehendak Allah\r\nMelakukan kehendak Allah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'felix', 'admin@gmail.com', 'Screenshot_20221103_083123.png', '$2y$10$gg4oqDOhQHNyGefUlL9h1ei3QK4G6Fwnzoi4fkxD5em6vkQWo4xpG', 1, 1, 1663675178),
(0, 'admin baru', 'natan.e2042@student.ukrimuniversity.ac.id', 'default.png', '$2y$10$nXaDyHhxNBzza0cVVlsWJuvK2aW91z.vH1OSQDzeSLJRTCLiU/vki', 1, 1, 1665073586),
(0, 'vincensa', 'vincensawb@gmail.com', 'download_(1).jpg', '$2y$10$ujCU.YJGKDAotcfUZdjqbOHw4MesgC72dS1Tvje1oslUUMp.b.ZLK', 1, 1, 1667479768),
(0, 'felix', 'felix@gmail.com', 'default.png', '$2y$10$ojk3qch31EeQhEoDPfl7reTFuJG5eXsK1LDoVarWHoLN4Uar3zuy2', 1, 1, 1668220409),
(0, 'dirga', 'dirga12@student.ukrimuniversity.ac.id', 'default.png', '$2y$10$3zHD.70HMMqI7z8Cqus6Wuxcx0U4BZaQrRJJeWmFNlXgF2H3MVzr2', 1, 1, 1668220535),
(0, 'yyyy', 'admin@yahoo.co.id', 'default.png', '$2y$10$9c72PsfmoC14lhqUJYX.FOQ0RSfoMJXlUYYlraq50OenVX2j06dV6', 1, 1, 1668220644),
(0, 'ONAT', 'onat@jagsyasyyq.com', 'default.png', '$2y$10$ISXe3wqwt2jrnpXUS8HK3OTFbBvLge77ZSNGmLkYBr8i7cKw9ZsuW', 1, 1, 1668220787),
(0, 'fgtdb', 'admin@yuio.com', 'default.png', '$2y$10$YAxvinL.ipVm.XvNu7AxEOrhtI9enyIuWjxMpVLcGNkqEyOzXYf9q', 1, 1, 1668220844),
(0, 'reon', 'reon@gmail.com', 'default.png', '$2y$10$jbS6u6uWdRyhRAm8haclAeoeWwkFRUZdG8kzazK1Q7KMRV14xO6Py', 1, 1, 1668221547);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(6, 'natan.e2042@student.ukrimuniversity.ac.id', 'lGZwij7QhyUsFW5v5l8lOxcGMsEsLEy4FD1/4im3tjw=', 1665073617),
(7, 'natan.e2042@student.ukrimuniversity.ac.id', 'vIXGkWba3ZrPaxRJprBlsrzgDJ7/xLXxLwItE3Sdn9A=', 1665205532),
(8, 'admin@gmail.com', 'v+mo69G3NYVzacfQRceqMfLV1bW65ynPLDwwEo6mmAc=', 1665208792);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`kode_warta`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendeta`
--
ALTER TABLE `pendeta`
  ADD PRIMARY KEY (`id_pendeta`);

--
-- Indeks untuk tabel `renungan`
--
ALTER TABLE `renungan`
  ADD PRIMARY KEY (`id_renungan`);

--
-- Indeks untuk tabel `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id_sc`);

--
-- Indeks untuk tabel `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id_tema`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `kode_warta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pendeta`
--
ALTER TABLE `pendeta`
  MODIFY `id_pendeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `renungan`
--
ALTER TABLE `renungan`
  MODIFY `id_renungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id_sc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tema`
--
ALTER TABLE `tema`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
