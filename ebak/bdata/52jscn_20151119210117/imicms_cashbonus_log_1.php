<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `imicms_cashbonus_log`;");
E_C("CREATE TABLE `imicms_cashbonus_log` (
  `id` int(11) NOT NULL auto_increment,
  `token` char(25) NOT NULL,
  `wecha_id` char(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `price` char(100) NOT NULL,
  `add_time` char(11) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>