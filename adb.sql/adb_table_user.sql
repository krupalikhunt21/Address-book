
-- --------------------------------------------------------

--
-- Table structure for table `user`
--
-- Creation: Apr 16, 2022 at 02:31 PM
-- Last update: Apr 19, 2022 at 06:10 AM
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `cpwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `user`:
--

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pwd`, `cpwd`) VALUES
(1, 'krupali', 'krupali@gmail.com', 'Krupali', 'Krupali'),
(2, 'krupali', '', '', ''),
(3, 'krupali', 'krupali@gmail.com', 'Krupali', 'Krupali'),
(4, '', '', '', ''),
(5, 'kp', 'kp@gmail.com', 'kp1234', 'kp1234'),
(6, 'vensi', 'v@gmail.com', 'abcdefghi', 'abcdefghi'),
(7, 'vensi', 'v@gmail.com', 'abcdefghi', 'abcdefghi'),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', 'dfdf', '234567', '234567'),
(11, 'eddfdfdf', 'wdsd', 'wdd', 'wded'),
(12, '', '', '', '');
