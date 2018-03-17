
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- ci_sessions
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions`
(
    `session_id` VARCHAR(40) DEFAULT '0' NOT NULL,
    `ip_address` VARCHAR(16) DEFAULT '0' NOT NULL,
    `user_agent` VARCHAR(255) NOT NULL,
    `last_activity` int(10) unsigned DEFAULT 0 NOT NULL,
    `user_data` TEXT NOT NULL,
    PRIMARY KEY (`session_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- groups
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups`
(
    `id` INTEGER NOT NULL,
    `title` VARCHAR(20) DEFAULT '' NOT NULL,
    `description` VARCHAR(100) DEFAULT '' NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

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
    `rawdata` TEXT,
    `counter` INTEGER,
    `expiry` INTEGER,
    `lastupdate` INTEGER,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- users
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `group_id` INTEGER DEFAULT 100 NOT NULL,
    `token` VARCHAR(255) NOT NULL,
    `identifier` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
