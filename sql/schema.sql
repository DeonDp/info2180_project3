/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Dale Wilson-620014503,Deon Peterkin-620081892 and Ramone Granston-620078653
 * Created: Nov 26, 2016
 */

DROP DATABASE IF EXISTS CHEAPOMAIL_DB;
CREATE DATABASE CHEAPOMAIL_DB;
USE CHEAPOMAIL_DB;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`(
	`id`int(25) NOT NULL auto_increment,
	`firstname` char(35) NOT NULL default '',
	`lastname` char(35) NOT NULL default '',
	`username` char(25) NOT NULL default '',
	`password` char(255) NOT NULL default '',
	PRIMARY KEY  (`id`)
);

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
	`id` int(25) NOT NULL auto_increment,
	`recipient_ids` int(25),
	`user_id` int(25),
	`subject` char(55),
	`body` char(255),
	`date_sent` date,
	PRIMARY KEY  (`id`)
);

DROP TABLE IF EXISTS `message_read`;
CREATE TABLE `message_read` (
	`id` int(25) NOT NULL auto_increment,
	`message_id` int(25),
	`reader_id` int(25),
	`date` date,
	PRIMARY KEY  (`id`)
);