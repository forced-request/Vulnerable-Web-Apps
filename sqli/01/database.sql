DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `name` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO `users` VALUES (1,'john.m.poulin@maine.edu','06e3c2a908365f6d25ffc15a42b3b8b0','John Poulin'),(2,'bob.smith@john-poulin.com','7c6a180b36896a0a8c02787eeafb0e4c','Bob Smith');

