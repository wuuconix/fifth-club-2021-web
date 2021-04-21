CREATE DATABASE IF NOT EXISTS easysql;

USE easysql;

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


INSERT INTO `users` values('admin','222333');
