-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2017 at 05:17 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(100) NOT NULL,
  `name` char(100) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `patient_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `name`, `appointment_date`, `appointment_time`, `patient_id`) VALUES
(1, 'Tan Yang Lin', '2017-12-23', '14:00:00', 1),
(2, 'Avinashkumar A/L Alagapas', '2017-12-25', '15:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `medical_id` int(100) NOT NULL,
  `allergies` varchar(255) NOT NULL,
  `asthma` varchar(255) NOT NULL,
  `diabetes` varchar(255) NOT NULL,
  `hypertension` varchar(255) NOT NULL,
  `blooddyscrasias` varchar(255) NOT NULL,
  `heartdisease` varchar(255) NOT NULL,
  `congenitalheart` varchar(255) NOT NULL,
  `otherdisease` varchar(255) NOT NULL,
  `medictaken` varchar(255) NOT NULL,
  `patient_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_history`
--

INSERT INTO `medical_history` (`medical_id`, `allergies`, `asthma`, `diabetes`, `hypertension`, `blooddyscrasias`, `heartdisease`, `congenitalheart`, `otherdisease`, `medictaken`, `patient_id`) VALUES
(1, 'Yes', 'No', 'No', 'Yes', 'No', 'No', 'No', 'None', 'None', 1),
(2, 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 2),
(3, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'Hemorrhoids', 'None', 3),
(4, 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 4),
(5, 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'No', 'None', 'None', 5),
(6, 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 6),
(7, 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 7),
(8, 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 8),
(9, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 9),
(10, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 10),
(11, 'No', 'No', 'Yes', 'No', 'No', 'No', 'No', 'None', 'None', 11),
(12, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 12),
(13, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 13),
(14, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 14),
(15, 'No', 'Yes', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 15),
(16, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 16),
(17, 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'None', 'None', 17),
(18, 'Yes', 'Yes', 'Yes', 'No', 'No', 'No', 'No', 'None', 'None', 18),
(19, 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'None', 'None', 19),
(20, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'None', 'None', 20),
(21, 'No', 'No', 'No', 'Yes', 'No', 'No', 'No', 'None', 'None', 21),
(22, 'No', 'No', 'No', 'No', 'No', 'Yes', 'No', 'None', 'None', 22);

-- --------------------------------------------------------

--
-- Table structure for table `patient_info`
--

CREATE TABLE `patient_info` (
  `patient_id` int(100) NOT NULL,
  `name` char(100) NOT NULL,
  `matric_staffno` varchar(100) NOT NULL,
  `fac_dept` char(100) NOT NULL,
  `ic_passno` varchar(12) NOT NULL,
  `position` varchar(50) NOT NULL,
  `gender` char(10) NOT NULL,
  `citizen` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `patient_consent` char(100) NOT NULL,
  `id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_info`
--

INSERT INTO `patient_info` (`patient_id`, `name`, `matric_staffno`, `fac_dept`, `ic_passno`, `position`, `gender`, `citizen`, `phoneno`, `address`, `patient_consent`, `id`) VALUES
(1, 'Tan Yang Ling', 'B031510193', 'FTMK', '960525045291', 'Student', 'Male', 'Malaysian', '0102717040', '765, JALAN KOTA KENARI 4/5,\r\nKOTA KENARI, 09000\r\nKULIM, KEDAH\r\nMALAYSIA', 'approve', 0),
(2, 'Avinashkumar A/L Alagapas', 'B031410079', 'FTMK', '950324035241', 'Student', 'Male', 'Malaysian', '0102712413', 'LOT 148,\r\nJALAN HAJI SUPI,\r\nKG SALAK TINGGI,\r\n43900, SEPANG\r\nSELANGOR', 'approve', 0),
(3, 'Kuggeneswary A/L Subramaniam', 'B031620014', 'FTMK', '970229135237', 'Student', 'Male', 'Malaysian', '0103224730', '35, JALAN 16,\r\nAMPANG JAYA,\r\n68000 AMPANG,\r\nSELANGOR', 'approve', 0),
(4, 'Chua Zhee Yie', 'B031510220', 'FTMK', '961124045438', 'Student', 'Female', 'Malaysian', '0103818418', '15-071, LORONG SEKOLAH KANAN 3D,\r\nDESA ANGGERIK,\r\n26700, MUADZAM SHAH,\r\nPAHANG', 'approve', 0),
(5, 'Chong Jia Ying', 'B031620112', 'FKEKK', '971231015251', 'Student', 'Male', 'Malaysian', '0104267492', 'SEKSYEN PERDAGANGAN DLM NEGERI\r\nTINGKAT 2,\r\nBANGUNAN TUANKU SYED PUTRA,\r\n10200, GEORGETOWN, PULAU PI', 'approve', 0),
(6, 'Thisarmini A/P Suresh', 'B031510122', 'FKEKK', '960215053426', 'Student', 'Female', 'Malaysian', '0103903203', '980 TAMAN AMAN, ANAK BUKIT\r\n06550 ALOR STAR,\r\nKEDAH', 'approve', 0),
(7, 'Muhammad Naufal bin Mohd Ghazali', 'B031410088', 'FKEKK', '940831075247', 'Student', 'Male', 'Malaysian', '0104267492', 'BANDAR SERI ISKANDAR,\r\n31750 TRONOH,\r\nPERAK DARUL RIDZUAN', 'approve', 0),
(8, 'Imran Yasin bin Tajul Ariffin', 'B031620235', 'FKE', '970529035231', 'Student', 'Male', 'Malaysian', '0104317033', 'N0.23-11, BLOCK B, SIGNATURE OFFICE,\r\nTHE BOULEVARD MID VALLEY CITY\r\nLINGKARAN SYED PUTRA,\r\n59200, K', 'approve', 0),
(9, 'Nur Fadzlin Syahirah binti Zulkarnain', 'B031620221', 'FKE', '960907305496', 'Student', 'Female', 'Malaysian', '01116111310', 'No.14, Jalan 4/5E,\r\nBandar Baru Bangi,\r\n43650 Bangi,\r\nSelangor', 'approve', 0),
(10, 'Muhammad Izzul Ikhwan bin Nordin', 'B031510001', 'FKE', '960325075243', 'Student', 'Male', 'Malaysian', '01125345654', '6447-H, BANGUNAN MAIK, JALAN TELIPOT,\r\n15150 KOTA BHARU,\r\nKELANTAN', 'approve', 0),
(11, 'Muhammad Hasif bin Abd Hamid', 'B031620301', 'FKE', '950107035521', 'Student', 'Male', 'Malaysian', '1116234024', 'PT 517 Paya Rambai Jalan Bayam,\r\n15200 ,\r\nKota Bharu,\r\n Kelantan', 'approve', 0),
(12, 'Muhammad Haniff Fauzan bin Derani', 'B031510192', 'FKP', '940621025127', 'Student', 'Male', 'Malaysian', '01116122177', 'NO 6, JALAN 8,\r\nTAMAN DESA SENTOSA,\r\n43100 HULU LANGAT, SELANGOR', 'approve', 0),
(13, 'Hannani binti Mahamad Kamal', '01207', 'FTMK', '891231075244', 'Staff', 'Female', 'Malaysian', '149823655', 'NO 60, BATU 4 1/2, KG ALOR ARA TIMUR,\r\n02600 ARAU, \r\nPERLIS', 'approve', 0),
(14, 'Nurul Husna binti Ibrahim', '01350', 'FKP', '900401043223', 'Staff', 'Female', 'Malaysian', '0144920867', ' PT2064, TAMAN SARI,\r\n 15200, KOTA BHARU, \r\nKELANTAN', 'approve', 0),
(15, 'Siti Nur Syahirah binti Abd Kadir', 'B031510175', 'FKP', '950625075248', 'Student', 'Female', 'Malaysian', '0139344564', 'LOT 5673, LORONG SERAI 7\r\nBT. 11 1/2 KG. SG. SERAI,\r\n43100, HULU LANGAT\r\nSELANGOR', 'approve', 0),
(16, 'Nur Shafiqah binti Mohd Zaki', '12333', 'FKM', '871231124248', 'Staff', 'Female', 'Malaysian', '0129823954', 'LOT 10657, NO.3, BT.9,\r\nKG. PADANG MENGKUANG, BUKIT PAYONG,\r\n21400, MARANG, TERENGGANU, MALAYSIA', 'approve', 0),
(17, 'Muhammad Amirul Hakimi bin Ghazali', '01789', 'FKM', '850527017541', 'Staff', 'Male', 'Malaysian', '0179823924', '1468, Lrg Kempas 6/3,\r\nTaman Kempas,\r\n08000, Sungai Petani,\r\nKedah', 'approve', 0),
(18, 'Suhadi Djami Asnawi', 'B031510088', 'FTK', 'A2077158', 'Student', 'Male', 'Indonesian', '+6282237597953', 'Jl. Perhubungan IV/25\r\n   Pondok Betung,\r\n   Tangerang, 15224,        \r\n   Indonesia', 'approve', 0),
(19, 'Irfan Zikri bin Saiful Rizal', '10255', 'FTK', '880107033541', 'Staff', 'Male', 'Malaysian', '0197535262', 'JALAN AU2A/14,\r\nTAMAN SRI KERAMAT,\r\n54200, KUALA LUMPUR', 'approve', 0),
(20, 'Nia Ramadhani', 'B031510089', 'FTMK', 'A3452147', 'Student', 'Female', 'Indonesian', '+6282237597952', '73, Jalan Cilaki,\r\nBANDUNG,\r\n40115,  INDONESIA', 'approve', 0),
(21, 'Amir Hamzah bin Aris', '12980', 'FTK', '751002245051', 'Staff', 'Male', 'Malaysian', '0187562345', 'No 25 Jalan Permata 2 Taman Delima 76543 Selangor', 'approve', 0),
(22, 'Mustafa Kamal bin Jaafar', '16754', 'FKE', '650908017809', 'Staff', 'Male', 'Malaysian', '0124567502', 'No 42, Jalan Temenggung 9, Taman Temenggung, 34000 Kajang Selangor', 'approve', 0);

-- --------------------------------------------------------

--
-- Table structure for table `queue`
--

CREATE TABLE `queue` (
  `queue_id` int(11) NOT NULL,
  `queue_date` date DEFAULT NULL,
  `queue_time` time DEFAULT NULL,
  `queue_number` int(11) DEFAULT NULL,
  `patient_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `queue`
