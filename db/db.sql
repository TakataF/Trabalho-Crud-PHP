CREATE DATABASE dbcrudphp;

USE dbcrudphp;

CREATE TABLE `user` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`login` varchar(15) NOT NULL,
`password` varchar(100) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;