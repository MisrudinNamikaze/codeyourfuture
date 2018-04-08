-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 08 Apr 2018 pada 16.04
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `arka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_artikel`
--

CREATE TABLE IF NOT EXISTS `tbl_artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(123) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `createdBy` varchar(123) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id`, `title`, `content`, `createdBy`) VALUES
(1, 'Contoh Content Satu', 'Lorem ipsum dolor sit amet, vis in veritus tacimates necessitatibus. Prompta vivendo delectus duo eu, dolore voluptatum vim cu. Ea vel wisi errem contentiones, ad omnes placerat phaedrum vim. Eu cum facer harum munere. Vidit mollis principes mel ea, eos utinam verear intellegat at. Duo primis aliquid veritus no, eu adipisci maiestatis duo, pro malorum labores ne.\r\n', 'admin'),
(2, 'Contoh Artikel Dua', '\r\nNullam tamquam disputationi sit ut, adhuc imperdiet ei eum. Pri tacimates pertinax an, ea tempor postulant est. Conceptam suscipiantur at est, veri consul id has. Pro doctus adolescens an, cu eos doming accusamus assueverit, in duo prima inermis consequat. Ad per similique adolescens dissentiunt, fugit minimum pertinax cum eu.\r\n\r\nAn petentium persecuti pri, aliquam alienum probatus pro in. Id putent phaedrum pri. Cu duo vivendo copiosae, pri ex assum mucius fabulas, errem quaerendum an vim. De', 'admin'),
(8, 'artikel 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(120) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `postId` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`id`, `nama`, `comment`, `postId`) VALUES
(7, 'misrudin', 'test komentar', '1'),
(8, 'misrudin', 'test komentar', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(125) DEFAULT NULL,
  `password` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
