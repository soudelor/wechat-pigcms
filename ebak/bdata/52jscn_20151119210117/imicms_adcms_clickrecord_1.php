<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `imicms_adcms_clickrecord`;");
E_C("CREATE TABLE `imicms_adcms_clickrecord` (
  `id` smallint(6) unsigned NOT NULL auto_increment,
  `pid` smallint(6) NOT NULL,
  `token` varchar(255) NOT NULL,
  `wecha_id` varchar(255) NOT NULL,
  `first` varchar(255) NOT NULL,
  `time` varchar(255) character set ucs2 NOT NULL,
  `ip` varchar(255) NOT NULL,
  `statue` smallint(6) NOT NULL,
  `adblance` varchar(255) NOT NULL,
  `invite` varchar(255) NOT NULL,
  KEY `id` USING BTREE (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>