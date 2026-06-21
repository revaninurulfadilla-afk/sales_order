-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2026 at 03:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `kode_pelanggan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(100) NOT NULL,
  `alamat` text,
  `telepon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `kode_pelanggan`, `nama_pelanggan`, `alamat`, `telepon`, `email`, `status`, `created_at`, `updated_at`, `foto`) VALUES
(1, 'PLG001', 'PT Teknologi Nusantara', 'Jl. Sudirman No. 123, Jakarta Pusat', '021-5551234', 'procurement@teknologi-nusantara.co.id', 1, '2026-06-16 10:13:08', '2026-06-19 10:05:29', 'profile2.png'),
(2, 'PLG002', 'CV Mitra Komputer', 'Jl. Mangga Dua No. 45, Jakarta Utara', '021-6667890', 'order@mitrakomputer.com', 1, '2026-06-16 10:13:08', '2026-06-19 10:10:23', 'profile3.png'),
(3, 'PLG003', 'Toko Elektronik Jaya', 'Jl. Pahlawan No. 67, Tangerang', '021-7778901', 'info@elektronikjaya.com', 1, '2026-06-16 10:13:08', '2026-06-19 10:13:07', 'profile4.png'),
(4, 'PLG004', 'PT Solusi Digital Indonesia', 'Jl. TB Simatupang No. 89, Jakarta Selatan', '021-8889012', 'purchasing@solusidigital.id', 1, '2026-06-16 10:13:08', '2026-06-19 10:19:16', 'profile5.png'),
(5, 'PLG005', 'UD Sarana Komputer', 'Jl. Pemuda No. 34, Bekasi', '021-9990123', 'saranakomputer@gmail.com', 1, '2026-06-16 10:13:08', '2026-06-19 10:25:38', 'profile6.png'),
(6, 'PLG006', 'PT Maju Jaya Teknologi', 'Jl. Gatot Subroto No. 10, Bandung', '022-7654321', 'purchasing@majujaya.co.id', 1, '2026-06-21 20:04:04', '2026-06-21 20:34:01', 'defelaut.jpg'),
(7, 'PLG007', 'CV Digital Nusantara', 'Jl. Ahmad Yani No. 88, Surabaya', '031-8765432', 'info@digitalnusantara.com', 1, '2026-06-21 20:04:04', '2026-06-21 20:34:08', 'defelaut.jpg'),
(8, 'PLG008', 'PT Global Komputama', 'Jl. Diponegoro No. 15, Semarang', '024-1234567', 'order@globalkomputama.co.id', 1, '2026-06-21 20:04:04', '2026-06-21 20:34:15', 'defelaut.jpg'),
(9, 'PLG009', 'Toko Sumber Elektronik', 'Jl. Veteran No. 22, Yogyakarta', '0274-987654', 'sales@sumberelektronik.com', 1, '2026-06-21 20:04:04', '2026-06-21 20:34:21', 'defelaut.jpg'),
(10, 'PLG010', 'PT Prima Informatika', 'Jl. Merdeka No. 50, Medan', '061-5566778', 'procurement@primainformatika.co.id', 1, '2026-06-21 20:04:04', '2026-06-21 20:34:27', 'defelaut.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `foto_produk` varchar(255) DEFAULT NULL,
  `harga` decimal(15,2) NOT NULL DEFAULT '0.00',
  `stok` int(11) NOT NULL DEFAULT '0',
  `satuan` varchar(20) DEFAULT 'pcs',
  `deskripsi` text,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode_produk`, `nama_produk`, `foto_produk`, `harga`, `stok`, `satuan`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PRD001', 'Laptop Asus VivoBook', 'product-10.png', '7500000.00', 25, 'unit', 'Laptop Asus VivoBook 14\" Intel Core i5', 1, '2026-06-16 10:13:08', '2026-06-18 12:27:29'),
(2, 'PRD002', 'Monitor Samsung 24\"', 'product-11.jpg', '2500000.00', 40, 'unit', 'Monitor Samsung 24 inch Full HD', 1, '2026-06-16 10:13:08', '2026-06-18 12:31:48'),
(3, 'PRD003', 'Keyboard Logitech K380', 'product-07.png', '450000.00', 100, 'pcs', 'Keyboard wireless Logitech K380', 1, '2026-06-16 10:13:08', '2026-06-18 11:58:40'),
(4, 'PRD004', 'Mouse Logitech MX Master', 'product-12.png', '850000.00', 75, 'pcs', 'Mouse wireless ergonomis', 1, '2026-06-16 10:13:08', '2026-06-18 12:29:36'),
(5, 'PRD005', 'Headset Sony WH-1000XM5', 'product-13.png', '4500000.00', 20, 'unit', 'Headset noise cancelling Sony', 1, '2026-06-16 10:13:08', '2026-06-18 12:30:52'),
(6, 'PRD006', 'SSD Samsung 1TB', 'product-09.jpg', '1200000.00', 60, 'pcs', 'SSD Samsung 870 EVO 1TB', 1, '2026-06-16 10:13:08', '2026-06-18 12:26:03'),
(7, 'PRD007', 'RAM Corsair 16GB', 'product-08.webp', '900000.00', 50, 'pcs', 'RAM DDR4 Corsair Vengeance 16GB', 1, '2026-06-16 10:13:08', '2026-06-18 12:24:47'),
(8, 'PRD008', 'Webcam Logitech C920', 'produck-06.jpg', '1100000.00', 35, 'unit', 'Webcam Full HD Logitech C920', 1, '2026-06-16 10:13:08', '2026-06-18 11:54:32'),
(13, 'PRD009', 'Iphone 15', '1781761954_product-03.jpg', '15000000.00', 20, 'pcs', 'iphone', 1, '2026-06-18 12:52:34', '2026-06-18 12:52:34'),
(14, 'PRD010', 'Printer Epson L3250', '6bc740acb53a89fc607b3607a42de6b0.jpg', '3500000.00', 30, 'unit', 'Printer Epson EcoTank L3250', 1, '2026-06-21 20:04:33', '2026-06-21 20:43:46'),
(15, 'PRD011', 'UPS APC 1200VA', 'product-15.jpg', '1800000.00', 25, 'unit', 'UPS APC 1200VA Backup Power', 1, '2026-06-21 20:04:33', '2026-06-21 20:04:33'),
(16, 'PRD012', 'Harddisk External 2TB', 'product-16.jpg', '1400000.00', 40, 'pcs', 'Harddisk External Seagate 2TB', 1, '2026-06-21 20:04:33', '2026-06-21 20:04:33'),
(17, 'PRD013', 'Switch TP-Link 8 Port', 'product-17.jpg', '450000.00', 50, 'pcs', 'Switch Gigabit 8 Port', 1, '2026-06-21 20:04:33', '2026-06-21 20:04:33'),
(18, 'PRD014', 'Proyektor Epson X06', 'product-18.jpg', '6200000.00', 15, 'unit', 'Proyektor Epson X06 XGA', 1, '2026-06-21 20:04:33', '2026-06-21 20:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `kode_sales` varchar(20) NOT NULL,
  `nama_sales` varchar(100) NOT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `kode_sales`, `nama_sales`, `telepon`, `email`, `user_id`, `status`, `created_at`, `updated_at`, `foto`) VALUES
(1, 'SLS001', 'Andi Wijaya', '081234567890', 'andi@majujaya.com', 3, 1, '2026-06-16 10:13:08', '2026-06-19 09:58:56', 'user-18.jpg'),
(2, 'SLS002', 'Sari Dewi', '081234567891', 'sari@majujaya.com', 4, 1, '2026-06-16 10:13:08', '2026-06-19 09:59:35', 'user-04.jpg'),
(6, 'SLS003', 'Azura', '0842354254', 'azura@gmail.com', 6, 1, '2026-06-18 13:46:28', '2026-06-18 13:46:28', 'b87443835dfb84bcfe99b3050a79331e.jpg'),
(7, 'SLS004', 'Budi Santoso', '081234567892', 'budi@majujaya.com', 7, 1, '2026-06-21 20:10:46', '2026-06-21 20:33:27', 'defelaut.jpg'),
(8, 'SLS005', 'Rina Putri', '081234567893', 'rina@majujaya.com', 8, 1, '2026-06-21 20:10:46', '2026-06-21 20:33:33', 'defelaut.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `id` int(11) NOT NULL,
  `no_order` varchar(30) NOT NULL,
  `tanggal_order` date NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `total_harga` decimal(15,2) NOT NULL DEFAULT '0.00',
  `status` enum('draft','dikirim','selesai','dibatalkan') NOT NULL DEFAULT 'draft',
  `catatan` text,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`id`, `no_order`, `tanggal_order`, `pelanggan_id`, `sales_id`, `total_harga`, `status`, `catatan`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'SO-2026-001', '2026-06-01', 1, 1, '18950000.00', 'dibatalkan', NULL, 3, '2026-06-16 10:13:08', '2026-06-16 17:21:07'),
(2, 'SO-2026-002', '2026-06-03', 2, 2, '4950000.00', 'dikirim', NULL, 4, '2026-06-16 10:13:08', '2026-06-16 10:13:08'),
(3, 'SO-2026-003', '2026-06-05', 3, 1, '9200000.00', 'draft', NULL, 3, '2026-06-16 10:13:08', '2026-06-16 10:13:08'),
(4, 'SO-2026-004', '2026-06-10', 4, 2, '3600000.00', 'selesai', NULL, 4, '2026-06-16 10:13:08', '2026-06-16 17:20:55'),
(5, 'SO-2026-005', '2026-06-14', 5, 1, '2250000.00', 'dikirim', NULL, 3, '2026-06-16 10:13:08', '2026-06-16 10:13:08'),
(23, 'SO-2026-006', '2026-06-15', 6, 7, '5300000.00', 'selesai', NULL, 7, '2026-06-21 20:17:51', '2026-06-21 20:17:51'),
(24, 'SO-2026-007', '2026-06-16', 7, 8, '7200000.00', 'dikirim', NULL, 8, '2026-06-21 20:17:51', '2026-06-21 20:17:51'),
(25, 'SO-2026-008', '2026-06-17', 8, 1, '3950000.00', 'draft', NULL, 3, '2026-06-21 20:17:51', '2026-06-21 20:17:51'),
(26, 'SO-2026-009', '2026-06-18', 9, 2, '8500000.00', 'selesai', NULL, 4, '2026-06-21 20:17:51', '2026-06-21 20:17:51'),
(27, 'SO-2026-010', '2026-06-19', 10, 7, '6400000.00', 'dikirim', NULL, 7, '2026-06-21 20:17:51', '2026-06-21 20:17:51'),
(28, 'SO-2026-011', '2026-06-18', 1, 1, '2500000.00', 'selesai', NULL, 3, '2026-06-21 20:26:02', '2026-06-21 20:26:02'),
(29, 'SO-2026-012', '2026-06-18', 2, 2, '1800000.00', 'dikirim', NULL, 4, '2026-06-21 20:26:02', '2026-06-21 20:26:02'),
(30, 'SO-2026-013', '2026-06-18', 3, 6, '3200000.00', 'draft', NULL, 6, '2026-06-21 20:26:02', '2026-06-21 20:26:02'),
(31, 'SO-2026-014', '2026-06-19', 4, 7, '1500000.00', 'selesai', NULL, 7, '2026-06-21 20:26:02', '2026-06-21 20:26:02'),
(32, 'SO-2026-015', '2026-06-19', 5, 8, '4500000.00', 'dikirim', NULL, 8, '2026-06-21 20:26:02', '2026-06-21 20:26:02'),
(33, 'SO-2026-016', '2026-06-16', 6, 1, '2100000.00', 'selesai', NULL, 3, '2026-06-21 20:26:02', '2026-06-21 20:26:02'),
(34, 'SO-2026-017', '2026-06-16', 7, 2, '1700000.00', 'dikirim', NULL, 4, '2026-06-21 20:26:02', '2026-06-21 20:26:02'),
(35, 'SO-2026-018', '2026-06-15', 8, 7, '3800000.00', 'selesai', NULL, 7, '2026-06-21 20:26:02', '2026-06-21 20:26:02'),
(36, 'SO-2026-019', '2026-06-15', 9, 8, '2900000.00', 'draft', NULL, 8, '2026-06-21 20:26:02', '2026-06-21 20:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_detail`
--

CREATE TABLE `sales_order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL DEFAULT '1',
  `harga_satuan` decimal(15,2) NOT NULL DEFAULT '0.00',
  `subtotal` decimal(15,2) NOT NULL DEFAULT '0.00',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order_detail`
--

INSERT INTO `sales_order_detail` (`id`, `order_id`, `produk_id`, `qty`, `harga_satuan`, `subtotal`, `created_at`) VALUES
(1, 1, 1, 2, '7500000.00', '15000000.00', '2026-06-16 10:13:08'),
(2, 1, 3, 4, '450000.00', '1800000.00', '2026-06-16 10:13:08'),
(3, 1, 4, 2, '850000.00', '1700000.00', '2026-06-16 10:13:08'),
(4, 1, 7, 5, '90000.00', '450000.00', '2026-06-16 10:13:08'),
(5, 2, 2, 1, '2500000.00', '2500000.00', '2026-06-16 10:13:08'),
(6, 2, 3, 2, '450000.00', '900000.00', '2026-06-16 10:13:08'),
(7, 2, 7, 2, '900000.00', '1800000.00', '2026-06-16 10:13:08'),
(8, 3, 1, 1, '7500000.00', '7500000.00', '2026-06-16 10:13:08'),
(9, 3, 6, 1, '1200000.00', '1200000.00', '2026-06-16 10:13:08'),
(10, 3, 7, 1, '900000.00', '900000.00', '2026-06-16 10:13:08'),
(11, 3, 5, 1, '600000.00', '600000.00', '2026-06-16 10:13:08'),
(12, 4, 8, 2, '1100000.00', '2200000.00', '2026-06-16 10:13:08'),
(13, 4, 3, 2, '450000.00', '900000.00', '2026-06-16 10:13:08'),
(14, 4, 4, 1, '500000.00', '500000.00', '2026-06-16 10:13:08'),
(15, 5, 3, 3, '450000.00', '1350000.00', '2026-06-16 10:13:08'),
(16, 5, 4, 1, '850000.00', '850000.00', '2026-06-16 10:13:08'),
(17, 5, 7, 1, '50000.00', '50000.00', '2026-06-16 10:13:08'),
(33, 23, 14, 1, '3500000.00', '3500000.00', '2026-06-21 20:20:58'),
(34, 23, 17, 4, '450000.00', '1800000.00', '2026-06-21 20:20:58'),
(35, 24, 1, 1, '7500000.00', '7500000.00', '2026-06-21 20:20:58'),
(36, 25, 15, 1, '1800000.00', '1800000.00', '2026-06-21 20:20:58'),
(37, 25, 16, 1, '1400000.00', '1400000.00', '2026-06-21 20:20:58'),
(38, 25, 17, 1, '450000.00', '450000.00', '2026-06-21 20:20:58'),
(39, 26, 18, 1, '6200000.00', '6200000.00', '2026-06-21 20:20:58'),
(40, 26, 17, 5, '450000.00', '2250000.00', '2026-06-21 20:20:58'),
(41, 27, 14, 1, '3500000.00', '3500000.00', '2026-06-21 20:20:58'),
(42, 27, 15, 1, '1800000.00', '1800000.00', '2026-06-21 20:20:58'),
(43, 27, 17, 2, '450000.00', '900000.00', '2026-06-21 20:20:58'),
(44, 28, 3, 2, '450000.00', '900000.00', '2026-06-21 20:26:50'),
(45, 28, 4, 1, '850000.00', '850000.00', '2026-06-21 20:26:50'),
(46, 28, 7, 1, '900000.00', '900000.00', '2026-06-21 20:26:50'),
(47, 29, 2, 1, '2500000.00', '2500000.00', '2026-06-21 20:26:50'),
(48, 30, 6, 1, '1200000.00', '1200000.00', '2026-06-21 20:26:50'),
(49, 30, 8, 1, '1100000.00', '1100000.00', '2026-06-21 20:26:50'),
(50, 30, 3, 2, '450000.00', '900000.00', '2026-06-21 20:26:50'),
(51, 31, 4, 1, '850000.00', '850000.00', '2026-06-21 20:26:50'),
(52, 31, 3, 1, '450000.00', '450000.00', '2026-06-21 20:26:50'),
(53, 32, 13, 1, '15000000.00', '15000000.00', '2026-06-21 20:26:50'),
(54, 33, 15, 1, '1800000.00', '1800000.00', '2026-06-21 20:26:50'),
(55, 33, 17, 1, '450000.00', '450000.00', '2026-06-21 20:26:50'),
(56, 34, 14, 1, '3500000.00', '3500000.00', '2026-06-21 20:26:50'),
(57, 35, 1, 1, '7500000.00', '7500000.00', '2026-06-21 20:26:50'),
(58, 36, 5, 1, '4500000.00', '4500000.00', '2026-06-21 20:26:50'),
(59, 28, 3, 2, '450000.00', '900000.00', '2026-06-21 20:26:50'),
(60, 28, 4, 1, '850000.00', '850000.00', '2026-06-21 20:26:50'),
(61, 28, 7, 1, '900000.00', '900000.00', '2026-06-21 20:26:50'),
(62, 29, 2, 1, '2500000.00', '2500000.00', '2026-06-21 20:26:50'),
(63, 30, 6, 1, '1200000.00', '1200000.00', '2026-06-21 20:26:50'),
(64, 30, 8, 1, '1100000.00', '1100000.00', '2026-06-21 20:26:50'),
(65, 30, 3, 2, '450000.00', '900000.00', '2026-06-21 20:26:50'),
(66, 31, 4, 1, '850000.00', '850000.00', '2026-06-21 20:26:50'),
(67, 31, 3, 1, '450000.00', '450000.00', '2026-06-21 20:26:50'),
(68, 32, 13, 1, '15000000.00', '15000000.00', '2026-06-21 20:26:50'),
(69, 33, 15, 1, '1800000.00', '1800000.00', '2026-06-21 20:26:50'),
(70, 33, 17, 1, '450000.00', '450000.00', '2026-06-21 20:26:50'),
(71, 34, 14, 1, '3500000.00', '3500000.00', '2026-06-21 20:26:50'),
(72, 35, 1, 1, '7500000.00', '7500000.00', '2026-06-21 20:26:50'),
(73, 36, 5, 1, '4500000.00', '4500000.00', '2026-06-21 20:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `role` enum('admin','sales','manager') NOT NULL DEFAULT 'sales',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `email`, `role`, `status`, `created_at`, `updated_at`, `foto`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'Administrator', 'admin@majujaya.co', 'admin', 1, '2026-06-16 10:13:08', '2026-06-19 10:56:57', 'b3107aa7b242e352e14b32bd0832f9d1.jpg'),
(2, 'manager', '43d390f15d92b4f84c555d86f5fadb2e', 'Revani', 'revani@majujaya.com', 'manager', 1, '2026-06-16 10:13:08', '2026-06-19 10:00:56', 'user-21.jpg'),
(3, 'sales1', '03339dc0dff443f15c254baccde9bece', 'Andi Wijaya', 'andi@majujaya.com', 'sales', 1, '2026-06-16 10:13:08', '2026-06-19 09:58:34', 'user-18.jpg'),
(4, 'sales2', '0ad80eb119d9bf7775aa23786b05b391', 'Sari Dewi', 'sari@majujaya.com', 'sales', 1, '2026-06-16 10:13:08', '2026-06-19 09:59:45', 'user-04.jpg'),
(6, 'sales3', 'e10adc3949ba59abbe56e057f20f883e', 'Azura', 'azura@gmail.com', 'sales', 1, '2026-06-18 13:46:28', '2026-06-18 13:46:28', 'b87443835dfb84bcfe99b3050a79331e.jpg'),
(7, 'sales4', 'e10adc3949ba59abbe56e057f20f883e', 'Budi Santoso', 'budi@majujaya.com', 'sales', 1, '2026-06-21 20:04:59', '2026-06-21 20:33:44', 'defelaut.jpg'),
(8, 'sales5', 'e10adc3949ba59abbe56e057f20f883e', 'Rina Putri', 'rina@majujaya.com', 'sales', 1, '2026-06-21 20:04:59', '2026-06-21 20:33:50', 'defelaut.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_pelanggan` (`kode_pelanggan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_produk` (`kode_produk`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_sales` (`kode_sales`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_order` (`no_order`),
  ADD KEY `pelanggan_id` (`pelanggan_id`),
  ADD KEY `sales_id` (`sales_id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `sales_order_detail`
--
ALTER TABLE `sales_order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sales_order_detail`
--
ALTER TABLE `sales_order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD CONSTRAINT `sales_order_ibfk_1` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`),
  ADD CONSTRAINT `sales_order_ibfk_2` FOREIGN KEY (`sales_id`) REFERENCES `sales` (`id`),
  ADD CONSTRAINT `sales_order_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `sales_order_detail`
--
ALTER TABLE `sales_order_detail`
  ADD CONSTRAINT `sales_order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `sales_order` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `sales_order_detail_ibfk_2` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
