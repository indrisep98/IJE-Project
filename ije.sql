-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27 Mei 2019 pada 08.57
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ije`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`) VALUES
(1, 'admin', '123', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id_kategori` int(10) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE IF NOT EXISTS `keranjang` (
`id` int(30) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `id_produk` varchar(30) NOT NULL,
  `harga_produk` varchar(30) NOT NULL,
  `total_harga` varchar(30) NOT NULL,
  `jumlah` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id`, `id_pemesanan`, `id_produk`, `harga_produk`, `total_harga`, `jumlah`) VALUES
(2, 2, '18', '125000', '250000', '2'),
(3, 2, '28', '25000', '25000', '1'),
(4, 3, '18', '125000', '375000', '3'),
(5, 3, '28', '25000', '25000', '1'),
(6, 4, '22', '45000', '45000', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
`id_pelanggan` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(35) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `username`, `password`, `no_hp`, `email`) VALUES
(1, 'indri', '123', 0, 'indrisep98@gmail.com'),
(15, 'insep', '456', 2147483647, 'indrisep98@gmail.com'),
(16, 'rmvro', '123', 2147483647, 'admin@gmail.com'),
(17, 'dian', '123', 2147483647, 'kiyowohwi@gmail.com'),
(18, 'rmvro', '123', 2147483647, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE IF NOT EXISTS `pemesanan` (
`id` int(11) NOT NULL,
  `id_pelanggan` varchar(35) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `nama_penerima` varchar(225) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `provinsi` varchar(225) NOT NULL,
  `kota` varchar(55) NOT NULL,
  `kode_pos` varchar(35) NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `id_pelanggan`, `tgl_pemesanan`, `nama_penerima`, `alamat`, `provinsi`, `kota`, `kode_pos`, `no_telp`, `deskripsi`) VALUES
(2, '1', '2019-05-25', '1', 'JL SRIJAYA NEGARA', 'Sumatera Selatan', 'Palembang', '30264', '2147483647', ''),
(3, '1', '2019-05-25', '1', 'JL SRIJAYA NEGARA', 'Sumatera Selatan', 'Palembang', '30312', '2147483647', ''),
(4, '17', '2019-05-02', 'jjajjajn', 'kmkm', 'skksaa', 'Palembang', '30163', 'jasnnsnn', ''),
(5, '1', '2019-05-23', 'jjajjajn', 'kmkm', 'skksaa', 'amkakam', '30163', 'jasnnsnn', 'hitam putih'),
(6, '1', '2019-05-31', 'jjajjajn', 'kakakk', 'skksaa', 'lmmlm', 'jasnas', 'jasnnsnn', 'hitam putih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_admin`
--

CREATE TABLE IF NOT EXISTS `pesan_admin` (
`id_pesan` int(10) NOT NULL,
  `id_pelanggan` int(10) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `pesan` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan_admin`
--

INSERT INTO `pesan_admin` (`id_pesan`, `id_pelanggan`, `nama`, `pesan`) VALUES
(3, 1, 'foto1', 'iihhi'),
(4, 0, 'Seblak Ceker', 'wersrt');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_pelanggan`
--

CREATE TABLE IF NOT EXISTS `pesan_pelanggan` (
`id_pesan` int(10) NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `pesan` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan_pelanggan`
--

INSERT INTO `pesan_pelanggan` (`id_pesan`, `id_pelanggan`, `pesan`) VALUES
(1, '17', 'hggkjb kkkk'),
(2, '1', 'm m m m'),
(3, '1', 'I Love you 30000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id_produk` int(10) NOT NULL,
  `kategori_produk` varchar(30) NOT NULL,
  `nama_produk` varchar(35) NOT NULL,
  `gambar_produk` varchar(225) NOT NULL,
  `gambar_produk2` varchar(225) NOT NULL,
  `gambar_produk3` varchar(255) NOT NULL,
  `harga_produk` varchar(30) NOT NULL,
  `deskripsi1` varchar(225) NOT NULL,
  `deskripsi2` varchar(500) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `kategori_produk`, `nama_produk`, `gambar_produk`, `gambar_produk2`, `gambar_produk3`, `harga_produk`, `deskripsi1`, `deskripsi2`, `status`) VALUES
(18, 'Bunga', 'Bunga Box Flanel', 'box-bunga3.png', 'box-bunga.jpg', 'box-bunga2.jpg', '125.000', ' Ukuran Medium, Diameter Kotak 32x27x6cm, Diameter Bunga 6cm, FREE kartu ucapan tema apa saja', ' Bunga Box Flanel Sangat Cocok dijadikan sebagai kado untuk orang tercinta, cocok jadi kado untuk ulang tahun, anniversary, wisuda dan lain-lain', 'Terlaris'),
(19, 'Bunga', 'Hot Air Ballon', 'hot-baloon.jpg', 'hot-baloon-2.jpg', 'hot-baloon-4.jpg', '140.000', 'BESTSELLER!!! Bisa request untuk tambahan boneka uk 17cm, lampu tumblr, dan snack. Apabila ada request MOHON ditulis di deskripsi pemesanan', ' Hot Air Ballon adalah salah satu kado unik yang IJE Project tawarkan kepada pelanggan, kado ini sangat cocok bagi kalian yang ingin memberi kado orang2 tersayang. cocok untuk kado wisuda, ultah, anniv, dll', 'Terlaris'),
(20, 'Boneka', 'Boneka Jumbo', 'boneka6.jpg', 'boneka6-1.jpg', 'boneka6-2.jpg', '195.000', 'BESTSELLER!!!! \r\nBahan : rasfur bulu halus, isi dakron+silicon.\r\nWarna : hijau, merah, biru, ungu, hijau, cream, coklat.\r\nTinggi : 1meter.\r\nBerat : 2kg', 'Boneka Jumbo ini terbuat dari bahan yang halus, sangat cocok diberikan untuk kado ultah, anniv, dll', 'Terlaris'),
(21, 'Boneka', 'Boneka Bear Wisuda', 'boneka4-1.jpg', 'boneka4-2.jpg', 'boneka5.jpg', '50.000', ' ukuran 45cm, plus bungkus plastik dan pita. Logo univ bisa direquest sesuai tempat ngampus.', 'Boneka Bear Wisuda ini memiliki bahan yang halus, sangat cocok untuk kado ultah, anniv, dll', 'status'),
(22, 'Bunga', 'Buket Snack', 'buket1-1.jpg', 'buket1-2.jpg', 'buket1.jpg', '45.000', 'Free kartu ucapan, Bisa request snack', 'Buket Snack adalah produk IJE Project yang sangat unik. Sangat cocok diberikan sebagai kado untuk orang tersayang sebagai kado ulang tahun, wisuda, dll.', 'Terlaris'),
(23, 'Boneka', 'Piala Boneka', 'boneka1-1.jpg', 'boneka1-2.jpg', 'boneka-piala2.jpg', '50.000', 'Bisa request boneka(teddy bear, hello kity, doraemon), Udah sama pita dan bungkus, bisa tema wisuda, ultah, dll. (Bisa request desain pialanya)', 'Piala Boneka adalah salah satu produk yang dijual oleh IJE Project. Kado ini sangat unik, cocok dijadikan sebagai kado ultah, wisuda, dll. Pelanggan bisa request desain. Wajib diorder bagi kalian yang suka barang2 unikk!!', 'Diskon'),
(24, 'Ilustrasi', 'Patung Wisuda', 'patung-marmer2.jpg', 'patung-marmer.jpg', 'patung-marmer3.jpg', '135.000', ' Bahan : 100% batu marmer.\r\nTinggi : 20cm.\r\nKarakter : cewek & cowo.\r\nBisa dibuat sesuai universitas masing-masing.\r\nSpesifikasi : nama wisuda, gelar, fakultas, jurusan, universitas.', ' Patung Wisuda adalah kado yang sangat cocok diberikan sebagai kado wisuda untuk orang2 tercinta. Dengan harga yang terjangkau dan produk yang berkualitas, produk ini sangat disarankan untuk anda beli. Cuss diorder!', 'Diskon'),
(25, 'Ilustrasi', 'Ilustrasi 1 Orang', 'ilustrasi.jpg', 'ILUSTRAS.jpg', '', '90.000', 'FREE bingkai foto 10R, cetak kertas foto, soft file, bungkus&pita. Pembuatan 5-7 Hari', 'Ilustrasi adalah produk IJE Project berupa foto yang diedit sehingga menghasilkan foto yang tampak seperti ilustrasi yang indah. produk ini sangat cocok diberikan sebagai kado ultah dan wisuda bagi orang2 tercinta. Kuy Order!', 'Diskon'),
(26, 'Bunga', 'Bunga Flanel', 'bunga4-1.jpg', '', '', '45.000', 'FREE!! kartu ucapan dan semprot parfume', 'Bunga Flanel Matahari adalah produk IJE Project buatan tangan sendiri. Produk unik dan cantik ini sangat cocok diberikan sebagai kado wisuda, ultah, anniv, dll kepada orang2 tercinta. Yukk buruan diorder!!!! HAPPY SHOPPING :)', 'Diskon'),
(27, 'Bunga', 'Bunga Flanel', 'bunga5.jpg', 'bunga3.jpg', '', '35.000', 'FREE!!! kartu ucapan dan semprot parfume', 'Bunga Flanel adalah produk IJE Project buatan tangan sendiri. Produk unik dan cantik ini sangat cocok diberikan sebagai kado wisuda, ultah, anniv, dll kepada orang2 tercinta. Yukk buruan diorder!!!! HAPPY SHOPPING :)', 'status'),
(28, 'Bunga', 'Bunga Flanel', 'bunga2.jpg', '', '', '25.000', ' FREE!!! kartu ucapan dan semprot parfume', ' Bunga Flanel adalah produk IJE Project buatan tangan sendiri. Produk unik dan cantik ini sangat cocok diberikan sebagai kado wisuda, ultah, anniv, dll kepada orang2 tercinta. Yukk buruan diorder!!!! HAPPY SHOPPING :)', 'status'),
(29, 'Bunga', 'Bunga Tangkai', 'bunga.jpg', '', '', '10.000', 'FREE kartu ucapan', 'Bunga Tangkai adalah produk IJE Project buatan tangan sendiri. Produk unik dan cantik ini sangat cocok diberikan sebagai kado wisuda, ultah, anniv, dll kepada orang2 tercinta. Yukk buruan diorder!!!! HAPPY SHOPPING :)', 'status'),
(30, 'Ilustrasi', 'Barbie Candy', 'boneka-permen.jpg', 'boneka3.jpg', '', '50.000', 'Cocok untuk lebaran. Kado untuk mertua, keluarga pacar atau bingkisan-bingkisan. banyak pilihan warna dan permen. Tampilan mewah', 'Barbie Candy adalah produk IJE Project buatan tangan sendiri. Produk unik dan cantik ini sangat cocok diberikan sebagai kado kepada orang2 tercinta. Yukk buruan diorder!!!! HAPPY SHOPPING :)', 'status'),
(31, 'Bunga', 'Bunga Flanel', 'buket2.jpg', '', '', '60.000', ' FREE Kartu Ucapan', 'Bunga Flanel adalah produk IJE Project buatan tangan sendiri. Produk unik dan cantik ini sangat cocok diberikan sebagai kado wisuda, ultah, anniv, dll kepada orang2 tercinta. Yukk buruan diorder!!!! HAPPY SHOPPING :)', 'status'),
(32, 'Ilustrasi', 'Ilustrasi 2 Orang', 'ilustrasi2.jpg', '', '', '130.000', ' FREE bingkai foto 10R, cetak kertas foto, soft file, bungkus&pita. Pembuatan 5-7 Hari', 'Ilustrasi adalah produk IJE Project berupa foto yang diedit sehingga menghasilkan foto yang tampak seperti ilustrasi yang indah. produk ini sangat cocok diberikan sebagai kado ultah dan wisuda bagi orang2 tercinta. Kuy Order!', 'status');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
 ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan_admin`
--
ALTER TABLE `pesan_admin`
 ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `pesan_pelanggan`
--
ALTER TABLE `pesan_pelanggan`
 ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kategori` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
MODIFY `id` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pesan_admin`
--
ALTER TABLE `pesan_admin`
MODIFY `id_pesan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pesan_pelanggan`
--
ALTER TABLE `pesan_pelanggan`
MODIFY `id_pesan` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id_produk` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
