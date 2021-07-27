-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2021 at 12:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asps`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `auther` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `sub_code` varchar(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `book_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `auther`, `date`, `sem`, `sub_code`, `file`, `book_id`) VALUES
(25, 'Basic electronics', 'new book', 'gsdfg', '25 June 2021', '2nd', '136', '../uploads/books/136book517763236.docx', '517763236');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `com` varchar(255) NOT NULL,
  `postid` varchar(255) NOT NULL,
  `comid` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `com`, `postid`, `comid`, `batch`, `date`) VALUES
(1, 'momin islam', 'dfgdfg', '923197292', '1209169328', '3', ''),
(2, 'K. M. Taslimul Hasan', '  fadfafafsgfgsfgsgsdfgsdfg  edited comdhg', '923197292', '2030547203', '3', ''),
(3, 'K. M. Taslimul Hasan', 'dasfsfaf', '453040554', '579490555', '3', '1 April 2021'),
(4, 'K. M. Taslimul Hasan', 'dasfsfaf', '453040554', '1647500580', '3', '1 April 2021'),
(5, 'K. M. Taslimul Hasan', 'sdfdsgg', '453040554', '1703721520', '3', '1 April 2021'),
(6, 'K. M. Taslimul Hasan', 'kjasnhfklasjkfjhndkjf', '923197292', '874624520', '3', '1 April 2021'),
(7, 'K. M. Taslimul Hasan', 'gfdgds', '923197292', '632814574', '3', '1 April 2021'),
(8, 'gsdfg', 'fasdfadsf', '261262579', '312362020', '', '2 April 2021'),
(9, 'gsdfg', 'fasdfadsf', '261262579', '576900941', '', '2 April 2021'),
(10, 'gsdfg', 'fasdfa', '261262579', '526318209', '', '2 April 2021'),
(11, 'gsdfg', 'tik asa', '923197292', '330814414', '', '2 April 2021'),
(12, 'gsdfg', ' ki? ata', '923197292', '1401347142', '', '2 April 2021'),
(13, 'K. M. Taslimul Hasan', 'hi', '261262579', '363697818', '3', '28 April 2021'),
(14, 'K. M. Taslimul Hasan', 'hi', '261262579', '962224621', '3', '28 April 2021'),
(15, 'K. M. Taslimul Hasan', 'hello', '261262579', '1443557858', '3', '28 April 2021'),
(16, 'K. M. Taslimul Hasan', 'ki obsta?', '1167448915', '742254028', '3', '12 June 2021'),
(17, 'K. M. Taslimul Hasan', 'ki obsta?', '1167448915', '356943044', '3', '12 June 2021'),
(18, 'K. M. Taslimul Hasan', 'ki obsta?', '1167448915', '2094144132', '3', '12 June 2021'),
(19, 'K. M. Taslimul Hasan', 'fasdf', '206834956', '2146411568', '3', '12 June 2021'),
(20, 'K. M. Taslimul Hasan', 'fasdf', '206834956', '406589012', '3', '12 June 2021'),
(21, 'K. M. Taslimul Hasan', 'gfdg', '206834956', '483090086', '3', '12 June 2021'),
(22, 'K. M. Taslimul Hasan', 'gfdg', '206834956', '833371533', '3', '12 June 2021'),
(23, 'K. M. Taslimul Hasan', 'fasf', '206834956', '1001654972', '3', '12 June 2021'),
(24, 'K. M. Taslimul Hasan', 'k', '206834956', '1731261612', '3', '12 June 2021'),
(25, 'K. M. Taslimul Hasan', 'kno?', '206834956', '1862509681', '3', '12 June 2021'),
(26, 'K. M. Taslimul Hasan', ' gh', '206834956', '543902234', '3', '12 June 2021');

-- --------------------------------------------------------

--
-- Table structure for table `forum_post`
--

