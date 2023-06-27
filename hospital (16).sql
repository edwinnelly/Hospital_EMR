-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 01:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admitpatients`
--

CREATE TABLE `admitpatients` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `ward` int(11) DEFAULT NULL,
  `bed` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `specialist_id` int(11) DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL,
  `hmo` int(11) DEFAULT NULL,
  `bill` float DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `host_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admitpatients`
--

INSERT INTO `admitpatients` (`id`, `patient_id`, `ward`, `bed`, `doctor_id`, `specialist_id`, `payment_type`, `hmo`, `bill`, `date_added`, `status`, `host_key`) VALUES
(1, 1, 0, 0, 0, 0, 'Hmo', 2, NULL, '2022-07-18 00:00:00', 1, '38a2736fe89e1f2fe417212eef9e9726');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `tittle` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `dated` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `pid`, `tittle`, `description`, `host_key`, `doc_id`, `dated`) VALUES
(1, 3, 'test  appointment', 'test  appointment for me', '', 14, '2022-07-18T22:25'),
(2, 1, 'kele well', 'big head', '38a2736fe89e1f2fe417212eef9e9726', 5, '2022-10-13T13:44');

-- --------------------------------------------------------

--
-- Table structure for table `assets_category`
--

CREATE TABLE `assets_category` (
  `id` int(11) NOT NULL,
  `asset_key` varchar(100) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `added_date` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assets_category`
--

INSERT INTO `assets_category` (`id`, `asset_key`, `category_name`, `status`, `added_date`) VALUES
(1, '38a2736fe89e1f2fe417212eef9e9726', 'rrr', 'Non Moveable', '07/25/22');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(111) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `account_number` varchar(100) DEFAULT NULL,
  `account_officer` varchar(255) DEFAULT NULL,
  `host_key` varchar(255) NOT NULL,
  `account_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `beds`
--

CREATE TABLE `beds` (
  `id` int(11) NOT NULL,
  `bed_category` int(11) DEFAULT NULL,
  `bed_charges` int(11) DEFAULT NULL,
  `tax_id` int(11) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `added_date` varchar(30) DEFAULT NULL,
  `host_key` varchar(200) DEFAULT NULL,
  `ward` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `beds`
--

INSERT INTO `beds` (`id`, `bed_category`, `bed_charges`, `tax_id`, `description`, `location`, `added_date`, `host_key`, `ward`) VALUES
(3, 2, 5, 3, 'bed 1', '1st floor1', '08/04/22', '38a2736fe89e1f2fe417212eef9e9726', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bed_category`
--

