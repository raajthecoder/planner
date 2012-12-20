DROP TABLE IF EXISTS `raaj_USER`;
CREATE TABLE IF NOT EXISTS `raaj_USER` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(128) NOT NULL,
  `ACTIVE` int(1) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `raaj_USER`
--

INSERT INTO `raaj_USER` (`ID`, `NAME`, `USERNAME`, `PASSWORD`, `ACTIVE`) VALUES
(1, 'Raaj', 'raaj', 'd1cdbc8e15bbf95950e60018f001544e', 1),
(2, 'Priya', 'priya', '75a6de613e1f66ab0e7d3d82f03fa750', 1),
(3, 'Murthy', 'pvmoorthy', 'b52747c71b85da52e2a9d9eb76f83c2e', 1),
(4, 'Babu', 'babu', '0bdced1f971dd1b6ba780ea3a2219c0a', 1);
