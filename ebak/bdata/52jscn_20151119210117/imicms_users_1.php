<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `imicms_users`;");
E_C("CREATE TABLE `imicms_users` (
  `id` int(11) NOT NULL auto_increment,
  `gid` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `tusername` varchar(255) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `areaid` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `qq` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(90) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `lasttime` varchar(13) NOT NULL,
  `status` varchar(1) NOT NULL,
  `hometj` tinyint(1) NOT NULL default '0',
  `createip` varchar(30) NOT NULL,
  `lastip` varchar(30) NOT NULL,
  `diynum` int(11) NOT NULL,
  `activitynum` int(11) NOT NULL,
  `gongzhongnumgon` tinyint(2) NOT NULL,
  `card_num` int(11) NOT NULL,
  `card_create_status` tinyint(1) NOT NULL,
  `money` int(11) NOT NULL,
  `viptime` varchar(13) NOT NULL,
  `connectnum` int(11) NOT NULL default '0',
  `pid` varchar(32) NOT NULL,
  `photo_head` text NOT NULL,
  `inviter` int(10) NOT NULL default '0',
  `mp` varchar(11) NOT NULL default '',
  `wechat_card_num` tinyint(3) NOT NULL,
  `serviceUserNum` tinyint(3) NOT NULL,
  `moneybalance` int(10) NOT NULL default '0',
  `spend` int(10) NOT NULL default '0',
  `lastloginmonth` smallint(2) NOT NULL default '0',
  `attachmentsize` int(10) NOT NULL default '0',
  `invitecode` varchar(6) NOT NULL default '',
  `smscount` int(10) NOT NULL default '0',
  `remark` varchar(200) NOT NULL default '',
  `usertplid` tinyint(4) NOT NULL default '0',
  `openid` varchar(80) NOT NULL default '',
  `agentid` int(10) NOT NULL default '0',
  `business` char(20) NOT NULL default 'other',
  `sysuser` int(11) NOT NULL,
  `is_syn` tinyint(4) NOT NULL default '0',
  `source_domain` varchar(200) NOT NULL,
  `access_count` int(11) NOT NULL,
  `access_count_notice` varchar(200) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `agentid` USING BTREE (`agentid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8");
E_D("replace into `imicms_users` values('1','7','eake','eaek','云南省','昆明市','安宁市','18987133915','61091793','c5db244dbfc91ca5dc46626cc21d5594','eakecn@126.com','1409735999','1447032303','1','0','182.242.35.231','106.58.251.247','339','2','0','10000','0','0','1599840000','192','','','0','','0','0','1000000000','0','11','16509645','','0','','1','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('3','7','61091793','951875098','云南省','昆明市','官渡区','13769554334','951875098','c5db244dbfc91ca5dc46626cc21d5594','583713996@qq.com','1411466519','1411466519','1','1','116.249.57.125','116.249.57.125','0','5','0','0','0','0','1477843200','0','','','0','','0','0','0','0','0','0','','0','','0','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('4','4','yuanmingqiu','yuanmingqiu','北京市','市辖区','东城区','13208845009','','e10adc3949ba59abbe56e057f20f883e','410671737@qq.com','1411788491','1411788491','1','0','14.204.67.135','14.204.67.135','0','3','0','0','0','0','1414380491','0','','','0','','0','0','0','0','0','0','','0','','0','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('13','1','13208845009','13208845009','北京市','市辖区','东城区','13208845009','410671737','c8837b23ff8aaa8a2dde915473ce0991','2243123496@qq.com','1416214278','1416214278','1','0','14.204.94.83','14.204.94.83','0','1','0','0','0','0','1418806278','0','','','0','','0','0','0','0','0','0','','0','','0','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('6','7','1457963911','','','','','','1457963911','54be637844abb0d9a26981d9b7672fcf','1457963911@qq.com','1411981876','1411981876','1','1','42.243.80.80','42.243.80.80','777','1','0','0','0','0','1443456000','66','','','0','','0','0','0','0','0','9314988','','0','','0','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('12','1','陈帅伍','','','','','','','df551d4d1c499b90876dda02c1875901','1285973389@qq.com','1416136883','1416136883','1','0','123.151.42.46','123.151.42.46','0','1','0','0','0','0','1418728883','0','','','0','','0','0','0','0','0','0','','0','','0','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('11','1','cd110110','','','','','','','f43b3bd4077717f374594e07eaa42a2e','327937387@qq.com','1415546504','1415546504','1','0','222.241.15.51','222.241.15.51','0','1','0','0','0','0','1418138504','0','','','0','','0','0','0','0','0','0','','0','','0','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('10','6','455949723','455949723','北京市','市辖区','东城区','13455949723','455949723','93c39cb82337b10fcd3949f68e305a1e','455949723@w.k','1412772692','1412772692','1','1','60.168.87.134','60.168.87.134','0','3','0','0','0','0','1415289600','0','','','0','','0','0','0','0','0','0','','0','','0','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('14','7','cyangkun','cyangkun','云南省','昆明市','安宁市','13888384509','2334066415','c5db244dbfc91ca5dc46626cc21d5594','cyangkun@qq.com','1416377006','1416377006','1','1','116.52.232.55','116.52.232.55','56','1','0','0','0','0','1443628800','18','','','0','','0','0','0','0','0','30910','','0','','0','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('15','7','695546574','yoyoyz','云南省','昆明市','安宁市','13759594105','695546574','38d34a3df2e67b0002b14547b78fa749','695546574@qq.com','1417958069','1417958069','1','0','112.115.69.246','112.115.69.246','63','0','0','0','0','0','1452009600','6','','','0','','0','0','0','0','0','411636','','0','','0','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('16','1','woaibaobao','1111111','北京市','市辖区','东城区','11111111111','1111111111','4fd622537821f187454b0b49875bb9fe','1111111111@qq.com','1435500975','1435500975','1','0','123.181.168.126','123.181.168.126','0','0','0','0','0','0','1438092975','0','','','0','','0','0','0','0','0','0','','0','','0','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('17','7','2224245092','2224245092','云南省','昆明市','安宁市','15025106511','2224245092','344a3cd04e7ed3d8c2c78e16bc02b602','2224245092@qq.com','1441159756','1441159756','1','1','106.58.247.162','106.58.247.162','13','0','0','0','0','0','1475337600','12','','','0','','0','0','0','0','0','2179582','','0','','0','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('18','1','akakaka','akakaka','北京市','市辖区','东城区','15151198873','88667733','9cbf8a4dcb8e30682b927f352d6559a0','akaka@qq.com','1445871434','1445871434','1','0','49.80.174.54','49.80.174.54','0','0','0','0','0','0','1448463434','0','','','0','','0','0','0','0','0','0','','0','','0','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('19','1','kaka123','kaka123','北京市','市辖区','东城区','15366678833','12345678','e10adc3949ba59abbe56e057f20f883e','kaka@123.com','1446126974','1446126974','1','0','49.80.248.181','49.80.248.181','0','0','0','0','0','0','1448718974','0','','','0','','0','0','0','0','0','0','','0','','0','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('20','1','ztjyww','','','','','','419839432','f674652410a82bdd78b3470d81d141a9','419839432@qq.com','1446542263','1446542263','1','0','218.202.44.123','218.202.44.123','0','0','0','0','0','0','1451726263','0','','','0','','0','0','0','0','11','0','sdkaaw','0','','1','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('21','1','123456a','','','','','','123456','9cbf8a4dcb8e30682b927f352d6559a0','123456a@qq.com','1446813846','1446813846','1','0','111.192.85.172','111.192.85.172','0','0','0','0','0','0','1451997846','0','','','0','','0','0','0','0','11','0','aphjbw','0','','1','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('22','7','cxx','','','','','','50118112','0fa00c384e09f60a901cc69b26f8f5e5','cxx224200@163.com','1447635937','1447635937','1','0','218.92.192.236','218.92.192.236','0','0','0','0','0','0','1452819937','0','','','0','','0','0','0','0','11','0','rfwjtn','0','','1','','0','other','0','0','','0','');");
E_D("replace into `imicms_users` values('23','7','52jscn','','','','','','123456789','761b7b6e50f8474743918169d56d124d','52jscn@qq.com','1447853590','1447853590','1','0','127.0.0.1','127.0.0.1','0','0','0','0','0','0','1453037590','0','','','0','','1','0','0','0','11','0','ejffrk','0','','1','','0','other','0','0','','0','');");

require("../../inc/footer.php");
?>