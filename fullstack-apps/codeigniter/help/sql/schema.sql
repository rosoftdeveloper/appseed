
-- ---------------------------------------------------------------------
-- SQL for 'groups'
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ---------------------------------------------------------------------
-- SQL for 'users'
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `uc_email` UNIQUE (`email`),
  CONSTRAINT `uc_activation_selector` UNIQUE (`activation_selector`),
  CONSTRAINT `uc_forgotten_password_selector` UNIQUE (`forgotten_password_selector`),
  CONSTRAINT `uc_remember_selector` UNIQUE (`remember_selector`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- ---------------------------------------------------------------------
-- SQL for 'users_groups'
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `users_groups`;

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`),
  CONSTRAINT `uc_users_groups` UNIQUE (`user_id`, `group_id`),
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ---------------------------------------------------------------------
-- SQL for 'login_attempts'
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `login_attempts`;

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ---------------------------------------------------------------------
-- objects
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `objects`;

CREATE TABLE `objects`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `userid` INTEGER,
    `idx1` INTEGER,
    `idx2` INTEGER,
    `idx3` INTEGER,
    `idx4` INTEGER,
    `idx5` INTEGER,
    `key1` VARCHAR(100) NOT NULL,
    `key2` VARCHAR(100),
    `key3` VARCHAR(100),
    `key4` VARCHAR(100),
    `key5` VARCHAR(100),
    `key6` VARCHAR(100),
    `key7` VARCHAR(100),
    `key8` VARCHAR(100),
    `key9` VARCHAR(100),
    `key10` VARCHAR(100),
    `key11` VARCHAR(100),
    `key12` VARCHAR(100),
    `key13` VARCHAR(100),
    `key14` VARCHAR(100),
    `key15` VARCHAR(100),
    `data1` VARCHAR(1000),
    `data2` VARCHAR(1000),
    `data3` VARCHAR(1000),
    `data4` VARCHAR(1000),
    `data5` VARCHAR(1000),
    `data6` VARCHAR(1000),
    `data7` VARCHAR(1000),
    `data8` VARCHAR(1000),
    `data9` VARCHAR(1000),
    `data10` VARCHAR(1000),
    `data11` VARCHAR(1000),
    `data12` VARCHAR(1000),
    `data13` VARCHAR(1000),
    `data14` VARCHAR(1000),
    `data15` VARCHAR(1000),
    `rawdata` MEDIUMTEXT,
    `counter` INTEGER,
    `expiry` INTEGER,
    `lastupdate` INTEGER,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
