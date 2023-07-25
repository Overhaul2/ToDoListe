CREATE TABLE `tache` (
  `ID` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `titre` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `etat` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
