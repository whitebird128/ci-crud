/*Table structure for table `primo` */

DROP TABLE IF EXISTS `primo`;

CREATE TABLE `primo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `primo_name` varchar(50) NOT NULL,
  `primo_des` text NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `primo` */

insert  into `primo`(`id`,`primo_name`,`primo_des`,`created_date`,`updated_date`) values (3,'test11','This is test1','2016-09-29 17:40:49','2016-09-29 17:40:54');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
