-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 01:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_concern`
--

CREATE TABLE `academic_concern` (
  `ID` int(11) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `concern_reason` varchar(100) DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL,
  `date_action` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_concern`
--

INSERT INTO `academic_concern` (`ID`, `user_id`, `concern_reason`, `action`, `date_action`) VALUES
(8, '43', 'Difficulty with lessons', 'Resolve by Adviser', '2022-10-13'),
(9, '42', 'Difficulty with lessons', 'Resolve by Adviser', '2022-10-15'),
(10, '48', 'Difficulty with lessons', 'Refer to CSDL', '2023-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `form_type` varchar(100) DEFAULT NULL,
  `activity_id` varchar(100) NOT NULL,
  `teacher_assign` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `middle` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `email`, `username`, `password`, `role`, `firstname`, `middle`, `gender`, `birthdate`, `lastname`) VALUES
(1, 'admin@admin.com', 'admin', 'admin', 'Admin', NULL, NULL, NULL, NULL, NULL),
(22, 'nery@phinmaed.com', 'Nery Peralta', 'nery', 'Teacher', 'Nery', NULL, 'Female', '2022-10-13', 'Peralta');

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `ID` int(11) NOT NULL,
  `subject_code` varchar(200) DEFAULT NULL,
  `teacher_assign` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `activity_id` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id` int(11) NOT NULL,
  `subject_code` varchar(500) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `school_year` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `semester` varchar(200) DEFAULT NULL,
  `term` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id`, `subject_code`, `year`, `school_year`, `course`, `semester`, `term`) VALUES
