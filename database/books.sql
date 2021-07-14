CREATE TABLE `tblbooks` (
  `ID` int(10) NOT NULL,
  `Title` varchar(120) DEFAULT NULL,
  `Author` varchar(120) DEFAULT NULL,
  `PublishedYear` varchar(120) DEFAULT NULL,
  `ISBN` varchar(120) DEFAULT NULL,
  `Genre` varchar(120) DEFAULT NULL,
  `Quantity` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tblbooks` (`ID`, `Title`, `Author`, `PublishedYear`, `ISBN`, `Genre`, `Quantity`) VALUES
(1, 'Vanity Fair', 'Valentin Durgan', '2002', '9791216410868', 'Realistic fiction', '1'),
(2, 'The Painted Veil', 'Noemi Kihn', '1985', '9798303231535', 'Crime/Detective', '4'),
(6, 'The Last Enemy', 'Sal Prohaska', '2012', '9787313920751', 'Horror', '1'),
(7, 'Look Homeward, Angel', 'Val Greenfelder', '1999', '9791181904836', 'Fantasy', '1'),
(8, 'A Confederacy of Dunces', 'Valentin Durgan', '2005', '9791218278732', 'Horror', '3'),
(9, 'For a Breath I Tarry', 'Sal Prohaska', '2005', '9791172978280', 'Folklore', '3'),
(10, 'The Cricket on the Hearth', 'Sal Prohaska', '2010', '9798660755743', 'Fantasy', '2');