DROP TABLE IF EXISTS `raaj_TASK`;
CREATE TABLE IF NOT EXISTS `raaj_TASK` (
  `ID` int(10) NOT NULL auto_increment,
  `NAME` varchar(50) NOT NULL,
  `DESCRIPTION` varchar(255) NOT NULL,
  `DUE_DATE` datetime NOT NULL,
  `CREATED` datetime NOT NULL,
  `CREATED_BY` varchar(50) NOT NULL,
  `CONTACT_PERSON` varchar(255) NOT NULL,
  `CONTACT_NUMBER` varchar(255) NOT NULL,
  `FAVOURS` varchar(255) NOT NULL,
  `STATUS` varchar(50) NOT NULL,
  `LAST_UPDATED` datetime NOT NULL,
  `UPDATED_BY` varchar(50) NOT NULL,
  `ASSIGNED_TO` varchar(50) NOT NULL,
  `IMAGE` varchar(255) NOT NULL default 'images/img-post.jpg',
  PRIMARY KEY  (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;