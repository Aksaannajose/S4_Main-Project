-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 08:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `role_id`) VALUES
(3, 'admin', '3456', 1),
(4, 'admin', '789', 2);

-- --------------------------------------------------------

--
-- Table structure for table `card_activation`
--

CREATE TABLE `card_activation` (
  `id` int(10) NOT NULL,
  `u_card` varchar(12) NOT NULL,
  `u_f_name` text NOT NULL,
  `u_l_name` text NOT NULL,
  `stream` varchar(50) NOT NULL,
  `placed company` varchar(50) NOT NULL,
  `u_birthday` text NOT NULL,
  `u_gender` varchar(6) NOT NULL,
  `u_email` text NOT NULL,
  `u_phone` varchar(10) NOT NULL,
  `u_state` varchar(12) NOT NULL,
  `u_dist` text NOT NULL,
  `image` varchar(150) NOT NULL,
  `uploaded` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_activation`
--

INSERT INTO `card_activation` (`id`, `u_card`, `u_f_name`, `u_l_name`, `stream`, `placed company`, `u_birthday`, `u_gender`, `u_email`, `u_phone`, `u_state`, `u_dist`, `image`, `uploaded`) VALUES
(12, '012386883123', 'Arya', 'Dev', 'Btec', 'Wipro', '21-02-1999', 'Female', 'arya@gmail.com', '9645772651', 'Kerala', 'Kottayam', '1.jpg', ''),
(13, '094583572982', 'Nithya', 'Menon', 'Btec', 'Ey', '12-02-1999', 'Female', 'nithya@gmail.com', '9736271928', 'Kerala', 'Kollam', '2.1.jpg', ''),
(14, '053636328723', 'Sneha', 'Mathew', 'Btec', 'Wipro', '12-08-19998', 'Female', 'sneha@gmail.com', '9753683729', 'Kerala', 'Pathanamthitta', '2.jpg', ''),
(20, '012365679451', 'Diya', 'Louise', 'b tec', '', '1999-11-02', 'Female', 'diya@gmail.com', '8213546795', 'Kerala', 'Kollam', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `college details_table`
--

CREATE TABLE `college details_table` (
  `college_id` int(50) NOT NULL,
  `college_address` varchar(100) NOT NULL,
  `pincode` int(50) NOT NULL,
  `college_email_id` int(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `course` varchar(100) NOT NULL,
  `specialization` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college details_table`
--

INSERT INTO `college details_table` (`college_id`, `college_address`, `pincode`, `college_email_id`, `phone_no`, `course`, `specialization`) VALUES
(1, 'Amal Jyoth', 687456, 0, '82124', 'MCA,B TEC', 'IT,Compute'),
(2, 'Christ Col', 63244, 0, '73462', 'MBA,MSW,B ', 'Finance,Ma'),
(3, 'Marian Col', 63421, 0, '62415', 'MBA,M COM', 'Finance,Co'),
(4, 'Loyola Col', 62378, 0, '81236', 'MBA,MCA,M ', 'Computer A');

-- --------------------------------------------------------

--
-- Table structure for table `college request_table`
--

CREATE TABLE `college request_table` (
  `college_request_id` int(5) NOT NULL,
  `accept_college` tinyint(1) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `college_registration_table`
--

CREATE TABLE `college_registration_table` (
  `id` int(50) NOT NULL,
  `College_name` varchar(100) NOT NULL,
  `Userid` varchar(50) NOT NULL,
  `Password` int(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `University` varchar(50) NOT NULL,
  `Status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `college_registration_table`
--

INSERT INTO `college_registration_table` (`id`, `College_name`, `Userid`, `Password`, `District`, `State`, `University`, `Status`) VALUES
(1, 'St Marys College Kollam, Placed in 2020-2022', 'stmarys@gmail.com', 123, 'Kottayam', 'Kerala', 'Kerala Technical University', 0),
(33, 'Ramaiah College', 'ramaiah@gmail.com', 0, 'Banglore', 'Kerala', 'Banglore University', 1),
(34, 'Citadel College', 'citadel@gmail.com', 0, 'Pathanamthitta', 'Kerala', 'Mahatma Gandhi University', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company profile_table`
--

CREATE TABLE `company profile_table` (
  `company_profile_id` int(5) NOT NULL,
  `Job_role` varchar(10) NOT NULL,
  `Job_description` varchar(10) NOT NULL,
  `Job_openings` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company profile_table`
--

INSERT INTO `company profile_table` (`company_profile_id`, `Job_role`, `Job_description`, `Job_openings`, `image`) VALUES
(1, 'Software E', 'Well exper', '10', 'one.png'),
(2, 'Developer', 'C++,Java', '8', 'two.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `company request_table`
--

CREATE TABLE `company request_table` (
  `company_request_id` int(5) NOT NULL,
  `accept_company` tinyint(1) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company_registration_table`
--

CREATE TABLE `company_registration_table` (
  `id` int(50) NOT NULL,
  `Company_name` varchar(50) NOT NULL,
  `Userid` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `role_id` int(50) NOT NULL,
  `Status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_registration_table`
--

INSERT INTO `company_registration_table` (`id`, `Company_name`, `Userid`, `Password`, `Address`, `State`, `role_id`, `Status`) VALUES
(1, 'Wipro', 'wipro@gmail.com', '1234567', 'Technopark', 'Kerala', 1, 0),
(2, 'EY', 'ey@gmail.com', '567', 'Tms Square,kochi', 'Kerala', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company_table`
--

CREATE TABLE `company_table` (
  `company_id` int(5) NOT NULL,
  `company_name` varchar(10) NOT NULL,
  `company_address` varchar(10) NOT NULL,
  `company_location` varchar(10) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `company_description` varchar(10) NOT NULL,
  `interview_details` varchar(10) NOT NULL,
  `vacancy_details` varchar(10) NOT NULL,
  `webinar_details` varchar(10) NOT NULL,
  `Prefered sex` varchar(50) NOT NULL,
  `Designation` varchar(50) NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_table`
--

INSERT INTO `company_table` (`company_id`, `company_name`, `company_address`, `company_location`, `Image`, `company_description`, `interview_details`, `vacancy_details`, `webinar_details`, `Prefered sex`, `Designation`, `Qualification`, `job`) VALUES
(1, 'Wipro', 'TMS Square', 'Kochi,Edap', 'two.jpg', 'Software E', '25th Jan 2', '4', '1-2-22 ', 'Female', 'IT', 'MCA,M TECH', '');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(1) NOT NULL,
  `visit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `id` int(10) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Filename` varchar(50) NOT NULL,
  `size` int(50) NOT NULL,
  `Amount` int(50) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`id`, `Course`, `Filename`, `size`, `Amount`, `Image`) VALUES
(1, 'Javascript', 'Javascript.pdf', 1, 4500, 'course1.jpg'),
(2, 'aws', '', 0, 8000, ''),
(3, 'React', '', 0, 8000, ''),
(4, 'Perl', '', 0, 8000, ''),
(5, 'aws', '', 0, 8000, '');

-- --------------------------------------------------------

--
-- Table structure for table `exptable`
--

CREATE TABLE `exptable` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Userid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exptable`
--

INSERT INTO `exptable` (`id`, `fname`, `password`, `Userid`) VALUES
(1, 'Admin', '123', 'admin@gmail.com'),
(2, 'wipro', '1234567', 'wipro@gmail.com'),
(3, 'Arya', '123', 'arya@gmail.com'),
(4, 'stmarys', '123', 'stmarys@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created` datetime(6) NOT NULL,
  `modified` datetime(6) NOT NULL,
  `status` tinyint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `title`, `created`, `modified`, `status`) VALUES
(7, '07-38-13.jpg', 'Wipro', '2022-06-20 07:38:13.000000', '2022-07-27 07:59:03.000000', 1),
(8, '07-44-11.jpg', 'EY', '2022-06-20 07:44:11.000000', '2022-07-27 08:19:34.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` int(11) NOT NULL,
  `gallery_id` int(50) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `uploaded_on` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job_details_tbl`
--

CREATE TABLE `job_details_tbl` (
  `jobid` int(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  `Qualification` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_details_tbl`
--

INSERT INTO `job_details_tbl` (`jobid`, `Category`, `Occupation`, `Qualification`) VALUES
(1, 'IT', 'Developer', 'BE/B TEC'),
(2, 'Technology', 'Engineer', 'M TEC');

-- --------------------------------------------------------

--
-- Table structure for table `job_table`
--

CREATE TABLE `job_table` (
  `id` int(50) NOT NULL,
  ` Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Job Role` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Pincode` int(10) NOT NULL,
  `D.O.B` datetime(6) NOT NULL,
  `Upload your CV` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_table`
--

INSERT INTO `job_table` (`id`, ` Name`, `Last Name`, `Email`, `Job Role`, `Address`, `City`, `Pincode`, `D.O.B`, `Upload your CV`) VALUES
(1, 'Sneha', 'Louise', 'sneha@gmail.com', 'Intern', 'Lane House Kollam', 'Kollam', 6541, '1999-05-24 00:00:00.000000', ' resume.pdf'),
(2, 'Sona', 'Mathew', 'sona@gmail.com', 'Fresher', 'Vrinda House Kottayam', 'Kottayam', 6321, '1999-02-12 00:00:00.000000', ' resume.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `login_id` int(50) NOT NULL,
  `role_id` int(50) NOT NULL,
  `Userid` varchar(100) NOT NULL,
  `Password` int(50) NOT NULL,
  `Status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`login_id`, `role_id`, `Userid`, `Password`, `Status`) VALUES
(22, 1, 'admin@gmail.com', 123, 0),
(23, 0, 'wipro@gmail.com', 1234567, 0),
(29, 2, 'arya@gmail.com', 123, 0),
(31, 3, 'stmarys@gmail.com', 123, 0),
(32, 1, 'stmarycollege@gmail.com', 0, 0),
(39, 1, 'placementportal@gmail.com', 0, 0),
(53, 1, 'erv@gmail.com', 123, 0),
(54, 1, 'erv@gmail.com', 1234567, 0),
(55, 1, 'qwe@gmail.com', 123, 0),
(56, 1, 'asd@gmail.com', 1234567, 0),
(57, 1, 'qwe@gmail.com', 123, 0),
(58, 1, 'tyb@gmail.com', 123, 0),
(59, 1, 'kkk@gmail.com', 123, 0),
(60, 1, 'asdi@gmail.com', 123, 0),
(61, 1, 'sjes@gmail.com', 123, 0),
(62, 1, 'sjes@gmail.com', 0, 0),
(63, 1, 'zxcas@gmail.com', 1234567, 0),
(64, 1, 'jkl@gmail.com', 1234567, 0),
(65, 1, 'saint@gmail.com', 123, 0),
(66, 1, 'quest@gmail.com', 1234567, 0),
(67, 1, 'zara@gmail.com', 123, 0),
(68, 1, 'zain@gmail.com', 123, 0),
(69, 1, 'krip@gmail.com', 1234567, 0),
(70, 1, 'vein@gmail.com', 1234567, 0),
(71, 1, 'tren@gmail.com', 1234567, 0),
(72, 1, 'gfv@gmail.com', 1234567, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice board_table`
--

CREATE TABLE `notice board_table` (
  `notice_board_id` int(5) NOT NULL,
  `drives_details` varchar(10) NOT NULL,
  `placed_details` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice board_table`
--

INSERT INTO `notice board_table` (`notice_board_id`, `drives_details`, `placed_details`) VALUES
(1, 'EY Intervi', '12'),
(2, 'TCS Techni', '21');

-- --------------------------------------------------------

--
-- Table structure for table `paymenttable`
--

CREATE TABLE `paymenttable` (
  `fname` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cred` varchar(30) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymenttable`
--

INSERT INTO `paymenttable` (`fname`, `password`, `cred`, `coursename`, `time`) VALUES
('arya', 'arya@123', '12345', 'javascript', '');

-- --------------------------------------------------------

--
-- Table structure for table `placed_table`
--

CREATE TABLE `placed_table` (
  `id` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `College` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Year` int(50) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placed_table`
--

INSERT INTO `placed_table` (`id`, `Name`, `College`, `Course`, `Year`, `Image`, `status`) VALUES
(1, 'Arya Devanand', 'St Marys College', 'B tech CSE ', 2019, '1.jpg', 0),
(2, 'Nithya Menon', 'St marys College', 'MCA', 2019, '2.1.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `placement_table`
--

CREATE TABLE `placement_table` (
  `id` int(11) NOT NULL,
  `Eligibility` varchar(100) NOT NULL,
  `selected_college` int(50) NOT NULL,
  `placed_students` int(50) NOT NULL,
  `Deadline` date NOT NULL,
  `Description` varchar(100) NOT NULL,
  `status` tinyint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `placement_table`
--

INSERT INTO `placement_table` (`id`, `Eligibility`, `selected_college`, `placed_students`, `Deadline`, `Description`, `status`) VALUES
(1, 'Btech', 21, 5, '0001-01-20', 'TCS is tech company need software engineers', 1),
(2, 'Mtech', 10, 2, '2030-03-21', 'Computer background Master Students hired', 1);

-- --------------------------------------------------------

--
-- Table structure for table `selected list_table`
--

CREATE TABLE `selected list_table` (
  `selected_list_id` int(5) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student_register_table`
--

CREATE TABLE `student_register_table` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Userid` varchar(50) NOT NULL,
  `Password` int(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `graduation CGPA` int(50) NOT NULL,
  `backlog` int(50) NOT NULL,
  `graduation Year` int(50) NOT NULL,
  `upload your CV` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_register_table`
--

INSERT INTO `student_register_table` (`id`, `name`, `Userid`, `Password`, `college`, `course`, `graduation CGPA`, `backlog`, `graduation Year`, `upload your CV`) VALUES
(1, 'Arya', 'arya@gmail.com', 123, 'St marys', 'Btec', 8, 0, 2020, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblcompany`
--

CREATE TABLE `tblcompany` (
  `COMPANYID` int(11) NOT NULL,
  `COMPANYNAME` varchar(90) NOT NULL,
  `COMPANYADDRESS` varchar(90) NOT NULL,
  `COMPANYCONTACTNO` varchar(30) NOT NULL,
  `COMPANYSTATUS` varchar(90) NOT NULL,
  `COMPANYMISSION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcompany`
--

INSERT INTO `tblcompany` (`COMPANYID`, `COMPANYNAME`, `COMPANYADDRESS`, `COMPANYCONTACTNO`, `COMPANYSTATUS`, `COMPANYMISSION`) VALUES
(2, 'URC', 'Bry Camugao', '023654', '', 'weqwe'),
(3, 'Copreros', 'Mabinay\'s', '035656', '', ''),
(4, 'Quest', 'Kabankalan City', '23165', '', ''),
(6, 'Palacios Company', 'Kabankalan City', '0625656899', '', ''),
(7, 'IT Company', 'Kabankalan City', '04564123', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbljob`
--

CREATE TABLE `tbljob` (
  `JOBID` int(11) NOT NULL,
  `COMPANYID` int(11) NOT NULL,
  `CATEGORY` varchar(250) NOT NULL,
  `OCCUPATIONTITLE` varchar(90) NOT NULL,
  `REQ_NO_EMPLOYEES` int(11) NOT NULL,
  `SALARIES` double NOT NULL,
  `DURATION_EMPLOYEMENT` varchar(90) NOT NULL,
  `QUALIFICATION_WORKEXPERIENCE` text NOT NULL,
  `JOBDESCRIPTION` text NOT NULL,
  `PREFEREDSEX` varchar(30) NOT NULL,
  `SECTOR_VACANCY` text NOT NULL,
  `JOBSTATUS` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbljob`
--

INSERT INTO `tbljob` (`JOBID`, `COMPANYID`, `CATEGORY`, `OCCUPATIONTITLE`, `REQ_NO_EMPLOYEES`, `SALARIES`, `DURATION_EMPLOYEMENT`, `QUALIFICATION_WORKEXPERIENCE`, `JOBDESCRIPTION`, `PREFEREDSEX`, `SECTOR_VACANCY`, `JOBSTATUS`, `DATEPOSTED`) VALUES
(1, 2, 'Technology', 'Developer', 6, 15000, 'jan 30', '2-3', 'We are looking for bachelor of science in information technology.\r\nasdasdasd', 'Male/Female', 'yes', '0', '2018-05-20 00:00:00'),
(2, 2, 'Technology', 'Developer', 1, 15000, 'may 20', '2-3', 'We are looking for bachelor of science in Acountancy', 'Female', 'yes', '1', '2018-05-20 02:33:00'),
(12, 0, 'technology', 'Developer', 2, 20000, '', 'MCA', '', 'Male', 'yes', '1', '0000-00-00 00:00:00'),
(17, 0, 'Technology', 'Developer', 2, 20000, '', 'MCA', '', 'Male', 'yes', '1', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(10) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `seen_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `seen_status`) VALUES
(21, 'ytu', 'hguj', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_activation`
--
ALTER TABLE `card_activation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college details_table`
--
ALTER TABLE `college details_table`
  ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `college request_table`
--
ALTER TABLE `college request_table`
  ADD PRIMARY KEY (`college_request_id`);

--
-- Indexes for table `college_registration_table`
--
ALTER TABLE `college_registration_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company profile_table`
--
ALTER TABLE `company profile_table`
  ADD PRIMARY KEY (`company_profile_id`);

--
-- Indexes for table `company request_table`
--
ALTER TABLE `company request_table`
  ADD PRIMARY KEY (`company_request_id`);

--
-- Indexes for table `company_registration_table`
--
ALTER TABLE `company_registration_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_table`
--
ALTER TABLE `company_table`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exptable`
--
ALTER TABLE `exptable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_details_tbl`
--
ALTER TABLE `job_details_tbl`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `job_table`
--
ALTER TABLE `job_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `notice board_table`
--
ALTER TABLE `notice board_table`
  ADD PRIMARY KEY (`notice_board_id`);

--
-- Indexes for table `placed_table`
--
ALTER TABLE `placed_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `placement_table`
--
ALTER TABLE `placement_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selected list_table`
--
ALTER TABLE `selected list_table`
  ADD PRIMARY KEY (`selected_list_id`);

--
-- Indexes for table `student_register_table`
--
ALTER TABLE `student_register_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcompany`
--
ALTER TABLE `tblcompany`
  ADD PRIMARY KEY (`COMPANYID`);

--
-- Indexes for table `tbljob`
--
ALTER TABLE `tbljob`
  ADD PRIMARY KEY (`JOBID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `card_activation`
--
ALTER TABLE `card_activation`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `college details_table`
--
ALTER TABLE `college details_table`
  MODIFY `college_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `college request_table`
--
ALTER TABLE `college request_table`
  MODIFY `college_request_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `college_registration_table`
--
ALTER TABLE `college_registration_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `company profile_table`
--
ALTER TABLE `company profile_table`
  MODIFY `company_profile_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company request_table`
--
ALTER TABLE `company request_table`
  MODIFY `company_request_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_registration_table`
--
ALTER TABLE `company_registration_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `company_table`
--
ALTER TABLE `company_table`
  MODIFY `company_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_table`
--
ALTER TABLE `course_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exptable`
--
ALTER TABLE `exptable`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_details_tbl`
--
ALTER TABLE `job_details_tbl`
  MODIFY `jobid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_table`
--
ALTER TABLE `job_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `login_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `notice board_table`
--
ALTER TABLE `notice board_table`
  MODIFY `notice_board_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `placed_table`
--
ALTER TABLE `placed_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `placement_table`
--
ALTER TABLE `placement_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `selected list_table`
--
ALTER TABLE `selected list_table`
  MODIFY `selected_list_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_register_table`
--
ALTER TABLE `student_register_table`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcompany`
--
ALTER TABLE `tblcompany`
  MODIFY `COMPANYID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbljob`
--
ALTER TABLE `tbljob`
  MODIFY `JOBID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
