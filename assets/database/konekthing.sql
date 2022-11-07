-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 10:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konekthing`
--

-- --------------------------------------------------------

--
-- Table structure for table `beranda`
--

CREATE TABLE `beranda` (
  `id` int(250) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `url` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `button` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beranda`
--

INSERT INTO `beranda` (`id`, `judul`, `deskripsi`, `url`, `gambar`, `button`) VALUES
(1, 'Konekthing IOT Platform', 'adalah IOT pioner Di INDONESIA Fokus Pada Sistem Otomatisasi, Komunikasi M2M, Interoperabilitas, Analisi Data Industri, Model Bisnis Baru, Pemeliharaan Prediktif & Manufaktur Kognitif. IOT Konekthing solusi untuk berbagai masalah IT dalam menjawab sistem dan perangkat yang memberikan rasa Aman, Nyaman, Fleksibilitas, Efektifitas dan Efisiensi untuk kehidupan manusia yang lebih baik.', 'http://localhost/konekthing-web/kontak', 'beranda-logo(1).svg', 'Hubungi Kami'),
(2, 'IRIS IOT Platform', 'IRIS Konekthing \"Internet Of Things\" dirancang untuk mendukung Aplikasi Vertikal seperti Smart Sensor untuk Smart Home, Smart Building, Smart Office, Smart Cattle dan Fitur Horizontal dari berbagai macam jenis proses bisnis.', 'http://localhost/konekthing-web/produk/iot', 'beranda-logo(2).svg', 'Pelajari Lebih Lanjut'),
(3, 'Software dan Aplikasi', 'Berpengalaman dalam memberikan pelayanan terbaik, teknologi yang sesuai, timeline pekerjaan terukur dan pembuatan custom sistem aplikasi berdasarkan kebutuhan client menjadikan Konekthing terbaik dibidangnya.', 'http://localhost/konekthing-web/portofolio', 'beranda-logo(3).svg', 'Lihat Portofolio');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(250) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `url` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `deskripsi`, `url`, `gambar`) VALUES
(1, 'Efisiensi Sumber Energi Kehidupan Berbasis IoT', 'Isu kelangkaan energi hingga saat ini masih menjadi kendala besar sehingga efisiensi energi mutlak dilakukan.', 'http://localhost/konekthing-web/blog/detail_blog', 'blog(1).jpg'),
(5, 'Cara Praktis dan Mudah Mengelola Inventaris Kantor Menggunakan Sistem Informasi Inventory', 'Kondisi seperti ini membuat pebisnis mengatur cashflow bisnis dengan lebih ketat lagi. Lesunya perekonomian dirasakan oleh seluruh', 'http://localhost/konekthing-web/blog/detail_blog', 'blog(2).png');

-- --------------------------------------------------------

--
-- Table structure for table `blog_fitur`
--