--

INSERT INTO `queue` (`queue_id`, `queue_date`, `queue_time`, `queue_number`, `patient_id`) VALUES
(1, '2017-12-20', '09:00:00', 1, 1),
(2, '2017-12-20', '09:30:00', 2, 2),
(3, '2017-12-20', '10:00:00', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `treatment_record`
--

CREATE TABLE `treatment_record` (
  `treatment_id` int(100) NOT NULL,
  `treatment_date` date NOT NULL,
  `treatment_type` varchar(255) NOT NULL,
  `treatment_note` varchar(255) NOT NULL,
  `patient_id` int(100) NOT NULL,
  `gg_55` text NOT NULL,
  `gg_54` text NOT NULL,
  `gg_53` text NOT NULL,
  `gg_52` text NOT NULL,
  `gg_51` text NOT NULL,
  `gg_61` text NOT NULL,
  `gg_62` text NOT NULL,
  `gg_63` text NOT NULL,
  `gg_64` text NOT NULL,
  `gg_65` text NOT NULL,
  `gg_18` text NOT NULL,
  `gg_17` text NOT NULL,
  `gg_16` text NOT NULL,
  `gg_15` text NOT NULL,
  `gg_14` text NOT NULL,
  `gg_13` text NOT NULL,
  `gg_12` text NOT NULL,
  `gg_11` text NOT NULL,
  `gg_21` text NOT NULL,
  `gg_22` text NOT NULL,
  `gg_23` text NOT NULL,
  `gg_24` text NOT NULL,
  `gg_25` text NOT NULL,
  `gg_26` text NOT NULL,
  `gg_27` text NOT NULL,
  `gg_28` text NOT NULL,
  `gg_48` text NOT NULL,
  `gg_47` text NOT NULL,
  `gg_46` text NOT NULL,
  `gg_45` text NOT NULL,
  `gg_44` text NOT NULL,
  `gg_43` text NOT NULL,
  `gg_42` text NOT NULL,
  `gg_41` text NOT NULL,
  `gg_31` text NOT NULL,
  `gg_32` text NOT NULL,
  `gg_33` text NOT NULL,
  `gg_34` text NOT NULL,
  `gg_35` text NOT NULL,
  `gg_36` text NOT NULL,
  `gg_37` text NOT NULL,
  `gg_38` text NOT NULL,
  `gg_85` text NOT NULL,
  `gg_84` text NOT NULL,
  `gg_83` text NOT NULL,
  `gg_82` text NOT NULL,
  `gg_81` text NOT NULL,
  `gg_71` text NOT NULL,
  `gg_72` text NOT NULL,
  `gg_73` text NOT NULL,
  `gg_74` text NOT NULL,
  `gg_75` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_record`
--

INSERT INTO `treatment_record` (`treatment_id`, `treatment_date`, `treatment_type`, `treatment_note`, `patient_id`, `gg_55`, `gg_54`, `gg_53`, `gg_52`, `gg_51`, `gg_61`, `gg_62`, `gg_63`, `gg_64`, `gg_65`, `gg_18`, `gg_17`, `gg_16`, `gg_15`, `gg_14`, `gg_13`, `gg_12`, `gg_11`, `gg_21`, `gg_22`, `gg_23`, `gg_24`, `gg_25`, `gg_26`, `gg_27`, `gg_28`, `gg_48`, `gg_47`, `gg_46`, `gg_45`, `gg_44`, `gg_43`, `gg_42`, `gg_41`, `gg_31`, `gg_32`, `gg_33`, `gg_34`, `gg_35`, `gg_36`, `gg_37`, `gg_38`, `gg_85`, `gg_84`, `gg_83`, `gg_82`, `gg_81`, `gg_71`, `gg_72`, `gg_73`, `gg_74`, `gg_75`) VALUES
(1, '2017-11-20', 'pemeriksaan', '', 1, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'perlucabut', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(2, '2017-11-23', 'cabutan', '', 1, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'telahcabut', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(3, '2017-12-08', 'tampalan', '', 1, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'telahcabut', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'tampaldibuat', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(4, '2017-10-24', 'pemeriksaan', '', 2, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'adatampal', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'untuktampal', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'xdegigi', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'tunggul', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(5, '2017-10-30', 'tampalan', '', 2, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'adatampal', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'tampaldibuat', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'xdegigi', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'tunggul', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(6, '2017-11-07', 'penskaleran', '', 3, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'telahcabut', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(7, '2017-12-06', 'others', '', 4, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'tampaldibuat', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'untuktampal', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(8, '2017-11-16', 'pemeriksaan', '', 5, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(9, '2017-10-18', 'pemeriksaan', '', 11, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(10, '2017-10-12', 'ohi', '', 9, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(11, '2017-09-15', 'tampalan', '', 13, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'untuktampal', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'tampaldibuat', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(12, '2017-09-11', 'tampalan', '', 9, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'tampaldibuat', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(13, '2017-08-16', 'tampalan', '', 8, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'tampaldibuat', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(14, '2017-12-18', 'ohi', 'Consultation', 1, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'telahcabut', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'tampaldibuat', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(15, '2017-12-19', 'penskaleran', '', 1, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'telahcabut', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'tampaldibuat', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(16, '2017-03-13', 'pemeriksaan', '', 19, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'tampaldibuat', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(17, '2017-12-19', 'tampalan', '', 1, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'telahcabut', 'adatampal', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'tampaldibuat', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(18, '2017-12-20', 'cabutan', '', 1, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'telahcabut', 'telahcabut', 'normal2', 'normal2', 'telahcabut', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'tampaldibuat', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(19, '2017-12-20', 'cabutan', '', 1, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'telahcabut', 'telahcabut', 'telahcabut', 'normal2', 'telahcabut', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'tampaldibuat', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2'),
(20, '2017-12-20', 'tampalan', '', 1, 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'telahcabut', 'telahcabut', 'normal2', 'normal2', 'telahcabut', 'normal1', 'normal1', 'adatampal', 'normal1', 'normal1', 'normal1', 'tampaldibuat', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal2', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal1', 'normal2', 'normal2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `username` char(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'dentist', '0987c1f6e6828d62f554d07f8ba744a8', 'dentist'),
(4, 'registrar', '5940569cd1d60781f856f93235b072ee', 'registrar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `medical_history`
--
ALTER TABLE `medical_history`
  ADD PRIMARY KEY (`medical_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `patient_info`
--
ALTER TABLE `patient_info`
  ADD PRIMARY KEY (`patient_id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `queue`
--
ALTER TABLE `queue`
  ADD PRIMARY KEY (`queue_id`);

--
-- Indexes for table `treatment_record`
--
ALTER TABLE `treatment_record`
  ADD PRIMARY KEY (`treatment_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical_history`
--
ALTER TABLE `medical_history`
  MODIFY `medical_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `patient_info`
--
ALTER TABLE `patient_info`
  MODIFY `patient_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `queue`
--
ALTER TABLE `queue`
  MODIFY `queue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `treatment_record`
--
ALTER TABLE `treatment_record`
  MODIFY `treatment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
