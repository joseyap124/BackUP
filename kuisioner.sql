-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2020 pada 04.39
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuisioner`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_domain`
--

CREATE TABLE `tbl_domain` (
  `id_domain` varchar(50) NOT NULL,
  `nama_domain` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_domain`
--

INSERT INTO `tbl_domain` (`id_domain`, `nama_domain`) VALUES
('DOM1', 'Budaya Organisasi'),
('DOM2', 'Marketing / Pemasaran'),
('DOM3', 'Keuangan dan Akuntansi'),
('DOM4', 'Production / Operationals'),
('DOM5', 'Internal and External Research and Development'),
('DOM6', 'Management Information Systems'),
('DOM7', 'Value Chain Analysis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `id_pengguna` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `alamat_perusahaan` text,
  `telp_perusahaan` varchar(50) DEFAULT NULL,
  `fax_perusahaan` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `code_kuisioner` varchar(50) DEFAULT NULL,
  `nama_auditor` varchar(50) DEFAULT NULL,
  `file_upload` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`id_pengguna`, `nama_perusahaan`, `alamat_perusahaan`, `telp_perusahaan`, `fax_perusahaan`, `tanggal`, `code_kuisioner`, `nama_auditor`, `file_upload`) VALUES
('USR-1000002', 'PT. YYY', 'PT. YYY\r\n', '123214', '1234', '2020-12-01', '10000022020-12-01', 'Julian', '09031181823005.docx'),
('USR-1000003', 'PT. AAA', 'PT. AAA', '123123', '12312312', '2020-12-01', '10000032020-12-01', 'Putra', '09031181823005.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penilaian`
--

CREATE TABLE `tbl_penilaian` (
  `id_pengguna` varchar(50) DEFAULT NULL,
  `id_domain` varchar(50) DEFAULT NULL,
  `nilai_domain` double DEFAULT NULL,
  `id_subdomain` varchar(50) DEFAULT NULL,
  `nilai_subdomain` double DEFAULT NULL,
  `id_subsubdomain` varchar(50) DEFAULT NULL,
  `nilai_subsubdomain` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `id_domain` varchar(50) DEFAULT NULL,
  `id_subdomain` varchar(50) DEFAULT NULL,
  `id_subsubdomain` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pertanyaan`
--

INSERT INTO `tbl_pertanyaan` (`id_pertanyaan`, `pertanyaan`, `id_domain`, `id_subdomain`, `id_subsubdomain`) VALUES
(1, 'Etos kerja yang kuat; datang lebih awal dan pulang lambat', 'DOM1', NULL, NULL),
(2, 'Keyakinan etis yang tinggi; kode etik bisnis yang jelas diikuti', 'DOM1', NULL, NULL),
(3, 'Pakaian  formal; kemeja dan dasi', 'DOM1', NULL, NULL),
(4, 'Pakaian informal; Pakaian santai setiap hari', 'DOM1', NULL, NULL),
(5, 'Bersosialisasi bersama di luar pekerjaan', 'DOM1', NULL, NULL),
(6, 'Jangan mempertanyakan keputusan supervisor', 'DOM1', NULL, NULL),
(7, 'Memberanikan whistleblowing', 'DOM1', NULL, NULL),
(8, 'Sadar akan kesehatan; memiliki program kesehatan', 'DOM1', NULL, NULL),
(9, 'Membolehkan \"bekerja dari rumah\" (substansial)', 'DOM1', NULL, NULL),
(10, 'Dorong kreativitas, inovasi, dan keterbukaan pikiran', 'DOM1', NULL, NULL),
(11, 'Mendukung perempuan dan minoritas; disriminasi dalam kenaikan  Jabatan', 'DOM1', NULL, NULL),
(12, 'Bertanggung jawab secara sosial; jadilah filantropi', 'DOM1', NULL, NULL),
(13, 'Adakan banyak pertemuan rapat', 'DOM1', NULL, NULL),
(14, 'Miliki gaya manajemen partisipatif', 'DOM1', NULL, NULL),
(15, 'Menjaga lingkungan alam; memiliki program keberlanjutan', 'DOM1', NULL, NULL),
(16, 'Pelaksanaan Survei Pelanggan', 'DOM2', 'SDOM1', NULL),
(17, 'Analisis Informasi Konsumen', 'DOM2', 'SDOM1', NULL),
(18, 'Evaluasi strategi penentuan posisi pasar', 'DOM2', 'SDOM1', NULL),
(19, 'Pengembangan Profil Pelanggan', 'DOM2', 'SDOM1', NULL),
(20, 'Penentuan strategi segmentasi pasar yang optimal', 'DOM2', 'SDOM1', NULL),
(21, 'Periklanan', 'DOM2', 'SDOM2', NULL),
(22, 'Promosi penjualan', 'DOM2', 'SDOM2', NULL),
(23, 'Publisitas', 'DOM2', 'SDOM2', NULL),
(24, 'Penjualan personal', 'DOM2', 'SDOM2', NULL),
(25, 'Manajemen tenaga penjualan', 'DOM2', 'SDOM2', NULL),
(26, 'Hubungan pelanggan', 'DOM2', 'SDOM2', NULL),
(27, 'Hubungan dealer', 'DOM2', 'SDOM2', NULL),
(28, 'Uji pasar/testing marketing', 'DOM2', 'SDOM3', NULL),
(29, 'Posisi produk dan merek', 'DOM2', 'SDOM3', NULL),
(30, 'Merencanakan jaminan', 'DOM2', 'SDOM3', NULL),
(31, 'Pengemasan', 'DOM2', 'SDOM3', NULL),
(32, 'Menentukan pilihan, fitur, gaya, dan kualitas produk', 'DOM2', 'SDOM3', NULL),
(33, 'Menghapus produk lama', 'DOM2', 'SDOM3', NULL),
(34, 'Menyediakan layanan pelanggan', 'DOM2', 'SDOM3', NULL),
(35, 'Perspektif jangka panjang', 'DOM2', 'SDOM4', NULL),
(36, 'Perspektif jangka pendek', 'DOM2', 'SDOM4', NULL),
(37, 'Pergudangan', 'DOM2', 'SDOM5', NULL),
(38, 'Saluran dsitribusi', 'DOM2', 'SDOM5', NULL),
(39, 'Jangkauan distribusi', 'DOM2', 'SDOM5', NULL),
(40, 'Lokasi tempat kedudukan retail', 'DOM2', 'SDOM5', NULL),
(41, 'Teritori penjualan', 'DOM2', 'SDOM5', NULL),
(42, 'Tingkat dan lokasi inventaris (Inventory)', 'DOM2', 'SDOM5', NULL),
(43, 'Operator transportasi', 'DOM2', 'SDOM5', NULL),
(44, 'Grosir', 'DOM2', 'SDOM5', NULL),
(45, 'Retail', 'DOM2', 'SDOM5', NULL),
(46, 'Melakukan riset pemasaran', 'DOM2', 'SDOM6', NULL),
(47, 'Net Present Value (NPV)', 'DOM2', 'SDOM7', NULL),
(48, 'Present Value of Benefits (PVB)', 'DOM2', 'SDOM7', NULL),
(49, 'Present Value of Costs (PVC)', 'DOM2', 'SDOM7', NULL),
(50, 'Benefit Cost Ratio (BCR)', 'DOM2', 'SDOM7', NULL),
(51, 'Net Benefit', 'DOM2', 'SDOM7', NULL),
(52, 'Current Ratio', 'DOM3', 'SDOM8', 'SSDOM1'),
(53, 'Quick Ratio', 'DOM3', 'SDOM8', 'SSDOM1'),
(54, 'Cash Ratio', 'DOM3', 'SDOM8', 'SSDOM1'),
(55, 'Debt to Total Asset Rasio (DAR)', 'DOM3', 'SDOM8', 'SSDOM2'),
(56, 'Debt to Equity Ratio (DER)', 'DOM3', 'SDOM8', 'SSDOM2'),
(57, 'Long Term Debt to Equity Ratio (LTDER)', 'DOM3', 'SDOM8', 'SSDOM2'),
(58, 'Times Interest Eraned Ratio (TIER)', 'DOM3', 'SDOM8', 'SSDOM2'),
(59, 'Tangible Assets Debt Coverage (TAD)', 'DOM3', 'SDOM8', 'SSDOM2'),
(60, 'Inventory Turnover (IT)', 'DOM3', 'SDOM8', 'SSDOM3'),
(61, 'Fixed Asset Turnover (FAT)', 'DOM3', 'SDOM8', 'SSDOM3'),
(62, 'Total Asset Turnover (TAT)', 'DOM3', 'SDOM8', 'SSDOM3'),
(63, 'Account Receivable Turnover (ART)', 'DOM3', 'SDOM8', 'SSDOM3'),
(64, 'Average Collection Period (ACP)', 'DOM3', 'SDOM8', 'SSDOM3'),
(65, 'Gross Profit Margin (GPM)', 'DOM3', 'SDOM8', 'SSDOM4'),
(66, 'Operating Profit Margin (OPM)', 'DOM3', 'SDOM8', 'SSDOM4'),
(67, 'Net Profit Margin (NPM)', 'DOM3', 'SDOM8', 'SSDOM4'),
(68, 'Return on Total Asset (RTA)', 'DOM3', 'SDOM8', 'SSDOM4'),
(69, 'Return on Stockholders\' Equity (RSE)', 'DOM3', 'SDOM8', 'SSDOM4'),
(70, 'Earning Per Share (EPS)', 'DOM3', 'SDOM8', 'SSDOM4'),
(71, 'Price-Earnings Ratio (PER)\r\n', 'DOM3', 'SDOM8', 'SSDOM4'),
(72, 'Total Revenues (TR)', 'DOM3', 'SDOM9', 'SSDOM5'),
(73, 'Total Costs (TC) ', 'DOM3', 'SDOM9', 'SSDOM5'),
(74, 'Increasing Fixed Costs (FC) \r\n', 'DOM3', 'SDOM9', 'SSDOM5'),
(75, 'Variable Costs (VC)', 'DOM3', 'SDOM9', 'SSDOM5'),
(76, 'Technology', 'DOM3', 'SDOM9', 'SSDOM6'),
(77, 'Facility Layout', 'DOM3', 'SDOM9', 'SSDOM6'),
(78, 'Process Flow\r\n', 'DOM3', 'SDOM9', 'SSDOM6'),
(79, 'Facility Location', 'DOM3', 'SDOM9', 'SSDOM6'),
(80, 'Line Balancing\r\n', 'DOM3', 'SDOM9', 'SSDOM6'),
(81, 'Process Control', 'DOM3', 'SDOM9', 'SSDOM6'),
(82, 'Transportation', 'DOM3', 'SDOM9', 'SSDOM6'),
(83, 'Distances from raw materials to production sites to customers\r\n', 'DOM3', 'SDOM9', 'SSDOM6'),
(84, 'Forecasting', 'DOM3', 'SDOM9', 'SSDOM7'),
(85, 'Facilities Planning', 'DOM3', 'SDOM9', 'SSDOM7'),
(86, 'Aggregate Planning', 'DOM3', 'SDOM9', 'SSDOM7'),
(87, 'Scheduling, capacity planning\r\n', 'DOM3', 'SDOM9', 'SSDOM7'),
(88, 'Queuing Analysis', 'DOM3', 'SDOM9', 'SSDOM7'),
(89, 'Raw materials', 'DOM3', 'SDOM9', 'SSDOM8'),
(90, 'Work-In- Process And Finished Goods', 'DOM3', 'SDOM9', 'SSDOM8'),
(91, 'When To Order\r\n', 'DOM3', 'SDOM9', 'SSDOM8'),
(92, 'How Much To Order\r\n', 'DOM3', 'SDOM9', 'SSDOM8'),
(93, 'Materials Handling', 'DOM3', 'SDOM9', 'SSDOM8'),
(94, 'Skilled\r\n', 'DOM3', 'SDOM9', 'SSDOM9'),
(95, 'Unskilled\r\n', 'DOM3', 'SDOM9', 'SSDOM9'),
(96, 'Clerical\r\n', 'DOM3', 'SDOM9', 'SSDOM9'),
(97, 'Caring For Job Design\r\n', 'DOM3', 'SDOM9', 'SSDOM9'),
(98, 'Work Measurement\r\n', 'DOM3', 'SDOM9', 'SSDOM9'),
(99, 'Job Enrichment\r\n', 'DOM3', 'SDOM9', 'SSDOM9'),
(100, 'Work Standards\r\n', 'DOM3', 'SDOM9', 'SSDOM9'),
(101, 'Quality Control\r\n', 'DOM3', 'SDOM9', 'SSDOM10'),
(102, 'Sampling\r\n', 'DOM3', 'SDOM9', 'SSDOM10'),
(103, 'Testing\r\n', 'DOM3', 'SDOM9', 'SSDOM10'),
(104, 'Quality Assurance\r\n', 'DOM3', 'SDOM9', 'SSDOM10'),
(105, 'Cost Control\r\n', 'DOM3', 'SDOM9', 'SSDOM10'),
(106, 'Technology\r\n', 'DOM4', 'SDOM10', NULL),
(107, 'Facility Layout\r\n', 'DOM4', 'SDOM10', NULL),
(108, 'Process Flow Analysis\r\n', 'DOM4', 'SDOM10', NULL),
(109, 'Facility Location\r\n', 'DOM4', 'SDOM10', NULL),
(110, 'Line Balancing\r\n', 'DOM4', 'SDOM10', NULL),
(111, 'Process Control\r\n', 'DOM4', 'SDOM10', NULL),
(112, 'Transportation Analysis\r\n', 'DOM4', 'SDOM10', NULL),
(113, 'Distance From Raw Material\r\n', 'DOM4', 'SDOM10', NULL),
(114, 'Distance To Customer\r\n', 'DOM4', 'SDOM10', NULL),
(115, 'Forecasting ', 'DOM4', 'SDOM11', NULL),
(116, 'Facilities Planning\r\n', 'DOM4', 'SDOM11', NULL),
(117, 'Aggregate Planning\r\n', 'DOM4', 'SDOM11', NULL),
(118, 'Scheduling\r\n', 'DOM4', 'SDOM11', NULL),
(119, 'Capacity Planning\r\n', 'DOM4', 'SDOM11', NULL),
(120, 'Queing Analysis\r\n', 'DOM4', 'SDOM11', NULL),
(121, 'Managing The Level Of Raw Materials\r\n', 'DOM4', 'SDOM12', NULL),
(122, 'Work-In-Process\r\n', 'DOM4', 'SDOM12', NULL),
(123, 'Finished Goods\r\n', 'DOM4', 'SDOM12', NULL),
(124, 'Managing The Skilled, Unskilled, Clerical\r\n', 'DOM4', 'SDOM13', NULL),
(125, 'Managerial Employee\r\n', 'DOM4', 'SDOM13', NULL),
(126, 'Quality Control\r\n', 'DOM4', 'SDOM14', NULL),
(127, 'Sampling\r\n', 'DOM4', 'SDOM14', NULL),
(128, 'Testing\r\n', 'DOM4', 'SDOM14', NULL),
(129, 'Quality Assurance\r\n', 'DOM4', 'SDOM14', NULL),
(130, 'Cost Control\r\n', 'DOM4', 'SDOM14', NULL),
(131, 'Financing As Many Project Proposals As Possible\r\n', 'DOM5', NULL, NULL),
(132, 'Using A Percentage-Of-Sales Method\r\n', 'DOM5', NULL, NULL),
(133, 'Budgeting About The Same Amount That Competitors Spend For R&D\r\n', 'DOM5', NULL, NULL),
(134, '\r\nDeciding How Many Successful New Products Are Needed And Working Backward To Estimate The Required R&D Investment\r\n', 'DOM5', NULL, NULL),
(135, 'Management Advantage\r\n', 'DOM6', NULL, NULL),
(136, 'Disadvantage\r\n', 'DOM6', NULL, NULL),
(137, 'Internal Strengths\r\n', 'DOM6', NULL, NULL),
(138, 'Weaknesses \r\n', 'DOM6', NULL, NULL),
(139, 'Collects\r\n', 'DOM6', NULL, NULL),
(140, 'Codes\r\n', 'DOM6', NULL, NULL),
(141, 'Stores\r\n', 'DOM6', NULL, NULL),
(142, 'Synthesizes\r\n', 'DOM6', NULL, NULL),
(143, 'Presents Information In Such A Manner\r\n', 'DOM6', NULL, NULL),
(144, 'Database\r\n', 'DOM6', NULL, NULL),
(145, 'Kinds Of Records\r\n', 'DOM6', NULL, NULL),
(146, 'About Marketing\r\n', 'DOM6', NULL, NULL),
(147, 'Finance\r\n', 'DOM6', NULL, NULL),
(148, 'Production\r\n', 'DOM6', NULL, NULL),
(149, 'Typical Statistical\r\n', 'DOM6', NULL, NULL),
(150, 'Stepwise Regression\r\n', 'DOM6', NULL, NULL),
(151, 'Cluster Analysis \r\n', 'DOM6', NULL, NULL),
(152, 'Who Is Not Your Customer\r\n', 'DOM6', NULL, NULL),
(153, 'Obtaining Raw Materials\r\n', 'DOM7', 'SDOM15', NULL),
(154, 'Designing Products\r\n', 'DOM7', 'SDOM15', NULL),
(155, 'Building Manufacturing Facilities\r\n', 'DOM7', 'SDOM15', NULL),
(156, 'Developing Cooperative Agreements\r\n', 'DOM7', 'SDOM15', NULL),
(157, 'Providing Customer Service\r\n', 'DOM7', 'SDOM15', NULL),
(158, 'Hose Of Their Competitors\r\n', 'DOM7', 'SDOM15', NULL),
(159, 'Suppliers\r\n', 'DOM7', 'SDOM15', NULL),
(160, 'Distributors\r\n', 'DOM7', 'SDOM15', NULL),
(161, 'Costs Associated\r\n', 'DOM7', 'SDOM15', NULL),
(162, 'Purchasing Raw Materials To Manufacturing Product\r\n', 'DOM7', 'SDOM15', NULL),
(163, 'Marketing Those Products\r\n', 'DOM7', 'SDOM15', NULL),
(164, 'Substantial Judgment\r\n', 'DOM7', 'SDOM15', NULL),
(165, 'Divide A Firm\'s Operations Into Specific\r\nActivities\r\n', 'DOM7', 'SDOM15', NULL),
(166, 'Business Processes\r\n', 'DOM7', 'SDOM15', NULL),
(167, 'Attempts To Attach A Cost To Each Discrete Activity\r\n', 'DOM7', 'SDOM15', NULL),
(168, 'Cost Of Doing Business\r\n', 'DOM7', 'SDOM15', NULL),
(169, 'Determine Where Cost Advantages\r\n', 'DOM7', 'SDOM15', NULL),
(170, 'Disadvantages In Their Value\r\n', 'DOM7', 'SDOM15', NULL),
(171, 'Chain Occur Relative\r\n', 'DOM7', 'SDOM15', NULL),
(172, 'Price Competitiveness \r\n', 'DOM7', 'SDOM15', NULL),
(173, 'Raw Materials\r\n', 'DOM7', 'SDOM16', 'SSDOM11'),
(174, 'Fuel\r\n', 'DOM7', 'SDOM16', 'SSDOM11'),
(175, 'Energy\r\n', 'DOM7', 'SDOM16', 'SSDOM11'),
(176, 'Transportation\r\n', 'DOM7', 'SDOM16', 'SSDOM11'),
(177, 'Truck Drivers\r\n', 'DOM7', 'SDOM16', 'SSDOM11'),
(178, 'Truck Maintenance\r\n', 'DOM7', 'SDOM16', 'SSDOM11'),
(179, 'Component Parts\r\n', 'DOM7', 'SDOM16', 'SSDOM11'),
(180, 'Inspection\r\n', 'DOM7', 'SDOM16', 'SSDOM11'),
(181, 'Storing\r\n', 'DOM7', 'SDOM16', 'SSDOM11'),
(182, 'Warehouse\r\n', 'DOM7', 'SDOM16', 'SSDOM11'),
(183, 'Inventory System\r\n', 'DOM7', 'SDOM16', 'SSDOM12'),
(184, 'Receiving\r\n', 'DOM7', 'SDOM16', 'SSDOM12'),
(185, 'Plant Layout\r\n', 'DOM7', 'SDOM16', 'SSDOM12'),
(186, 'Maintenance\r\n', 'DOM7', 'SDOM16', 'SSDOM12'),
(187, 'Plant Location\r\n', 'DOM7', 'SDOM16', 'SSDOM12'),
(188, 'Computer\r\n', 'DOM7', 'SDOM16', 'SSDOM12'),
(189, 'R & D\r\n', 'DOM7', 'SDOM16', 'SSDOM12'),
(190, 'Cost Accounting\r\n', 'DOM7', 'SDOM16', 'SSDOM12'),
(191, 'Loading\r\n', 'DOM7', 'SDOM16', 'SSDOM13'),
(192, 'Shipping\r\n', 'DOM7', 'SDOM16', 'SSDOM13'),
(193, 'Budgeting\r\n', 'DOM7', 'SDOM16', 'SSDOM13'),
(194, 'Personnel\r\n', 'DOM7', 'SDOM16', 'SSDOM13'),
(195, 'Internet\r\n', 'DOM7', 'SDOM16', 'SSDOM13'),
(196, 'Trucking\r\n', 'DOM7', 'SDOM16', 'SSDOM13'),
(197, 'Railroads\r\n', 'DOM7', 'SDOM16', 'SSDOM13'),
(198, 'Fuel\r\n', 'DOM7', 'SDOM16', 'SSDOM13'),
(199, 'Maintenance\r\n', 'DOM7', 'SDOM16', 'SSDOM13'),
(200, 'Salespersons\r\n', 'DOM7', 'SDOM16', 'SSDOM14'),
(201, 'Website\r\n', 'DOM7', 'SDOM16', 'SSDOM14'),
(202, 'Internet\r\n', 'DOM7', 'SDOM16', 'SSDOM14'),
(203, 'Publicity\r\n', 'DOM7', 'SDOM16', 'SSDOM14'),
(204, 'Promotion\r\n', 'DOM7', 'SDOM16', 'SSDOM14'),
(205, 'Advertising\r\n', 'DOM7', 'SDOM16', 'SSDOM14'),
(206, 'Transportation\r\n', 'DOM7', 'SDOM16', 'SSDOM14'),
(207, 'Food And Lodging\r\n', 'DOM7', 'SDOM16', 'SSDOM14'),
(208, 'Postage\r\n', 'DOM7', 'SDOM16', 'SSDOM15'),
(209, 'Phone\r\n', 'DOM7', 'SDOM16', 'SSDOM15'),
(210, 'Internet \r\n', 'DOM7', 'SDOM16', 'SSDOM15'),
(211, 'Warranty\r\n', 'DOM7', 'SDOM16', 'SSDOM15'),
(212, 'Human Resources\r\n', 'DOM7', 'SDOM16', 'SSDOM16'),
(213, 'Administration\r\n', 'DOM7', 'SDOM16', 'SSDOM16'),
(214, 'Employee Benefits\r\n', 'DOM7', 'SDOM16', 'SSDOM16'),
(215, 'Labor Relations\r\n', 'DOM7', 'SDOM16', 'SSDOM16'),
(216, 'Managers\r\n', 'DOM7', 'SDOM16', 'SSDOM16'),
(217, 'Employees\r\n', 'DOM7', 'SDOM16', 'SSDOM16'),
(218, 'Finance And Legal\r\n', 'DOM7', 'SDOM16', 'SSDOM16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_subdomain`
--

CREATE TABLE `tbl_subdomain` (
  `id_subdomain` varchar(50) NOT NULL,
  `nama_subdomain` varchar(50) DEFAULT NULL,
  `id_domain` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_subdomain`
--

INSERT INTO `tbl_subdomain` (`id_subdomain`, `nama_subdomain`, `id_domain`) VALUES
('SDOM1', 'Analisis Pelanggan', 'DOM2'),
('SDOM10', 'Proses', 'DOM4'),
('SDOM11', 'Kapasitas\r\n\r\n\r\n\r\n\r\n\r\n', 'DOM4'),
('SDOM12', 'Inventory\r\n\r\n\r\n', 'DOM4'),
('SDOM13', 'Workforce\r\n\r\n', 'DOM4'),
('SDOM14', 'Quality\r\n\r\n\r\n\r\n\r\n', 'DOM4'),
('SDOM15', 'Value Chain', 'DOM7'),
('SDOM16', 'Benchmarking', 'DOM7'),
('SDOM2', 'Penjualan Produk dan Layanan', 'DOM2'),
('SDOM3', 'Perencanaan Produk dan Layanan', 'DOM2'),
('SDOM4', 'Penetapan Harga', 'DOM2'),
('SDOM5', 'Distribusi', 'DOM2'),
('SDOM6', 'Penelitian Pemasaran', 'DOM2'),
('SDOM7', 'Analisis Biaya/Manfaat', 'DOM2'),
('SDOM8', 'Rasio Keuangan', 'DOM3'),
('SDOM9', 'Breakeven Analysis', 'DOM3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_subsubdomain`
--

CREATE TABLE `tbl_subsubdomain` (
  `id_subsubdomain` varchar(50) NOT NULL,
  `nama_subsubdomain` varchar(50) DEFAULT NULL,
  `id_subdomain` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_subsubdomain`
--

INSERT INTO `tbl_subsubdomain` (`id_subsubdomain`, `nama_subsubdomain`, `id_subdomain`) VALUES
('SSDOM1', 'Rasio Likuiditas', 'SDOM8'),
('SSDOM10', 'Quality', 'SDOM9'),
('SSDOM11', 'Supplier Costs', 'SDOM16'),
('SSDOM12', 'Production Costs', 'SDOM16'),
('SSDOM13', 'Distribution Costs', 'SDOM16'),
('SSDOM14', 'Sales and Marketing Costs', 'SDOM16'),
('SSDOM15', 'Customer Service Costs\r\n\r\n\r\n\r\n', 'SDOM16'),
('SSDOM16', 'Management Costs\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'SDOM16'),
('SSDOM2', 'Rasio Utang', 'SDOM8'),
('SSDOM3', 'Rasio Aktivitas', 'SDOM8'),
('SSDOM4', 'Rasio Profitabilitas', 'SDOM8'),
('SSDOM5', 'Breakeven (BE)', 'SDOM9'),
('SSDOM6', 'Production / Operations', 'SDOM9'),
('SSDOM7', 'Capacity ', 'SDOM9'),
('SSDOM8', 'Inventory', 'SDOM9'),
('SSDOM9', 'Workforce', 'SDOM9');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_domain`
--
ALTER TABLE `tbl_domain`
  ADD PRIMARY KEY (`id_domain`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_domain` (`id_domain`),
  ADD KEY `id_subdomain` (`id_subdomain`),
  ADD KEY `id_subsubdomain` (`id_subsubdomain`);

--
-- Indeks untuk tabel `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`),
  ADD KEY `id_domain` (`id_domain`),
  ADD KEY `id_subdomain` (`id_subdomain`),
  ADD KEY `id_subsubdomain` (`id_subsubdomain`);

--
-- Indeks untuk tabel `tbl_subdomain`
--
ALTER TABLE `tbl_subdomain`
  ADD PRIMARY KEY (`id_subdomain`),
  ADD KEY `id_domain` (`id_domain`);

--
-- Indeks untuk tabel `tbl_subsubdomain`
--
ALTER TABLE `tbl_subsubdomain`
  ADD PRIMARY KEY (`id_subsubdomain`),
  ADD KEY `id_subdomain` (`id_subdomain`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_penilaian`
--
ALTER TABLE `tbl_penilaian`
  ADD CONSTRAINT `tbl_penilaian_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `tbl_pengguna` (`id_pengguna`),
  ADD CONSTRAINT `tbl_penilaian_ibfk_2` FOREIGN KEY (`id_domain`) REFERENCES `tbl_domain` (`id_domain`),
  ADD CONSTRAINT `tbl_penilaian_ibfk_3` FOREIGN KEY (`id_subdomain`) REFERENCES `tbl_subdomain` (`id_subdomain`),
  ADD CONSTRAINT `tbl_penilaian_ibfk_4` FOREIGN KEY (`id_subsubdomain`) REFERENCES `tbl_subsubdomain` (`id_subsubdomain`);

--
-- Ketidakleluasaan untuk tabel `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD CONSTRAINT `tbl_pertanyaan_ibfk_1` FOREIGN KEY (`id_domain`) REFERENCES `tbl_domain` (`id_domain`),
  ADD CONSTRAINT `tbl_pertanyaan_ibfk_2` FOREIGN KEY (`id_subdomain`) REFERENCES `tbl_subdomain` (`id_subdomain`),
  ADD CONSTRAINT `tbl_pertanyaan_ibfk_3` FOREIGN KEY (`id_subsubdomain`) REFERENCES `tbl_subsubdomain` (`id_subsubdomain`);

--
-- Ketidakleluasaan untuk tabel `tbl_subdomain`
--
ALTER TABLE `tbl_subdomain`
  ADD CONSTRAINT `tbl_subdomain_ibfk_1` FOREIGN KEY (`id_domain`) REFERENCES `tbl_domain` (`id_domain`);

--
-- Ketidakleluasaan untuk tabel `tbl_subsubdomain`
--
ALTER TABLE `tbl_subsubdomain`
  ADD CONSTRAINT `tbl_subsubdomain_ibfk_1` FOREIGN KEY (`id_subdomain`) REFERENCES `tbl_subdomain` (`id_subdomain`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
