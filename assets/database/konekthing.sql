-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 02:01 AM
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
(1, 'Efisiensi Sumber Energi Kehidupan Berbasis IoT', 'Isu kelangkaan energi hingga saat ini masih menjadi kendala besar sehingga efisiensi energi mutlak dilakukan.', 'http://localhost/konekthing-web/blog/detail_blog/1', 'blog(1).jpg'),
(5, 'Cara Praktis dan Mudah Mengelola Inventaris Kantor Menggunakan Sistem Informasi Inventory', 'Kondisi seperti ini membuat pebisnis mengatur cashflow bisnis dengan lebih ketat lagi. Lesunya perekonomian dirasakan oleh seluruh', 'http://localhost/konekthing-web/blog/detail_blog/5', 'blog(2).png'),
(6, 'Solusi IoT Untuk Dorong UMKM Bangkit di Tengah Pandemi', 'Pembatasan kontak antar manusia atau social distancing merupakan salah satu langkah yang dapat dilakukan untuk', 'http://localhost/konekthing-web/blog/detail_blog/6', 'blog(3).jpg'),
(7, 'Aplikasi Learning Management System (LMS) Untuk Proses Belajar Online Selama Pandemi Covid-19', 'Kegiatan Belajar Mengajar atau KBM menjadi salah satu aktivitas yang paling terdampak oleh pandemi Covid-19.', 'http://localhost/konekthing-web/blog/detail_blog/7', 'blog(4).jpeg');

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
(1, 1, 'Efisiensi Sumber Energi Kehidupan Berbasis IOT', 'Isu kelangkaan energi hingga saat ini masih menjadi kendala besar sehingga efisiensi energi mutlak dilakukan. Era digitalisasi yang tengah bergulir juga membutuhkan energi yang tak sedikit.Cisco, produsen perangkat keras untuk jaringan internet dan intranet terbesar di dunia, memprediksi, sebanyak 50 miliar perangkat akan saling terkoneksi melalui internet di seluruh dunia hingga 2020. Badan Energi Dunia (IEA) juga memproyeksikan arus industrialisasi akan menyerap energi sekitar 50 persen lebih besar hingga 2050.Marketing Konekthing Benda Pintar, Andhi Setya Hermawan mengatakan, teknologi untuk mengefisiensi energi terus berevolusi. Konekthing selaku perusahaan nasional di bidang automasi ikut serta mengelola energi agar lebih efisien melalui ragam solusi yang saling terkoneksi sejalan dengan fenomena Internet of Things (IoT).IoT, menurut Andhi, merupakan bagian dari automasi. Konekthing mencoba menggabungkan manajemen energi, automasi, dan perangkat lunak (software) dalam melayani empat pengguna. Mulai dari gedung perkantoran, residensial, industri dan infrastruktur, serta pusat data dan jaringan.Keempat pasar di atas menyerap 70 persen konsumsi energi di dunia. Selama satu dekade terakhir, evolusi teknologi dan penggunaan energi begitu cepat mendorong warga dunia memikirkan langkah-langkah digitalisasi, dekarbonisasi, hingga desentralisasi energi.Bangunan gedung mampu menghabiskan lebih dari sepertiga sumber daya energi sepanjang masa konstruksi, 40 persen total energi global, dan menghasilkan 40 persen dari total emisi gas rumah kaca. Fakta ini membuktikan, sektor bangunan perlu segera merealisasikan langkah untuk efisiensi energi.Indeks efisiensi energi Indonesia untuk bangunan-bangunan komersil, seperti rumah sakit, pusat perbelanjaan, perkantoran, dan perhotelan juga masih jauh di bawah negara Asia lainnya. Menurut Andhi, efisiensi energi di Indonesia perlu dilakukan bersamaan antara bangunan lama dan baru.Ia menekankan, efisiensi energi pada bangunan lama memberikan kontribusi lebih tinggi terhadap keseluruhan upaya efisiensi energi pada bangunan komersial. Ia mencontohkan, salah satu kompleks perkantoran di Jakarta Pusat memiliki daya listrik terpasang yang lebih besar dari daya listrik se-Kota Magelang.Ini merupakan contoh yang menyebabkan rasio elektrifikasi dan penyebaran jaringan kelistrikan di Indonesia masih belum 100 persen. ', 'blog(1).jpg'),
(5, 2, 'Cara Praktis dan Mudah Mengelola Inventaris Kantor', 'Kondisi seperti ini membuat pebisnis mengatur cashflow bisnis dengan lebih ketat lagi. Lesunya perekonomian dirasakan oleh seluruh bidang bisnis, termasuk usaha retail. Dampak nyata yang terjadi yaitu adanya pengendapan inventory dalam jangka waktu yang belum pasti. Tentunya setiap bisnis retail mempunyai barang persediaan yang harus dikelola dengan baik dan benar. Maka dari itu, sangat dibutuhkan sistem inventory untuk mengatasi hal tersebut.  Setiap bisnis tentu juga perlu memperhatikan seluruh transaksi keuangan yang terjadi, apakah sudah dikelola dengan baik seperti pencatatan secara berkala dan lain sebagainya. Dengan begitu semua akan jauh lebih ringan dalam menjalankan bisnis. Sistem inventory ini memegang peranan penting dalam sebuah bisnis retail.  Karena jika sudah rapih, maka pengelolaan piutang melalui invoice akan berjalan seiring, efektif dan saling menguntungkan. Ketersediaan barang akan tetap terjaga ketika permintaan penjualan semakin meningkat.  Seperti dilansir dalam media berita online menerangkan CV Laksana sebagai produsen komponen bus dengan mengimplementasikan solusi Enterprise Resource Planning dikenal dengan sistem ERP merupakan salah satu sistem inventory yang sangat meningkatkan efisiensi terutama dalam pengelolaan inventory.  Dengan implementasi ini, perusahaan dapat meningkatkan efisiensi hingga 20 persen di tahun 2017, dan 25 persen tahun lalu. Selain berdampak positif terhadap pengelolaan inventory, pendapatan perusahaan tahun lalu juga mengalami peningkatan sampai dengan 15 persen. Dalam artikel ini akan dibahas mengenai pengertian, manfaat, metode persediaan dan cara mengelolanya dengan mudah.  Apa Itu Sistem Inventory?  Istilah inventory sendiri dalam bahasa Indonesia ialah persediaan. Dalam bisnis persediaan ini merupakan sebuah produk yang memiliki tujuan untuk dijual kembali dan menghasilkan keuntungan dalam suatu periode. Adapun beberapa pengertian seputar persediaan dan sistem inventory, seperti berikut:  Menurut Wikipedia.org, pengertian sistem adalah suatu kesatuan yang terdiri atas komponen atau elemen yang dihubungkan bersama untuk memudahkan aliran informasi, materi, atau energi untuk mencapai suatu tujuan.  Menurut Sofyan Assauri dalam buku Marihot Manullang dan Dearlina Sinaga (2005:50), persediaan adalah sebagai suatu aktiva lancar yang meliputi barang-barang milik perusahaan dengan maksud untuk dijual dalam suatu periode usaha normal atau persediaan barang-barang yang masih dalam pekerjaan proses produksi ataupun persediaan bahan baku yang menunggu penggunaannya dalam suatu proses produksi.  Dapat disimpulkan secara umum bahwa sistem inventory merupakan sebuah kesatuan proses pengaturan yang melibatkan komponen aktiva lancar seperti barang yang dimiliki oleh perusahaan dengan maksud dijual dalam suatu periode tertentu.  Lalu, Apa Manfaat Dari Sistem Inventory?  Mungkin sebagian dari Anda belum memahami keseluruhan manfaat dari sistem inventory ini. Namun secara umum, sistem inventory ini sangat membantu Anda dalam mengetahui jumlah persediaan secara detail, menggunakannya dengan maksimal dan tentu pemakaian biaya yang optimal. Berikut beberapa manfaat dari sistem inventory:  1. Ketersediaan Barang Semakin Terjaga  Tentu Anda sebagai pebisnis ingin memberikan yang terbaik pada pelanggan. Jika perusahaan Anda tidak memiliki barang yang cukup, itu tandanya Anda tidak memiliki sistem inventory yang baik. Dengan begitu, sistem inventory akan membantu Anda menjaga ketersediaan barang di gudang baik sebagai bahan baku produksi maupun barang yang langsung di jual.  2. Dapat Meningkatkan Penjualan  Jika Anda dapat menjaga stok dengan aman maka Anda akan percaya diri untuk melakukan kegiatan penjualan. Sehingga para konsumen Anda akan lebih mempercayai komitmen perusahaan Anda karena di anggap barang yang dibutuhkan selalu ada. Efek yang ditimbulkan adalah para pelanggan atau konsumen Anda akan terus melakukan repeat order kepada perusahaan Anda.  3. Layanan Konsumen dan Mitra Tetap Aman  Melalui sistem inventory, perusahaan akan lebih dinilai tinggi kredibilitasnya dan profesional oleh konsumen dan juga mitra Anda. Kecepatan dan ketepatan menjadi kunci utama dari sistem ini. Sistem akan jauh memudahkan Anda dalam menjalankan distribusi barang dan memenuhi permintaan barang baik dari segi konsumen ataupun mitra. Ini juga akan meningkatkan citra positif perusahaan Anda.  4. Alat Kontrol Persediaan  Tidak perlu lagi secara manual melakukan pemantauan jumlah barang, saat ini dengan sistem inventory Anda akan melakukan inventory control dengan mudah, fleksibel dan menyeluruh. Sistem akan memberikan akses yang mudah untuk melihat daftar jumlah barang yang masih tersedia, barang yang sedang dalam pemesanan ataupun order barang yang sedang menanti. Sistem ini juga memudahkan Anda untuk melihat kapanpun dan dimanapun Anda menyimpan barang.  5. Membantu Pengambilan Keputusan  Dengan fleksibilitas yang tinggi dan ketepatan dalam jumlah barang, menjadikan Anda lebih mudah untuk melakukan pengambilan keputusan terkait inventory perusahaan Anda. Cukup dengan melihat daftar laporan barang yang ada, maka Anda sudah siap menganalisanya dengan cepat.  Metode Penilaian Inventory  Sistem inventory juga mengatur tentang penggunaan metode penilaian inventory yang ada. Biasanya pebisnis memakai 2 (dua) metode saja yaitu FIFO dan Average. Mengapa demikian? Berdasarkan update terakhir terkait standarisasi metode penilaian inventory di Indonesia hanya dua itu saja yang berlaku. Namun, dalam artikel ini kami informasikan metode penilaian persediaan menurut Stice (2011:667) yaitu:  1. First In First Out (FIFO)  Metode inventory first in first out atau lebih dikenal dengan istilah FIFO adalah metode inventory penilaiannya berdasarkan data barang yang masuk pertama itu harus lebih dahulu dijual atau dikeluarkan. Dengan metode ini dapat menyesuaikan dengan kenaikan harga sesuai dengan harga terbaru sehingga metode FIFO ini dapat menghasilkan lebih besar nilai persediaan barang dibandingkan dengan HPP atau harga pokok penjualan.  2. Last In First Out (LIFO)  Metode inventory last in first out atau lebih dikenal dengan istilah LIFO adalah metode inventory penilaianya berdasarkan data barang yang masuk terakhir itu harus lebih dahulu dijual atau dikeluarkan terlebih dahulu. Dengan metode inventory LIFO bertolak-belakang dari metode inventory FIFO dimana dengan kenaikan harga sesuai dengan harga terakhir stock persediaan barangnya.  3. Average (AVG)  Metode rata-rata adalah metode tengah-tengah antara FIFO dan LIFO. Harga pokok per unit barang dihitung dengan rumus (Nilai Persediaan Awal + Nilai Pembelian) / (Jumlah Persediaan Awal + Jumlah Pembelian).  Harga pokok per unit ini akan berubah setiap kali terjadi pembelian dengan harga yang berbeda. Nilai HPP dari barang yang terjual dihitung sebesar jumlah unit terjual dikalian harga pokok rata-rata pada saat terjadi penjualan. Nilai persediaan sebesar jumlah persediaan akhir dikalikan harga pokok rata-rata yang terakhir.  Adapun pengertian metode average ini menurut PSAK NO 14 Tahun 2009, metode inventory ini menggunakan biaya rata-rata tertimbang didasarkan pada asumsi bahwa seluruh barang tercampur sehingga mustahil untuk menentukan barang mana yang terjual dan barang mana yang tertahan dipersediaan.  Reeve dan Warren (2009:346) juga menyatakan tentang metode average ini bahwa “Biaya persediaan per unit merupakan rata-rata biaya pembelian. Biaya unit rata-rata untuk setiap jenis barang dihitung setiap kali terjadi pembelian”.', 'blog(2).png'),
(6, 3, 'Solusi IoT Untuk Dorong UMKM Bangkit di Tengah Pandemi', 'Pembatasan kontak antar manusia atau social distancing merupakan salah satu langkah yang dapat dilakukan untuk menahan laju penyebaran Covid-19. Namun, dengan adanya keterbatasan sistem dan belum terbiasanya masyarakat Indonesia dalam menerapkan pembatasan kontak turut menjadi masalah. Dengan dasar kondisi tersebut, menilai Indonesia harus menemukan solusi untuk menghadapi pandemi ini. Implementasi IoT (Internet of things) dapat membantu minimalisir kontak antar manusia dan dapat menjadi jawaban dari permasalah ini.     COVID-19 ini membuat kondisi jadi berubah, dan ada hal yang susah, namun di tengah kesusahan itu ada kesempatan. Solusi IoT saya yakin banyak manfaatnya karena didesain untuk dilakukan secara jarak jauh dan masif. Suatu teknologi yang solutif untuk membantu kita dalam konteks masalah COVID-19 dan membantu perekonomian nasional. Produk IoT yang bisa dimanfaatkan untuk menggenjot perekonomian Indonesia di tengah pandemi Covid-19.     Solusi ini khususnya dapat dimanfaatkan langsung oleh para pelaku usaha mikro, kecil, dan menengah (UMKM) yang terdampak Covid-19. saat ini mengurangi kontak dengan manusia merupakan hal yang penting untuk menahan laju pandemi, dengan mengubah banyak pekerjaan manual ke digital. Jadi, dengan merubah pekerjaan dari manual ke digital selain kita akan tetap harus menjaga jarak atau kontak dengan manuasia di saat pandemi ini, juga dapat meningkatkan efisiensi dan transparasi. Anda tidak akan mengalami kerugian dalam hal efiesiensi seperti kebocoran. Anda pun tahu darimana asal data tersebut.     Internet of Things memiliki banyak kegunaan serta dapat diadopsi di berbagai sektor industri. Saat ini Konekthing sedang mengintegrasikan solusi end to end managed service. Dimana kita memegang mulai dari hardware, desain hardware, Firmware, software, dan konektifitas serta infrastruktur dan big data. Hal tersebut memungkinkan setiap orang akan mendapat efisiensi dan juga transparasi. Hal tersebut juga memungkinkan anda memonitor dengan lebih efisien tanpa melakukan kontak dengan manusia.     Namun, penerapan IoT di Indonesia perlu di dongkrak. Pasalnya, implementasi IoT di Indonesia masih sangat rendah. Harus diakui Implementasi IoT di Indonesia masih sangat rendah, mungkin karena tak banyak orang yang bisa menggunakan dengan baik. Saya kira implementasi IoT tidak kurang dari 10%. Dalam waktu dekat, dalam rangka mendorong penerapan IoT di Indonesia, Konekthing siap mengimplementasikan sistem IoT dalam pengelolaan aset kesehatan, pertanian dan energi. Hal ini bentuk nyata Konekthing untuk penerapan end to end solution Smart Office.  Ada banyak masalah yang bisa diselesaikan oleh IoT. karena kami melihat ada banyak sekali inefisiensi dan nontransparansi di lapangan saat ini terutama di perusahaan dan industri. Dengan kemajuan teknologi hal tersebut bisa diatasi menggunakan platform IoT end to end managed service.     Potensi IoT berkembang saat ini sangat besar selama solusi yang ditawarkan bisa menjawab kebutuhan perusahaan saat ini yang terbagi dalam tiga tahapan.     Pertama, solusi yang membantu perusahaan beroperasi secara efektif dan aman, karena bisnis harus bisa berjalan lancar di tengah era adaptasi kebiasaan baru dengan meningkatkan protokol kesehatan.     Kedua, solusi yang meningkatkan efisiensi karena perusahaan harus meningkatkan proses bisnis mereka untuk mengurangi biaya produksi, meningkatkan produktivitas, dan meningkatkan layanan.     Ketiga, inovasi yang terukur dan inklusif karena semua sektor saat ini bermigrasi ke digital dan hal ini bisa dilakukan dengan menerapkan solusi IoT.  Banyak peluang menciptakan inovasi baru di tengah kebutuhan yang mendesak. Kami pun secara internal telah menerapkan berbagai solusi yang mendukung berjalannya kegiatan usaha dengan lebih efisien, aman, dan efektif.     Sementara itu, Marketing Konekthing, Andhi Setya Hermawan mengatakan ada tiga sektor IoT yang tumbuh pesat selama pandemi, yaitu kesehatan, pertanian, dan energi.  \"Pertama, digital healthcare ini dipaksa untuk tumbuh dengan demikian pesat, contohnya thermal detection yang sedang dibutuhkan oleh pasar ritel. Selanjutnya, remote monitoring di bidang pertanian juga tumbuh dengan pesat karena sulit mengirimkan orang sehingga data monitoring semuanya diambil dan dikirim dengan sensor-sensor IoT yang dibenamkan di sana,\" ujarnya.     Andhi menambahkan bahwa peran asosiasi dan pemerintah saat ini saling bahu membahu sebagai fasilitator dan akselerator untuk mendorong kompetensi bidang IoT sesuai dengan visi Konekthing untuk menciptakan ekosistem teknologi, khususnya inovasi IoT yang akan meningkatkan kualitas hidup masyarakat.', 'blog(3).jpg'),
(7, 4, 'Aplikasi Learning Management System (LMS)', 'Kegiatan Belajar Mengajar atau KBM menjadi salah satu aktivitas yang paling terdampak oleh pandemi Covid-19. Di Indonesia saja, ada 68 juta siswa dari tingkat pra-sekolah hingga perguruan tinggi terdampak oleh upaya mengurangi penyebaran virus Covid-19. Tingginya resiko penularan yang ditimbulkan oleh pembelajaran tatap muka membuat kegiatan belajar mengajar terutama di sekolah-sekolah yang berada di zona merah dilakukan secara daring.  Seperti hanya kerja jarak jauh atau remote working, pemanfaatan teknologi juga dilakukan agar pembelajaran jarak jauh dapat tetap berlangsung meski tanpa adanya tatap muka.  Dari WhatsApp Group untuk sarana komunikasi, Zoom Cloud Meeting sebagai ruang kelas virtual, hingga Google Classroom yang dapat memfasilitasi pengumpulan dan penilaian tugas, teknologi digital telah berperan penting dalam menghubungkan siswa dan guru di tengah krisis yang disebabkan oleh pandemi.     Tantangan Belajar Daring Selama Pandemi Covid-19  Bagi sebagian orang, teknologi digital memang bukan hal baru. Meski demikian, beralih sepenuhnya ke sistem pembelajaran berbasis digital atau digital learning bukanlah hal yang mudah, apalagi jika harus dilakukan secara mendadak dana dalam waktu yang singkat.  Ada banyak tantangan pembelajaran jarak jauh yang harus dihadapi baik oleh guru maupun siswa di era pandemi Covid-19 ini, beberapa diantaranya:     1. Manajemen waktu dan proses kerja yang tidak efektif\'  Keputusan untuk menutup sekloah-sekolah dalam upaya menekan penyebaran Covid-19 dibuat dalam waktu yang cukup singkat. Banyak sekolah dan guru tidak memiliki persiapan yang cukup untuk melakukan pembelajaran jarak jauh.  Akibatnya, untuk memastikan semua kegiatan belajar mengajar tetap terlaksana, tak jarang guru dan pengajar harus menggunakan beberapa aplikasi sekaligus. Tidak hanya menyampaikan materi di kelas, pengajar pun harus memberikan dan memeriksa tugas-tugas dan ulangan, serta menjaga komunikasi dengan siswa dan orang tua murid di beberapa kelas.     2. Tidak meratanya koneksi dan kepemilikan gadget  Tidak haya di Indonesia, ketidakmerataan koneksi dan gadget menjadi tantangan yang harus dihadapi negara lain saat harus menerapkan virtual learning. Tidak semua orang, baik guru maupun siswa, memiliki gadget yang mumpuni dan koneksi yang stabil untuk melakukan pembelajaran jarak jauh.  Traffic yang tinggi juga seringkali membuat platform penyedia layanan ovrload yang membuat kualitas video dan audio yang dihasilkan buruk.     3. Privasi data dan keamanan sistem  Di zaman serba digital seperti sekarang ini, aplikasi untuk mendukung pembelajaran virtual atau virtual learning sudah banyak tersedia. Faktanya, teknologi informasi dan komuniasi untuk menyediakan layanan pendidikan atau EdTech sudah hadir di Indonesia sejak sebelum pandemi dimulai. Menurut World Bank Blogs, penutupan sekolah sebagai upaya mengurangi penyebaran virus Covid-19 menjadikan kebutuhan terhadap EdTech seperti G-Suite for Education, Miscrosoft for Education, Zoom, dan lain sebagainya yang efektif semakin mendesak.  Sayangnya, kebutuhan mendesak tersebut membuat banyak orang mengabaikan keamanan sistem dan privasi data pengguna, terutama saat pihak penyedia software e-learning memberikan layanan secara gratis.  Aplikasi Zoom misalnya. Perusahaan penyedia layanan video conference yang mengalami lonjakan pengguna selama pandemi Covid-19 ini, baru saja terkena isu keamanan dan privasi dimana mereka dinilai memiliki tingkat perlindungan keamanan yang rendah dan memberi klaim mengenai tingkat keamanan yang tidak benar untuk pengguna.     Learning Management System (LMS)  Salah satu solusi untuk meminimalisir hambatan selama pelaksanaan pembelajaran jarak jauh adalah dengan mengembangkan sistem yang dapat mengelola semua kebutuhan pembelajaran dalam satu aplikasi. Pasar Tutor misalnya. Aplikasi yang dapat disediakan oleh PT. Konekthing Benda Pintar ini membantu mengelola pembelajaran online dan aktivitas pembelajaran agar lebih efektif dan efisien.  Fitur-fitur yang terdapat dalam Pasar Tutor diantaranya:  1. Master Data  Dengan fitur modul master data, Anda bisa dengan mudah mengelola seluruh data yang dibutuhkan dalam proses pembelajaran dengan mudah. Dari mulai data mata pelajaran, ruang kelas, pengajar, hingga data siswa ditiap kelas. Selain kemudahan untuk mengelola data, data yang tersimpan juga akan lebih aman karena disimpan di databse yang hanya dipakai oleh aplikasi Pasar Tutor Learning Management System.  2. Video Conference  Dengan aplikasi Pasar Tutor, guru dan murid dapat difasilitasi untuk melakukan kegiatan pembelajaran secara daring yang difasilitasi oleh moderator. Seperti halnyalayanan yang disediakan oleh perusahaan-perusahaan ternama seperti Google Meet, Zoom, Lark, dan lain sebagainya, modul Video Conference pada aplikasi Pasar Tutor juga memiliki fitur-fitur seperti Raise Hand yang bisa digunakan jika siswa ingin bertanya pada pengajar, Screenshare, Mute Microphone, Save Record, maupun Chat serta Moderator Report dimana moderator dapat membuat laporan hasil dari video conference yang telah berlangsung.  3. Private Session  Pada aplikasi Pasar Tutor tersemat fitur sesi privat antara guru dan murid untuk keperluan tugas bagian BP maupun pihak guru akan memberikan kelas khusus kepada muridnya secara mandiri. Modul ini juga memiliki fitur Chat, Save Record, Mute Microphone dan Screenshare untuk saling menampilkan bahan ajar untuk saling didiskusikan bersama.  4. Live Streaming Broadcasting  Fitur unggulan berikutnya dengan adanya fitur live streaming yang difasilitasi untuk pengajar agar dapat menjelaskan berbagai pelajaran seperti sedang di dalam ruang kelas saat mengajar. Nantinya murid-murid dapat menyaksikan gurunya dalam memberikan penjelasan dan ditambah lagi ada fitur Chat untuk bertanya kepada guru dan Save Record untuk disimpan dan dapat diulangi rekamannya.  5. Course Online  Modul ini difasilitasi oleh pengajar bagi siswa yang ingin belajar ekstrakulikuler sekolah. Dapat menambahkan video pembelajaran dan file materi berbagai macam ekstensi yang dapat mudah dibaca dan dipelajari saat sesi kursus.  6. Assignment  Proses memberikan, mengumpulkan dan menilai tugas-tugas harian memnag bisa dilakukan menggunakan aplikasi Pasar Tutor. Pihak sekolah dapat menambah, mengubah, melihat, serta menghapus data tugas yang harus dikerjakan siswa.  Nantinya, setelah mengerjakan tugas, siswa dapat mengunggah file tugas maupun mengerjakan ujian online yang dibuat oleh guru yang telah mereka kerjakan, dan pengajar bisa melihat, mengunduh serta memberi nilai untuk tugas-tugas yang telah dikumpulkan langsung melalui aplikasi.  7. Attendance  Tidak hadir secara langsung ke sekolah bukan berarti mengabaikan presensi atau kehadiran. Dengan aplikasi Pasar Tutor, proses absensi bisa dilakukan dengan mudah dalam dua opsi alternatif: pengajar melakukan absensi secara manual melalui fitur Manual Attendance Input atau siswa melakukan foto selfie untuk melakukan absensi.  8. E-Library  Untuk mendukung kegiatan pembelajaran, aplikasi Pasar Tutor juga dilengkapi dengan fitur E-Library. Melalui modul fitur ini, pihak sekolah dapat menambah, mengubah, melihat, mengunduh, dan menghapus data pembelajaran yang dibutuhkan oleh siswa.  9. E-Shop  Untuk mendukung para siswa saat sesi istirahat, aplikasi Pasar Tutor juga dilengkapi dengan fitur E-Shop. Melalui fitur ini, para penjual kantin sekolah dapat berpartisipasi dalam menjajakan makanan dan minuman, bahkan pihak sekolah juga dapat ikut andil dalam memajukan koperasi sekolahnya yang dapat menambah, mengubah, melihat, memesan dan mengantarkan kebutuhan siswa dengan berbagai macam pilihan layanan pembayarannya, seperti tunai, virtual account, QRIS, Link Aja, GoPay, OVO, DANA, dan lain sebagainya.  10. Authentication  Keamanan dan privasi adalah salah satu faktor penting yang harus dipertimbangkan saat menggunakan aplikasi untuk memfasilitasi pembelajaran jarak jauh. Melalui fitur Authentication, keamanan dan privasi pihak sekolah, pengajar, serta siswa terjamin keamanannya karena hanya pengguna yang terdaftarlah yang dapat mengakses aplikasi. Fitur Log Out juga tersedia agar tetap aman saat pengguna sedang tidak menggunakan aplikasi.     Kompatibilitas Seluler  Saat seluruh anggota keluarga harus beraktivitas dari rumah, ayah ibu wok from home, dan anak-anak melakukan pembelajaran jarak jauh, jumlah device yang tersedia mungkin tidak cukup untuk mengakomodir semua anggota keluarga. Tidak semua orang, terutama pelajar di tingkat pendidikan rendah dan menengah, mungkin memiliki laptop atau komputer. Karena itulah kompatibilitas seluler penting dimiliki oleh Pasar Tutor.  Dengan aplikasi Pasar Tutor yang dibuat dengan sepenuh hati oleh PT. Konekthing Benda Pintar, para siswa dapat tetap mengikuti pembelajaran jarak jauh meskipun hanya menggunakan telepon genggam atau smartphone.     Digital Learning: Masa Depan Sistem Pendidikan?  Meskipun kondisi sistem pendidikan saat ini dinilai sebagai disrupsi yang disebabkan oleh pandemi Covid-19, namun transformasi digital, termasuk di institusi pendidikan, bukanlah hal yang baru. Bukan tidak mungkin, bahwa meskipun pandemi Covid-19 berakhir nantinya, tren pembelajaran secara daring akan tetap berlanjut.  Menurut Syaiku Usman, peneliti dari SMERU Research Institute, di masa depan, dengan perkembangan teknologi yang ada, anak dapat belajar dimana saja dan guru pun dapat menjadi fasilitator dan moderator pembelajaran tanpa terikat ruang fisik. Selain fleksibilitas yang ditawarkan sistem pembelajaran model ini, biaya yang lebih rendah daripada pendidikan tradisional, serta jangkauan lebih luas, sistem pembelajaran daring juga menawarkan pilihan program yang lebih luas yang dapat mencetak sumber daya manusia berkualitas yang mampu bersaing di era industri ini.', 'blog(4).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_portofolio`
--

CREATE TABLE `kategori_portofolio` (
  `id` int(100) NOT NULL,
  `id_portofolio` int(100) NOT NULL,
  `id_kategori` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_portofolio`
--

INSERT INTO `kategori_portofolio` (`id`, `id_portofolio`, `id_kategori`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 2, 3),
(4, 3, 2),
(5, 3, 3),
(6, 4, 1),
(7, 4, 2),
(8, 4, 3),
(9, 5, 1),
(10, 5, 2),
(11, 5, 3),
(12, 6, 2),
(13, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(100) NOT NULL,
  `id_produk` int(100) NOT NULL,
  `id_kategori` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `deskripsi` text NOT NULL,
  `sub_deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `nama`, `judul`, `deskripsi`, `sub_deskripsi`) VALUES
(1, 'Mobile Development', 'Mobile Apps Development', 'Jasa pembuatan aplikasi mobile Android, IOS, Windows dan blackberry Mobile', 'Jasa pembuatan aplikasi mobile Android, IOS, Windows dan blackberry Mobile'),
(2, 'Web Development', 'Web Development Services', 'Konekting spesialisasi membuat Aplikasi Web dan Cross platform yang memberikan hasil optimal kepada setiap customer baik dari sisi waktu, konsep, desain, biaya dan teknologi.', ''),
(3, 'Manage Services', 'Web Development Services', 'Konekting spesialisasi membuat Aplikasi Web dan Cross platform yang memberikan hasil optimal kepada setiap customer baik dari sisi waktu, konsep, desain, biaya dan teknologi.', ''),
(4, '	Academy Training Center', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_fitur`
--

CREATE TABLE `layanan_fitur` (
  `id_layanan` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `nama_fitur` varchar(100) NOT NULL,
  `deskripsi_fitur` text NOT NULL,
  `gambar_fitur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan_fitur`
--

INSERT INTO `layanan_fitur` (`id_layanan`, `id`, `nama_fitur`, `deskripsi_fitur`, `gambar_fitur`) VALUES
(1, 1, 'Android Developer1212', 'Konekthing mempunyai kemampuan luar biasa untuk mengembangkan aplikasi android yang kaya fitur dan interaktif.', 'android.png'),
(1, 2, 'IOS Developer', 'Kami tahu pengembangan iOS dan dalam hal pengalaman iOS berkinerja tinggi, penuh fitur, dan ramah pengguna, tidak ada perusahaan yang lebih baik untuk terlibat selain kami.', 'apple.png');

-- --------------------------------------------------------

--
-- Table structure for table `layanan_subfitur`
--

CREATE TABLE `layanan_subfitur` (
  `id_fitur` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `nama_subfitur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(7, 'mark', 'mark@gmail.com', 'default1.jpg', '$2y$10$vjHtQ2E3i9SyidArM4Xs4OkdK4WZHDfWMgiJXfL0gsEaKlQ7MNV6W', 2, 1, 1666942236),
(14, 'siska', 'siska@gmail.com', 'default(2).jpg', '$2y$10$zDaBPdKQ7YltjdUyy8Nac.Izct5GSE2IgeKRllP3FSIFZyt9sLdvi', 2, 1, 1667207429),
(17, 'lakeswara', 'lakeswara@gmail.com', 'default.jpg', '$2y$10$mMyk/SNrpKOxuVYqLFYbgeQKGN5ITs825qxrd6rkWOexQMVU5yuK.', 2, 1, 1667359663);

-- --------------------------------------------------------

--
-- Table structure for table `master_kategori_portofolio`
--

CREATE TABLE `master_kategori_portofolio` (
  `id` int(25) NOT NULL,
  `kategori_portofolio` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_kategori_portofolio`
--

INSERT INTO `master_kategori_portofolio` (`id`, `kategori_portofolio`) VALUES
(1, 'Web'),
(2, 'Android'),
(3, 'IOS');

-- --------------------------------------------------------

--
-- Table structure for table `master_kategori_produk`
--

CREATE TABLE `master_kategori_produk` (
  `id` int(25) NOT NULL,
  `kategori_produk` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `judul`, `deskripsi`, `url`, `gambar`) VALUES
(1, 'HRM & Payroll', 'Human Resources Management', 'Aplikasi pengelolaan dan penggajian karyawan yang sesuai dengan standar operasional prosedur di Indonesia.', 'http://localhost/konekthing-web/kontak', 'pos2.png'),
(2, 'ERP System', 'Enterprise Resource Planning', 'Sistem manajemen perusahaan yang meliputi seluruh bisnis proses didalamnya yang memungkinkan perusahaan atau organinasi mengintegrasikan atau mengotomatiskan fitur dan fungsi setiap divisi.', 'http://localhost/konekthing-web/kontak', 'erp.png'),
(3, 'IOT', 'IOT Indonesia', 'Keahlian Konekthing dalam \"Internet Of Things\" atau IOT menjadi dasar teknologi kami, tidak hanya membuat perangkat IOT tetapi juga IOT Platform yang powerfull yang dapat digunakan baik multi devices dan multi aplikasi untuk berbagai jenis solusi perusahaan.', 'http://localhost/konekthing-web/kontak', 'iot.png'),
(4, 'Warehouse', 'Warehouse', 'Aplikasi management gudang dan Inventori realtime data didukung dengan multi akses dan multi gudang', 'http://localhost/konekthing-web/kontak', 'sh.png'),
(5, 'X-Logistik', 'X-Logistik', 'Aplikasi Logistik Konekthing mendukung ERP, CRM, SCM, dan Point of Sales. Sebuah aplikasi yang didesain dengan kemampuan untuk dapat berintegrasi dengan sistem lain.', 'http://localhost/konekthing-web/kontak', 'img-logistic.png'),
(6, 'X-Nething', 'X-Nething', 'Perangkat dan Sistem aplikasi Konekthing yang dilengkapi dengan fitur-fitur canggih untuk mengendalikan dan memonitor rumah, kantor gedung ataupun sensor/ perangkat lain melalui aplikasi web ataupun Mobile.', 'http://localhost/konekthing-web/kontak', 'iot1.png'),
(7, 'CCTV', 'IP CAM & CCTV', 'Konekthing memberikan jasa instalasi CCTV dan IP CAM secara profesional dalam setiap pengerjaannya, berpengalaman dengan berbagai jenis tipe & merek security camera dengan harga bersaing', 'http://localhost/konekthing-web/kontak', 'baner-03.png'),
(8, 'Digital Marketing', 'Digital Marketing', 'Konekthing memberikan jasa untuk memaksimalkan pemasaran melalui media digital.  Dengan memadukan konsep pemasaran dan teknologi, digital marketing mampu menjangkau sebanyak-banyaknya target customer secara efisien.', 'http://localhost/konekthing-web/kontak', 'baner.png'),
(9, 'Pasar Tutor', 'Pasar Tutor', 'Produk Edukasi berbasis Sistem Teknologi Informasi yang memadukan Sistem Akademik (SiAkad) dengan Learning Management System (LMS) secara interaktif.  Produk ini akan membantu kebutuhan menyampaikan materi bahan ajar ke peserta didik, mengelola ujian dan tugas-tugas, melacak progress perkembangan belajar dan pemahaman peserta didik, serta menyimpan rekam jejak setiap aktifitas belajar mengajar.', 'http://localhost/konekthing-web/kontak', 'baner1.png'),
(10, 'Academic Information System', 'Sistem Akademik', 'Sistem yang dibuat untuk mempermudah kegiatan administrasi akademik di kampus, yang mana kesemuanya diatur secara daring (online) dan telah sinkron otomatis dengan feeder PDDIKTI.  Beberapa contoh kegiatan yang bersifat administratif di kampus adalah Penerimaan Mahasiswa Baru (PMB), penyusunan kurikulum dan jadwal kuliah, mengisi Kartu Rencana Studi (KRS), mengisi nilai (untuk dosen), mengelola data dosen, karyawan dan mahasiswa, dan lain sebagainya.', 'http://localhost/konekthing-web/kontak', 'baner2.png');

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

--
-- Dumping data for table `produk_fitur`
--

INSERT INTO `produk_fitur` (`id_produk`, `id`, `nama_fitur`, `deskripsi_fitur`, `gambar_fitur`) VALUES
(1, 1, 'Manajemen Karyawan', 'Aplikasi hrm konekthing bekerja Secara cepat dan tepat, dimana seluruh sistem saling terintegrasi dan realtime data, sehingga perusahaan dapat fokus pada bisnisnya.', 'pos2.png'),
(1, 2, 'Penggajian Karyawan', 'Hrm konekthing selalu update dengan peraturan pemerintah, sehingga perusahaan tidak perlu khawatir untuk penyesuaian-penyesuaian yang terjadi.', 'scm3.png'),
(2, 3, 'ERP Konekthing', 'Berbasis webbase dapat digunakan baik online ataupun offline yang didesain untuk meningkatkan efisiensi kerja perusahaan secara menyeluruh untuk berbagai jenis bisnis proses perusahaan, berikut daftar sistem ERP Konekthing:', 'pos21.png'),
(2, 4, 'Kenapa ERP Konekthing ?', 'Komitmen kami untuk memberikan solusi sistem ERP terbaik di Indonesia kepada setiap client dan partner dalam hal sebagai berikut:', 'scm31.png'),
(3, 5, 'Smart Industry', 'Aplikasi Smart Industry Tingkatkan Efisiensi , efektifitas dan produktifitas pabrik (manufaktur) dengan menggunakan perangkat IoT Industri. Sistem manajemen terpadu secara otomatis antara mesin (sensor) dan Aplikasi yang menunjungan untuk mengurangi waktu dan kesalahan dalam proses produksi.', 'pos22.png'),
(3, 6, 'Smart Home', 'Sistem Otomatisasi rumah (rumah pintar) atau apartment yang dapat mengatur dan memonitoring Lampu, suhu ruangan, alat eletronik, serta sistem keamanan rumah : akses kontrol, sistem alarm, kamera melalui perangkat mobile.', 'sh.png'),
(3, 7, 'Smart Building', 'Sistem Otomatisasi bangunan adalah sistem kontrol yang saling terintegrasi untuk mengontrol dan mengelola aktifitas didalam gedung atau kantor dalam sebuah sistem management gedung (kantor) terpusat dan juga dapat dipantau melalui Mobile secara langsung.', 'crm.png'),
(3, 8, 'Smart Medical', 'Sistem otomastisasi rumah sakit guna mengontrol dan mengelola aktifitas rumah sakit dan seluruh perangkat rumah sakit dalam sebuah sistem management rumah sakit.', 'medic.png'),
(3, 9, 'Smart Farming', 'Aplikasi pertanian dan perkebunan modern guna meningkatkan kualitas dan kuantitas dari produk pertanian berbasis IOT dalam hal GPS, manajemen data, memindai tanah, proses dan hasil pertanian.', 'crm1.png'),
(3, 10, 'Smart Grow', 'Sistem Smart Grow adalah Aplikasi manajemen dan Perangkat IOT untuk memaksimalkan tumbuh dan berkembangnya tanaman pada ruangan indoor dan efisiensi energi dalam penggunaannya.', 'scm.png'),
(4, 11, 'Dashboard', 'Kebutuhan informasi gudang dan kecepatan input data menjadi dasar teknologi aplikasi gudang konekthing. Dengan design aplikasi yang mudah dipahami dan user friendly', 'ss-gv.png'),
(4, 12, 'Statistic', 'Kehilangan barang menjadi hal umum digudang, dengan menggunakan aplikasi gudang konekthing semua data tersimpan dan akurat karena sistem implementasi dan verifikasi yang tepat digunakan.', 'ss-gv1.png'),
(5, 13, 'Point Of Sale', 'Default aplikasi Point of Sales Konekthing mencangkup berbagai teknologi terbaru dan bisnis proses transasik dalam setiap kebutuhan diperusahaan.', 'pos23.png'),
(5, 14, 'Enterprise Resource Planning', 'Aplikasi kami dengan mudah diintegrasikan dan mencangkup Aplikasi ERP komplek untuk kebutuhan perusahaan besar untuk pengelolaan seluruh sistem yang ada diperusahaan, sehingga efisiensi waktu , keakuratan data, paperless serta pencatatan sistem yang terkelola dengan baik untuk setiap divisi didalamnya.', 'erp.png'),
(5, 15, 'Customer Relationship Management', 'Tidak hanya untuk internal perusahaan, Aplikasi CRM Konekting memberikan anda untuk memberikan pelayanan dan menjaga customer loyalti untuk sustainable bussiness.', 'crm2.png'),
(5, 16, 'Supply Chain Management', 'berbagai kegiatan yang diperlukan untuk merencanakan, mengendalikan, dan melaksanakan aliran produk, dari memperoleh bahan baku dan produksi melalui distribusi ke pelanggan akhir, dengan cara yang paling efisien dan hemat biaya', 'scm1.png'),
(6, 17, 'X-Nething Mobile', '', 'wdwdw.png'),
(6, 18, 'X-Nething Box', '', 'db_3.png'),
(6, 19, 'IRIS Control Center', '', 'testing_1.png'),
(7, 20, 'Jasa & Layanan Konekthing', '', 'baner-03.png'),
(8, 21, 'Konekthing Digital Marketing Features', '', 'baner.png'),
(9, 22, 'Konekthing Pasar Tutor Features', '', 'baner1.png'),
(10, 23, 'Konekthing SIAKAD Features', '', 'baner2.png');

-- --------------------------------------------------------

--
-- Table structure for table `produk_subfitur`
--

CREATE TABLE `produk_subfitur` (
  `id_fitur` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `nama_subfitur` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk_subfitur`
--

INSERT INTO `produk_subfitur` (`id_fitur`, `id`, `nama_subfitur`) VALUES
(1, 1, 'Data Personalia'),
(1, 2, 'Catatan Absensi'),
(1, 3, 'Penggajian & THR'),
(1, 4, 'Kelola Cuti, Sakit & Izin'),
(1, 5, 'Kelola Pinjaman'),
(1, 6, 'Pembukuan Gaji'),
(1, 7, 'BPJS'),
(1, 8, 'Kelola PPH 21'),
(2, 9, 'Memiliki modul pegawai, gaji, absensi, pajak dan jamsostek'),
(2, 10, 'Setup data komponen gaji bisa disesuaikan secara fleksibel.'),
(2, 11, 'Menawarkan berbagai metode perhitungan pajak.'),
(2, 12, 'System perhitungan pajak sesuai peraturan pajak yang berlaku.'),
(2, 13, 'Memiliki fasilitas eksport dan import data ke Microsoft Excel.'),
(3, 14, 'Sistem HRM dan Payroll'),
(3, 15, 'Sistem Akuntansi'),
(3, 16, 'Sistem Manufaktur (Pabrikasi)'),
(3, 17, 'Sistem Logistik'),
(3, 18, 'Sistem Pergudangan'),
(3, 19, 'Sistem Inventori'),
(3, 20, 'Sistem Pembelian'),
(3, 21, 'Sistem CRM'),
(3, 22, 'Sistem SCM'),
(3, 23, 'Sistem Booking Engine'),
(4, 24, 'Customize - Menyesuaikan bisnis proses perusahaan.'),
(4, 25, 'Advance ERP - Modul Lengkap.'),
(4, 26, 'Scalable - Tidak terbatas dalam pengembangan.'),
(4, 27, 'Sistem Keamanan - Layer atas dan bawah.'),
(4, 28, 'Multi - Akses, Pengguna, Perangkat, Cabang.'),
(4, 29, 'User Friendly - Mudah digunakan'),
(4, 30, 'Akses - Web (desktop), Tab dan Mobile'),
(4, 31, 'Training system - YA'),
(4, 32, 'Support - Dukungan tenaga ahli dibidang.'),
(5, 33, 'Detail'),
(5, 34, 'System'),
(5, 35, 'Brosur'),
(5, 36, 'Video'),
(6, 37, 'Detail'),
(6, 38, 'System'),
(6, 39, 'Brosur'),
(6, 40, 'Video'),
(7, 41, 'Detail'),
(7, 42, 'Brosur'),
(7, 43, 'System'),
(7, 44, 'Video'),
(8, 45, 'Detail'),
(8, 46, 'System'),
(8, 47, 'Brosur'),
(8, 48, 'Video'),
(9, 49, 'Detail'),
(9, 50, 'System'),
(9, 51, 'Brosur'),
(9, 52, 'Video'),
(10, 53, 'Detail'),
(10, 54, 'System'),
(10, 55, 'Brosur'),
(10, 56, 'Video'),
(11, 57, 'View Statistic'),
(11, 58, 'Our Stock'),
(11, 59, 'Report from in stock, out of stock'),
(11, 60, 'Handle Our Stock'),
(12, 61, 'Data Verified'),
(12, 62, 'Credible Resource Report'),
(12, 63, 'Prevant Loss Dat'),
(12, 64, 'Know Your Resource'),
(13, 65, 'Scan with Camera'),
(13, 66, 'Barcode Scan'),
(13, 67, 'Easy to Use'),
(13, 68, 'Multi Merchant'),
(14, 69, 'Data Verified'),
(14, 70, 'Credible Resource Report'),
(14, 71, 'Prevant Loss Data'),
(14, 72, 'Know Your Resource'),
(15, 73, 'Identify whole items & supplier'),
(15, 74, 'Data Reliable'),
(15, 75, 'Prevent Loss Data'),
(15, 76, 'Know Your Supplier'),
(16, 77, 'Large Scalability'),
(16, 78, 'Data Reliable'),
(16, 79, 'Prevant Loss Data'),
(16, 80, 'Know Your Customer'),
(17, 81, ' Control monitor control from distance'),
(17, 82, ' Auto discover connection'),
(17, 83, 'Notification Alarm'),
(17, 84, ' Interact with devices and other using chat'),
(18, 85, 'Manage multi scenario events'),
(18, 86, 'Gateway server between nodes & IRIS'),
(18, 87, 'Local and Online Access'),
(18, 88, 'Manage multiple user san devices'),
(19, 89, 'Manage and update X-Nething Box'),
(19, 90, 'User managemnt and Binding'),
(19, 91, 'Device activity history'),
(19, 92, 'Monitor and control devices'),
(20, 93, 'Penjualan kamera ip cam & cctv'),
(20, 94, 'Instalasi jaringan kabel coax, lan ataupun wifi'),
(20, 95, 'Pembangunan ruang cctv'),
(20, 96, 'Konsultan pengadaan cctv'),
(21, 97, 'SEO (Search Engine Optimization)'),
(21, 98, 'SEM (Search Engine Marketing)'),
(21, 99, 'SMM (Social Media Marketing)'),
(21, 100, 'Email Marketing'),
(21, 101, 'Content Marketing'),
(21, 102, 'PPC (Pay Per Click)/PPM (Pay Per Impression) Advertisement'),
(21, 103, 'Consultant Digital Marketing'),
(22, 104, 'Video Conference'),
(22, 105, 'Live Broadcasting'),
(22, 106, 'Dashboard & Reports'),
(22, 107, 'Rencana Studi '),
(22, 108, 'Tugas & Ujian'),
(22, 109, 'Private Session'),
(22, 110, 'Course Content Streaming'),
(23, 111, 'Responsive Design'),
(23, 112, 'Web Based'),
(23, 113, 'Exportable Data'),
(23, 114, 'Data Search'),
(23, 115, 'Automatic Data Backup'),
(23, 116, 'KRS Lock/ Unlock'),
(23, 117, 'Direct Print'),
(23, 118, 'Academic Year Lock'),
(23, 119, 'System Log'),
(23, 120, 'Data Entry Schedule'),
(23, 121, 'Data Entry Schedule'),
(23, 122, 'Anytime Anywhere Access'),
(23, 123, 'Sinkron Feeder PDDIKTI');

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
(1, 48);

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
-- Indexes for table `kategori_portofolio`
--
ALTER TABLE `kategori_portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
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
-- Indexes for table `layanan_subfitur`
--
ALTER TABLE `layanan_subfitur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kategori_portofolio`
--
ALTER TABLE `master_kategori_portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kategori_produk`
--
ALTER TABLE `master_kategori_produk`
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
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog_fitur`
--
ALTER TABLE `blog_fitur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_portofolio`
--
ALTER TABLE `kategori_portofolio`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `layanan_fitur`
--
ALTER TABLE `layanan_fitur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `layanan_subfitur`
--
ALTER TABLE `layanan_subfitur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `master_kategori_portofolio`
--
ALTER TABLE `master_kategori_portofolio`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_kategori_produk`
--
ALTER TABLE `master_kategori_produk`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk_fitur`
--
ALTER TABLE `produk_fitur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `produk_subfitur`
--
ALTER TABLE `produk_subfitur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