CREATE TABLE `blog_fitur` (
  `id_blog` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `nama_fitur` varchar(100) NOT NULL,
  `deskripsi_fitur` text NOT NULL,
  `gambar_fitur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_fitur`
--

INSERT INTO `blog_fitur` (`id_blog`, `id`, `nama_fitur`, `deskripsi_fitur`, `gambar_fitur`) VALUES
(1, 1, 'Efisiensi Sumber Energi Kehidupan Berbasis IOT', 'Isu kelangkaan energi hingga saat ini masih menjadi kendala besar sehingga efisiensi energi mutlak dilakukan. Era digitalisasi yang tengah bergulir juga membutuhkan energi yang tak sedikit.\r\n\r\nCisco, produsen perangkat keras untuk jaringan internet dan intranet terbesar di dunia, memprediksi, sebanyak 50 miliar perangkat akan saling terkoneksi melalui internet di seluruh dunia hingga 2020. Badan Energi Dunia (IEA) juga memproyeksikan arus industrialisasi akan menyerap energi sekitar 50 persen lebih besar hingga 2050.\r\n\r\nMarketing Konekthing Benda Pintar, Andhi Setya Hermawan mengatakan, teknologi untuk mengefisiensi energi terus berevolusi. Konekthing selaku perusahaan nasional di bidang automasi ikut serta mengelola energi agar lebih efisien melalui ragam solusi yang saling terkoneksi sejalan dengan fenomena Internet of Things (IoT).\r\n\r\nIoT, menurut Andhi, merupakan bagian dari automasi. Konekthing mencoba menggabungkan manajemen energi, automasi, dan perangkat lunak (software) dalam melayani empat pengguna. Mulai dari gedung perkantoran, residensial, industri dan infrastruktur, serta pusat data dan jaringan.\r\n\r\nKeempat pasar di atas menyerap 70 persen konsumsi energi di dunia. Selama satu dekade terakhir, evolusi teknologi dan penggunaan energi begitu cepat mendorong warga dunia memikirkan langkah-langkah digitalisasi, dekarbonisasi, hingga desentralisasi energi.\r\n\r\nBangunan gedung mampu menghabiskan lebih dari sepertiga sumber daya energi sepanjang masa konstruksi, 40 persen total energi global, dan menghasilkan 40 persen dari total emisi gas rumah kaca. Fakta ini membuktikan, sektor bangunan perlu segera merealisasikan langkah untuk efisiensi energi.\r\n\r\nIndeks efisiensi energi Indonesia untuk bangunan-bangunan komersil, seperti rumah sakit, pusat perbelanjaan, perkantoran, dan perhotelan juga masih jauh di bawah negara Asia lainnya. Menurut Andhi, efisiensi energi di Indonesia perlu dilakukan bersamaan antara bangunan lama dan baru.\r\n\r\nIa menekankan, efisiensi energi pada bangunan lama memberikan kontribusi lebih tinggi terhadap keseluruhan upaya efisiensi energi pada bangunan komersial. Ia mencontohkan, salah satu kompleks perkantoran di Jakarta Pusat memiliki daya listrik terpasang yang lebih besar dari daya listrik se-Kota Magelang.\r\n\r\nIni merupakan contoh yang menyebabkan rasio elektrifikasi dan penyebaran jaringan kelistrikan di Indonesia masih belum 100 persen. \"Jika 80 persen bangunan lama berkomitmen melakukan program efisiensi energi maka target efisiensi nasional untuk bangunan komersial sebesar 15 persen yang ditetapkan pemerintah akan tercapai pada 2025,\" kata Andhi.\r\n\r\nIoT, kata Andhi, memegang peranan penting mewujudkan efisiensi energi tersebut. Pengelolaan energi dengan sistem cerdas memberi banyak manfaat, misalnya, untuk memonitor dan mengevaluasi data dasar indeks efisiensi energi.\r\n\r\nSolusi efisiensi\r\nPT. Konekthing Benda Pintar memiliki sejumlah produk berbasis Internet of Things (IoT) yang menunjang efisiensi energi pada bangunan. Contohnya, adalah Smart Panel, yaitu inovasi yang menggabungkan kemampuan mengukur, mengontrol, dan mengomunikasikan pemakaian energi dalam sebuah bangunan.\r\n\r\nUntuk rumah, ada Smart Home System yang mampu mengefisiensi penggunaan listrik. Sistem ini bisa dipasang untuk mengontrol lampu atau alat listrik di rumah dengan hanya menggantikan sakelar mekanis yang sudah ada. Solusi ini menggunakan teknologi wireless terintegrasi.\r\n\r\nSebagai unggulan, Konekthing memperkenalkan IRIS Platform. Ini adalah perangkat lunak terpadu yang menjadi jantung dan otak solusi Konekthing secara keseluruhan. Solusi ini digunakan untuk mengatur fungsi AC, lampu, kipas ventilasi, pompa, eskalator, hingga elevator secara otomatis. Alat-alat ini hanya ketika diperlukan.\r\n\r\nMarketing Konekthing, Andhi Setya Hermawan mencontohkan, hotel-hotel di Indonesia telah menggunakan solusi ini untuk mengatur fungsi lampu di lorong. Lampu-lampu di lorong hotel hanya akan menyala jika pencahayaan kurang sebab ada sistem sensor yang mengaturnya.\r\n\r\nIoT juga akan mengintegrasikan perangkat keras dan lunak di dalam gedung berikut perencanaan, penginstalasian, dan pelayanan. Semua fasilitas dalam bangunan bisa terus berjalan dengan termonitor dengan baik. Pada akhirnya, solusi ini dapat memberi penghematan signifikan terhadap biaya operasional untuk engineering, peralatan, instalasi, dan waktu pengerjaan bangunan.', 'blog(1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(1) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lokasi` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `telepon`, `email`, `lokasi`, `deskripsi`) VALUES
(1, '(+6221) 77808509', 'info@konekthing.com', 'Jl. Ir. H. Juanda No.88 a, Kemiri Muka, Kecamatan Beji, Kota Depok, Jawa Barat 16423', 'Kami ingin mendiskusikan kebutuhan bisnis Anda, dan menjawab setiap pertanyaan yang mungkin Anda miliki tentang masalah bisnis Anda. Masukkan detail Anda dan kami akan segera menghubungi Anda kembali.');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama`, `judul`, `deskripsi`) VALUES
(1, 'Mobile Development', 'Mobile Apps Development', 'Jasa pembuatan aplikasi mobile Android, IOS, Windows dan blackberry Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_fitur`
--

CREATE TABLE `layanan_fitur` (
  `id_layanan` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `nama_fitur` varchar(100) NOT NULL,
  `deskripsi_fitur` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan_fitur`
--

INSERT INTO `layanan_fitur` (`id_layanan`, `id`, `nama_fitur`, `deskripsi_fitur`) VALUES
(1, 1, 'Android Developer', ' Konekthing mempunyai kemampuan luar biasa untuk mengembangkan aplikasi android yang kaya fitur dan interaktif.'),
(1, 2, 'IOS Developer', 'Kami tahu pengembangan iOS dan dalam hal pengalaman iOS berkinerja tinggi, penuh fitur, dan ramah pengguna, tidak ada perusahaan yang lebih baik untuk terlibat selain kami.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'mark', 'mark@gmail.com', 'default.jpg', '$2y$10$vjHtQ2E3i9SyidArM4Xs4OkdK4WZHDfWMgiJXfL0gsEaKlQ7MNV6W', 2, 1, 1666942236),
(14, 'siska', 'siska@gmail.com', 'default(2).jpg', '$2y$10$zDaBPdKQ7YltjdUyy8Nac.Izct5GSE2IgeKRllP3FSIFZyt9sLdvi', 2, 1, 1667207429),
(17, 'lakeswara', 'lakeswara@gmail.com', 'default.jpg', '$2y$10$mMyk/SNrpKOxuVYqLFYbgeQKGN5ITs825qxrd6rkWOexQMVU5yuK.', 2, 1, 1667359663);

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(250) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Signal Viewer', 'PT. IMMOBI SOLUSI PRIMA', 'signal-viewer.png'),
(2, 'Obrol', 'PT. INDOSAT Tbk', 'obrol.png'),
(3, 'Roompy', 'ROOMPY.COM', 'roompy.png'),
(4, 'Sistem Informasi Posbindu PTM', 'KEMENKES RI', 'sistem-informasi-posbindu-ptm.png'),
(5, 'Rumah Tiket', 'PT. TIKET 88 ONLINE', 'rumah-tiket.png'),
(6, 'Kuliner Plus', 'SMARTNESIA', 'kuliner-plus.png');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `url` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk_fitur`
--

CREATE TABLE `produk_fitur` (
  `id_produk` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `nama_fitur` varchar(100) NOT NULL,
  `deskripsi_fitur` text NOT NULL,
  `gambar_fitur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk_subfitur`
--

CREATE TABLE `produk_subfitur` (
  `id_fitur` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `nama_subfitur` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(25) NOT NULL,
  `pengunjung` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `pengunjung`) VALUES
(1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_fitur`
--
ALTER TABLE `blog_fitur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan_fitur`
--
ALTER TABLE `layanan_fitur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_fitur`
--
ALTER TABLE `produk_fitur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_subfitur`
--
ALTER TABLE `produk_subfitur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_fitur`
--
ALTER TABLE `blog_fitur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layanan_fitur`
--
ALTER TABLE `layanan_fitur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk_fitur`
--
ALTER TABLE `produk_fitur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk_subfitur`
--
ALTER TABLE `produk_subfitur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
