-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2020 pada 23.47
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resiko_kehamilan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(3) NOT NULL,
  `pertanyaan` varchar(200) NOT NULL,
  `ifyes` varchar(10) NOT NULL,
  `ifno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `pertanyaan`, `ifyes`, `ifno`) VALUES
('1', 'Apakah nyeri panggul diawal kehamilan?', '1', 'p01'),
('10', 'apakah mengalami mual dan muntah parah persisten selama kehamilan?', '11', '11'),
('11', 'apakah menyebabkan penurunan berat badan?', '12', '12'),
('12', 'apakah mengalami dehidrasi terus menerus?', '1', '1'),
('2', 'Ada pendarahan yang keluar dari vagina ?', 'p02', 'p03'),
('3', 'apakah nyeri pada perut bawah?', '4', '4'),
('4', 'apakah cepat merasa lelah dan lemah yang ekstrim?', '5', '5'),
('5', 'apakah nyeri atau rasa terbakar saat buang air kecil?', '6', '6'),
('6', 'apakah urinyang berbau tidak enak atau terlihat keruh kemerahan?', '7', '7'),
('7', 'apakah bengkak diwajah atau sekitar mata ?', '8', '8'),
('8', 'apakah tekanan darah tinggi?', '9', '9'),
('9', 'apakah peningkatan gula darah dan punya riwayat keluarga diabetes?', '10', '10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(10) NOT NULL,
  `id_penyakit` varchar(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_penyakit`, `id_user`, `tanggal`) VALUES
