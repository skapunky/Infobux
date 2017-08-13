
CREATE TABLE  `usuario` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nick` varchar(20) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `password` varchar(32) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `dinero_a` float NOT NULL,
  `dinero_p` float NOT NULL,
  `bonus` int(10) unsigned NOT NULL,
  `verificado` int(2) unsigned NOT NULL,
  `pago` int(2) unsigned NOT NULL,
  `dinero_g` float NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;