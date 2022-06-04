-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2021 pada 06.35
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webakhir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datauser`
--

CREATE TABLE `tb_datauser` (
  `id_profil` int(11) NOT NULL,
  `fotoprofil` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `profesi` varchar(50) NOT NULL,
  `umur` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_datauser`
--

INSERT INTO `tb_datauser` (`id_profil`, `fotoprofil`, `nama`, `profesi`, `umur`, `alamat`, `kota`) VALUES
(72, '5fdf6053ecf1c.jpg', 'adam', 'mahasiswa', '16', 'jl.simpang sulfat selatan', 'malang'),
(75, '5fe01900eabb4.jpg', 'wildan', 'pelajar   ', '16', 'jl.simpang sulfat selatans', 'malang'),
(76, '5fe1995e9f0c8.jpg', 'himaa', 'mahasiswa', '23', 'jl.simpang sulfat selatan', 'malang'),
(79, '5fe380db745e6.jpeg', 'wildan', 'pelajar', '16', 'jl.simpang sulfat selatan', 'malang'),
(80, '5fe444dfd9b46.jpg', 'adam', 'mahasiswa', '16', 'jl.simpang sulfat selatan', 'malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_link` int(11) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `fotoprofil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id`, `id_link`, `komentar`, `nama`, `tanggal`, `fotoprofil`) VALUES
(103, 76, 11, 'keren o', 'himaa', '2020-12-22 08:20:30', '5fe1995e9f0c8.jpg'),
(104, 76, 11, 'ANJAY', 'himaa', '2020-12-22 08:24:25', '5fe1995e9f0c8.jpg'),
(115, 75, 11, 'ewewew', 'wildan ', '2020-12-22 09:04:18', '5fe01900eabb4.jpg'),
(132, 75, 11, 'wewewew', 'wildan ', '2020-12-23 06:13:21', '5fe01900eabb4.jpg'),
(133, 75, 11, 'bayu anjay', 'wildan ', '2020-12-23 06:13:26', '5fe01900eabb4.jpg'),
(134, 75, 12, 'anjay', 'wildan ', '2020-12-23 06:46:41', '5fe01900eabb4.jpg'),
(135, 75, 12, 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwws', 'wildan ', '2020-12-23 06:46:58', '5fe01900eabb4.jpg'),
(136, 75, 12, 'anjau', 'wildan ', '2020-12-23 06:48:22', '5fe01900eabb4.jpg'),
(137, 75, 14, 'anjajyy', 'wildan ', '2020-12-23 07:56:52', '5fe01900eabb4.jpg'),
(140, 75, 15, 'anjay', 'wildan ', '2020-12-23 08:06:57', '5fe01900eabb4.jpg'),
(141, 75, 15, 'keren lo btw', 'wildan ', '2020-12-23 08:07:01', '5fe01900eabb4.jpg'),
(142, 75, 17, 'keren', 'wildan ', '2020-12-23 09:01:22', '5fe01900eabb4.jpg'),
(143, 75, 17, 'asli keren bet dah', 'wildan ', '2020-12-23 09:01:28', '5fe01900eabb4.jpg'),
(146, 75, 18, 'anjay', 'wildan ', '2020-12-23 11:14:47', '5fe01900eabb4.jpg'),
(147, 75, 18, 'e', 'wildan ', '2020-12-23 11:15:47', '5fe01900eabb4.jpg'),
(148, 75, 18, 'lucu', 'wildan ', '2020-12-23 11:24:35', '5fe01900eabb4.jpg'),
(149, 75, 18, 'keren jiga', 'wildan ', '2020-12-23 11:24:40', '5fe01900eabb4.jpg'),
(150, 75, 18, 'ANJAY', 'wildan ', '2020-12-23 12:13:38', '5fe01900eabb4.jpg'),
(151, 75, 18, 'MANTEB', 'wildan ', '2020-12-23 12:13:42', '5fe01900eabb4.jpg'),
(152, 75, 19, 'semoga bermanfaat guys', 'wildan', '2020-12-23 12:48:50', '5fe01900eabb4.jpg'),
(153, 79, 19, 'alhamdulillah solved', 'wildan', '2020-12-23 18:40:25', '5fe380db745e6.jpeg'),
(155, 80, 19, 'ah mantab solved mwehehehehe', 'adam', '2020-12-24 08:39:00', '5fe444dfd9b46.jpg'),
(156, 80, 20, 'semoga bermanfaat guys', 'adam', '2020-12-24 08:52:55', '5fe444dfd9b46.jpg'),
(157, 75, 19, 'goodluck', 'wildan', '2020-12-28 01:33:51', '5fe01900eabb4.jpg'),
(158, 75, 20, 'amru ya', 'wildan', '2020-12-28 03:24:54', '5fe01900eabb4.jpg'),
(159, 75, 19, 'komen', 'wildan', '2020-12-28 04:17:46', '5fe01900eabb4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kometarptn`
--

CREATE TABLE `tb_kometarptn` (
  `id_komentar` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_link` int(11) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `fotoprofil` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kometarptn`
--

INSERT INTO `tb_kometarptn` (`id_komentar`, `id`, `id_link`, `komentar`, `nama`, `tanggal`, `fotoprofil`) VALUES
(6, 75, 104, 'asli', 'wildan ', '2020-12-23 11:39:50', '5fe01900eabb4.jpg'),
(7, 75, 104, 'anjay gak si hehe', 'wildan ', '2020-12-23 11:39:57', '5fe01900eabb4.jpg'),
(8, 75, 104, 'w', 'wildan', '2020-12-23 12:24:51', '5fe01900eabb4.jpg'),
(9, 75, 106, 'semoga bermanfaat guys', 'wildan', '2020-12-23 13:53:36', '5fe01900eabb4.jpg'),
(10, 75, 106, 'oke', 'wildan', '2020-12-25 04:00:13', '5fe01900eabb4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `saran` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kontak`
--

INSERT INTO `tb_kontak` (`id`, `nama`, `email`, `subject`, `saran`) VALUES
(18, 'fajar', 'fajar2@gmail.com', 'front end', 'tampilan'),
(20, 'adam', 'adam@gmail.com', 'adamke', 'adam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tambahinformasi`
--

CREATE TABLE `tb_tambahinformasi` (
  `id_informasi` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `fotouniversitas` varchar(100) NOT NULL,
  `namauniversitas` varchar(40) NOT NULL,
  `isiuniversitas` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `profesi` varchar(30) NOT NULL,
  `fotoprofil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tambahinformasi`
--

INSERT INTO `tb_tambahinformasi` (`id_informasi`, `id`, `fotouniversitas`, `namauniversitas`, `isiuniversitas`, `nama`, `profesi`, `fotoprofil`) VALUES
(106, 75, '5fe3305c2e02d.jpeg', 'universitas brawijaya, malang ', 'Universitas Brawijaya (UB) adalah perguruan tinggi di Indonesia yang berdiri pada tahun 1963 di Kota Malang, Jawa Timur melalui Ketetapan Menteri Pendidikan dan Ilmu Pengetahuan no.1 tanggal 5 Januari 1963. Tanggal tersebut kemudian ditetapkan sebagai Dies Natalis UB. Nama Brawijaya diberikan khusus oleh Presiden Soekarno dengan harapan mampu gemilang seperti Raden Wijaya (Brawijaya I) selaku pendiri Kerajaan Majapahit sekaligus menjadi kampus kebanggan bangsa Indonesia.[4]\r\n\r\nUniversitas Brawijaya merupakan kampus elit di Indonesia dan secara konsisten menduduki peringkat 5 terbaik bersama dengan Universitas Indonesia, Institut Pertanian Bogor, Universitas Gadjah Mada, dan Institut Teknologi Bandung berdasarkan penilaian resmi Kemenristekdikti.[5] Sedangkan di tingkat Internasional, UB menduduki peringkat 51 di Asia dan 400 dunia. UB adalah salah satu dari sebagian kecil kampus Indonesia yang terindeks secara Internasional oleh QS.[6]\r\n\r\nUB memiliki empat kampus. Kampus utama terletak di sebelah barat Kota Malang (Jl. Veteran), dan kampus kedua berada di Puncak Dieng atau dikenal sebagai UB Dieng yang digunakan untuk fasilitas olahraga outdoor, dan beberapa fasilitas riset maupun perkuliahan.[7] Sedangkan kampus ketiga dan keempat berada di Kediri dan Jakarta. Secara keseluruhan, UB memiliki aset seluas 981 hektar dan dana abadi yang mencapai 5,12 Triliun Rupiah atau setara dengan US$ 768,1 Juta. Hal tersebut menjadikan Universitas Brawijaya sebagai kampus terbesar dan terkaya kedua di tanah air setelah Universitas Indonesia.[8]', 'wildan', 'pelajar   ', '5fe01900eabb4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tambahinformasipts`
--

CREATE TABLE `tb_tambahinformasipts` (
  `id_informasi` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `fotouniversitas` varchar(100) NOT NULL,
  `namauniversitas` varchar(40) NOT NULL,
  `isiuniversitas` text NOT NULL,
  `nama` varchar(100) NOT NULL,
  `profesi` varchar(30) NOT NULL,
  `fotoprofil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_tambahinformasipts`
--

INSERT INTO `tb_tambahinformasipts` (`id_informasi`, `id`, `fotouniversitas`, `namauniversitas`, `isiuniversitas`, `nama`, `profesi`, `fotoprofil`) VALUES
(19, 75, '5fe32e8f38b93.jpg', 'universitas telkom,jakarta', 'Akademi Teknik Telekomunikasi Sandhy Putra Jakarta atau Akademi Telkom Jakarta merupakan salah satu perguruan tinggi swasta di Jakarta yang berbentuk akademi yang menyelenggarakan Program Studi D3 Teknik Telekomunikasi[1] [2]. Perguruan tinggi ini berada di bawah naungan LLDIKTI wilayah III (DKI Jakarta)[3].Pada tanggal 13 Mei 2002, kampus ini mendapatkan izin penyelenggaraan dari Menteri Pendidikan Nasional sesuai dengan Keputusan Menteri Pendidikan Nasional Republik Indonesia Nomor 94/D/O/2002. Kampus yang didirikan oleh Yayasan Sandhykara Putra Telkom (sekarang bergabung dengan Yayasan Pendidikan Telkom[4]) ini aktivitas perkuliahannya dimulai sejak 9 September 2002[1][2]. Akademi ini beralamat di Jalan Daan Mogot Km 11, kabupaten/kota D.K.I. Jakarta, Provinsi Jakarta, Indonesia[5]. Akademi Telkom Jakarta telah terakreditasi oleh BAN PT dengan nilai akreditasi adalah B[6][7][8].', 'wildan', 'pelajar   ', '5fe01900eabb4.jpg'),
(20, 80, '5fe448c1425eb.jpg', 'universitas bina nusantara,jakarta', 'Universitas Bina Nusantara pada awalnya berasal dari sebuah institusi pelatihan komputer Modern Computer Course yang didirikan pada 21 Oktober 1974.[1] Seiring dengan perkembangan, Modern Computer Course kemudian berkembang menjadi Akademi Teknik Komputer (ATK) pada 1 Juli 1981. Akademi ini menawarkan pendidikan manajemen informatika dan teknik informatika. Tiga tahun kemudian pada 13 Juli 1984 ATK mendapatkan status terdaftar dan berubah menjadi AMIK Jakarta. Pada 1 Juli 1985, AMIK membuka kursus di bidang komputerisasi akuntansi. AMIK mulai menggunakan nama Bina Nusantara pada 21 September 1985.\r\n\r\nAMIK mendapatkan penghargaan akademi komputer terbaik dari Menteri Pendidikan dan Kebudayaan pada 17 Maret 1986. AMIK Bina Nusantara kemudian membentuk STMIK (Sekolah Tinggi Manajemen Informatika dan Komputer) Bina Nusantara pada 1 Juli 1986. Institusi ini kemudian menawarkan program studi sarjana (S1) di bidang manajemen informatika dan teknik informatika.\r\n\r\nPada 9 November 1987 AMIK Bina Nusantara bergabung dengan STMIK Bina Nusantara membentuk satu institusi pendidikan yang menawarkan program studi diploma (D3) dan strata 1 (S1). STMIK Bina Nusantara memperoleh status disamakan untuk semua program studi pada 18 Maret 1992. STMIK Bina Nusantara kemudian membuka program studi pascasarjana manajemen sistem informasi, pertama di Indonesia pada 10 Mei 1993.\r\n\r\nUniversitas Bina Nusantara kemudian didirikan pada 8 Agustus 1996. STMIK Bina Nusantara kemudian bergabung dengan Universitas Bina Nusantara pada 20 Desember 1998. Saat ini, Universitas Bina Nusantara memiliki program pendidikan: Sekolah Sistem Informasi, Sekolah Teknik Informatika, Fakultas Teknik, Sekolah Bisnis dan Manajemen, Fakultas Ekonomi dan Komunikasi, Sekolah Desain, Fakultas Humaniora, Magister Teknik Informatika, Magister Manajemen Sistem Informasi, Magister Manajemen (Sekolah Bisnis), dan Doktor Riset Manajemen.\r\n\r\nPada 23 Oktober 2014, Universitas Binus meluncurkan kampus terbarunya dengan mengadakan grand launching Binus University di Alam Sutera, Serpong, Tangerang.[2] Kampus baru ini berupa gedung 22 lantai dan menerapkan konsep green campus, bangunan yang ramah lingkungan dengan pemakaian fasilitas-fasilitas hemat energi.[3] Kampus seluas 25 ribu meter persegi tersebut didesain oleh arsitek Indonesia, yaitu Budiman. Kampus Alam Sutera memiliki empat program studi utama. Keempatnya adalah computer science, school of design, school business and management, serta information system.\r\n\r\nPada 29 April 2015, Binus dan PT. Summarecon Agung Tbk. melakukan penandatanganan perjanjian pembangunan Kampus baru di Summarecon Bekasi. Kampus ini direncanakan akan dibangun diatas lahan seluas 36.400 m2 di Jalan Lingkar Bulevar Kota Summarecon Bekasi. Untuk tahap awal, pada Maret 2016 Binus akan membuka fasilitas perkuliahan online learning: BINUS UNIVERSITY LEARNING COMMUNITY (BULC) di Kota Summarecon Bekasi, dan pada tahap selanjutnya kampus Binus University akan beroperasi secara penuh pada tahun 2018[4].', 'adam', 'mahasiswa', '5fe444dfd9b46.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `level`) VALUES
(80, 'adam', '85863750a8b9295b443e89e21701890e', 'user'),
(81, 'admin', 'd65c81cf756151229c67d150eac28fd6', 'admin'),
(78, 'hehe', '9943d51b5ce65fc7e719e4e5c6e6954f', 'user'),
(76, 'hima', 'e7f8ca8ff39067a2da33934de2848676', 'user'),
(77, 'kayla', 'e9af23dd5a45126ff689eba7bb2146bb', 'user'),
(75, 'wildan', 'baad5b1d3c30b3fd226a91343ae0c237', 'user'),
(79, 'wildan2', 'ae111f47e34978d86f8ad2451f6f9620', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_datauser`
--
ALTER TABLE `tb_datauser`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `tb_kometarptn`
--
ALTER TABLE `tb_kometarptn`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`username`,`id`);

--
-- Indeks untuk tabel `tb_tambahinformasi`
--
ALTER TABLE `tb_tambahinformasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `tb_tambahinformasipts`
--
ALTER TABLE `tb_tambahinformasipts`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT untuk tabel `tb_kometarptn`
--
ALTER TABLE `tb_kometarptn`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_tambahinformasi`
--
ALTER TABLE `tb_tambahinformasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT untuk tabel `tb_tambahinformasipts`
--
ALTER TABLE `tb_tambahinformasipts`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