(1, 'p01', 2, '2020-01-08 02:31:36'),
(2, 'p02', 2, '2020-01-08 03:35:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(10) NOT NULL,
  `jawaban_1` varchar(1) NOT NULL,
  `jawaban_2` varchar(1) NOT NULL,
  `jawaban_3` varchar(1) NOT NULL,
  `jawaban_4` varchar(1) NOT NULL,
  `jawaban_5` varchar(1) NOT NULL,
  `jawaban_6` varchar(1) NOT NULL,
  `jawaban_7` varchar(1) NOT NULL,
  `jawaban_8` varchar(1) NOT NULL,
  `jawaban_9` varchar(1) NOT NULL,
  `jawaban_10` varchar(1) NOT NULL,
  `jawaban_11` varchar(1) NOT NULL,
  `jawaban_12` varchar(1) NOT NULL,
  `jawaban_13` varchar(1) NOT NULL,
  `jawaban_14` varchar(1) NOT NULL,
  `jawaban_15` varchar(1) NOT NULL,
  `jawaban_16` varchar(1) NOT NULL,
  `jawaban_17` varchar(1) NOT NULL,
  `jawaban_18` varchar(1) NOT NULL,
  `jawaban_19` varchar(1) NOT NULL,
  `jawaban_20` varchar(1) NOT NULL,
  `tanggal_dijawab` datetime NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(10) NOT NULL,
  `nama_penyakit` varchar(200) NOT NULL,
  `definisi` varchar(245) NOT NULL,
  `penyebab` varchar(245) NOT NULL,
  `pengobatan` varchar(245) NOT NULL,
  `tambahan` varchar(245) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`, `definisi`, `penyebab`, `pengobatan`, `tambahan`) VALUES
('p01', 'Ektopik', 'ektopik adalah kehamilan yang berkembang di luar rahim, biasanya di dalam tuba falopi. Situasi ini membahayakan nyawa karena dapat menyebabkan pecahnya tuba falopi jika kehamilan berkembang.', 'pecahnya tuba falopi', 'Perawatannya harus dilakukan dengan cara operasi atau melalui obat-obatan. Namun, aborsi medis tidak dapat mengobati kehamilan di luar rahim', 'aborsi medis tidak dapat mengobati kehamilan di luar rahim'),
('p02', 'Infeksi saluran kemih', 'Infeksi saluran kemih adalah  kondisi ketika organ yang termasuk dalam sistem kemih, yaitu ginjal, ureter, kandung kemih, dan uretra, mengalami infeksi', ' masuknya bakteri ke saluran kemih melalui lubang kencing. ', 'engan pemberian obat-obatan (salah satunya antibiotik untuk ISK), yang jenis dan dosisnya disesuaikan dengan kondisi pasien.', ''),
('p03', 'Keputihan', 'Keputihan adalah kondisi ketika lendir atau cairan keluar dari vagina. cairan keputihan mengalami perubahan warna, tekstur, dan bau.', 'disebabkan oleh infeksi atau kelainan pada organ reproduksi wanita. ', 'Keputihan yang tergolong normal tidak memerlukan penanganan medis secara khusus. Kondisi ini dapat ditangani dengan membersihkan area kewanitaan secara rutin untuk menghilangkan lendir atau cairan.', 'Sementara, cara mengatasi keputihan yang tergolong abnormal dilakukan berdasarkan penyebab yang mendasari keputihan.'),
('p04', 'Preeklamsia', 'Preeklamsia adalah sebuah komplikasi pada kehamilan yang ditandai dengan tekanan darah tinggi (hipertensi) dan tanda-tanda kerusakan organ, misalnya kerusakan ginjal yang ditunjukkan oleh tingginya kadar protein pada urine (proteinuria).', 'Tanda klinis utama dari preeklampsia adalah tekanan darah yang terus meningkat. ', 'Oleh karena itu, memonitor tekanan darah secara rutin menjadi hal penting untuk dilakukan selama masa kehamilan. Jika tekanan darah wanita hamil mencapai 140/90 mm Hg atau lebih, segeralah berkonsultasi dengan dokter kandungan', ''),
('p05', 'Hyperemesis gravidarium', 'peremesis gravidarum adalah kondisi morning sickness yang ekstrem pada masa kehamilan dan ditandai dengan mual dan muntah yang parah. Kondisi ini menyebabkan dehidrasi, gangguan elektrolit dan keton dalam darah, serta penurunan berat badan ', 'akibat perubahan hormon, seperti hormon glikoprotein atau Human Chorionic Gonadotropin (hCG) dalam darah.', 'Pemberian obat-obatan lewat suntikan, seperti vitamin B6, vitamin B12, serta antiemetik atau antimual, untuk meringankan gejala hiperemesis gravidarum.', ''),
('p06', 'Diabetes gestasional', 'Diabetes gestasional adalah diabetes yang muncul pada masa kehamilan, dan hanya berlangsung hingga proses melahirkan.', 'terkait dengan perubahan hormon dalam masa kehamilan.', 'Pemeriksaan kadar gula darah rutin.', 'Diabetes gestasional dapat meningkatkan risiko bayi terlahir dengan komplikasi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(10) NOT NULL,
  `gejala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `relasi_penyakit_gejala`
--

CREATE TABLE `relasi_penyakit_gejala` (
  `id_penyakit` int(10) NOT NULL,
  `id_gejala` int(10) NOT NULL,
  `bobot` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sistem_diagnosa`
--

CREATE TABLE `sistem_diagnosa` (
  `id_diagnosa` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_penyakit` int(10) NOT NULL,
  `nama_penyakit` varchar(200) NOT NULL,
  `tgl_diagnosa` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_analisa`
--

CREATE TABLE `tmp_analisa` (
  `id_user` int(10) NOT NULL,
  `id_penyakit` int(10) NOT NULL,
  `id_gejala` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `id_user` int(10) NOT NULL,
  `id_gejala` int(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_penyakit`
--

CREATE TABLE `tmp_penyakit` (
  `id_user` int(10) NOT NULL,
  `id_penyakit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `usia` int(3) NOT NULL,
  `alamat_user` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `usia`, `alamat_user`, `username`, `password`) VALUES
(1, 'admin', 23, 'admin', 'admin', 'admin'),
(2, 'wan', 23, 'wq', 'wan', '$2y$05$HnlGUw18z5sgK3jOHr/QpOS4NFB8tD1iHInC5Brh8XBcAEOiUs6M6');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indeks untuk tabel `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indeks untuk tabel `sistem_diagnosa`
--
ALTER TABLE `sistem_diagnosa`
  ADD PRIMARY KEY (`id_diagnosa`),
  ADD KEY `fk_iduser_sd` (`id_user`),
  ADD KEY `fk_idaturan_sd` (`tgl_diagnosa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sistem_diagnosa`
--
ALTER TABLE `sistem_diagnosa`
  MODIFY `id_diagnosa` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `sistem_diagnosa`
--
ALTER TABLE `sistem_diagnosa`
  ADD CONSTRAINT `fk_iduser_sd` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
