# phpMyAdmin MySQL-Dump
# version 2.3.0
# http://phpwizard.net/phpMyAdmin/
# http://www.phpmyadmin.net/ (download page)
#
# Host: localhost
# Generation Time: Mar 07, 2003 at 04:03 PM
# Server version: 3.23.51
# PHP Version: 4.1.2
# Database : `mostwanted`
# --------------------------------------------------------

#
# Table structure for table `highscore`
#

CREATE TABLE highscore (
  score int(10) NOT NULL default '0',
  player varchar(10) NOT NULL default ''
) TYPE=MyISAM;

#
# Dumping data for table `highscore`
#

INSERT INTO highscore VALUES (3200, 'Jim');
INSERT INTO highscore VALUES (6000, 'Kris');
INSERT INTO highscore VALUES (4570, 'Murphy');
INSERT INTO highscore VALUES (1500, 'Eric');

