CREATE TABLE IF NOT EXISTS `pdodrop` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `dt1` text NOT NULL,
  `dt2` text NOT NULL,
  `dt3` text NOT NULL,
  `dt4` text NOT NULL,
  `ref` varchar(255) NOT NULL,
  `crdate` varchar(11) NOT NULL,
  `crhour` varchar(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=UTF8 AUTO_INCREMENT=2;