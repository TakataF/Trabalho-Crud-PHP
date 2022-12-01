CREATE DATABASE dbcrudphp;

USE dbcrudphp;

CREATE TABLE `user` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`login` varchar(15) NOT NULL,
`password` varchar(100) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `product` (
`id` INT NOT NULL AUTO_INCREMENT ,
`name` VARCHAR(100) NOT NULL ,
`description` VARCHAR(150) NOT NULL ,
`qtd_avaliable` FLOAT NOT NULL ,
`unit_price` FLOAT NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;