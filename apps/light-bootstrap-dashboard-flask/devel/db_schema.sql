
-- Database: 


-- Create syntax for TABLE 'ci_sessions'
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(255) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'groups'
CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL DEFAULT '',
  `description` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Create syntax for TABLE 'users'
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '100',
  `token` varchar(255) NOT NULL,
  `identifier` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- for generic usage ..
CREATE TABLE `objects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `idx1` int(11) DEFAULT NULL,
  `idx2` int(11) DEFAULT NULL,
  `idx3` int(11) DEFAULT NULL,
  `idx4` int(11) DEFAULT NULL,
  `idx5` int(11) DEFAULT NULL,
  `key1` varchar(100) NOT NULL,
  `key2` varchar(100) DEFAULT NULL,
  `key3` varchar(100) DEFAULT NULL,
  `key4` varchar(100) DEFAULT NULL,
  `key5` varchar(100) DEFAULT NULL,
  `key6` varchar(100) DEFAULT NULL,
  `key7` varchar(100) DEFAULT NULL,
  `key8` varchar(100) DEFAULT NULL,
  `key9` varchar(100) DEFAULT NULL,
  `key10` varchar(100) DEFAULT NULL,
  `data1` varchar(1000) DEFAULT NULL,
  `data2` varchar(1000) DEFAULT NULL,
  `data3` varchar(1000) DEFAULT NULL,
  `data4` varchar(1000) DEFAULT NULL,
  `data5` varchar(1000) DEFAULT NULL,
  `data6` varchar(1000) DEFAULT NULL,
  `data7` varchar(1000) DEFAULT NULL,
  `data8` varchar(1000) DEFAULT NULL,
  `data9` varchar(1000) DEFAULT NULL,
  `data10` varchar(1000) DEFAULT NULL,
  `rawdata` mediumtext DEFAULT NULL,
  `counter` int(11) DEFAULT NULL,
  `expiry` int(11) DEFAULT NULL,
  `lastupdate` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


