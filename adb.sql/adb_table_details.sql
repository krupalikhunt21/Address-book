
-- --------------------------------------------------------

--
-- Table structure for table `details`
--
-- Creation: Apr 17, 2022 at 11:57 AM
-- Last update: Apr 19, 2022 at 05:58 AM
--

CREATE TABLE `details` (
  `id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `hadd` varchar(50) NOT NULL,
  `oadd` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `details`:
--

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `fname`, `lname`, `email`, `mobile`, `gender`, `dob`, `hadd`, `oadd`, `city`, `state`) VALUES
(1, 'krupali', 'khunt', 'krupali@gmail.com', 1234567890, 'female', '0000-00-00', 'abc', 'abc', 'abc', 'abc'),
(2, 'Div', 'Parmar', 'd@gmail.com', 1234567890, 'female', '2022-04-28', 'abc', '', 'adssf', 'sdadf'),
(3, 'Div', 'Parmar', 'd@gmail.com', 1234567890, 'female', '2022-04-07', 'zxscxz', '', 'sssc', 'scxc'),
(4, 'Krupa', 'khunt', 'k@gmail.com', 1234567890, 'female', '2022-03-28', 'sasd', 'sdasd', 'scs', 'scc'),
(5, '', '', '', 0, '', '0000-00-00', '', '', '', ''),
(6, '', '', '', 0, '', '0000-00-00', '', '', '', ''),
(7, '', 'nbjhkh', 'hkhikh', 2147483647, '', '2022-04-05', 'dcv', 'nff', '', ''),
(8, '', '', '', 0, '', '0000-00-00', '', '', '', ''),
(9, '', 'a', 'b', 987654321, '', '2022-03-04', 'fgfhj', 'wrdthfy', '', '');