CREATE TABLE `forum_post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `student` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `postid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `exam_roll` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `id_card` varchar(255) NOT NULL,
  `sem1` varchar(255) NOT NULL,
  `sem2` varchar(255) NOT NULL,
  `sem3` varchar(255) NOT NULL,
  `sem4` varchar(255) NOT NULL,
  `sem5` varchar(255) NOT NULL,
  `sem6` varchar(255) NOT NULL,
  `sem7` varchar(255) NOT NULL,
  `sem8` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `exam_roll`, `profile`, `id_card`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`) VALUES
(1, 136, 'uploads/profile136.jpg', 'uploads/id-card136.jpg', 'uploads/receipt1st-136.jpg', 'uploads/receipt2st-136.jpg', 'uploads/receipt3st-136.jpg', 'uploads/receipt4st-136.jpg', 'uploads/receipt5st-136.jpg', 'uploads/receipt6st-136.jpg', 'uploads/receipt7st-136.jpg', 'uploads/receipt8st-136.jpg'),
(6, 4, '', '', '', '', '', '', '', '', '', ''),
(7, 0, '', '', '', '', '', '', '', '', '', ''),
(8, 0, '', '', '', '', '', '', '', '', '', ''),
(9, 434, '', '', '', '', '', '', '', '', '', ''),
(10, 5, '', '', '', '', '', '', '', '', '', ''),
(11, 133, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `student` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `jobid` int(255) NOT NULL,
  `batch` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `superviser` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `journalid` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `title` varchar(266) NOT NULL,
  `content` longtext NOT NULL,
  `auther` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `noticeid` varchar(255) NOT NULL,
  `files` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `content`, `auther`, `date`, `noticeid`, `files`) VALUES
(11, 'আন্তর্জাতিক মাতৃভাষা দিবস ও মহান শহীদ দিবস ২০২১ উপলক্ষে আলোচনা সভা ও সাংস্কৃতিক অনুষ্ঠান', 'বঙ্গদর্শনে যে সকল প্রবন্ধ প্রকাশিত হয়, পুনর্মুদ্রিত হইলে তাহা বঙ্গদর্শনে সমালোচিত হইয়া থাকে না। ‘বাল্মীকির জয়’ কিয়দংশে বঙ্গদর্শনে প্রকাশিত হইয়াছিল কিন্তু গ্রন্থের অধিকাংশই বঙ্গদর্শনে বাহির হয় নাই। উহার যে অংশ প্রকাশিত হইয়াছিল, তাহাও বিশেষরূপে পরিবর্তিত হইয়া পুনর্মুদ্রিত হইয়াছে। এ অবস্থায় আমরা সমালোচ্য গ্রন্থ বঙ্গদর্শনে প্রকাশিত হইয়াছিল বলিয়া স্বীকার করিতে পারি না। অতএব পাঠক যদি অনুমতি করেন, তবে ইহার সমালোচনায় প্রবৃত্ত হই। সম্পাদকের অনুমতি পাইয়াছি।', 'gsdfg', '2 April 2021', '658839425', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `e111` varchar(255) NOT NULL,
  `112` varchar(255) NOT NULL,
  `113` varchar(255) NOT NULL,
  `113l` varchar(255) NOT NULL,
  `114` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `resultid` varchar(255) NOT NULL,
  `roll` int(255) NOT NULL,
  `115` varchar(255) NOT NULL,
  `116` varchar(255) NOT NULL,
  `117` varchar(255) NOT NULL,
  `118` varchar(255) NOT NULL,
  `121` text NOT NULL,
  `121l` text NOT NULL,
  `122` text NOT NULL,
  `122l` text NOT NULL,
  `123` text NOT NULL,
  `124` text NOT NULL,
  `124l` text NOT NULL,
  `125` text NOT NULL,
  `126` text NOT NULL,
  `127` text NOT NULL,
  `211` text NOT NULL,
  `212` text NOT NULL,
  `213` text NOT NULL,
  `214` text NOT NULL,
  `215` text NOT NULL,
  `216` text NOT NULL,
  `216l` text NOT NULL,
  `217` text NOT NULL,
  `221` text NOT NULL,
  `221l` text NOT NULL,
  `222` text NOT NULL,
  `222l` text NOT NULL,
  `223` text NOT NULL,
  `224` text NOT NULL,
  `224l` text NOT NULL,
  `225` text NOT NULL,
  `226` text NOT NULL,
  `311` text NOT NULL,
  `312` text NOT NULL,
  `313` text NOT NULL,
  `314` text NOT NULL,
  `314l` text NOT NULL,
  `315` text NOT NULL,
  `315l` text NOT NULL,
  `316` text NOT NULL,
  `317` text NOT NULL,
  `318` text NOT NULL,
  `321` text NOT NULL,
  `322` text NOT NULL,
  `322l` text NOT NULL,
  `323` text NOT NULL,
  `323l` text NOT NULL,
  `324` text NOT NULL,
  `325` text NOT NULL,
  `325l` text NOT NULL,
  `326` text NOT NULL,
  `411` text NOT NULL,
  `412` text NOT NULL,
  `413` text NOT NULL,
  `414` text NOT NULL,
  `421` text NOT NULL,
  `421l` text NOT NULL,
  `422` text NOT NULL,
  `424` text NOT NULL,
  `425` text NOT NULL,
  `426` text NOT NULL,
  `429` text NOT NULL,
  `430` text NOT NULL,
  `430l` text NOT NULL,
  `431` text NOT NULL,
  `431l` text NOT NULL,
  `432` text NOT NULL,
  `432l` text NOT NULL,
  `434` text NOT NULL,
  `435` text NOT NULL,
  `435l` text NOT NULL,
  `436` text NOT NULL,
  `437` text NOT NULL,
  `438` text NOT NULL,
  `438l` text NOT NULL,
  `445` text NOT NULL,
  `446` text NOT NULL,
  `428` text NOT NULL,
  `439` text NOT NULL,
  `439l` text NOT NULL,
  `440` text NOT NULL,
  `441` text NOT NULL,
  `442` text NOT NULL,
  `443` text NOT NULL,
  `443l` text NOT NULL,
  `444` text NOT NULL,
  `444l` text NOT NULL,
  `447` text NOT NULL,
  `448` text NOT NULL,
  `449` text NOT NULL,
  `449l` text NOT NULL,
  `450` text NOT NULL,
  `451` text NOT NULL,
  `452` text NOT NULL,
  `452l` text NOT NULL,
  `453` text NOT NULL,
  `453l` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`e111`, `112`, `113`, `113l`, `114`, `id`, `resultid`, `roll`, `115`, `116`, `117`, `118`, `121`, `121l`, `122`, `122l`, `123`, `124`, `124l`, `125`, `126`, `127`, `211`, `212`, `213`, `214`, `215`, `216`, `216l`, `217`, `221`, `221l`, `222`, `222l`, `223`, `224`, `224l`, `225`, `226`, `311`, `312`, `313`, `314`, `314l`, `315`, `315l`, `316`, `317`, `318`, `321`, `322`, `322l`, `323`, `323l`, `324`, `325`, `325l`, `326`, `411`, `412`, `413`, `414`, `421`, `421l`, `422`, `424`, `425`, `426`, `429`, `430`, `430l`, `431`, `431l`, `432`, `432l`, `434`, `435`, `435l`, `436`, `437`, `438`, `438l`, `445`, `446`, `428`, `439`, `439l`, `440`, `441`, `442`, `443`, `443l`, `444`, `444l`, `447`, `448`, `449`, `449l`, `450`, `451`, `452`, `452l`, `453`, `453l`) VALUES
('A', 'A+', 'A', 'B+', 'A-', 1, '', 136, 'A', 'B+', 'A-', 'A', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', 2, '', 5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('', '', '', '', '', 3, '', 133, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `fathers_name` text NOT NULL,
  `mothers_name` text NOT NULL,
  `dob` date NOT NULL,
  `gender` text NOT NULL,
  `present_adress` text NOT NULL,
  `permanent_adress` text NOT NULL,
  `blood_group` text NOT NULL,
  `my_phone_number` varchar(255) NOT NULL,
  `father_phone_number` int(11) NOT NULL,
  `batch` int(11) NOT NULL,
  `class_roll` int(11) NOT NULL,
  `exam_roll` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `vkey` varchar(255) NOT NULL,
  `verification` int(11) DEFAULT 0,
  `blood_date` date DEFAULT NULL,
  `auth` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `full_name`, `fathers_name`, `mothers_name`, `dob`, `gender`, `present_adress`, `permanent_adress`, `blood_group`, `my_phone_number`, `father_phone_number`, `batch`, `class_roll`, `exam_roll`, `email`, `password`, `vkey`, `verification`, `blood_date`, `auth`) VALUES
(5, 'K. M. Taslimul Hasan', 'Md Aslam Hossen Khandakar', 'Mst. Salma Afrin', '1998-12-27', 'male', 'nabinagar', 'Joypurhat', 'A+', '01787836963', 1521405639, 3, 7, 136, 'hasantaslimul1@gmail.com', '1212', '1', 0, '2021-06-18', 1),
(23, 'Md. Rabiul Islam ', 'md mostak', 'mst samsun nahar', '2021-03-16', 'male', 'nabinagr', 'barishad', 'ab+', '2147483647', 456546456, 3, 33, 333, 'r@t.co', '2', '', 0, NULL, 0),
(32, 'Md.Afraim Kabir Anik', 'Md. Mortuza Ali', 'Anju Ara Begum', '1997-09-16', 'male', 'Shafipur', 'shafipur', 'B+', '01789063079', 1789063079, 3, 4, 133, 'afraimkabiranik1358@gmail.com', '133', '', 0, '2021-06-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `fathers_name` varchar(255) DEFAULT NULL,
  `mothers_name` varchar(255) DEFAULT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `present_adress` varchar(255) DEFAULT NULL,
  `permanent_adress` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `my_phone_number` varchar(255) DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `full_name`, `fathers_name`, `mothers_name`, `dob`, `gender`, `present_adress`, `permanent_adress`, `blood_group`, `my_phone_number`, `position`, `email`, `password`, `img`) VALUES
(2, 'Md. Sirajul Islam', '', '', '1979-03-06', 'male', 'Dhaka Bangladesh', 'Rajshahi Bangladesh', 'A+', '01787878786', 'Chairman', 'sirajul@gmail.com', '1', 'img/profile/pic-2.jpg'),
(5, 'dasf', NULL, NULL, '2021-06-16', 'male', 'dasfaff', 'asdfasf', 'sadfsadf', '5456', 'fgsfg', 'dmifoajif@gmail.com', '1', ''),
(6, 'fasdfaf', NULL, NULL, '2021-06-03', 'male', 'asdfaf', 'dsafasdf', 'asdf', '1', '1', 'gfgs@k.com', '1', ''),
(7, 'fgsfg', NULL, NULL, '2021-06-04', 'male', 'dfafd', 'fadsfd', 'ff', '54325', 'faf', 'f@g.l', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) DEFAULT NULL,
  `token` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`) VALUES
(1, 28265881);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `forum_post`
--
ALTER TABLE `forum_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
