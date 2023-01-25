
-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--
-- Creation: Apr 19, 2022 at 06:39 AM
-- Last update: Apr 19, 2022 at 12:01 PM
--

CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mobile` int(10) NOT NULL,
  `dob` date NOT NULL,
  `hadd` varchar(20) NOT NULL,
  `oadd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `dashboard`:
--

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`id`, `fname`, `lname`, `mobile`, `dob`, `hadd`, `oadd`) VALUES
(1, 'abc', 'xyz', 1234567890, '2022-04-12', 'edwfs', 'sc'),
(2, 'Div', 'Parmar', 1234567890, '2022-04-07', 'asb', 'asb'),
(3, 'Div', 'Parmar', 1234567890, '2022-04-06', 'skkm', 'wsnk'),
(4, 'q', 's', 1234567890, '2022-04-12', 'addf', 'sdaddf');
