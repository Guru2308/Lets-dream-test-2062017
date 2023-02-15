
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `db_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `title` varchar(100) NOT NULL,
  `deadline` date NOT NULL,
  `description` longtext NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`title`, `deadline`, `description`, `file`) VALUES
('nksdlf', '2012-02-23', 'djksfd', ''),
('job', '2023-02-14', 'hub ', ''),
('Uday', '2023-02-03', 'assignment', ''),
('jaiii', '2023-02-15', 'qwerty', ''),
('jaiii', '2023-02-15', 'qwerty', ''),
('Chatheriyan', '2023-02-09', '123abcd', ''),
('Hey', '2023-02-03', 'qwerty', '');

-- --------------------------------------------------------

--
-- Table structure for table `mentee_table`
--

CREATE TABLE `mentee_table` (
  `mentee_id` int(10) NOT NULL,
  `mentee_name` varchar(25) NOT NULL,
  `mentee_mail` varchar(25) NOT NULL,
  `mentee_pass` varchar(50) NOT NULL,
  `mentee_mobile` int(10) NOT NULL,
  `isActive` int(1) NOT NULL,
  `assigned_mentor_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentee_table`
--

INSERT INTO `mentee_table` (`mentee_id`, `mentee_name`, `mentee_mail`, `mentee_pass`, `mentee_mobile`, `isActive`, `assigned_mentor_id`) VALUES
(36, 'Abinav', 'tharkuri@gmail.com', 'Ch@230803', 987890987, 1, 2),
(50, '2342432', 'dhan@fdmd.in', 'Ch@230823', 87983472, 1, 2),
(2062002, 'Abinav', 'abinav@cu.in', '123456', 987665431, 1, 1),
(2062016, 'Chatheriyan', 'chathu@cu.in', '123456', 987665431, 1, 1),
(2062017, 'Dhanasekar', 'dhana@cu.in', '123456', 987665431, 1, 2),
(2062018, 'Ferdeno', 'ferdi@cu.in', '123456', 987665431, 1, 2),
(2062019, 'Ferrari', 'ferrari@cu.in', '123456', 987665431, 1, 2),
(2062027, 'Karthick', 'karthicku@cu.in', '123456', 987665431, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mentor_table`
--

CREATE TABLE `mentor_table` (
  `mentor_id` int(10) NOT NULL,
  `mentor_name` varchar(25) NOT NULL,
  `mentor_mail` varchar(25) NOT NULL,
  `mentor_pass` varchar(50) NOT NULL,
  `mentor_mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentor_table`
--

INSERT INTO `mentor_table` (`mentor_id`, `mentor_name`, `mentor_mail`, `mentor_pass`, `mentor_mobile`) VALUES
(1, 'Rekha', 'rekha@cu.in', '123456', 123423),
(2, 'Sandeep', 'sandeep@cu.in', '123456', 123423);

-- --------------------------------------------------------

--
-- Table structure for table `recieve`
--

CREATE TABLE `recieve` (
  `id` int(100) NOT NULL,
  `recieved` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recieve`
--

INSERT INTO `recieve` (`id`, `recieved`) VALUES
(1, 'sandeep@cu.in'),
(2, 'sandeep@cu.in'),
(3, 'sandeep@cu.in'),
(4, 'sandeep@cu.in'),
(5, 'rekha@cu.in'),
(6, 'rekha@cu.in'),
(7, 'sandeep@cu.in'),
(8, 'sandeep@cu.in'),
(9, 'sandeep@cu.in'),
(10, 'rekha@cu.in'),
(11, 'sandeep@cu.in'),
(12, 'sandeep@cu.in'),
(20, 'abinav@cu.in'),
(22, 'rekha@cu.in'),
(25, 'abinav@cu.in'),
(26, ''),
(27, ''),
(28, ''),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, 'abinav@cu.in'),
(35, ''),
(36, ''),
(37, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL COMMENT 'role_id',
  `role` varchar(255) DEFAULT NULL COMMENT 'role_text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Mentor'),
(3, 'Mentee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `roleid` tinyint(4) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `verify_status` tinyint(1) DEFAULT NULL COMMENT 'yes=1,no=0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `password`, `mobile`, `roleid`, `isActive`, `created_at`, `updated_at`, `verify_status`) VALUES
(29, 'Dhanasekar', 'Dhanasekar', 'dhansty@gmail.com', 'Ch@230803', '9876543210', 1, 0, '2023-01-27 13:40:04', '2023-01-27 13:40:04', 1),
(33, 'rekha', 'Rekha', 'rek123@gmail.com', 'Ch@230803', '9876543210', 2, 0, '2023-02-03 09:18:27', '2023-02-03 09:18:27', 1),
(35, 'Ferrari', 'Ferrari', 'fj@gmail.com', 'Ch@230803', '9876543210', 1, 0, '2023-02-09 09:39:35', '2023-02-09 09:39:35', 1),
(36, 'Abinav', 'Abinav', 'tharkuri@gmail.com', 'Ch@230803', '987890987', 3, 1, '2023-02-11 06:57:48', '2023-02-11 06:57:48', 1),
(41, 'chat', 'chat', 'chat@gmail.com', 'Ch@230803', '9876543210', 2, 0, '2023-02-13 05:28:41', '2023-02-13 05:28:41', 1),
(49, 'Guru', '2062016', 'chatguru@gmail.com', 'Ch@230803', '9876543210', 1, 0, '2023-02-14 14:18:35', '2023-02-14 14:18:35', NULL),
(50, 'dhn', '2342432', 'dhan@fdmd.in', 'Ch@230823', '87983472', 3, 0, '2023-02-14 15:09:15', '2023-02-14 15:09:15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentee_table`
--
ALTER TABLE `mentee_table`
  ADD PRIMARY KEY (`mentee_id`),
  ADD KEY `FK_Key` (`assigned_mentor_id`);

--
-- Indexes for table `mentor_table`
--
ALTER TABLE `mentor_table`
  ADD PRIMARY KEY (`mentor_id`);

--
-- Indexes for table `recieve`
--
ALTER TABLE `recieve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recieve`
--
ALTER TABLE `recieve`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'role_id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mentee_table`
--
ALTER TABLE `mentee_table`
  ADD CONSTRAINT `FK_Key` FOREIGN KEY (`assigned_mentor_id`) REFERENCES `mentor_table` (`mentor_id`);
COMMIT;