(46, NULL, '2', NULL, NULL, NULL, NULL),
(49, NULL, '3', NULL, NULL, NULL, NULL),
(53, NULL, '4', NULL, NULL, NULL, NULL),
(54, NULL, NULL, '2022', NULL, NULL, NULL),
(59, NULL, NULL, NULL, 'BSTM', NULL, NULL),
(64, NULL, NULL, NULL, NULL, '2', NULL),
(65, NULL, NULL, NULL, NULL, NULL, '2'),
(71, NULL, NULL, NULL, NULL, '1', NULL),
(72, NULL, NULL, NULL, NULL, NULL, '1'),
(73, NULL, NULL, NULL, NULL, NULL, '3'),
(74, NULL, NULL, NULL, 'BSIT', NULL, NULL),
(75, 'SSP007-UP-FA1-BSITWEBDEV3-1', NULL, NULL, NULL, NULL, NULL),
(76, 'SSP007-UP-FA1-BSITWEBDEV3-2', NULL, NULL, NULL, NULL, NULL),
(77, 'SSP007-UP-FA1-BSITWEBDEV3-3', NULL, NULL, NULL, NULL, NULL),
(78, 'SSP007-UP-FA1-BSITWEBDEV3-4', NULL, NULL, NULL, NULL, NULL),
(79, 'SSP007-UP-FA1-BSITWEBDEV3-5', NULL, NULL, NULL, NULL, NULL),
(80, 'SSP007-UP-FA1-BSITWEBDEV3-6', NULL, NULL, NULL, NULL, NULL),
(82, 'SSP005-UP-FA1-BSITWEBDEV2-1', NULL, NULL, NULL, NULL, NULL),
(83, 'SSP005-UP-FA1-BSITWEBDEV2-2', NULL, NULL, NULL, NULL, NULL),
(85, 'SSP005-UP-FA1-BSITWEBDEV2-2', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `financial_concern`
--

CREATE TABLE `financial_concern` (
  `ID` int(11) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `cash_flow_problems` varchar(100) DEFAULT NULL,
  `less_of_support` varchar(100) DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL,
  `date_action` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `financial_concern`
--

INSERT INTO `financial_concern` (`ID`, `user_id`, `cash_flow_problems`, `less_of_support`, `action`, `date_action`) VALUES
(7, '43', 'Lack of funds for food', 'Loss from/failed harvest', 'Resolved by Adviser', '2022-10-13'),
(8, '42', 'Cash Flow Problems', 'Illness of Provider', 'Resolved by Adviser', '2022-10-15'),
(9, '48', 'Cash Flow Problems', 'Death of Provider', 'Resolved by Adviser', '2023-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `personal_concern`
--

CREATE TABLE `personal_concern` (
  `ID` int(11) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `concern_reason` varchar(100) DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL,
  `date_action` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_concern`
--

INSERT INTO `personal_concern` (`ID`, `user_id`, `concern_reason`, `action`, `date_action`) VALUES
(39, '43', 'Family Problem', 'Resolve by Adviser', '2022-10-13'),
(40, '42', 'Family Problem', 'Resolve by Adviser', '2022-10-15'),
(41, '42', 'Family Problem', 'Resolve by Adviser', '2022-10-15'),
(42, '48', 'Addiction', 'Resolve by Adviser', '2023-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `qustioner`
--

CREATE TABLE `qustioner` (
  `ID` int(11) NOT NULL,
  `question` varchar(500) DEFAULT NULL,
  `correct` varchar(100) DEFAULT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qustioner`
--

INSERT INTO `qustioner` (`ID`, `question`, `correct`, `Title`, `status`) VALUES
(25, 'I have healthy ways to cope with the challenges in life.', NULL, NULL, 'personal_status'),
(26, 'I can fully concentrate on my academic or personal tasks.', NULL, NULL, 'personal_status'),
(27, 'I often wake up with a lot of energy.', NULL, NULL, 'personal_status'),
(28, 'I am confident about what I can do. ', NULL, NULL, 'personal_status'),
(29, 'I am confident with who I am and what I want in life.', NULL, NULL, 'personal_status'),
(32, 'I still have financial support for my education from my family, relatives and/or scholarship grants.   ', NULL, NULL, 'financial_status'),
(33, 'I can secure the exam permit on/before the exam.  ', NULL, NULL, 'financial_status'),
(35, 'I am regularly attending all my classes on time.', NULL, NULL, 'academic_status'),
(36, 'I always complete and submit the activities on time in all subjects.  Academic', NULL, NULL, 'academic_status'),
(37, 'I see the relevance of all the classes I’m taking this semester.', NULL, NULL, 'academic_status'),
(38, 'I am getting the academic support I need from my teachers.', NULL, NULL, 'academic_status'),
(41, 'In the last month, how often have you been upset because of something that happened unexpectedly?', NULL, NULL, 'level_of_stress'),
(42, 'In the last month, how often have you felt that you were unable to control the important things in your life?', NULL, NULL, 'level_of_stress'),
(43, 'In the last month, how often have you felt nervous and \"stressed\"?', NULL, NULL, 'level_of_stress'),
(44, 'In the last month, how often have you felt confident about your ability to handle your personal problems?', NULL, NULL, 'level_of_stress'),
(45, 'In the last month, how often have you felt that things were going your way?', NULL, NULL, 'level_of_stress'),
(46, 'In the last month, how often have you found that you could not cope with all the things you had to do?', NULL, NULL, 'level_of_stress'),
(48, 'In the last month, how often have you been able to control irritations in your life?', NULL, NULL, 'level_of_stress'),
(49, 'In the last month, how often have you felt that you were on top of things?', NULL, NULL, 'level_of_stress'),
(50, 'In the last month, how often have you been angered because of things that were outside your control?', NULL, NULL, 'level_of_stress'),
(51, 'In the last month, how often have you felt difficulties were piling up so high that you could not overcome them?', NULL, NULL, 'level_of_stress');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question_score`
--

CREATE TABLE `tbl_question_score` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_data` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `academic_data` text NOT NULL,
  `financial_data` text NOT NULL,
  `stress_data` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_question_score`
--

INSERT INTO `tbl_question_score` (`id`, `user_id`, `question_data`, `submitted_at`, `academic_data`, `financial_data`, `stress_data`) VALUES
(234, 1, '', '2022-10-12 00:20:25', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(235, 1, '', '2022-10-12 00:20:45', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(236, 1, '', '2022-10-12 00:21:07', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(237, 1, '', '2022-10-12 00:21:19', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(238, 1, '', '2022-10-12 00:21:27', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(239, 1, '', '2022-10-12 00:22:00', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(240, 1, '', '2022-10-12 00:22:15', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(241, 1, '', '2022-10-12 00:22:21', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(242, 1, '', '2022-10-12 00:22:28', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(243, 1, '', '2022-10-12 00:22:30', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(244, 1, '', '2022-10-12 00:22:47', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(245, 1, '', '2022-10-12 00:22:54', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(246, 1, '', '2022-10-12 00:23:01', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(247, 1, '', '2022-10-12 00:23:11', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(248, 1, '', '2022-10-12 00:23:17', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(249, 1, '', '2022-10-12 00:23:22', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(250, 1, '', '2022-10-12 00:23:31', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(251, 1, '', '2022-10-12 00:23:34', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(252, 1, '', '2022-10-12 00:23:42', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(253, 1, '', '2022-10-12 00:24:01', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(254, 1, '', '2022-10-12 00:24:09', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(255, 1, '', '2022-10-12 00:24:10', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(256, 1, '', '2022-10-12 00:24:16', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(257, 1, '', '2022-10-12 00:24:19', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(258, 1, '', '2022-10-12 00:24:22', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(259, 1, '', '2022-10-12 00:24:28', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(260, 1, '', '2022-10-12 00:24:31', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(261, 1, '', '2022-10-12 00:24:37', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(262, 1, '', '2022-10-12 00:24:40', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(263, 1, '', '2022-10-12 00:24:44', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(264, 1, '', '2022-10-12 00:24:51', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(265, 1, '', '2022-10-12 00:24:55', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(266, 1, '', '2022-10-12 00:25:01', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(267, 1, '', '2022-10-12 00:25:11', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(268, 1, '', '2022-10-12 00:25:17', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(269, 1, '', '2022-10-12 00:25:19', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(270, 1, '', '2022-10-12 00:25:24', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(271, 1, '', '2022-10-12 00:25:27', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(272, 1, '', '2022-10-12 00:25:30', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(273, 1, '', '2022-10-12 00:25:42', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(274, 1, '', '2022-10-12 00:25:49', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(275, 1, '', '2022-10-12 00:25:50', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(276, 1, '', '2022-10-12 00:25:59', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(277, 1, '', '2022-10-12 00:26:17', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(278, 1, '', '2022-10-12 00:26:27', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(279, 1, '', '2022-10-12 00:26:39', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(280, 1, '', '2022-10-12 00:26:57', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(281, 1, '', '2022-10-12 00:27:02', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(282, 1, '', '2022-10-12 00:27:05', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(283, 1, '', '2022-10-12 00:27:22', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(284, 1, '', '2022-10-12 00:27:42', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(285, 1, '', '2022-10-12 00:27:46', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(286, 1, '', '2022-10-12 00:27:54', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(287, 1, '', '2022-10-12 00:28:00', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(288, 1, '', '2022-10-12 00:28:07', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(289, 1, '', '2022-10-12 00:28:15', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(290, 1, '', '2022-10-12 00:28:23', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(291, 1, '', '2022-10-12 00:28:29', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(292, 1, '', '2022-10-12 00:28:30', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(293, 1, '', '2022-10-12 00:28:40', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(294, 1, '', '2022-10-12 00:28:57', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(295, 1, '[\n    {\n        \"total_score\": 0\n    }\n]', '2022-10-12 00:29:53', '', '', NULL),
(296, 1, '', '2022-10-12 00:29:54', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(297, 1, '', '2022-10-12 00:29:56', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(298, 1, '', '2022-10-12 00:29:59', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(299, 1, '', '2022-10-12 00:30:11', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(300, 1, '', '2022-10-12 00:31:19', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(301, 1, '', '2022-10-12 00:31:36', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(302, 1, '', '2022-10-12 00:31:41', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(303, 1, '', '2022-10-12 00:31:48', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(304, 1, '', '2022-10-12 00:31:58', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(305, 1, '', '2022-10-12 00:32:09', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(306, 1, '', '2022-10-12 00:33:10', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(307, 1, '', '2022-10-12 00:33:17', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(308, 1, '', '2022-10-12 00:33:25', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(309, 1, '', '2022-10-12 00:33:32', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(310, 1, '', '2022-10-12 00:33:50', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(311, 1, '', '2022-10-12 00:33:59', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(312, 1, '', '2022-10-12 00:34:09', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(313, 1, '', '2022-10-12 00:34:14', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(314, 1, '', '2022-10-12 00:34:15', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(315, 1, '', '2022-10-12 00:34:18', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(316, 1, '', '2022-10-12 00:34:23', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(317, 40, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"total_score\": 5\n    }\n]', '2022-10-12 02:22:18', '', '', NULL),
(318, 40, '', '2022-10-12 02:22:24', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"36\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"37\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"38\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"total_score\": 4\n    }\n]', '', NULL),
(319, 40, '', '2022-10-12 02:22:29', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"total_score:\": 2\n    }\n]', NULL),
(320, 40, '', '2022-10-12 02:22:31', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(321, 40, '', '2022-10-12 16:24:20', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(322, 40, '', '2022-10-12 16:24:22', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(323, 40, '', '2022-10-12 16:24:25', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(324, 42, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"3\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"2\"\n    },\n    {\n        \"total_score\": 8\n    }\n]', '2022-10-13 14:04:43', '', '', NULL),
(325, 42, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"2\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"3\"\n    },\n    {\n        \"total_score\": 8\n    }\n]', '2022-10-13 14:10:54', '', '', NULL),
(326, 42, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"2\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"3\"\n    },\n    {\n        \"total_score\": 8\n    }\n]', '2022-10-13 14:12:32', '', '', NULL),
(327, 42, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"2\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"3\"\n    },\n    {\n        \"total_score\": 8\n    }\n]', '2022-10-13 14:12:57', '', '', NULL),
(328, 42, '', '2022-10-13 14:13:14', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"5\"\n    },\n    {\n        \"academic_id\": \"36\",\n        \"academic_score\": \"5\"\n    },\n    {\n        \"academic_id\": \"37\",\n        \"academic_score\": \"5\"\n    },\n    {\n        \"academic_id\": \"38\",\n        \"academic_score\": \"5\"\n    },\n    {\n        \"total_score\": 20\n    }\n]', '', NULL),
(329, 42, '', '2022-10-13 14:13:25', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"5\"\n    },\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"5\"\n    },\n    {\n        \"total_score:\": 10\n    }\n]', NULL),
(330, 42, '', '2022-10-13 14:13:27', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(331, 43, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"total_score\": 5\n    }\n]', '2022-10-13 14:15:00', '', '', NULL),
(332, 43, '', '2022-10-13 14:15:05', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"36\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"37\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"38\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"total_score\": 4\n    }\n]', '', NULL),
(333, 43, '', '2022-10-13 14:15:10', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"total_score:\": 2\n    }\n]', NULL),
(334, 43, '', '2022-10-13 14:15:12', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(335, 44, '[\n    {\n        \"total_score\": 0\n    }\n]', '2022-10-13 14:43:40', '', '', NULL),
(336, 44, '', '2022-10-13 14:43:41', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(337, 44, '', '2022-10-13 14:43:43', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(338, 44, '', '2022-10-13 14:43:46', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(339, 44, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"5\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"5\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"5\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"5\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"5\"\n    },\n    {\n        \"total_score\": 25\n    }\n]', '2022-10-13 14:44:16', '', '', NULL),
(340, 44, '', '2022-10-13 14:44:23', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"5\"\n    },\n    {\n        \"academic_id\": \"36\",\n        \"academic_score\": \"5\"\n    },\n    {\n        \"academic_id\": \"37\",\n        \"academic_score\": \"5\"\n    },\n    {\n        \"academic_id\": \"38\",\n        \"academic_score\": \"5\"\n    },\n    {\n        \"total_score\": 20\n    }\n]', '', NULL),
(341, 44, '', '2022-10-13 14:44:26', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"5\"\n    },\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"5\"\n    },\n    {\n        \"total_score:\": 10\n    }\n]', NULL),
(342, 44, '', '2022-10-13 14:44:41', '', '', '[\n    {\n        \"stress_id\": \"41\",\n        \"stress_score\": \"5\"\n    },\n    {\n        \"stress_id\": \"42\",\n        \"stress_score\": \"5\"\n    },\n    {\n        \"stress_id\": \"43\",\n        \"stress_score\": \"5\"\n    },\n    {\n        \"stress_id\": \"44\",\n        \"stress_score\": \"5\"\n    },\n    {\n        \"stress_id\": \"45\",\n        \"stress_score\": \"5\"\n    },\n    {\n        \"stress_id\": \"46\",\n        \"stress_score\": \"5\"\n    },\n    {\n        \"stress_id\": \"48\",\n        \"stress_score\": \"5\"\n    },\n    {\n        \"stress_id\": \"49\",\n        \"stress_score\": \"5\"\n    },\n    {\n        \"stress_id\": \"50\",\n        \"stress_score\": \"5\"\n    },\n    {\n        \"stress_id\": \"51\",\n        \"stress_score\": \"5\"\n    },\n    {\n        \"total_score:\": 50\n    }\n]'),
(343, 42, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"total_score\": 5\n    }\n]', '2022-10-15 03:47:04', '', '', NULL),
(344, 42, '', '2022-10-15 03:47:10', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"36\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"37\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"38\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"total_score\": 4\n    }\n]', '', NULL),
(345, 42, '', '2022-10-15 03:47:14', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"total_score:\": 2\n    }\n]', NULL),
(346, 42, '', '2022-10-15 03:47:28', '', '', '[\n    {\n        \"stress_id\": \"41\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"42\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"43\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"44\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"45\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"46\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"48\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"49\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"50\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"51\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"total_score:\": 10\n    }\n]'),
(347, 48, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"total_score\": 5\n    }\n]', '2022-10-15 03:52:37', '', '', NULL),
(348, 48, '', '2022-10-15 03:52:43', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"36\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"37\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"38\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"total_score\": 4\n    }\n]', '', NULL),
(349, 48, '', '2022-10-15 03:52:46', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"total_score:\": 2\n    }\n]', NULL),
(350, 48, '', '2022-10-15 03:52:59', '', '', '[\n    {\n        \"stress_id\": \"41\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"42\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"43\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"44\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"45\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"46\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"48\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"49\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"50\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"51\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"total_score:\": 10\n    }\n]'),
(351, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2022-10-15 14:09:51', '', '', NULL),
(352, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2022-10-15 14:10:13', '', '', NULL),
(353, 42, '', '2022-10-15 14:11:02', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(354, 42, '', '2022-10-15 14:11:06', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(355, 42, '', '2022-10-15 14:11:44', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(356, 42, '', '2023-01-17 02:57:58', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(357, 42, '', '2023-01-17 02:58:00', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(358, 42, '[\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"total_score\": 4\n    }\n]', '2023-01-18 11:31:55', '', '', NULL),
(359, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-18 11:33:45', '', '', NULL),
(360, 42, '', '2023-01-18 11:33:48', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(361, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-18 11:34:31', '', '', NULL),
(362, 42, '', '2023-01-18 11:34:39', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(363, 42, '', '2023-01-18 11:34:42', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(364, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-18 11:39:57', '', '', NULL),
(365, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-19 01:52:03', '', '', NULL),
(366, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-19 01:52:24', '', '', NULL),
(367, 42, '', '2023-01-19 01:52:31', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(368, 42, '', '2023-01-19 01:52:34', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(369, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-19 16:27:34', '', '', NULL),
(370, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-19 16:28:14', '', '', NULL),
(371, 42, '', '2023-01-19 16:28:17', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(372, 42, '', '2023-01-19 16:28:20', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(373, 42, '', '2023-01-19 16:28:22', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(374, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-19 16:29:39', '', '', NULL),
(375, 42, '', '2023-01-19 16:29:42', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(376, 42, '', '2023-01-19 16:29:44', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(377, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-19 16:40:12', '', '', NULL),
(378, 42, '', '2023-01-19 16:40:14', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(379, 42, '', '2023-01-19 16:40:21', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(380, 42, '', '2023-01-19 16:40:34', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(381, 42, '', '2023-01-19 16:40:44', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(382, 42, '', '2023-01-19 16:40:52', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(383, 42, '', '2023-01-19 16:40:58', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(384, 42, '', '2023-01-19 16:41:28', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(385, 42, '', '2023-01-19 16:41:36', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(386, 42, '', '2023-01-19 16:41:40', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(387, 42, '', '2023-01-19 16:41:52', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(388, 42, '', '2023-01-19 16:42:36', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(389, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-19 16:43:29', '', '', NULL),
(390, 42, '', '2023-01-19 16:43:31', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(391, 42, '', '2023-01-19 16:43:33', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(392, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-19 16:44:33', '', '', NULL),
(393, 42, '', '2023-01-19 16:44:34', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(394, 42, '', '2023-01-19 16:44:36', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(395, 42, '', '2023-01-19 16:44:38', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(396, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-19 16:49:30', '', '', NULL),
(397, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-19 16:50:44', '', '', NULL),
(398, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-19 16:50:53', '', '', NULL),
(399, 42, '', '2023-01-19 16:50:54', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(400, 42, '', '2023-01-19 16:50:58', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(401, 42, '', '2023-01-19 16:51:00', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(402, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-19 16:51:09', '', '', NULL),
(403, 42, '', '2023-01-19 16:51:10', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(404, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-19 16:51:33', '', '', NULL),
(405, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-19 16:52:57', '', '', NULL),
(406, 42, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-23 12:35:54', '', '', NULL),
(407, 42, '', '2023-01-23 12:35:56', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(408, 42, '', '2023-01-23 12:35:58', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(409, 42, '', '2023-01-23 12:36:00', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(410, 49, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-23 12:44:35', '', '', NULL),
(411, 49, '', '2023-01-23 12:44:36', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(412, 49, '', '2023-01-23 12:44:38', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(413, 49, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"2\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"2\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"2\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"2\"\n    },\n    {\n        \"total_score\": 9\n    }\n]', '2023-01-23 12:59:22', '', '', NULL),
(414, 49, '', '2023-01-23 12:59:50', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"4\"\n    },\n    {\n        \"academic_id\": \"36\",\n        \"academic_score\": \"3\"\n    },\n    {\n        \"academic_id\": \"37\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"38\",\n        \"academic_score\": \"2\"\n    },\n    {\n        \"total_score\": 10\n    }\n]', '', NULL),
(415, 49, '', '2023-01-23 13:00:22', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"3\"\n    },\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"3\"\n    },\n    {\n        \"total_score:\": 6\n    }\n]', NULL),
(416, 49, '', '2023-01-23 13:01:17', '', '', '[\n    {\n        \"stress_id\": \"41\",\n        \"stress_score\": \"3\"\n    },\n    {\n        \"stress_id\": \"42\",\n        \"stress_score\": \"3\"\n    },\n    {\n        \"stress_id\": \"43\",\n        \"stress_score\": \"3\"\n    },\n    {\n        \"stress_id\": \"44\",\n        \"stress_score\": \"3\"\n    },\n    {\n        \"stress_id\": \"45\",\n        \"stress_score\": \"3\"\n    },\n    {\n        \"total_score:\": 15\n    }\n]'),
(417, 49, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"4\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"4\"\n    },\n    {\n        \"total_score\": 8\n    }\n]', '2023-01-23 13:02:56', '', '', NULL),
(418, 49, '', '2023-01-23 13:03:01', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"4\"\n    },\n    {\n        \"academic_id\": \"36\",\n        \"academic_score\": \"4\"\n    },\n    {\n        \"academic_id\": \"37\",\n        \"academic_score\": \"4\"\n    },\n    {\n        \"academic_id\": \"38\",\n        \"academic_score\": \"4\"\n    },\n    {\n        \"total_score\": 16\n    }\n]', '', NULL),
(419, 49, '', '2023-01-23 13:03:04', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"4\"\n    },\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"4\"\n    },\n    {\n        \"total_score:\": 8\n    }\n]', NULL),
(420, 49, '', '2023-01-23 13:03:14', '', '', '[\n    {\n        \"stress_id\": \"41\",\n        \"stress_score\": \"4\"\n    },\n    {\n        \"stress_id\": \"42\",\n        \"stress_score\": \"4\"\n    },\n    {\n        \"stress_id\": \"43\",\n        \"stress_score\": \"4\"\n    },\n    {\n        \"stress_id\": \"44\",\n        \"stress_score\": \"4\"\n    },\n    {\n        \"stress_id\": \"45\",\n        \"stress_score\": \"4\"\n    },\n    {\n        \"stress_id\": \"46\",\n        \"stress_score\": \"4\"\n    },\n    {\n        \"stress_id\": \"48\",\n        \"stress_score\": \"4\"\n    },\n    {\n        \"stress_id\": \"49\",\n        \"stress_score\": \"4\"\n    },\n    {\n        \"stress_id\": \"50\",\n        \"stress_score\": \"4\"\n    },\n    {\n        \"stress_id\": \"51\",\n        \"stress_score\": \"4\"\n    },\n    {\n        \"total_score:\": 40\n    }\n]'),
(421, 50, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"4\"\n    },\n    {\n        \"total_score\": 4\n    }\n]', '2023-01-23 13:11:59', '', '', NULL),
(422, 50, '', '2023-01-23 13:12:02', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"4\"\n    },\n    {\n        \"total_score\": 4\n    }\n]', '', NULL),
(423, 50, '', '2023-01-23 13:12:04', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"4\"\n    },\n    {\n        \"total_score:\": 4\n    }\n]', NULL),
(424, 50, '', '2023-01-23 13:12:07', '', '', '[\n    {\n        \"stress_id\": \"41\",\n        \"stress_score\": \"4\"\n    },\n    {\n        \"total_score:\": 4\n    }\n]'),
(425, 50, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-23 13:14:12', '', '', NULL),
(426, 50, '', '2023-01-23 13:14:15', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(427, 50, '', '2023-01-23 13:14:16', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(428, 50, '', '2023-01-23 13:14:19', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(429, 50, '[\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"4\"\n    },\n    {\n        \"total_score\": 4\n    }\n]', '2023-01-23 13:14:26', '', '', NULL),
(430, 50, '', '2023-01-23 13:14:27', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(431, 50, '', '2023-01-23 13:14:29', '', '[\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"4\"\n    },\n    {\n        \"total_score:\": 4\n    }\n]', NULL),
(432, 50, '', '2023-01-23 13:14:32', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(433, 50, '', '2023-01-23 13:22:35', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(434, 50, '', '2023-01-23 13:22:41', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(435, 50, '', '2023-01-23 13:22:45', '', '', '[\n    {\n        \"stress_id\": \"51\",\n        \"stress_score\": \"4\"\n    },\n    {\n        \"total_score:\": 4\n    }\n]'),
(436, 51, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"total_score\": 1\n    }\n]', '2023-01-23 13:23:59', '', '', NULL),
(437, 51, '', '2023-01-23 13:24:03', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"total_score\": 1\n    }\n]', '', NULL),
(438, 51, '', '2023-01-23 13:24:07', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"total_score:\": 2\n    }\n]', NULL),
(439, 51, '', '2023-01-23 13:24:21', '', '', '[\n    {\n        \"stress_id\": \"41\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"42\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"43\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"44\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"45\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"46\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"48\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"49\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"50\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"51\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"total_score:\": 10\n    }\n]'),
(440, 52, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"total_score\": 5\n    }\n]', '2023-01-23 13:28:04', '', '', NULL),
(441, 52, '', '2023-01-23 13:28:10', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"36\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"37\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"38\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"total_score\": 4\n    }\n]', '', NULL),
(442, 52, '', '2023-01-23 13:28:14', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"total_score:\": 2\n    }\n]', NULL),
(443, 52, '', '2023-01-23 13:28:28', '', '', '[\n    {\n        \"stress_id\": \"41\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"42\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"43\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"44\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"45\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"46\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"48\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"49\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"50\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"51\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"total_score:\": 10\n    }\n]'),
(444, 54, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"total_score\": 5\n    }\n]', '2023-01-23 13:41:40', '', '', NULL),
(445, 54, '', '2023-01-23 13:41:46', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"36\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"37\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"38\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"total_score\": 4\n    }\n]', '', NULL),
(446, 54, '', '2023-01-23 13:41:50', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"total_score:\": 2\n    }\n]', NULL),
(447, 54, '', '2023-01-23 13:42:04', '', '', '[\n    {\n        \"stress_id\": \"41\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"42\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"43\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"44\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"45\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"46\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"48\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"49\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"50\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"51\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"total_score:\": 10\n    }\n]'),
(448, 54, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"4\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"4\"\n    },\n    {\n        \"total_score\": 9\n    }\n]', '2023-01-23 14:37:42', '', '', NULL),
(449, 56, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"total_score\": 5\n    }\n]', '2023-01-23 14:41:30', '', '', NULL),
(450, 56, '', '2023-01-23 14:41:36', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"36\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"37\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"38\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"total_score\": 4\n    }\n]', '', NULL),
(451, 56, '', '2023-01-23 14:41:40', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"total_score:\": 2\n    }\n]', NULL),
(452, 56, '', '2023-01-23 14:41:56', '', '', '[\n    {\n        \"stress_id\": \"41\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"42\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"43\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"44\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"45\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"46\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"48\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"49\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"50\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"51\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"total_score:\": 10\n    }\n]'),
(453, 57, '[\n    {\n        \"total_score\": 0\n    }\n]', '2023-01-23 14:54:39', '', '', NULL),
(454, 57, '', '2023-01-23 14:54:57', '[\n    {\n        \"total_score\": 0\n    }\n]', '', NULL),
(455, 57, '', '2023-01-23 14:54:58', '', '[\n    {\n        \"total_score:\": 0\n    }\n]', NULL),
(456, 57, '', '2023-01-23 14:55:05', '', '', '[\n    {\n        \"total_score:\": 0\n    }\n]'),
(457, 58, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"4\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"4\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"1\"\n    },\n    {\n        \"total_score\": 11\n    }\n]', '2023-01-23 15:28:51', '', '', NULL),
(458, 58, '', '2023-01-23 15:29:00', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"36\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"37\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"academic_id\": \"38\",\n        \"academic_score\": \"1\"\n    },\n    {\n        \"total_score\": 4\n    }\n]', '', NULL),
(459, 58, '', '2023-01-23 15:29:05', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"total_score:\": 2\n    }\n]', NULL),
(460, 58, '', '2023-01-23 15:29:25', '', '', '[\n    {\n        \"stress_id\": \"41\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"42\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"43\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"44\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"45\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"46\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"48\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"49\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"50\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"51\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"total_score:\": 10\n    }\n]'),
(461, 59, '[\n    {\n        \"question_id\": \"25\",\n        \"question_score\": \"4\"\n    },\n    {\n        \"question_id\": \"26\",\n        \"question_score\": \"4\"\n    },\n    {\n        \"question_id\": \"27\",\n        \"question_score\": \"3\"\n    },\n    {\n        \"question_id\": \"28\",\n        \"question_score\": \"3\"\n    },\n    {\n        \"question_id\": \"29\",\n        \"question_score\": \"4\"\n    },\n    {\n        \"total_score\": 18\n    }\n]', '2023-01-23 15:32:09', '', '', NULL),
(462, 59, '', '2023-01-23 15:32:18', '[\n    {\n        \"academic_id\": \"35\",\n        \"academic_score\": \"4\"\n    },\n    {\n        \"academic_id\": \"36\",\n        \"academic_score\": \"4\"\n    },\n    {\n        \"academic_id\": \"37\",\n        \"academic_score\": \"4\"\n    },\n    {\n        \"academic_id\": \"38\",\n        \"academic_score\": \"4\"\n    },\n    {\n        \"total_score\": 16\n    }\n]', '', NULL),
(463, 59, '', '2023-01-23 15:32:21', '', '[\n    {\n        \"financial_id\": \"32\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"financial_id\": \"33\",\n        \"financial_score\": \"1\"\n    },\n    {\n        \"total_score:\": 2\n    }\n]', NULL),
(464, 59, '', '2023-01-23 15:32:34', '', '', '[\n    {\n        \"stress_id\": \"41\",\n        \"stress_score\": \"3\"\n    },\n    {\n        \"stress_id\": \"42\",\n        \"stress_score\": \"3\"\n    },\n    {\n        \"stress_id\": \"43\",\n        \"stress_score\": \"2\"\n    },\n    {\n        \"stress_id\": \"44\",\n        \"stress_score\": \"3\"\n    },\n    {\n        \"stress_id\": \"45\",\n        \"stress_score\": \"2\"\n    },\n    {\n        \"stress_id\": \"46\",\n        \"stress_score\": \"2\"\n    },\n    {\n        \"stress_id\": \"48\",\n        \"stress_score\": \"2\"\n    },\n    {\n        \"stress_id\": \"49\",\n        \"stress_score\": \"2\"\n    },\n    {\n        \"stress_id\": \"50\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"stress_id\": \"51\",\n        \"stress_score\": \"1\"\n    },\n    {\n        \"total_score:\": 21\n    }\n]');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(11) NOT NULL,
  `teacher` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `school_year` varchar(100) DEFAULT NULL,
  `semester` varchar(100) DEFAULT NULL,
  `term` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `teacher`, `username`, `subject`, `year`, `course`, `school_year`, `semester`, `term`) VALUES
(89, 'Nery Peralta', 'Nery Peralta', 'SSP007-UP-FA1-BSITWEBDEV3-2', '3', ' BSIT', '2022', '1', '3'),
(90, 'Nery Peralta', 'Nery Peralta', 'SSP007-UP-FA1-BSITWEBDEV3-3', '3', ' BSIT', '2022', '1', '3'),
(91, 'Nery Peralta', 'Nery Peralta', 'SSP007-UP-FA1-BSITWEBDEV3-1', '2', ' BSTM', '2022', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `student_id` varchar(100) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `term` varchar(100) DEFAULT NULL,
  `school_year` varchar(100) DEFAULT NULL,
  `semester` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `firstname` varchar(200) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `middle` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `role` varchar(200) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `subject_code` varchar(200) DEFAULT NULL,
  `academic_status` varchar(100) DEFAULT NULL,
  `financial_status` varchar(100) DEFAULT NULL,
  `personal_status` varchar(100) DEFAULT NULL,
  `date_of_call` date DEFAULT NULL,
  `level_of_stress` varchar(100) DEFAULT NULL,
  `remove_emoji` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `student_id`, `year`, `term`, `school_year`, `semester`, `course`, `firstname`, `lastname`, `middle`, `username`, `email`, `gender`, `password`, `role`, `date`, `subject_code`, `academic_status`, `financial_status`, `personal_status`, `date_of_call`, `level_of_stress`, `remove_emoji`) VALUES
(42, '03-2022-00065', '3', '3', '2022', '1', 'BSIT', 'Renzy Mae', 'Ople', 'S', 'Renzy', 'rese.ople@phinmaed.com', 'Femail', 'renzy', 'Student', '2002-07-18', 'SSP007-UP-FA1-BSITWEBDEV3-2', NULL, NULL, 'P', '1970-01-01', NULL, 'smile'),
(43, '03-2022-000001', '3', '3', '2022', '1', 'BSIT', 'Mark Anthony', 'Sapera', '', 'Mark Anthony', 'mark@phinmaed.com', 'Male', 'mark', 'Student', '2022-10-13', 'SSP007-UP-FA1-BSITWEBDEV3-3', '', '', '', '0000-00-00', NULL, 'smile'),
(44, '03-2022-000002', '3', '3', '2022', '1', 'BSIT', 'Rosalie', 'Silang', '', 'Rosalie', 'rosalie@phinmaed.com', 'Femail', 'rosalie', 'Student', '2022-10-12', 'SSP007-UP-FA1-BSITWEBDEV3-2', '', '', '', NULL, NULL, ''),
(45, '03-2022-000003', '3', '3', '2022', 'Semester', 'BSIT', 'Vincent', 'Ubando', '', 'Vincent', 'vincent@phinmaed.com', 'Male', 'vincent', 'Student', '2022-10-11', 'SSP007-UP-FA1-BSITWEBDEV3-2', '', '', '', NULL, NULL, ''),
(46, '03-2022-000010', '2', '3', '2022', '1', 'BSIT', 'Bless', 'Ople', 'S', 'Bless', 'bless@phinmaed.com', 'Femail', 'bless', 'Student', '2022-10-13', 'SSP005-UP-FA1-BSITWEBDEV2-2', '', '', '', NULL, NULL, NULL),
(47, '03-2022-5589805', '2', '1', '2022', '1', 'BSIT', 'John', 'Cruz', 'A', 'John', 'john@phinmaed.com', 'Male', 'john', 'Student', '2022-11-05', 'SSP005-UP-FA1-BSITWEBDEV2-1', NULL, NULL, NULL, NULL, NULL, NULL),
(48, '03-2022-123456', '3', '3', '2022', '1', 'BSIT', 'Juan', 'Dela Cruz', 'M', 'Juan', 'juan@phinmaed.com', 'Male', 'juan', 'Student', '2022-10-15', 'SSP007-UP-FA1-BSITWEBDEV3-2', NULL, NULL, NULL, '1970-01-01', NULL, 'smile'),
(59, '03-2022-6792136', '3', '3', '2022', '1', 'BSIT', 'Kevin ', 'Mitnick', '', 'kevin', 'kevin@gmail.com', 'Male', 'kevin', 'Student', '2023-01-23', 'SSP007-UP-FA1-BSITWEBDEV3-2', 'A', NULL, 'P', NULL, 'SA', 'asd'),
(60, '03-2022-441492', '3', '3', '2022', '1', 'BSIT', 'Sarah', 'G', '', 'sarah', 'sarah@gmail.com', 'Male', 'sarah', 'Student', '1970-01-01', 'SSP007-UP-FA1-BSITWEBDEV3-2', NULL, NULL, NULL, NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_concern`
--
ALTER TABLE `academic_concern`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial_concern`
--
ALTER TABLE `financial_concern`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `personal_concern`
--
ALTER TABLE `personal_concern`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `qustioner`
--
ALTER TABLE `qustioner`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_question_score`
--
ALTER TABLE `tbl_question_score`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_concern`
--
ALTER TABLE `academic_concern`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `financial_concern`
--
ALTER TABLE `financial_concern`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_concern`
--
ALTER TABLE `personal_concern`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `qustioner`
--
ALTER TABLE `qustioner`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_question_score`
--
ALTER TABLE `tbl_question_score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=465;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
