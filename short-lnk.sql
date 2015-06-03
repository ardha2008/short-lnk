# Host: localhost  (Version: 5.5.32)
# Date: 2015-06-03 22:26:07
# Generator: MySQL-Front 5.3  (Build 4.198)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "urls"
#

DROP TABLE IF EXISTS `urls`;
CREATE TABLE `urls` (
  `id` varchar(4) NOT NULL DEFAULT '',
  `target` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hits` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
