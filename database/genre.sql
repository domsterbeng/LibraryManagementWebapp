CREATE TABLE `tblgenre` (
  `ID` int(10) NOT NULL,
  `Genre` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tblgenre` (`ID`, `Genre`) VALUES
(1, 'Realistic fiction'),
(2, 'Action'),
(3, 'Horror'),
(4, 'Fantasy'),
(5, 'Crime/Detective'),
(6, 'Folklore');