CREATE TABLE `bed_category` (
  `id` int(11) NOT NULL,
  `bed_category` varchar(200) NOT NULL,
  `host_key` varchar(200) NOT NULL,
  `date_added` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bed_category`
--

INSERT INTO `bed_category` (`id`, `bed_category`, `host_key`, `date_added`) VALUES
(1, 'fff', '38a2736fe89e1f2fe417212eef9e9726', '07/25/22'),
(2, 'double bed room', '38a2736fe89e1f2fe417212eef9e9726', '08/04/22'),
(3, 'single bed room', '38a2736fe89e1f2fe417212eef9e9726', '08/04/22');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `drug_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `approve` varchar(50) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `added_by` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  `qty` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `approve_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `drug_id`, `branch_id`, `approve`, `created_date`, `added_by`, `amount`, `qty`, `item_name`, `approve_by`) VALUES
(40, 4, 123, '2', '08/29/22', '5', 26000, 2, 'Acetaminophen', '7'),
(41, 6, 123, '2', '08/29/22', '5', 24000, 4, 'Mzol', '7'),
(43, 4, 123, '2', '08/29/22', '5', 78000, 6, 'Acetaminophen', '7'),
(44, 6, 123, '2', '08/29/22', '5', 54000, 9, 'Mzol', '7'),
(45, 6, 123, '0', '08/30/22', '5', 36000, 6, 'Mzol', '');

-- --------------------------------------------------------

--
-- Table structure for table `cashbook`
--

CREATE TABLE `cashbook` (
  `id` int(11) NOT NULL,
  `tname` varchar(255) DEFAULT NULL,
  `income` float DEFAULT NULL,
  `expenses` float DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `payment_type` varchar(100) DEFAULT NULL,
  `trans_id` varchar(50) DEFAULT NULL,
  `crated_date` varchar(50) DEFAULT NULL,
  `payment_method` varchar(100) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `department` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `hmo_id` int(11) DEFAULT NULL,
  `pcash` float DEFAULT NULL,
  `pbank` float DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `paid_on` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `charges_category`
--

CREATE TABLE `charges_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `date_added` varchar(30) NOT NULL,
  `host_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clinical_note`
--

CREATE TABLE `clinical_note` (
  `id` int(11) NOT NULL,
  `report_info` text DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `created_date` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clinical_note`
--

INSERT INTO `clinical_note` (`id`, `report_info`, `doc_id`, `pid`, `host_key`, `created_date`) VALUES
(1, '&lt;div&gt;Join Zoom Meeting&lt;/div&gt;&lt;div&gt;https://us04web.zoom.us/j/71806839746?pwd=ja00M1T13uvEIl5KuLIt9X49nNT_nd.1&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Meeting ID: 718 0683 9746&lt;/div&gt;&lt;div&gt;Passcode: 7zWY9i&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;', 5, 1, '38a2736fe89e1f2fe417212eef9e9726', '2022-07-18 18:19:19pm');

-- --------------------------------------------------------

--
-- Table structure for table `comment_notes`
--

CREATE TABLE `comment_notes` (
  `id` int(11) NOT NULL,
  `report_info` text DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `created_date` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment_notes`
--

INSERT INTO `comment_notes` (`id`, `report_info`, `doc_id`, `pid`, `host_key`, `created_date`) VALUES
(1, '&lt;div&gt;Join Zoom Meeting&lt;/div&gt;&lt;div&gt;https://us04web.zoom.us/j/71806839746?pwd=ja00M1T13uvEIl5KuLIt9X49nNT_nd.1&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Meeting ID: 718 0683 9746&lt;/div&gt;&lt;div&gt;Passcode: 7zWY9i&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;', 5, 1, '38a2736fe89e1f2fe417212eef9e9726', '2022-07-18 18:29:22pm');

-- --------------------------------------------------------

--
-- Table structure for table `custom_result`
--

CREATE TABLE `custom_result` (
  `id` int(11) NOT NULL,
  `para_meter` varchar(100) DEFAULT NULL,
  `case_id` int(11) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `ref` varchar(100) DEFAULT NULL,
  `comments` varchar(200) DEFAULT NULL,
  `resultsn` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custom_result`
--

INSERT INTO `custom_result` (`id`, `para_meter`, `case_id`, `unit`, `ref`, `comments`, `resultsn`) VALUES
(1, 'cc100', 1, '19mg', '', 'ok', NULL),
(2, 'oix', 1, '9mg', '', 'Not ok', NULL),
(3, 'rto', 1, '1.9mg', 'very high', '', NULL),
(4, 'sample 1', 1, '33mg', '', 'ok', NULL),
(5, 'sample 2', 1, '11mg', '', 'ok', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_result_record`
--

CREATE TABLE `custom_result_record` (
  `id` int(11) NOT NULL,
  `case_name` varchar(100) DEFAULT NULL,
  `patients` int(11) DEFAULT NULL,
  `results` text DEFAULT NULL,
  `host_key` varchar(140) DEFAULT NULL,
  `case_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `units` varchar(50) DEFAULT NULL,
  `comment` varchar(200) DEFAULT NULL,
  `ref` varchar(200) DEFAULT NULL,
  `result_dated` varchar(20) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `custom_result_record`
--

INSERT INTO `custom_result_record` (`id`, `case_name`, `patients`, `results`, `host_key`, `case_id`, `test_id`, `units`, `comment`, `ref`, `result_dated`, `status`) VALUES
(76, 'sample 2', NULL, '132mg', '38a2736fe89e1f2fe417212eef9e9726', 1, 12, '11mg', 'ok dwsfewf', '', '2022-07-04', 'completed'),
(77, 'sample 1', NULL, '233mg', '38a2736fe89e1f2fe417212eef9e9726', 1, 12, '33mg', 'ok dd', '', '2022-07-04', 'completed'),
(78, 'rto', NULL, '454ml', '38a2736fe89e1f2fe417212eef9e9726', 1, 12, '1.9mg', '', 'very high', '2022-07-04', 'completed'),
(79, 'oix', NULL, '465ml', '38a2736fe89e1f2fe417212eef9e9726', 1, 12, '9mg', 'Not okew ', '', '2022-07-04', 'completed'),
(80, 'cc100', NULL, '1223ml', '38a2736fe89e1f2fe417212eef9e9726', 1, 12, '19mg', 'ok', '', '2022-07-04', 'completed'),
(81, 'sample 2', NULL, 'qq', '38a2736fe89e1f2fe417212eef9e9726', 1, 47, '11mg', 'ok dddd', '', '2022-07-05', 'completed'),
(82, 'sample 1', NULL, 'qw', '38a2736fe89e1f2fe417212eef9e9726', 1, 47, '33mg', 'ok', '', '2022-07-05', 'completed'),
(83, 'rto', NULL, 'er', '38a2736fe89e1f2fe417212eef9e9726', 1, 47, '1.9mg', '', 'very high', '2022-07-05', 'completed'),
(84, 'oix', NULL, 'qwd', '38a2736fe89e1f2fe417212eef9e9726', 1, 47, '9mg', 'Not ok', '', '2022-07-05', 'completed'),
(85, 'cc100', NULL, 'dff', '38a2736fe89e1f2fe417212eef9e9726', 1, 47, '19mg', 'ok', '', '2022-07-05', 'completed'),
(86, 'sample 2', NULL, '333331ml', '38a2736fe89e1f2fe417212eef9e9726', 1, 49, '11mg', 'ok', '', '2022-07-05', 'completed'),
(87, 'sample 1', NULL, '3331ml', '38a2736fe89e1f2fe417212eef9e9726', 1, 49, '33mg', 'ok', '', '2022-07-05', 'completed'),
(88, 'rto', NULL, '231ml', '38a2736fe89e1f2fe417212eef9e9726', 1, 49, '1.9mg', '', 'very high', '2022-07-05', 'completed'),
(89, 'oix', NULL, '21ml', '38a2736fe89e1f2fe417212eef9e9726', 1, 49, '9mg', 'Not ok', '', '2022-07-05', 'completed'),
(90, 'cc100', NULL, '33331ml', '38a2736fe89e1f2fe417212eef9e9726', 1, 49, '19mg', 'ok', '', '2022-07-05', 'completed'),
(101, 'sample 2', NULL, 'ok', '38a2736fe89e1f2fe417212eef9e9726', 1, 73, '11mg', 'ok', '', '2022-07-06', 'completed'),
(102, 'sample 1', NULL, 'ok', '38a2736fe89e1f2fe417212eef9e9726', 1, 73, '33mg', 'ok', '', '2022-07-06', 'completed'),
(103, 'rto', NULL, 'ik', '38a2736fe89e1f2fe417212eef9e9726', 1, 73, '1.9mg', '', 'very high', '2022-07-06', 'completed'),
(104, 'oix', NULL, 'yk', '38a2736fe89e1f2fe417212eef9e9726', 1, 73, '9mg', 'Not ok', '', '2022-07-06', 'completed'),
(105, 'cc100', NULL, 'dk', '38a2736fe89e1f2fe417212eef9e9726', 1, 73, '19mg', 'ok', '', '2022-07-06', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(200) DEFAULT NULL,
  `host_key` varchar(200) DEFAULT NULL,
  `date_added` varchar(20) DEFAULT NULL,
  `hod_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `host_key`, `date_added`, `hod_id`) VALUES
(1, 'MICRO BIOLOGY', '38a2736fe89e1f2fe417212eef9e9726', NULL, NULL),
(2, 'front Desk', '', '07/17/22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `discharge_summary_notes`
--

CREATE TABLE `discharge_summary_notes` (
  `id` int(11) NOT NULL,
  `report_info` text DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `created_date` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `discharge_summary_notes`
--

INSERT INTO `discharge_summary_notes` (`id`, `report_info`, `doc_id`, `pid`, `host_key`, `created_date`) VALUES
(1, '&lt;span style=&quot;color: rgb(109, 110, 112); font-family: &amp;quot;GB Museo Sans&amp;quot;, Arial, Helvetica, sans-serif;&quot;&gt;Deploy WordPress in seconds with the Softaculous app installer, which makes updating and maintaining your open-source applications a breeze. Considered worldwide as the best control panel, cPanel gives you full website control via your browser.&lt;/span&gt;', 5, 1, '38a2736fe89e1f2fe417212eef9e9726', '2022-07-18 17:54:36pm');

-- --------------------------------------------------------

--
-- Table structure for table `drugs_category_generic`
--

CREATE TABLE `drugs_category_generic` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `date_cr` varchar(30) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `host_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drugs_glass`
--

CREATE TABLE `drugs_glass` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `date_cr` datetime DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `host_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drugs_glass`
--

INSERT INTO `drugs_glass` (`id`, `cat_name`, `date_cr`, `status`, `host_key`) VALUES
(1, 'test drugs cat', '0000-00-00 00:00:00', 0, ''),
(3, 'hallucinogens', '0000-00-00 00:00:00', 0, '38a2736fe89e1f2fe417212eef9e9726'),
(4, 'CNS stimulants', '0000-00-00 00:00:00', 0, '38a2736fe89e1f2fe417212eef9e9726'),
(5, 'anesthetics', '0000-00-00 00:00:00', 0, '38a2736fe89e1f2fe417212eef9e9726'),
(6, 'narcotic', '0000-00-00 00:00:00', 0, '38a2736fe89e1f2fe417212eef9e9726'),
(7, 'test class', '0000-00-00 00:00:00', 0, ''),
(8, 'acdcefds', '0000-00-00 00:00:00', 0, ''),
(9, 'acdcefds', '0000-00-00 00:00:00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `drugs_list`
--

CREATE TABLE `drugs_list` (
  `id` int(11) NOT NULL,
  `drugs_name` varchar(255) DEFAULT NULL,
  `generic` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `drugs_class` varchar(100) DEFAULT NULL,
  `suppliers_id` int(11) DEFAULT NULL,
  `qty` float DEFAULT NULL,
  `qty_reminder` int(11) NOT NULL,
  `cost_price` float DEFAULT NULL,
  `selling_price` float DEFAULT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `drugs_types` varchar(50) DEFAULT NULL,
  `production_date` varchar(50) DEFAULT NULL,
  `expiry_date` varchar(50) DEFAULT NULL,
  `batch_no` varchar(50) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drugs_list`
--

INSERT INTO `drugs_list` (`id`, `drugs_name`, `generic`, `category_id`, `drugs_class`, `suppliers_id`, `qty`, `qty_reminder`, `cost_price`, `selling_price`, `brand_id`, `drugs_types`, `production_date`, `expiry_date`, `batch_no`, `user_id`, `host_key`, `status`) VALUES
(1, 'Panadol 500mg', NULL, 1, '1', 0, 50, 10, 500, 600, 'cc panadol', 'Drugs', '2022-06-28', '2022-07-30', '002', 14, '', 0),
(2, 'SCXASCC', NULL, 1, '1', 0, 23, 23, 2332, 2323, 'wefwef', 'Drugs', '2022-08-10', '2022-09-02', '444', 14, '', 0),
(4, 'Acetaminophen', '', 4, '4', 3, 100, 50, 10000, 13000, 'mod', 'Drugs', '2022-05-30', '2022-09-10', 'b1', 5, '38a2736fe89e1f2fe417212eef9e9726', 0),
(5, 'rgwerg', NULL, 7, '7', 0, 43434, 43, 434343, 3434, 'dsvd', 'Vaccines', '2022-09-01', '2022-08-06', 'dsdvdf', 14, '', 0),
(6, 'Mzol', NULL, 5, '5', 3, 55, 5, 5000, 6000, 'mzol', 'Consumables', '2022-08-04', '2022-08-11', '', 5, '38a2736fe89e1f2fe417212eef9e9726', 0),
(7, 'tobacco', NULL, 6, '6', 3, 700, 60, 8000, 10000, 'mkl', 'Vaccines', '2022-08-11', '2022-09-02', '', 5, '38a2736fe89e1f2fe417212eef9e9726', 0);

-- --------------------------------------------------------

--
-- Table structure for table `drugs_ps`
--

CREATE TABLE `drugs_ps` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `drug_name` varchar(255) NOT NULL,
  `qty` float NOT NULL,
  `fz_dosage` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  `host_key` varchar(245) NOT NULL,
  `duration` int(11) NOT NULL,
  `final_qty` float NOT NULL,
  `drug_key` varchar(44) NOT NULL,
  `med_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drugs_ps`
--

INSERT INTO `drugs_ps` (`id`, `pid`, `doc_id`, `drug_name`, `qty`, `fz_dosage`, `date_time`, `host_key`, `duration`, `final_qty`, `drug_key`, `med_status`) VALUES
(1, 3, 0, '1', 1, 3, '2022-07-17 22:47:26', '', 4, 12, '62d4836e0a5db', 1),
(2, 3, 9, '1', 0.5, 3, '2022-07-17 22:54:04', '', 3, 4.5, '62d484fc345ba', 1),
(3, 3, 666, '1', 0.5, 3, '2022-07-17 22:54:36', '', 4, 6, '62d4851c1ffba', 1);

-- --------------------------------------------------------

--
-- Table structure for table `drug_chart`
--

CREATE TABLE `drug_chart` (
  `id` int(11) NOT NULL,
  `u_id` varchar(33) NOT NULL,
  `pid` int(11) NOT NULL,
  `drugs_id` int(11) NOT NULL,
  `status` varchar(35) NOT NULL,
  `date_time` varchar(44) NOT NULL,
  `doze` varchar(25) NOT NULL,
  `doc_name` varchar(200) NOT NULL,
  `delays` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drug_chart`
--

INSERT INTO `drug_chart` (`id`, `u_id`, `pid`, `drugs_id`, `status`, `date_time`, `doze`, `doc_name`, `delays`) VALUES
(1, '62d4836e0a5db', 3, 1, '1', '2022-07-17 10:47:26 pm', '', 'dr ets a', '21 seconds'),
(2, '62d4836e0a5db', 3, 1, '', '2022-07-18 06:47:26 am', '', 'dr ets a', ''),
(3, '62d4836e0a5db', 3, 1, '', '2022-07-18 02:47:26 pm', '', 'dr ets a', ''),
(4, '62d4836e0a5db', 3, 1, '', '2022-07-18 10:47:26 pm', '', 'dr ets a', ''),
(5, '62d4836e0a5db', 3, 1, '', '2022-07-19 06:47:26 am', '', 'dr ets a', ''),
(6, '62d4836e0a5db', 3, 1, '', '2022-07-19 02:47:26 pm', '', 'dr ets a', ''),
(7, '62d4836e0a5db', 3, 1, '', '2022-07-19 10:47:26 pm', '', 'dr ets a', ''),
(8, '62d4836e0a5db', 3, 1, '', '2022-07-20 06:47:26 am', '', 'dr ets a', ''),
(9, '62d4836e0a5db', 3, 1, '', '2022-07-20 02:47:26 pm', '', 'dr ets a', ''),
(10, '62d4836e0a5db', 3, 1, '', '2022-07-20 10:47:26 pm', '', 'dr ets a', ''),
(11, '62d4836e0a5db', 3, 1, '', '2022-07-21 06:47:26 am', '', 'dr ets a', ''),
(12, '62d4836e0a5db', 3, 1, '', '2022-07-21 02:47:26 pm', '', 'dr ets a', ''),
(13, '62d484fc345ba', 3, 1, '', '2022-07-17 10:54:04 pm', '', 'dr ets a', ''),
(14, '62d484fc345ba', 3, 1, '', '2022-07-18 06:54:04 am', '', 'dr ets a', ''),
(15, '62d484fc345ba', 3, 1, '', '2022-07-18 02:54:04 pm', '', 'dr ets a', ''),
(16, '62d484fc345ba', 3, 1, '', '2022-07-18 10:54:04 pm', '', 'dr ets a', ''),
(17, '62d484fc345ba', 3, 1, '', '2022-07-19 06:54:04 am', '', 'dr ets a', ''),
(18, '62d484fc345ba', 3, 1, '', '2022-07-19 02:54:04 pm', '', 'dr ets a', ''),
(19, '62d484fc345ba', 3, 1, '', '2022-07-19 10:54:04 pm', '', 'dr ets a', ''),
(20, '62d484fc345ba', 3, 1, '', '2022-07-20 06:54:04 am', '', 'dr ets a', ''),
(21, '62d484fc345ba', 3, 1, '', '2022-07-20 02:54:04 pm', '', 'dr ets a', ''),
(22, '62d4851c1ffba', 3, 1, '', '2022-07-17 10:54:36 pm', '', 'dr ets a', ''),
(23, '62d4851c1ffba', 3, 1, '', '2022-07-18 06:54:36 am', '', 'dr ets a', ''),
(24, '62d4851c1ffba', 3, 1, '', '2022-07-18 02:54:36 pm', '', 'dr ets a', ''),
(25, '62d4851c1ffba', 3, 1, '', '2022-07-18 10:54:36 pm', '', 'dr ets a', ''),
(26, '62d4851c1ffba', 3, 1, '', '2022-07-19 06:54:36 am', '', 'dr ets a', ''),
(27, '62d4851c1ffba', 3, 1, '', '2022-07-19 02:54:36 pm', '', 'dr ets a', ''),
(28, '62d4851c1ffba', 3, 1, '', '2022-07-19 10:54:36 pm', '', 'dr ets a', ''),
(29, '62d4851c1ffba', 3, 1, '', '2022-07-20 06:54:36 am', '', 'dr ets a', ''),
(30, '62d4851c1ffba', 3, 1, '', '2022-07-20 02:54:36 pm', '', 'dr ets a', ''),
(31, '62d4851c1ffba', 3, 1, '', '2022-07-20 10:54:36 pm', '', 'dr ets a', ''),
(32, '62d4851c1ffba', 3, 1, '', '2022-07-21 06:54:36 am', '', 'dr ets a', ''),
(33, '62d4851c1ffba', 3, 1, '', '2022-07-21 02:54:36 pm', '', 'dr ets a', '');

-- --------------------------------------------------------

--
-- Table structure for table `drug_supplier`
--

CREATE TABLE `drug_supplier` (
  `id` int(11) NOT NULL,
  `supplier` varchar(255) DEFAULT NULL,
  `date_cr` varchar(30) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `host_key` varchar(255) DEFAULT NULL,
  `phone` varchar(222) NOT NULL,
  `addr` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drug_supplier`
--

INSERT INTO `drug_supplier` (`id`, `supplier`, `date_cr`, `status`, `host_key`, `phone`, `addr`, `email`) VALUES
(2, 'M&amp;B', '08/24/22', 0, '38a2736fe89e1f2fe417212eef9e9726', '023923784884', 'No1 new close abj', 'mandb@mail.com'),
(3, 'Roche', '08/24/22', 0, '38a2736fe89e1f2fe417212eef9e9726', '090020020004', 'No1290 Stani lon', 'Roche@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `echats`
--

CREATE TABLE `echats` (
  `id` int(11) NOT NULL,
  `me` text DEFAULT NULL,
  `you` text DEFAULT NULL,
  `date_time` varchar(55) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `echats`
--

INSERT INTO `echats` (`id`, `me`, `you`, `date_time`, `host_key`, `message`) VALUES
(1, '5', '5', '2022-07-04 05:45:18pm', '38a2736fe89e1f2fe417212eef9e9726', 'hello'),
(2, '5', '5', '2022-07-18 06:35:30pm', '38a2736fe89e1f2fe417212eef9e9726', 'hi'),
(3, '5', '7', '2022-07-18 06:36:03pm', '38a2736fe89e1f2fe417212eef9e9726', 'hello chi');

-- --------------------------------------------------------

--
-- Table structure for table `echatsx`
--

CREATE TABLE `echatsx` (
  `id` int(11) NOT NULL,
  `me` text DEFAULT NULL,
  `you` text DEFAULT NULL,
  `date_time` varchar(55) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `echatsx`
--

INSERT INTO `echatsx` (`id`, `me`, `you`, `date_time`, `host_key`, `message`) VALUES
(1, '5', '5', '2022-07-04 05:45:18pm', '38a2736fe89e1f2fe417212eef9e9726', 'hello'),
(2, '5', '5', '2022-07-18 06:35:30pm', '38a2736fe89e1f2fe417212eef9e9726', 'hi'),
(3, '5', '7', '2022-07-18 06:36:03pm', '38a2736fe89e1f2fe417212eef9e9726', 'hello chi');

-- --------------------------------------------------------

--
-- Table structure for table `encounters`
--

CREATE TABLE `encounters` (
  `id` int(11) NOT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `compliant` text DEFAULT NULL,
  `exam` text DEFAULT NULL,
  `diagonosis` text DEFAULT NULL,
  `dated` varchar(30) DEFAULT current_timestamp(),
  `pid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `encounters`
--

INSERT INTO `encounters` (`id`, `host_key`, `doctor_id`, `compliant`, `exam`, `diagonosis`, `dated`, `pid`) VALUES
(1, '', 14, '&lt;h3 style=&quot;color: green&quot;&gt;Presenting complaint&lt;/h3&gt;\n                                                ...\n\n                                                     &lt;h3 style=&quot;color: green&quot;&gt;History of presenting complaint&lt;/h3&gt;\n                                               ...\n\n                                            &lt;h3 style=&quot;color: green&quot;&gt;Past Medical and Surgical History&lt;/h3&gt;\n                                                ...\n\n\n                                                      &lt;h3 style=&quot;color: green&quot;&gt;Gynecologic and Obstetric Hx&lt;/h3&gt;\n                                               ...\n\n\n                                                     &lt;h3 style=&quot;color: green&quot;&gt;Drug and Allergy History&lt;/h3&gt;\n                                               ...\n\n\n                                                     &lt;h3 style=&quot;color: green&quot;&gt;Family and social History&lt;/h3&gt;\n                                                ...\n                                                     &lt;h3 style=&quot;color: green&quot;&gt;Review of system&lt;/h3&gt;\n                                               ...', '&lt;h3 style=&quot;color: green&quot;&gt;General examination&lt;/h3&gt;\n                                               ...\n\n                                                     &lt;h3 style=&quot;color: green&quot;&gt;CVS examination&lt;/h3&gt;\n                                               ...\n\n                                            &lt;h3 style=&quot;color: green&quot;&gt;Respiratory examination&lt;/h3&gt;\n                                               ...\n                                                      &lt;h3 style=&quot;color: green&quot;&gt;Abdominal examination&lt;/h3&gt;\n                                                ...\n\n                                                     &lt;h3 style=&quot;color: green&quot;&gt;CNS examination&lt;/h3&gt;\n                                                ...\n\n                                                     &lt;h3 style=&quot;color: green&quot;&gt;Obstetric examination&lt;/h3&gt;\n                                                ...\n                                                     &lt;h3 style=&quot;color: green&quot;&gt;Gynecologic examination&lt;/h3&gt;\n                                                ...\n                                                    &lt;h3 style=&quot;color: green&quot;&gt;Others&lt;/h3&gt;\n                                                ...', 'null', '2022-07-17 21:35:06', 3);

-- --------------------------------------------------------

--
-- Table structure for table `encouter_comment`
--

CREATE TABLE `encouter_comment` (
  `id` int(11) NOT NULL,
  `en_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `dated` varchar(33) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fluid`
--

CREATE TABLE `fluid` (
  `id` int(11) NOT NULL,
  `name_fluid` varchar(255) DEFAULT NULL,
  `f_input` float DEFAULT NULL,
  `f_output` float DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `dated` datetime DEFAULT current_timestamp(),
  `pid` int(11) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fluid`
--

INSERT INTO `fluid` (`id`, `name_fluid`, `f_input`, `f_output`, `comment`, `dated`, `pid`, `host_key`, `doc_id`) VALUES
(1, 'cc', 100, 0, 'still testing', '2022-07-18 00:00:00', 1, '38a2736fe89e1f2fe417212eef9e9726', 5),
(2, 'vb', 60, 0, 'still testing', '2022-07-18 00:00:00', 1, '38a2736fe89e1f2fe417212eef9e9726', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hmo`
--

CREATE TABLE `hmo` (
  `id` int(11) NOT NULL,
  `hmo_name` varchar(255) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `rep_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hmo`
--

INSERT INTO `hmo` (`id`, `hmo_name`, `host_key`, `status`, `rep_name`) VALUES
(1, 'Mansard Health HMO', '38a2736fe89e1f2fe417212eef9e9726', NULL, 'Mansard Health HMO'),
(2, 'Hygeia HMO', '38a2736fe89e1f2fe417212eef9e9726', NULL, 'Hygeia HMO'),
(3, 'Multishield HMO.', '38a2736fe89e1f2fe417212eef9e9726', NULL, 'Multishield HMO.'),
(4, 'Avon HMO.', '38a2736fe89e1f2fe417212eef9e9726', NULL, 'Avon HMO.'),
(5, 'Redcare HMO.', '38a2736fe89e1f2fe417212eef9e9726', NULL, 'Redcare HMO.'),
(6, 'Premier Medicaid HMO.', '38a2736fe89e1f2fe417212eef9e9726', NULL, 'Premier Medicaid HMO.'),
(7, 'Marina Health HMO.', '38a2736fe89e1f2fe417212eef9e9726', NULL, 'Marina Health HMO.');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_assets`
--

CREATE TABLE `hospital_assets` (
  `id` int(11) NOT NULL,
  `asset_name` varchar(200) DEFAULT NULL,
  `asset_value` varchar(200) DEFAULT NULL,
  `host_key` varchar(200) DEFAULT NULL,
  `added_dated` varchar(20) DEFAULT NULL,
  `asset_condition` varchar(200) DEFAULT NULL,
  `category_asset` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital_assets`
--

INSERT INTO `hospital_assets` (`id`, `asset_name`, `asset_value`, `host_key`, `added_dated`, `asset_condition`, `category_asset`) VALUES
(1, 'wqwwqqq', 'davdsvsd', '38a2736fe89e1f2fe417212eef9e9726', '07/25/22', 'Good Condition', '1');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_charges`
--

CREATE TABLE `hospital_charges` (
  `id` int(11) NOT NULL,
  `charges_name` varchar(100) DEFAULT NULL,
  `host_key` varchar(200) DEFAULT NULL,
  `charges` double DEFAULT NULL,
  `dated_added` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital_charges`
--

INSERT INTO `hospital_charges` (`id`, `charges_name`, `host_key`, `charges`, `dated_added`) VALUES
(1, 'const charge', '', 5000, '07/17/22'),
(2, 'bed 101', '', 6000, '07/18/22'),
(3, 'test charges', '38a2736fe89e1f2fe417212eef9e9726', 5000, '07/25/22'),
(4, 'cc', '38a2736fe89e1f2fe417212eef9e9726', 2300, '07/25/22'),
(5, 'test 1000', '38a2736fe89e1f2fe417212eef9e9726', 4000, '08/04/22');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_users`
--

CREATE TABLE `hospital_users` (
  `id` int(11) NOT NULL,
  `hos_key` varchar(256) DEFAULT NULL,
  `hospital_name` varchar(200) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `no_staffs` int(11) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `activation` varchar(5) DEFAULT NULL,
  `payment_plans` varchar(50) DEFAULT NULL,
  `status_hos_payment` varchar(50) DEFAULT NULL,
  `banned` int(11) DEFAULT 0,
  `patients` int(11) NOT NULL,
  `registered_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_branches`
--

CREATE TABLE `lab_branches` (
  `id` int(11) NOT NULL,
  `branches_name` varchar(200) DEFAULT NULL,
  `locations` varchar(200) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `host_key` varchar(200) DEFAULT NULL,
  `added_date` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_cases`
--

CREATE TABLE `lab_cases` (
  `id` int(11) NOT NULL,
  `dpt_id` int(11) DEFAULT NULL,
  `case_name` varchar(200) DEFAULT NULL,
  `date_added` varchar(40) DEFAULT NULL,
  `host_key` varchar(200) DEFAULT NULL,
  `restrictions` varchar(50) DEFAULT NULL,
  `sample` varchar(50) DEFAULT NULL,
  `container` varchar(50) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `tat` varchar(30) DEFAULT NULL,
  `cats` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lab_cases`
--

INSERT INTO `lab_cases` (`id`, `dpt_id`, `case_name`, `date_added`, `host_key`, `restrictions`, `sample`, `container`, `amount`, `tat`, `cats`) VALUES
(1, 3, 'Hemoglobin A1C', '07/04/22', '38a2736fe89e1f2fe417212eef9e9726', '', '', 'S1 Sample', 5000, '', ''),
(2, 4, 'Thyroid Stimulating Hormone', '07/04/22', '38a2736fe89e1f2fe417212eef9e9726', '', '', 'cc100', 7000, '', ''),
(4, 9, 'wilso', '07/17/22', '38a2736fe89e1f2fe417212eef9e9726', '', '', 'S1 Sample', 50000, '', 'radio'),
(5, 10, 'Hysterosonography', '07/17/22', '38a2736fe89e1f2fe417212eef9e9726', '', '', 'Null', 5000, '', 'radio'),
(6, 17, 'test l', '07/18/22', '', '', '', '', 500, '', ''),
(7, 1, 'tets', '07/25/22', '38a2736fe89e1f2fe417212eef9e9726', '', '', 'S1 Sample', 500, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `lab_category`
--

CREATE TABLE `lab_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `added_date` varchar(20) NOT NULL,
  `host_key` varchar(150) NOT NULL,
  `cats` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lab_category`
--

INSERT INTO `lab_category` (`id`, `category_name`, `added_date`, `host_key`, `cats`) VALUES
(1, 'Chemistry', '07/04/22', '38a2736fe89e1f2fe417212eef9e9726', 'radio'),
(4, 'Microbiology', '07/04/22', '38a2736fe89e1f2fe417212eef9e9726', 'radio'),
(5, 'Transfusion Services/Immunology', '07/04/22', '38a2736fe89e1f2fe417212eef9e9726', 'radio'),
(6, 'Immunology', '07/04/22', '38a2736fe89e1f2fe417212eef9e9726', 'radio'),
(7, 'Surgical Pathology', '07/04/22', '38a2736fe89e1f2fe417212eef9e9726', 'radio'),
(8, 'Cytology', '07/04/22', '38a2736fe89e1f2fe417212eef9e9726', 'radio'),
(10, 'Ultrasound suite', '07/17/22', '38a2736fe89e1f2fe417212eef9e9726', 'radio'),
(11, 'X-Ray suite', '07/17/22', '38a2736fe89e1f2fe417212eef9e9726', 'radio'),
(12, 'Fluoroscopy suite', '07/17/22', '38a2736fe89e1f2fe417212eef9e9726', 'radio'),
(13, 'Electrophysiology suite', '07/17/22', '38a2736fe89e1f2fe417212eef9e9726', 'radio'),
(14, 'Computed Tomography suite', '07/17/22', '38a2736fe89e1f2fe417212eef9e9726', 'radio'),
(15, 'Magnetic Resonance suite', '07/17/22', '38a2736fe89e1f2fe417212eef9e9726', 'radio'),
(18, '', '08/29/22', '38a2736fe89e1f2fe417212eef9e9726', ''),
(19, '', '08/29/22', '38a2736fe89e1f2fe417212eef9e9726', '');

-- --------------------------------------------------------

--
-- Table structure for table `lab_kits`
--

CREATE TABLE `lab_kits` (
  `id` int(11) NOT NULL,
  `kits` varchar(100) NOT NULL,
  `host_key` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lab_kits`
--

INSERT INTO `lab_kits` (`id`, `kits`, `host_key`, `status`) VALUES
(1, 'S1 Sample', '38a2736fe89e1f2fe417212eef9e9726', 'Containers'),
(2, 'cc100', '38a2736fe89e1f2fe417212eef9e9726', 'Containers');

-- --------------------------------------------------------

--
-- Table structure for table `medical_notes`
--

CREATE TABLE `medical_notes` (
  `id` int(11) NOT NULL,
  `report_info` text DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `created_date` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_notes`
--

INSERT INTO `medical_notes` (`id`, `report_info`, `doc_id`, `pid`, `host_key`, `created_date`) VALUES
(1, '&lt;div jsname=&quot;bVEB4e&quot; class=&quot;wWOJcd&quot; aria-controls=&quot;exacc_LsXVYp3eHZa49u8PuNWGqA44&quot; aria-expanded=&quot;true&quot; aria-labelledby=&quot;exacc_LsXVYp3eHZa49u8PuNWGqA43&quot; role=&quot;button&quot; tabindex=&quot;0&quot; jsaction=&quot;AWEk5c&quot; style=&quot;align-items: center; display: flex; max-height: none; min-height: 0px; position: relative; width: 651.991px; cursor: pointer; outline: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: medium;&quot;&gt;&lt;div jsname=&quot;jIA8B&quot; class=&quot;iDjcJe IX9Lgd wwB5gf&quot; aria-hidden=&quot;true&quot; id=&quot;exacc_LsXVYp3eHZa49u8PuNWGqA43&quot; style=&quot;-webkit-box-orient: vertical; color: inherit; display: -webkit-box; flex: 1 1 0%; -webkit-line-clamp: unset; margin: 12px 0px; overflow: hidden; font-size: 16px; transform: translate3d(0px, 0px, 0px);&quot;&gt;Can MySQL handle 100 million records?&lt;/div&gt;&lt;div jsname=&quot;jIA8B&quot; class=&quot;iDjcJe IX9Lgd wwB5gf&quot; aria-hidden=&quot;true&quot; id=&quot;exacc_LsXVYp3eHZa49u8PuNWGqA43&quot; style=&quot;-webkit-box-orient: vertical; color: inherit; display: -webkit-box; flex: 1 1 0%; -webkit-line-clamp: unset; margin: 12px 0px; overflow: hidden; font-size: 16px; transform: translate3d(0px, 0px, 0px);&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div jsname=&quot;jIA8B&quot; class=&quot;iDjcJe IX9Lgd wwB5gf&quot; aria-hidden=&quot;true&quot; id=&quot;exacc_LsXVYp3eHZa49u8PuNWGqA43&quot; style=&quot;-webkit-box-orient: vertical; color: inherit; display: -webkit-box; flex: 1 1 0%; -webkit-line-clamp: unset; margin: 12px 0px; overflow: hidden; font-size: 16px; transform: translate3d(0px, 0px, 0px);&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div jsname=&quot;Q8Kwad&quot; class=&quot;YsGUOb&quot; style=&quot;background-image: url(&amp;quot;data:image/svg+xml,&lt;svg focusable=\\&amp;quot;false\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot; viewBox=\\&amp;quot;0 0 24 24\\&amp;quot;&gt;&lt;path fill=\\&amp;quot;rgba(0,0,0,.54)\\&amp;quot; d=\\&amp;quot;M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z\\&amp;quot;&gt;&lt;/path&gt;&lt;/svg&gt;&amp;quot;); display: inline-block; height: 24px; width: 24px; margin-top: -1px; transform: rotateZ(-180deg);&quot;&gt;&lt;/div&gt;&lt;div jsname=&quot;K8Pnod&quot; class=&quot;r21Kzd&quot; data-hveid=&quot;CBcQAQ&quot; data-ved=&quot;2ahUKEwidrYKApoP5AhUWnP0HHbiqAeUQuk56BAgXEAE&quot; style=&quot;height: 42.6164px; left: 0px; position: absolute; top: 0px; width: 651.991px; visibility: hidden;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div jsname=&quot;rozPHf&quot; class=&quot;MBtdbb&quot; id=&quot;exacc_LsXVYp3eHZa49u8PuNWGqA44&quot; data-ved=&quot;2ahUKEwidrYKApoP5AhUWnP0HHbiqAeUQ7NUEegQIFxAD&quot; style=&quot;position: absolute; width: 651.991px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: medium;&quot;&gt;&lt;div class=&quot;ymu2Hb&quot; jsslot=&quot;&quot; style=&quot;position: relative;&quot;&gt;&lt;div jsname=&quot;oQYOj&quot; class=&quot;t0bRye r2fjmd&quot; id=&quot;_LsXVYp3eHZa49u8PuNWGqA422&quot; data-hveid=&quot;CBcQBA&quot; data-ved=&quot;2ahUKEwidrYKApoP5AhUWnP0HHbiqAeUQu04oAHoECBcQBA&quot; style=&quot;margin-bottom: 0px; margin-top: 0px; opacity: 1;&quot;&gt;&lt;div id=&quot;LsXVYp3eHZa49u8PuNWGqA4__16&quot;&gt;&lt;div class=&quot;wDYxhc&quot; data-md=&quot;61&quot; style=&quot;clear: none;&quot;&gt;&lt;div class=&quot;LGOjhe&quot; data-attrid=&quot;wa:/description&quot; aria-level=&quot;3&quot; role=&quot;heading&quot; data-hveid=&quot;CAwQAA&quot; style=&quot;overflow: hidden; padding-bottom: 20px;&quot;&gt;&lt;span class=&quot;ILfuVd&quot; lang=&quot;en&quot; style=&quot;font-size: 16px; line-height: 24px;&quot;&gt;&lt;span class=&quot;hgKElc&quot; style=&quot;padding: 0px 8px 0px 0px;&quot;&gt;Can MySQL handle 100 million records?&amp;nbsp;&lt;b&gt;Yeah, it can handle billions of records&lt;/b&gt;. If you properly index tables, they fit in memory and your queries are written properly then it shouldn\'t be an issue.&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;', 5, 1, '38a2736fe89e1f2fe417212eef9e9726', '2022-07-18 17:53:06pm'),
(2, 'hello&amp;nbsp;', 5, 1, '38a2736fe89e1f2fe417212eef9e9726', '2022-07-18 17:53:34pm'),
(3, '&lt;span style=&quot;color: rgb(109, 110, 112); font-family: &amp;quot;GB Museo Sans&amp;quot;, Arial, Helvetica, sans-serif;&quot;&gt;Deploy WordPress in seconds with the Softaculous app installer, which makes updating and maintaining your open-source applications a breeze. Considered worldwide as the best control panel, cPanel gives you full website control via your browser.&lt;/span&gt;', 5, 1, '38a2736fe89e1f2fe417212eef9e9726', '2022-07-18 17:54:06pm');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(11) NOT NULL,
  `module_name` varchar(200) DEFAULT NULL,
  `links` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

CREATE TABLE `operations` (
  `id` int(11) NOT NULL,
  `hospital_key` varchar(128) DEFAULT NULL,
  `module_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `added_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients_crm`
--

CREATE TABLE `patients_crm` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(200) DEFAULT NULL,
  `host_key` varchar(200) DEFAULT NULL,
  `age` varchar(30) DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `occupation` varchar(200) DEFAULT NULL,
  `marital_status` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tribe` varchar(200) DEFAULT NULL,
  `religion` varchar(200) DEFAULT NULL,
  `next_of_kin` varchar(200) DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `email_address` varchar(200) DEFAULT NULL,
  `added_date` varchar(30) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `hmo_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status_out` varchar(50) DEFAULT NULL,
  `out_patient` varchar(30) DEFAULT NULL,
  `assigned_doc` int(11) DEFAULT NULL,
  `specialist_id` int(11) DEFAULT NULL,
  `quee_date` varchar(30) DEFAULT NULL,
  `bp` varchar(50) DEFAULT '0/0',
  `body_temp` varchar(50) DEFAULT NULL,
  `heart_rate` varchar(50) DEFAULT NULL,
  `height` varchar(50) DEFAULT NULL,
  `briefs` varchar(255) DEFAULT NULL,
  `account_type` int(11) NOT NULL,
  `retainer` int(11) NOT NULL,
  `consultation_fees` varchar(100) NOT NULL,
  `wallet` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients_crm`
--

INSERT INTO `patients_crm` (`id`, `patient_name`, `host_key`, `age`, `sex`, `occupation`, `marital_status`, `address`, `tribe`, `religion`, `next_of_kin`, `phone_number`, `email_address`, `added_date`, `password`, `hmo_id`, `photo`, `status_out`, `out_patient`, `assigned_doc`, `specialist_id`, `quee_date`, `bp`, `body_temp`, `heart_rate`, `height`, `briefs`, `account_type`, `retainer`, `consultation_fees`, `wallet`) VALUES
(1, 'Bianca Peters', '38a2736fe89e1f2fe417212eef9e9726', '2012-06-13', 'Male', 'Student', 'Married', 'No1 newclose Phc', 'igbo', 'crsqqqq', 'obinna smart', '0902873654', 'peter@mail.com', '2022-07-21', '11111', 2, NULL, NULL, NULL, NULL, NULL, NULL, '0/0', '', '', '', '', 1, 1, '', 40000),
(2, 'Emma John', '38a2736fe89e1f2fe417212eef9e9726', '2006-02-04', 'Male', 'Student', 'Married', 'No11 New close phc', 'Igbo', 'CRS', 'Pepe Alex', '09039933444', 'emma@mail.com', '2022-07-13', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0/0', NULL, NULL, NULL, NULL, 3, 2, '', 0),
(3, 'Tony amada', '', '1990-07-17', 'Male', 'Student', 'Married', 'No11 new close', '', '', '', '', '0987654567', '2022-07-20', NULL, 0, NULL, NULL, 'yes', 1, 0, NULL, '0/0', '', '', '', '', 3, 2, 'Cardiology Follow up', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_diagnosis`
--

CREATE TABLE `patient_diagnosis` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `case_name` varchar(200) NOT NULL,
  `host_key` varchar(200) NOT NULL,
  `created_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_diagnosis`
--

INSERT INTO `patient_diagnosis` (`id`, `pid`, `case_name`, `host_key`, `created_date`) VALUES
(9, 1, 'Hemoglobin A1C', '', '2022-07-30 20:33:51pm'),
(10, 1, 'Thyroid Stimulating Hormone', '', '2022-07-30 20:33:51pm'),
(11, 1, 'Hysterosonography', '', '2022-07-30 20:33:51pm');

-- --------------------------------------------------------

--
-- Table structure for table `payment_plan`
--

CREATE TABLE `payment_plan` (
  `id` int(11) NOT NULL,
  `amount` double NOT NULL,
  `duration` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `item` varchar(100) DEFAULT NULL,
  `vendor_id` varchar(255) DEFAULT NULL,
  `receipt_no` varchar(100) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `created_date` varchar(50) DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL,
  `bank` varchar(100) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `restock_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quee_user_test`
--

CREATE TABLE `quee_user_test` (
  `id` int(11) NOT NULL,
  `patients_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_added` varchar(20) NOT NULL,
  `department_id` int(11) NOT NULL,
  `case_id` int(11) NOT NULL,
  `host_key` varchar(200) NOT NULL,
  `payment` varchar(20) NOT NULL DEFAULT 'unpaid',
  `results` text DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `time_diff` varchar(100) DEFAULT NULL,
  `time_diff_done` varchar(50) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `test_note` text NOT NULL,
  `cats` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quee_user_test`
--

INSERT INTO `quee_user_test` (`id`, `patients_id`, `status`, `date_added`, `department_id`, `case_id`, `host_key`, `payment`, `results`, `notes`, `amount`, `time_diff`, `time_diff_done`, `staff_id`, `branch_id`, `test_note`, `cats`) VALUES
(73, 1, 'completed', '2022-07-06', 3, 1, '38a2736fe89e1f2fe417212eef9e9726', 'paid', NULL, NULL, 5000, NULL, NULL, NULL, NULL, 'Get the latest Judgement from the Supreme Court and the Court of Appeal for FREE', ''),
(74, 1, 'pending', '2022-07-17', 10, 5, '38a2736fe89e1f2fe417212eef9e9726', 'paid', NULL, NULL, 5000, NULL, NULL, NULL, NULL, 'please check for ssl', ''),
(75, 1, 'pending', '2022-07-17', 10, 5, '38a2736fe89e1f2fe417212eef9e9726', 'paid', NULL, NULL, 5000, NULL, NULL, NULL, NULL, 'Radiography is an imaging technique using X-rays, gamma rays, or similar ionizing radiation and non-ionizing radiation to view the internal form of an object. Applications of radiography include medical radiography and industrial radiography. Similar techniques are used in airport security.', 'radio'),
(76, 1, 'requested', '2022-07-18', 3, 1, '38a2736fe89e1f2fe417212eef9e9726', 'paid', NULL, NULL, 5000, NULL, NULL, NULL, NULL, 'test mode', '');

-- --------------------------------------------------------

--
-- Table structure for table `radiography`
--

CREATE TABLE `radiography` (
  `id` int(11) NOT NULL,
  `dpt_name` varchar(200) NOT NULL,
  `date_cr` datetime NOT NULL,
  `host_key` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `radiology_rs`
--

CREATE TABLE `radiology_rs` (
  `id` int(11) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `pid` int(11) NOT NULL,
  `radio_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reconcilate`
--

CREATE TABLE `reconcilate` (
  `id` int(11) NOT NULL,
  `name_con` varchar(255) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_date` varchar(20) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral_letter`
--

CREATE TABLE `referral_letter` (
  `id` int(11) NOT NULL,
  `report_info` text DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `created_date` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `referral_letter`
--

INSERT INTO `referral_letter` (`id`, `report_info`, `doc_id`, `pid`, `host_key`, `created_date`) VALUES
(1, '&lt;div jsname=&quot;bVEB4e&quot; class=&quot;wWOJcd&quot; aria-controls=&quot;exacc_LsXVYp3eHZa49u8PuNWGqA44&quot; aria-expanded=&quot;true&quot; aria-labelledby=&quot;exacc_LsXVYp3eHZa49u8PuNWGqA43&quot; role=&quot;button&quot; tabindex=&quot;0&quot; jsaction=&quot;AWEk5c&quot; style=&quot;align-items: center; display: flex; max-height: none; min-height: 0px; position: relative; width: 651.991px; cursor: pointer; outline: 0px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: medium;&quot;&gt;&lt;div jsname=&quot;jIA8B&quot; class=&quot;iDjcJe IX9Lgd wwB5gf&quot; aria-hidden=&quot;true&quot; id=&quot;exacc_LsXVYp3eHZa49u8PuNWGqA43&quot; style=&quot;-webkit-box-orient: vertical; color: inherit; display: -webkit-box; flex: 1 1 0%; -webkit-line-clamp: unset; margin: 12px 0px; overflow: hidden; font-size: 16px; transform: translate3d(0px, 0px, 0px);&quot;&gt;Can MySQL handle 100 million records?&lt;/div&gt;&lt;div jsname=&quot;Q8Kwad&quot; class=&quot;YsGUOb&quot; style=&quot;background-image: url(&amp;quot;data:image/svg+xml,&lt;svg focusable=\\&amp;quot;false\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot; viewBox=\\&amp;quot;0 0 24 24\\&amp;quot;&gt;&lt;path fill=\\&amp;quot;rgba(0,0,0,.54)\\&amp;quot; d=\\&amp;quot;M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z\\&amp;quot;&gt;&lt;/path&gt;&lt;/svg&gt;&amp;quot;); display: inline-block; height: 24px; width: 24px; margin-top: -1px; transform: rotateZ(-180deg);&quot;&gt;&lt;/div&gt;&lt;div jsname=&quot;K8Pnod&quot; class=&quot;r21Kzd&quot; data-hveid=&quot;CBcQAQ&quot; data-ved=&quot;2ahUKEwidrYKApoP5AhUWnP0HHbiqAeUQuk56BAgXEAE&quot; style=&quot;height: 42.6164px; left: 0px; position: absolute; top: 0px; width: 651.991px; visibility: hidden;&quot;&gt;&lt;/div&gt;&lt;/div&gt;&lt;div jsname=&quot;rozPHf&quot; class=&quot;MBtdbb&quot; id=&quot;exacc_LsXVYp3eHZa49u8PuNWGqA44&quot; data-ved=&quot;2ahUKEwidrYKApoP5AhUWnP0HHbiqAeUQ7NUEegQIFxAD&quot; style=&quot;position: absolute; width: 651.991px; color: rgb(32, 33, 36); font-family: arial, sans-serif; font-size: medium;&quot;&gt;&lt;div class=&quot;ymu2Hb&quot; jsslot=&quot;&quot; style=&quot;position: relative;&quot;&gt;&lt;div jsname=&quot;oQYOj&quot; class=&quot;t0bRye r2fjmd&quot; id=&quot;_LsXVYp3eHZa49u8PuNWGqA422&quot; data-hveid=&quot;CBcQBA&quot; data-ved=&quot;2ahUKEwidrYKApoP5AhUWnP0HHbiqAeUQu04oAHoECBcQBA&quot; style=&quot;margin-bottom: 0px; margin-top: 0px; opacity: 1;&quot;&gt;&lt;div id=&quot;LsXVYp3eHZa49u8PuNWGqA4__16&quot;&gt;&lt;div class=&quot;wDYxhc&quot; data-md=&quot;61&quot; style=&quot;clear: none;&quot;&gt;&lt;div class=&quot;LGOjhe&quot; data-attrid=&quot;wa:/description&quot; aria-level=&quot;3&quot; role=&quot;heading&quot; data-hveid=&quot;CAwQAA&quot; style=&quot;overflow: hidden; padding-bottom: 20px;&quot;&gt;&lt;span class=&quot;ILfuVd&quot; lang=&quot;en&quot; style=&quot;font-size: 16px; line-height: 24px;&quot;&gt;&lt;span class=&quot;hgKElc&quot; style=&quot;padding: 0px 8px 0px 0px;&quot;&gt;Can MySQL handle 100 million records?&amp;nbsp;&lt;b&gt;Yeah, it can handle billions of records&lt;/b&gt;. If you properly index tables, they fit in memory and your queries are written properly then it shouldn\'t be an issue.&lt;/span&gt;&lt;/span&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;', 5, 1, '38a2736fe89e1f2fe417212eef9e9726', '2022-07-18 17:50:44pm');

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `id` int(11) NOT NULL,
  `department` varchar(200) DEFAULT NULL,
  `specializations` varchar(200) DEFAULT NULL,
  `host_key` varchar(200) DEFAULT NULL,
  `date_added` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`id`, `department`, `specializations`, `host_key`, `date_added`) VALUES
(1, '0', 'ewwqwe', '', '07/17/22'),
(2, '1', 'biology', '38a2736fe89e1f2fe417212eef9e9726', '08/04/22');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `fn` varchar(100) DEFAULT NULL,
  `ln` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dpt_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `host_key` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffs_salary`
--

CREATE TABLE `staffs_salary` (
  `id` int(11) NOT NULL,
  `staffs_id` int(11) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `dated` varchar(20) DEFAULT NULL,
  `host_key` varchar(200) DEFAULT NULL,
  `branches` int(11) DEFAULT NULL,
  `bon` varchar(100) DEFAULT NULL,
  `fines` varchar(100) DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffs_salary`
--

INSERT INTO `staffs_salary` (`id`, `staffs_id`, `amount`, `dated`, `host_key`, `branches`, `bon`, `fines`, `notes`) VALUES
(4, 5, '600000', '2022/07/25', '38a2736fe89e1f2fe417212eef9e9726', 99, NULL, NULL, NULL),
(5, 7, '290000', '2022/07/25', '38a2736fe89e1f2fe417212eef9e9726', 99, NULL, NULL, NULL),
(6, 8, '129000', '2022/07/25', '38a2736fe89e1f2fe417212eef9e9726', 99, NULL, NULL, NULL),
(7, 9, '90000', '2022/07/25', '38a2736fe89e1f2fe417212eef9e9726', 99, NULL, NULL, NULL),
(8, 13, '', '2022/07/25', '38a2736fe89e1f2fe417212eef9e9726', 99, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_erm`
--

CREATE TABLE `staff_erm` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `qualifications` varchar(255) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `privillege` varchar(50) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `sex` varchar(30) DEFAULT NULL,
  `marital_status` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `next_kin` varchar(100) DEFAULT NULL,
  `tribe` varchar(100) DEFAULT NULL,
  `salary` float DEFAULT NULL,
  `state_og` varchar(255) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `guarator` varchar(255) DEFAULT NULL,
  `qulification` varchar(150) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `specialist` int(11) DEFAULT NULL,
  `nurse_id` int(11) NOT NULL DEFAULT 0,
  `ward_id` int(11) NOT NULL,
  `account_type` int(11) NOT NULL,
  `access_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_erm`
--

INSERT INTO `staff_erm` (`id`, `fullname`, `department_id`, `qualifications`, `occupation`, `privillege`, `age`, `sex`, `marital_status`, `status`, `host_key`, `phone`, `email`, `password`, `religion`, `next_kin`, `tribe`, `salary`, `state_og`, `nationality`, `guarator`, `qulification`, `branch_id`, `photo`, `specialist`, `nurse_id`, `ward_id`, `account_type`, `access_level`) VALUES
(5, 'Dr Nelly eke', 1, 'doctor', 'student', '2', '2000-09-23', 'Male', 'Single', NULL, '38a2736fe89e1f2fe417212eef9e9726', '0903898393', 'edwineke25@gmail.com', '1', 'christain', 'the law', 'igbo', 600000, NULL, NULL, NULL, NULL, 1, '7813785eea339f464ca/137321617e8f93a6437.png', 12, 1, 2, 2, 2),
(7, 'Chinoso Anapo', 1, 'the smae', 'lab tech', '1', '1993-09-30', 'Male', 'signe', NULL, '38a2736fe89e1f2fe417212eef9e9726', '08037773727', 'chinoso@mail.com', '12345', 'chris', 'peter', 'ibgo', 290000, NULL, NULL, NULL, NULL, 1, '7813785eea339f464ca/882459617f1735a9718.png', 12, 0, 0, 3, 0),
(8, 'Lawson Eke', 1, 'the smae', 'lab tech', '3', '1993-09-30', 'Male', 'signe', NULL, '38a2736fe89e1f2fe417212eef9e9726', '08037773727', 'lawson@mail.com', '12345', 'chris', 'peter', 'ibgo', 129000, NULL, NULL, NULL, NULL, 1, '7813785eea339f464ca/916864617f17a92de2b.png', 11, 1, 3, 1, 1),
(9, 'chigozie Madu', 1, 'Lab tech', 'sci tech', '1', '1992-10-10', 'Male', 'married', NULL, '38a2736fe89e1f2fe417212eef9e9726', '0930303003', 'martin2@mail.com', '12345', 'crs', 'okene peter', 'yorbs', 90000, '', '', '', '', 1, '7813785eea339f464ca/89187561a00a4c666c2.png', 11, 0, 0, 4, 0),
(13, 'Wilon Bilson', 1, '', 'Normal', '2', '1980-11-26', 'Male', 'Married', NULL, '38a2736fe89e1f2fe417212eef9e9726', '', 'wilsonbil@mail.com', '12345', '', '', 'ibgo', NULL, 'imo state', 'usa', '', 'None', NULL, '7813785eea339f464ca/84149761a00ce997523.png', 11, 0, 0, 5, 0),
(14, 'dr ets a', 0, '', '', NULL, '', 'Male', '', NULL, '', '', 'dr_test@mail.com', '11111', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surgical_notes`
--

CREATE TABLE `surgical_notes` (
  `id` int(11) NOT NULL,
  `report_info` text DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `created_date` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surgical_notes`
--

INSERT INTO `surgical_notes` (`id`, `report_info`, `doc_id`, `pid`, `host_key`, `created_date`) VALUES
(1, '&lt;bold&gt;&lt;h2&gt;Anesthetist chat&lt;/h2&gt;&lt;/bold&gt;\r\n                                &lt;h3&gt;Surgery&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n                                 &lt;h3&gt;Indication&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n                                 &lt;h3&gt;Anesthesia&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n                                 &lt;h3&gt;Surgeon&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n\r\n                                 &lt;h3&gt;Anesthetist&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n\r\n                                 &lt;h3&gt;Assistant&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n\r\n                                 &lt;h3&gt;Mallampati Score&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n                                 &lt;h3&gt;ASA Grade&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n                                 &lt;h3&gt;Premedication&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n                                 &lt;h3&gt;Induction Time&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n                                 &lt;h3&gt;Note&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n                                &lt;h2&gt;Operation note&lt;/h2&gt;\r\n                                ...\r\n                                &lt;br&gt;', 5, 0, '38a2736fe89e1f2fe417212eef9e9726', '2022-07-04 17:56:05pm'),
(2, '&lt;bold&gt;&lt;h2&gt;Anesthetist chat&lt;/h2&gt;&lt;/bold&gt;\r\n                                &lt;h3&gt;Surgery&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n                                 &lt;h3&gt;Indication&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n                                 &lt;h3&gt;Anesthesia&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n                                 &lt;h3&gt;Surgeon&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n\r\n                                 &lt;h3&gt;Anesthetist&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n\r\n                                 &lt;h3&gt;Assistant&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n\r\n                                 &lt;h3&gt;Mallampati Score&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n                                 &lt;h3&gt;ASA Grade&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n                                 &lt;h3&gt;Premedication&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n                                 &lt;h3&gt;Induction Time&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n                                 &lt;h3&gt;Note&lt;/h3&gt;\r\n                                ...\r\n                                &lt;br&gt;\r\n\r\n                                &lt;h2&gt;Operation note&lt;/h2&gt;\r\n                                ...\r\n                                &lt;br&gt;', 5, 1, '38a2736fe89e1f2fe417212eef9e9726', '2022-07-18 18:28:16pm');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `id` int(11) NOT NULL,
  `tax_name` varchar(200) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `host_key` varchar(200) NOT NULL,
  `addded_date` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`id`, `tax_name`, `amount`, `type`, `host_key`, `addded_date`) VALUES
(2, 'ff', 400, 'Flat', '38a2736fe89e1f2fe417212eef9e9726', '07/26/22'),
(3, '5%', 100, 'Percentage', '38a2736fe89e1f2fe417212eef9e9726', '08/04/22');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `name_vendors` varchar(255) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `details` varchar(200) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `date_created` varchar(20) DEFAULT NULL,
  `branch` int(11) DEFAULT NULL,
  `emails` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vitals`
--

CREATE TABLE `vitals` (
  `id` int(11) NOT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `height` float DEFAULT NULL,
  `blood_Pressure` float DEFAULT NULL,
  `body_Temperature` float DEFAULT NULL,
  `heart_Rate` float DEFAULT NULL,
  `respiratory_Rate` float DEFAULT NULL,
  `oxygen_Saturation` float DEFAULT NULL,
  `random_Blood` float DEFAULT NULL,
  `fbdominal_Girth` float DEFAULT NULL,
  `fasting_Blood_Sugar` float DEFAULT NULL,
  `head_Circumference` float DEFAULT NULL,
  `chest_Circumference` float DEFAULT NULL,
  `mac` float DEFAULT NULL,
  `subscapular_Skinfold` float DEFAULT NULL,
  `triceps_Skinfold` float DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `dated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vitals`
--

INSERT INTO `vitals` (`id`, `host_key`, `weight`, `height`, `blood_Pressure`, `body_Temperature`, `heart_Rate`, `respiratory_Rate`, `oxygen_Saturation`, `random_Blood`, `fbdominal_Girth`, `fasting_Blood_Sugar`, `head_Circumference`, `chest_Circumference`, `mac`, `subscapular_Skinfold`, `triceps_Skinfold`, `pid`, `doc_id`, `notes`, `dated`) VALUES
(1, '38a2736fe89e1f2fe417212eef9e9726', 600, 5.5, 100, 34, 89, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 5, '0', '2022-07-18 18:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `wards`
--

CREATE TABLE `wards` (
  `id` int(11) NOT NULL,
  `ward` varchar(255) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `host_key` varchar(255) DEFAULT NULL,
  `dated` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wards`
--

INSERT INTO `wards` (`id`, `ward`, `location`, `host_key`, `dated`) VALUES
(2, 'Ward 101', 'Location 23', '38a2736fe89e1f2fe417212eef9e9726', '2022/07/26'),
(3, 'Ward 902', 'Location 839', '38a2736fe89e1f2fe417212eef9e9726', '2022/07/27'),
(4, 'ward r100', '1st floor', '38a2736fe89e1f2fe417212eef9e9726', '2022/08/04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admitpatients`
--
ALTER TABLE `admitpatients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets_category`
--
ALTER TABLE `assets_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `beds`
--
ALTER TABLE `beds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bed_category`
--
ALTER TABLE `bed_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashbook`
--
ALTER TABLE `cashbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charges_category`
--
ALTER TABLE `charges_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clinical_note`
--
ALTER TABLE `clinical_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_notes`
--
ALTER TABLE `comment_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_result`
--
ALTER TABLE `custom_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_result_record`
--
ALTER TABLE `custom_result_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discharge_summary_notes`
--
ALTER TABLE `discharge_summary_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugs_category_generic`
--
ALTER TABLE `drugs_category_generic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugs_glass`
--
ALTER TABLE `drugs_glass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugs_list`
--
ALTER TABLE `drugs_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drugs_ps`
--
ALTER TABLE `drugs_ps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drug_chart`
--
ALTER TABLE `drug_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drug_supplier`
--
ALTER TABLE `drug_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `echats`
--
ALTER TABLE `echats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `echatsx`
--
ALTER TABLE `echatsx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `encounters`
--
ALTER TABLE `encounters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `encouter_comment`
--
ALTER TABLE `encouter_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fluid`
--
ALTER TABLE `fluid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hmo`
--
ALTER TABLE `hmo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_assets`
--
ALTER TABLE `hospital_assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_charges`
--
ALTER TABLE `hospital_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_users`
--
ALTER TABLE `hospital_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_branches`
--
ALTER TABLE `lab_branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_cases`
--
ALTER TABLE `lab_cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_category`
--
ALTER TABLE `lab_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_kits`
--
ALTER TABLE `lab_kits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_notes`
--
ALTER TABLE `medical_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operations`
--
ALTER TABLE `operations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients_crm`
--
ALTER TABLE `patients_crm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_diagnosis`
--
ALTER TABLE `patient_diagnosis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_plan`
--
ALTER TABLE `payment_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quee_user_test`
--
ALTER TABLE `quee_user_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radiography`
--
ALTER TABLE `radiography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radiology_rs`
--
ALTER TABLE `radiology_rs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reconcilate`
--
ALTER TABLE `reconcilate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral_letter`
--
ALTER TABLE `referral_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs_salary`
--
ALTER TABLE `staffs_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_erm`
--
ALTER TABLE `staff_erm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surgical_notes`
--
ALTER TABLE `surgical_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitals`
--
ALTER TABLE `vitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admitpatients`
--
ALTER TABLE `admitpatients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assets_category`
--
ALTER TABLE `assets_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beds`
--
ALTER TABLE `beds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bed_category`
--
ALTER TABLE `bed_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `cashbook`
--
ALTER TABLE `cashbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `charges_category`
--
ALTER TABLE `charges_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clinical_note`
--
ALTER TABLE `clinical_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment_notes`
--
ALTER TABLE `comment_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custom_result`
--
ALTER TABLE `custom_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `custom_result_record`
--
ALTER TABLE `custom_result_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discharge_summary_notes`
--
ALTER TABLE `discharge_summary_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `drugs_category_generic`
--
ALTER TABLE `drugs_category_generic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `drugs_glass`
--
ALTER TABLE `drugs_glass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `drugs_list`
--
ALTER TABLE `drugs_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `drugs_ps`
--
ALTER TABLE `drugs_ps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drug_chart`
--
ALTER TABLE `drug_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `drug_supplier`
--
ALTER TABLE `drug_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `echats`
--
ALTER TABLE `echats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `echatsx`
--
ALTER TABLE `echatsx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `encounters`
--
ALTER TABLE `encounters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `encouter_comment`
--
ALTER TABLE `encouter_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fluid`
--
ALTER TABLE `fluid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hmo`
--
ALTER TABLE `hmo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hospital_assets`
--
ALTER TABLE `hospital_assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital_charges`
--
ALTER TABLE `hospital_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hospital_users`
--
ALTER TABLE `hospital_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_branches`
--
ALTER TABLE `lab_branches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_cases`
--
ALTER TABLE `lab_cases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lab_category`
--
ALTER TABLE `lab_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `lab_kits`
--
ALTER TABLE `lab_kits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medical_notes`
--
ALTER TABLE `medical_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `operations`
--
ALTER TABLE `operations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients_crm`
--
ALTER TABLE `patients_crm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient_diagnosis`
--
ALTER TABLE `patient_diagnosis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment_plan`
--
ALTER TABLE `payment_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quee_user_test`
--
ALTER TABLE `quee_user_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `radiography`
--
ALTER TABLE `radiography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `radiology_rs`
--
ALTER TABLE `radiology_rs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reconcilate`
--
ALTER TABLE `reconcilate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referral_letter`
--
ALTER TABLE `referral_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffs_salary`
--
ALTER TABLE `staffs_salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff_erm`
--
ALTER TABLE `staff_erm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `surgical_notes`
--
ALTER TABLE `surgical_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vitals`
--
ALTER TABLE `vitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wards`
--
ALTER TABLE `wards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
