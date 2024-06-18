-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2024 pada 08.55
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Admin1', 'Admin1'),
('Admin2', 'Admin2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `kode_anggota` varchar(10) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `kode_anggota`, `nama_anggota`, `jenis_kelamin`, `no_telp`) VALUES
(1, 'ANG-001', 'Rolly Dhea', 'Perempuan', '081234567888'),
(2, 'ANG-002', 'Virda Stefany', 'Perempuan', '087771234567'),
(3, 'ANG-003', 'Caecilia Glory', 'Perempuan', '082134567891'),
(4, 'ANG-004', 'Rafa Wega', 'Perempuan', '087879767473'),
(5, 'ANG-005', 'Alfin', 'Laki - laki', '081512345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `kode_buku` varchar(10) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `thn_terbit` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `sinopsis` text NOT NULL,
  `id_rak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `kode_buku`, `judul_buku`, `kategori`, `pengarang`, `penerbit`, `thn_terbit`, `stok`, `sinopsis`, `id_rak`) VALUES
(1, 'BHS-001', 'Buku Praktis Belajar Bahasa Inggris', 'Bahasa', 'Wahida Murriska', 'CHECKLIST', 2014, 5, 'Kamu dapat meningkatkan kemampuan bahasa Inggris Anda dengan cara yang efektif tanpa mengeluarkan banyak uang atau waktu dengan mengikuti kursus tatap muka. Cukup dengan membeli buku yang terpercaya, Anda bisa mengasah kemampuan bahasa Inggris secara mandiri. Hal ini dapat bermanfaat dalam berbagai situasi seperti mencari pekerjaan, mendaftar perguruan tinggi, atau mengikuti seleksi beasiswa. Ada banyak jenis buku belajar bahasa Inggris yang direkomendasikan mulai dari dasar hingga persiapan tes TOEFL. Salah satu buku yang bisa Anda pertimbangkan adalah \"Buku Praktis Belajar Bahasa Inggris\" karya Wahida Murriska. Buku ini cocok untuk pemula maupun untuk orang yang ingin memperbaiki kemampuan bahasa Inggris mereka dalam berbicara dan menulis. Isinya mencakup berbagai metode pembelajaran, seperti pengulangan, peniruan, deskripsi gambar, dan bercerita ulang, yang dapat membantu Anda mengembangkan kemampuan bahasa Inggris secara alami.', 3),
(2, 'BHS-002', 'Menuju Top Skor TOEFL', 'Bahasa', 'Tangguh Okta W.', 'Diva Press Group', 2018, 3, 'TOEFL adalah singkatan dari Test Of English as a Foreign Language, yang merupakan tes standar bahasa Inggris secara internasional dan penting untuk masuk ke institusi pemerintah, lembaga, dan universitas. Banyak perusahaan internasional menggunakan skor TOEFL sebagai syarat perekrutan. Belajar bahasa Inggris untuk TOEFL memerlukan intensitas belajar yang tinggi, dan buku latihan persiapan TOEFL dapat membantu mempercepat proses pembelajaran.\r\nBanyak buku latihan TOEFL di pasaran, tetapi sebagian besar terlalu berfokus pada soal-soal, tanpa memperhatikan pemahaman konsep dasar bahasa Inggris pembaca. Untuk memudahkan pembelajaran, buku ini disusun dengan fokus pada persiapan menghadapi TOEFL, terutama pada bagian struktur dan ekspresi tertulis. Buku ini mencakup 14 bab yang membahas teknik-teknik percepatan dalam menjawab soal-soal TOEFL.\r\n', 3),
(4, 'BHS-004', 'Ternyata Bahasa Mandarin Mudah', 'Bahasa', 'El Sami’un Dani Bao', 'Solusi Distribusi Buku Cv', 2019, 2, 'Bahasa Mandarin menjadi salah satu bahasa yang paling diminati untuk dipelajari di Indonesia. Di sekolah-sekolah sudah banyak yang menjadikan bahasa Mandarin sebagai bagian dari mata pelajaran, bahkan di beberapa kampus, bahasa Mandarin dijadikan sebagai pilihan jurusan yang ada dan berdiri sendiri. Pada saat ini banyak perusahaan menuntut bisa menggunakan bahasa Mandarin, hal tersebut bukan karena pemilik perusahaan merupakan orang China, tapi juga karena sebagian perusahaan melakukan kerjasama dengan perusahaan China. Keberadaan bahasa Mandarin di Indonesia sangat mempunyai dampak yang baik, dari berdampak pada pasar perdagangan hingga pada beasiswa. Maka dari itu semakin banyak yang ingin belajar bahasa Mandarin karena hal-hal tersebut. Akan tetapi belajar bahasa Mandarin bukanlah hal yang mudah karena bahasa Mandarin merupakan salah satu bahasa tersulit di dunia karena penulisannya yang berbeda dengan bahasa lain.\r\nBuku Ternyata Bahasa Mandarin Mudah ini hadir untuk membantu orang-orang yang akan dan sedang belajar bahasa Mandarin. Dengan buku ini, membuat belajar bahasa Mandarin yang awalnya terlihat sulit menjadi lebih mudah dan menyenangkan. Jadi tidak ada alasan lagi untuk kesulitan dalam mempelajarinya. Cocok untuk pemula hingga mahir.\r\n', 3),
(5, 'BHS-005', 'Mari Belajar Bahasa Jepang', 'Bahasa', 'Nina Kirana', 'Bitread Digital Publishing', 2018, 4, 'Di era globalisasi ini kebutuhan untuk menguasai bahasa asing telah menjadi tuntutan bagi seluruh masyarakat dunia agar dapat berkompetisi dalam persaingan global. Selain bahasa Inggris, bahasa Jepang merupakan salah satu bahasa yang penting untuk dikuasai karena banyak manfaat yang bisa didapat dari menguasai bahasa Jepang. Atas dasar itu buku ini disusun sebagai panduan bagi siapa pun yang ingin belajar bahasa Jepang dengan cepat dan mudah. Buku \"Mari Belajar Bahasa Jepang\" ini disusun sedemikian rupa, sehingga menjadikannya sebuah buku panduan dalam mempelajari bahasa Jepang. Sangat bermanfaat bagi Anda yang ingin/sedang belajar bahasa Jepang, akan pergi ke Negeri Matahari Terbit, atau Anda yang menyukai segala hal yang bertema Jepang. Buku ini memberikan panduan bagaimana melakukan percapakan sehari-hari yang meliputi salam dan perkenalan, kata penanya, kalimat negatif, serta ungkapan permintaan atau larangan. Selain menggunakan aksara Jepang, buku ini dilengkapi dengan tulisan latin agar memudahkan untuk membacanya. Jika Anda ingin mulai belajar dan menguasai bahasa Jepang maka buku ini wajib Anda miliki.', 3),
(6, 'RF-001', 'Super Trik: Sukses & Kaya Raya Ala Mark Zuckerberg', 'Referensi', 'Desi Setianingsih', 'Scritto Books', 2019, 3, '\"Super Trik: Sukses & Kaya Raya Ala Mark Zuckerberg\" membahas kehidupan dan kesuksesan Mark Zuckerberg, pendiri Facebook. Buku ini mengungkap sisi lain dari Zuckerberg, termasuk konflik-konflik yang dia alami, dan memberikan tips sukses ala Zuckerberg. Buku ini bertujuan memberikan inspirasi dan semangat kepada pembaca untuk mengejar mimpi dan cita-cita mereka. Kamu bisa mendapatkannya di Gramedia.', 2),
(7, 'RF-002', 'Change Your Habits, Change Your Life', 'Referensi', 'Yodhia Antariksa', 'Checklist ', 2023, 3, 'Apakah Anda punya kebiasaan? Apa saja kebiasaan itu? Baikkah atau burukkah? Atau Anda malah tidak sadar bahwa sebenarnya Anda memiliki kebiasaan?\r\nPerubahan dalam kehidupan merupakan sesuatu yang penting guna mengimbangi terjadinya perubahan zaman. Perubahan kehidupan ini merujuk pada perubahan signifikan dan berkelanjutan dalam kehidupan seseorang. Perubahan Ini melibatkan pergeseran dalam pola pikir, perilaku, atau keadaan yang mengarah pada pengalaman hidup yang positif dan memuaskan. Perubahan kehidupan bisa menantang dan memerlukan usaha serta komitmen, tetapi hadiahnya seringkali signifikan. Ini dapat membawa kebahagiaan yang lebih besar, kepuasan, dan rasa memiliki tujuan yang lebih jelas dalam hidup. Melakukan perubahan besar dalam hidup dapat dimulai dari sesuatu yang kecil yaitu perubahan kebiasaan. Jika dilakukan secara konsisten, perubahan kebiasaan ini memiliki kekuatan yang luar biasa pada kehidupan. Dalam buku ini, kita akan menemukan bagaimana kebiasaan yang kita kembangkan dapat berdampak besar pada kesejahteraan dan kesuksesan kita secara keseluruhan. Dengan memahami ilmu di balik pembentukan kebiasaan dan memanfaatkan strategi yang tepat, kita dapat melepaskan diri dari pola negatif dan menggantinya dengan kebiasaan positif yang sejalan dengan tujuan kita.\r\nSesungguhnya, bagaimana hidup saat ini dan masa depan kita ditentukan oleh kebiasaan kita. Jika kebiasaan kita produktif dan berfaedah, maka hidup kita pun pasti menakjubkan. Sebaliknya, jika yang ada kebiasaan buruk dan destruktif, maka kita harus bersiap mengarungi jalan hidup yang terjal.\r\nNamun, mengubah kebiasaan menjadi baik memang tidak semudah diucapkan. Pasti aka nada alang rintang yang mengadang. Oleh karena itu, buku ini ditorehkan demi membantu mewujudkan kebiasaan baik dalam keseharian. Bersama-sama, dengan kiat yang praktis dan bertahap, diri akan merasakan perubahan.\r\nMari, mulai dan tekuni kebiasaan baik sejak sekarang, dan rasakan impaknya dalam hidup yang gemilang.\r\n', 2),
(8, 'BHS-006', 'TOEFL Grammar Perfect Score', 'Bahasa', 'Rosyid Anwar', 'Bhuana Ilmu Populer', 2022, 4, 'TOEFL merupakan tes kemampuan bahasa Inggris yang seringkali diperlukan untuk mendaftar masuk ke universitas di Amerika Serikat atau negara-negara lain di dunia. Tes ini menjadi persyaratan bagi pendaftar dengan bahasa Inggris bukan sebagai bahasa ibu. Banyak orang yang kesulitan menjawab soal-soal TOEFL karena kurangnya pemahaman dan kehabisan waktu untuk menjawab. Tes Structure and Written Expression merupakan bagian tes TOEFL yang sulit. Buku ini dirancang untuk membantu pembaca mempersiapkan diri menghadapi tes Structure and Written Expression TOEFL. TOEFL Grammar Perfect Score adalah buku yang mempelajari bagian tes Structure and Written Expression dengan pembahasan lengkap, disertai pendekatan menganalisis materi dan contoh pertanyaan.\r\nBuku ini berisi: Pre-Test; Materi yang lengkap, komprehensif, dan mendalam; Materi disajikan berurutan mulai dari English words, word formation, English phrase, English clause, dan English sentence; menyajikan penjelasan mengenai aturan pengecualian (key exceptions), kesalahan gramatikal (common grammatical errors), grammatical inconsistencies, serta problems with usage; strategi meliputi yang aspek gramatikal, aspek komunikatif, dan strategi alternatif; terdapat contoh soal Structure and Written Expression TOEFL beserta pembahasan lengkap. Pada setiap bab, Anda dapat menguji penguasaan terhadap materi dalam sesi Latihan yang terdiri dari latihan-latihan singkat. Terdapat 5 Practice Test (200 soal) yang akan menguji pemahaman materi Anda. Pada bagian akhir buku, Anda dapat melakukan evaluasi hasil belajar dengan mengerjakan Post-Test.\r\n', 3),
(9, 'MSK-001', 'Estetika Musik Dalam Peradaban Barat', 'Musik', 'Sunarto', 'Thafa Media', 2021, 3, 'Bagaimana bisa seseorang mendefinisikan sebuah kecantikan ?\r\nBagaimana pula keahlian menjadi sebuah seni ?\r\nApa yang terdapat dalam karya besar dalam dunia musik ?\r\nPertanyaan ini selalu menjadi pembicaraan yang serius selama berabad-abad, dan sanggahan pun selalu bermunculan. Estetika [yunani, Aesthesis, rasa, sensasi] secara umum dapat diartikan sebagai filosofi atau ilmu dari sebuah kecantikan. Estetika adalah istilah umum yang diciptakan untuk menggambarkan refleksi filosofis seni, termasuk musik.\r\nSebuah estetika musik mengajukan beberapa pertanyaan mendasar tentang subjek, seperti: apa artinya musik? posisi individual dan keyakinan dapat digambarkan sebagai estetika. hal ini jg diartikan dg ideologi dalam sekumpulan keyakinan spesifik dimana terletak tanggapan dan interpretasi estetika tertentu dan juga dapat mendikte sifat pertanyaan yang diajukan tentang musik. Dalam estetika musik terdapat dua pandangan yang selalu diperbincangkan, yaitu: 1] Musik adalah seni heteronomous dan dapat mengekspresikan unsur2 tambahan musik; 2] Musik adalah seni autonomous yg mampu merealisasikan ide-ide prinsip hakikinya.\r\nSejarah musik Barat merupakan patokan utama dalam seni musik dunia karena tradisi musik Baratlah yang hingga kini mempengaruhi dunia modern. Oleh karena itu, saat kita mempelajari sejarah musik Barat, hampir dapat dikatakan pula bahwa kita sedang mempelajari sejarah musik dunia. Toh pada akhirnya musik itu bersifat universal. Setiap orang, dari manapun asalnya, akan mampu mencerna, memahami, dan menikmati musik tanpa harus mengenal, mengerti, dan memahami bahasa lirik yang digunakan penciptanya.\r\n', 4),
(11, 'BHS-007', 'Bahasa Mandarin', 'Bahasa', 'Juan', 'Checklist', 2014, 3, 'Bahasa adalah salah satu media komunikasi dan tentunya cara membuka cakrawala baru di antara banyak pihak. Salah satu bahasa asing yang sangat berpeluang di masa depan adalah bahasa Mandarin.\r\n\r\nBahasa Mandarin merupakan salah satu bahasa yang mulai banyak digunakan oleh berbagai negara. Tidak hanya itu, kini banyak pendidikan formal di sekolah mulai mencantumkan mata pelajaran bahasa Mandarin. Buku ini disusun untuk membantu belajar Bahasa Mandarin bagi tingkat pemula. Melalui buku ini para pemula dapat mempelajari bahasa Mandarin dengan mudah. Di dalamnya sudah terdapat kosakata yang sering digunakan dalam kehidupan sehari-hari.\r\n\r\n Buku ini difokuskan pada pembenaran kosakata yang sering digunakan dan tata bahasa dasar Selain itu, buku ini juga dilengkapi dengan contoh percakapan dan bacaan singkat. Terdapat soal-soal latihan dan kunci jawaban yang diharapkan mampu lebih mengasah kemampuan berbahasa Mandarin. Setelah mempelajari isi buku ini, siswa diharapkan mampu berbahasa mandarin dengan baik, serta bisa menceritakan apa yang dilakukannya dalam bahasa Mandarin.\r\n', 3),
(20, 'RF-003', '48 Laws of Power', 'Referensi', 'Robert Greene', 'Viking Press', 1998, 5, 'Buku 48 Laws of Power (48 Hukum Kekuasaan) karya Robert Greene ingin mengajarkan kita tentang apa itu kekuasaan, bagaimana cara memperolehnya, bagaimana cara mempertahankan diri dari kekuasaan orang lain, dan yang terpenting bagaimana cara memanfaatkan dan mempertahankan kekuasaan yang diperoleh.\r\nMenunjukkan bakat yang terlalu banyak dapat menyebabkan rasa benci, ketakutan, dan ketidakamanan bagi orang lain. Sebaliknya, lebih baik menarik perhatian dengan menciptakan gambar yang efektif, bahkan kontroversial. Mempekerjakan musuh dapat menciptakan kesetiaan yang lebih besar karena musuh tidak\r\nmengharap banyak dan memiliki lebih banyak untuk dibuktikan kepada kita. Di sisi lain, menjaga diri agar tetap misterius dapat meningkatkan kekuatan. Pada tahap awal, jadilah orang yang ada di mana-mana. Namun, setelah menanamkan kekuasaan, jadilah orang yang sulit didapat orang lain. Selain itu, segala sesuatu yang ditawarkan secara gratis sangatlah berbahaya, sebab sesuatu yang ditawarkan tersebut dapat berupa jebakan atau obligasi tersembunyikan.', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `tgl_aksi` date NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `hari_terlambat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `tgl_aksi`, `tgl_pinjam`, `tgl_kembali`, `id_buku`, `id_anggota`, `status`, `hari_terlambat`) VALUES
(36, '2024-06-06', '2024-05-26', '2024-06-02', 11, 2, 'Kembali', 15),
(37, '2024-06-06', '2024-05-30', '2024-06-06', 1, 1, 'Pinjam', 0),
(38, '2024-06-06', '2024-05-30', '2024-06-06', 1, 1, 'Kembali', 11),
(39, '2024-06-06', '2024-05-19', '2024-05-26', 6, 3, 'Pinjam', 0),
(40, '2024-06-06', '2024-05-19', '2024-05-26', 6, 3, 'Kembali', 22),
(41, '2024-06-06', '2024-05-26', '2024-06-02', 9, 4, 'Pinjam', 0),
(42, '2024-06-06', '2024-05-26', '2024-06-06', 9, 4, 'Kembali', 11),
(43, '2024-06-16', '2024-06-10', '2024-06-16', 20, 4, 'Pinjam', 0),
(44, '2024-06-16', '2024-06-10', '2024-06-16', 20, 4, 'Kembali', 1),
(45, '2024-06-17', '2024-06-05', '2024-06-13', 4, 1, 'Pinjam', 0),
(46, '2024-06-17', '2024-06-13', '2024-06-18', 7, 2, 'Pinjam', 0),
(47, '2024-06-17', '2024-06-14', '2024-06-16', 9, 3, 'Pinjam', 0),
(48, '2024-06-17', '2024-06-12', '2024-06-16', 7, 4, 'Pinjam', 0),
(49, '2024-06-17', '2024-06-12', '2024-06-18', 7, 4, 'Kembali', -1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `manager_perpus`
--

CREATE TABLE `manager_perpus` (
  `ussername_manager` varchar(11) NOT NULL,
  `password_manager` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `manager_perpus`
--

INSERT INTO `manager_perpus` (`ussername_manager`, `password_manager`) VALUES
('simon', 'simon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`, `id_buku`, `id_anggota`, `status`) VALUES
(25, '2024-06-05', '2024-06-13', 4, 1, 'Pinjam'),
(26, '2024-06-13', '2024-06-18', 7, 2, 'Pinjam'),
(27, '2024-06-14', '2024-06-16', 9, 3, 'Pinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak`
--

CREATE TABLE `rak` (
  `id_rak` int(11) NOT NULL,
  `nama_rak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rak`
--

INSERT INTO `rak` (`id_rak`, `nama_rak`) VALUES
(1, 'Belajar Biasa'),
(2, 'Buku Referensi'),
(3, 'Sastra dan Bahasa'),
(4, 'Seni dan Musik'),
(6, 'Sains dan Teknologi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_rak` (`id_rak`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indeks untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_rak`) REFERENCES `rak` (`id_rak`);

--
-- Ketidakleluasaan untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `laporan_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id_anggota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
