
-- --------------------------------------------------------

--
-- Table structure for table `contact`
--
-- Creation: Apr 18, 2022 at 11:38 AM
-- Last update: Apr 19, 2022 at 02:04 AM
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `contact`:
--

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `message`) VALUES
(1, 'krupali@gmail.com', 'plz resolve my login issue.'),
(2, 'd@gmail.com', 'sfdh');
