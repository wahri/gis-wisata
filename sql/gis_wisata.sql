-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 04 Jul 2021 pada 20.15
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis_wisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--
-- Kesalahan membaca struktur untuk tabel gis_wisata.wisata: #1932 - Table 'gis_wisata.wisata' doesn't exist in engine
-- Kesalahan membaca data untuk tabel gis_wisata.wisata: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `gis_wisata`.`wisata`' at line 1

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisatas`
--

CREATE TABLE `wisatas` (
  `id_wisata` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `latitude` varchar(256) NOT NULL,
  `longitude` varchar(256) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wisatas`
--

INSERT INTO `wisatas` (`id_wisata`, `nama`, `latitude`, `longitude`, `gambar`, `deskripsi`, `jenis`) VALUES
(3, 'Air Terjun Batu Dinding', '0.1873426', '101.0860654', 'batu_dinding.jpg', 'Kabupaten Kampar menyimpan keindahan alam yang luar biasa, salah satu nya Objek Wisata Air terjun Batu dinding. Air terjun Batu Dinding ini terletak di Desa Tanjung Belit Kecamatan Kampar Kiri Hulu Kabupaten Kampar Provinsi Riau.\r\n\r\nUntuk menuju ke objek wisata Air terjun Batu Dinding diperlukan waktu sekitar 3 jam perjalanan. Dari Kota Pekanbaru menuju arah Lipat Kain sepanjang 72 km. Kemudian dari Lipat Kain perjalanan kita lanjutkan ke Desa Gema sekitar 27 km. Dari Desa Gema dilanjutkan lagi sekitar 5 km menuju Desa Tanjung Belit. Untuk menuju Desa Tanjung Belit, tidak ada papan penunjuk yang pasti, sehingga ada baiknya bertanya kepada warga sekitar atau menggunakan jasa pendamping jalan menuju objek wisata dari masyarakat sekitar .\r\n\r\nKarena lokasinya yang lumayan jauh, maka diperlukan persiapan yang matang sebelum menuju kesana. Pastikan kondisi kendaraan anda sebelum berangkat dalam keadaan baik, bawalah perbekalan yang cukup serta tak lupa pula bawalah baju ganti. Pasalnya, di sepanjang perjalanan nanti tempat-tempat pemberhentian seperti musholla dan SPBU jarang dijumpai.', 1),
(4, 'Gulamo Alam Cilakio Tanjung Alai', '0.3145212', '100.7761287', 'gulamo.jpg', 'Wisata Air Terjun Gulamo terletak di Desa Tanjung Alai, Kecamatan XIII Koto Kampar, Kabupaten Kampar, Provinsi Riau. Air Terjun Gulamo memiliki air yang jernih membiru dan hutan yang masih asri. wisata sungai gulamo ini bagi masyarakat setempat seperti Green Canyonnya Jawa Barat atau cukang taneuh. destinasi wisata kabupaten kampar sangat unik dengan keindahannya, membuat para wisatawan dalam negeri maupun wisatawan luar negeri ingin mengunjunginya. di sekitar wisata air terjun, terdapat juga sebuah wisata air terjun batang kapeh desa lubuk bingau. di unjung sungai gulamo terdapat air terjun gulamo yang tingginya sekitar 3 sampai 5 meter dengan memberikan udara sejuk. wisata air terjun gulamo memiliki 3 tingkatan yang berbeda dan ketinggian pun berbeda. objek wisata ini sangat indah dengan pemandangan di kelilingi hutan serta di bingkai oleh tebing yang menjulang. saat perjalanan mengitari danau PLTA untuk sampai ke Lokasi, pengunjung akan melihat batang pohon sebagai pemandangan utama dan batu-batu besar indah yang dimana dulunya pepohonan ini sengaja di tenggelamkan untuk membangun sebuah bendungan. air sungai ini memiliki warna hijau terang. karena air sungai nya bergitu jernih, pengunjung akan dapat melihat pasir putih yang berada di dasar sungai. pengunjung dan wisatawan bisa melakukan aktivitas berenang dan bermain air di sungai maupun di dekat air terjun gulamo. selain air terjun gulamo, wisata riau yang populer lainnya adalah wisata ulu kasok kampar atau yang dikenal dengan raja ampatnya riau. wisata air terjun ini sering menjadi sebuah tempat lokasi penelitian oleh ikatan ahli geologi indonesia.', 1),
(6, 'Istana Siak Sri Indrapura', '0.7948177', '102.0467978', 'istana_siak.jpg', 'Istana Siak Sri Inderapura atau Istana Asserayah Hasyimiah atau Istana Matahari Timur merupakan kediaman resmi Sultan Siak yang mulai dibangun pada tahun 1889, yaitu pada masa pemerintahan Sultan Syarif Hasyim. Istana ini merupakan peninggalan Kesultanan Siak Sri Inderapura yang selesai dibangun pada tahun 1893.', 2),
(8, 'Hutan Pinus Cadika', '0.3284754', '101.0180113', '20210309150402.jpg', 'Wisata alam hutan pinus cadika kampar merupakan wisata baru yang ada di kampar\r\nPemuda asal Cadika Bangkinang yang tergabung dalam POKDARWIS CADIKA atau disebut Kelompok Sadar Wisata melakukan pembersihan terhadap hutan Pinus yang berada di Bangkinang Kota Kab.Kampar-Riau.\r\n\r\nHal ini dilakukan Untuk mendobrak Pariwisata Hutan Pinus di bukit candikan selama dua minggu Pemuda melaksanakan pembersihan dengan bergotoroyong (Goro) di lingkungan hutan pinus yang berada di bukit cadika Bangkinang Kota.\r\n\r\nPembersihan yang dilakukan oleh sekelompok pemuda ini berdasarkan atas keresahan Masyarakat Bangkinang Kota terutama masyarakat cadika yang menilai bahwasanya Hutan Pinus Cadika ini menjadi tempat yang tidak bermoral.\r\n\r\n,”Maka oleh sebab itu, sekelompok pemuda ini berinisiatif untuk membersihkan dan akan mengelola hutan pinus cadika ini menjadi tempat wisata yang bermoral dan bermartabat.\r\n\r\nRyan selaku Sekretaris Pokdarwis Cadika mengatakan,Sabtu (18/1/2020) masyarakat sangat risau melihat kondisi hutan pinus saat ini, mereka menilai bahwasanya semenjak tidak dirawatnya hutan pinus cadika ini berubah menjadi tempat maksiat dan tempat mabuk-mabukan oleh pemuda/i “.\r\n\r\nHal tersebut terbukti saat kami melakukan pembersihan di lingkungan hutan pinus ini. Kami menemukan berbagai macam merek botol minuman keras, alat penghisap sabu dan kami juga menemukan bekas alat kontrasepsi/kondom di lingkungan hutan pinus tersebut,” ungkap ryan.\r\n\r\nRyan menambahkan, walaupun kami melakukan pembersihan dengan menggunakan alat seadanya, namun kami mampu menyelesaikannya dengan semangat gotong royong.\r\n\r\nApabila pembersihan yang kami lakukan ini telah selesai, nantinya hutan pinus cadika ini akan kami kembangkan dan kelola menjadi objek pariwisata yang berada di pusat ibukota Kabupaten Kampar.\r\n\r\nTidak hanya itu, dalam pengelolaannya nanti kami menerapkan Sapta Pesona aman, tertib, bersih, sejuk, indah,ramah tamah dan kenangan,” ucap Ryan\r\nweb : https://wisata-hutan-pinus-cadika-bangkinang-kota.business.site/', 1),
(9, 'Air Terjun Panisan', '0.2580023', '100.6193365', '20210309150511.jpg', 'KAMPAR, RIAU — Setiap musim liburan tiba, berbagai tempat wisata ramai di kunjungi warga untuk menghabiskan hari libur, tidak sedikit orang yang rela bepergian jauh melintasi pulau, berkendara ratusan kilometer untuk mendatangi tempat wisata favorit.Berwisata sebetulnya tidak harus dengan biaya mahal, andai kita mau lebih peka melihat di sekeliling kita, maka berbagai opsi untuk menghabiskan waktu liburan sangat berlimpah ruah tersedia.\r\nSebagai negara dengan ragam suku bangsa, budaya dan keunikan lainnya, Indonesia tidak pernah kekurangan tempat eksotis dan berseni tinggi yang memancarkan pesona dan menyebar di berbagai pelosok negeri. Jika kita berpedoman pada data wikipedia, ada 83.447 desa dan kelurahan di Indonesia. Dan setiap desa/kelurahan itu pasti punya satu keunikan yang layak untuk dikembangkan menjadi destinasi wisata.', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
