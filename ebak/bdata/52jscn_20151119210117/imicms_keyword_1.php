<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `imicms_keyword`;");
E_C("CREATE TABLE `imicms_keyword` (
  `id` int(11) NOT NULL auto_increment,
  `keyword` char(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `module` varchar(15) NOT NULL,
  `precision` tinyint(1) NOT NULL default '0',
  `precisions` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=384 DEFAULT CHARSET=utf8");
E_D("replace into `imicms_keyword` values('1','产品','1','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('2','产品','2','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('3','产品','3','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('4','查询','4','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('5','大转盘','1','99630ff411650cfa','Lottery','0','0');");
E_D("replace into `imicms_keyword` values('181','汽车','1','99630ff411650cfa','Carset','0','0');");
E_D("replace into `imicms_keyword` values('26','开荒','3','257e21c8a9e1be8c','Multi','0','0');");
E_D("replace into `imicms_keyword` values('9','保洁','6','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('10','家政','7','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('11','家政','8','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('12','家政','9','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('13','开荒','10','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('14','景观','11','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('15','了解','12','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('16','1','13','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('17','预约','2','257e21c8a9e1be8c','Custom','0','0');");
E_D("replace into `imicms_keyword` values('18','家政','1','257e21c8a9e1be8c','Multi','0','0');");
E_D("replace into `imicms_keyword` values('19','家政','14','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('20','家政','15','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('21','保洁','2','257e21c8a9e1be8c','Multi','0','0');");
E_D("replace into `imicms_keyword` values('22','保洁','16','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('24','杰诚','18','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('27','景观','4','257e21c8a9e1be8c','Multi','0','0');");
E_D("replace into `imicms_keyword` values('28','知识','20','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('29','知识','5','257e21c8a9e1be8c','Multi','0','0');");
E_D("replace into `imicms_keyword` values('37','知识','27','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('36','知识','26','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('32','知识','23','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('33','知识','24','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('34','杰诚','1','257e21c8a9e1be8c','Business','0','0');");
E_D("replace into `imicms_keyword` values('42','知识','32','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('39','知识','29','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('40','知识','30','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('43','知识','33','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('44','知识','34','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('45','知识','35','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('46','知识','36','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('47','知识','37','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('48','知识','38','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('49','知识','39','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('50','知识','40','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('51','知识','41','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('52','知识','42','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('53','知识','43','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('54','知识','44','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('55','知识','45','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('56','知识','46','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('57','产品','6','99630ff411650cfa','Multi','0','0');");
E_D("replace into `imicms_keyword` values('58','功能','7','99630ff411650cfa','Multi','0','0');");
E_D("replace into `imicms_keyword` values('359','我们','47','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('60','知识','48','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('61','知识','49','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('62','知识','50','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('63','知识','51','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('64','知识','52','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('65','知识','53','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('66','营销','54','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('85','营销','72','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('68','营销','56','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('69','营销','57','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('70','营销','58','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('71','营销','59','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('72','营销','60','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('73','营销','61','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('74','营销','62','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('75','知识','63','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('76','知识','64','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('77','知识','65','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('78','营销','66','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('79','','67','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('80','营销','68','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('81','微博','69','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('82','微博','70','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('83','微博','71','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('84','微博','8','99630ff411650cfa','Multi','0','0');");
E_D("replace into `imicms_keyword` values('86','微博','73','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('87','我要上墙 上墙 毕业典礼墻','1','49ca6b5b1f0e6f41','Wxq','0','0');");
E_D("replace into `imicms_keyword` values('88','知识','74','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('89','知识','75','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('90','','76','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('91','知识','77','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('92','产品','78','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('93','知识','79','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('94','知识','80','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('95','知识','81','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('96','知识','82','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('97','知识','83','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('98','知识','84','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('99','知识','85','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('100','','86','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('101','知识','87','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('102','知识','88','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('103','知识','89','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('104','知识','90','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('105','知识','91','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('106','知识','92','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('107','知识','93','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('108','知识','94','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('109','知识','95','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('110','知识','96','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('111','知识','97','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('112','营销','98','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('113','营销','99','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('114','知识','100','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('115','知识','101','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('116','知识','102','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('117','知识','103','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('118','知识','104','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('119','知识','105','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('120','知识','106','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('121','知识','107','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('122','知识','108','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('123','知识','109','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('124','营销','110','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('125','营销','111','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('126','营销','112','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('127','营销','113','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('128','微博','114','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('129','微博','115','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('130','营销 微博','116','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('131','微博','117','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('132','知识','118','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('133','知识','119','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('134','知识','120','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('135','知识','121','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('136','知识','122','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('137','知识','123','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('138','知识','124','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('139','知识','125','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('140','优惠券','2','99630ff411650cfa','Lottery','0','0');");
E_D("replace into `imicms_keyword` values('141','刮刮卡','3','99630ff411650cfa','Lottery','0','0');");
E_D("replace into `imicms_keyword` values('142','水果达人','4','99630ff411650cfa','Lottery','0','0');");
E_D("replace into `imicms_keyword` values('178','墙','3','99630ff411650cfa','Wxq','0','0');");
E_D("replace into `imicms_keyword` values('144','知识','126','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('145','知识','127','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('146','知识','128','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('147','知识','129','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('148','知识','130','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('149','知识','131','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('150','知识','132','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('151','知识','133','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('152','知识','134','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('153','知识','135','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('154','知识','136','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('155','知识','137','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('156','知识','138','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('157','知识','139','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('158','知识','140','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('159','知识','141','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('160','知识','142','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('161','营销','143','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('162','营销','144','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('163','知识','145','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('164','知识','146','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('165','知识','147','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('166','知识','148','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('167','知识','149','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('168','知识','150','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('169','知识','151','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('170','知识','152','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('171','展','1','99630ff411650cfa','Scenes','0','0');");
E_D("replace into `imicms_keyword` values('172','知识','153','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('173','知识','154','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('174','知识','155','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('175','知识','156','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('176','知识','157','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('177','知识','158','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('179','结婚','1','99630ff411650cfa','Wcard','0','0');");
E_D("replace into `imicms_keyword` values('180','全景','2','99630ff411650cfa','Panoramic','0','0');");
E_D("replace into `imicms_keyword` values('182','预约','1','99630ff411650cfa','Reservation','0','0');");
E_D("replace into `imicms_keyword` values('183','房','1','99630ff411650cfa','Estate','0','0');");
E_D("replace into `imicms_keyword` values('184','知识','159','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('185','知识','160','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('186','知识','161','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('187','知识','162','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('188','知识','163','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('189','知识','164','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('190','知识','165','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('191','知识','166','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('192','知识','167','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('193','知识','168','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('194','知识','169','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('195','k','2','99630ff411650cfa','Business','0','0');");
E_D("replace into `imicms_keyword` values('196','微场景','1','99630ff411650cfa','Live','0','0');");
E_D("replace into `imicms_keyword` values('197','新媒体','170','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('198','新媒体','9','99630ff411650cfa','Multi','0','0');");
E_D("replace into `imicms_keyword` values('199','其他','171','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('200','其他','10','99630ff411650cfa','Multi','0','0');");
E_D("replace into `imicms_keyword` values('201','知识','172','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('202','知识','173','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('203','知识','174','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('204','知识','175','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('205','知识','176','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('206','知识','177','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('207','其他','178','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('208','其他','179','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('209','其他','180','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('210','其他','181','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('211','其他','182','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('212','其他','183','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('213','其他','184','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('214','新媒体','185','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('215','新媒体','186','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('216','新媒体','187','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('217','新媒体','188','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('218','微博','189','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('219','营销','190','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('220','知识','191','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('221','知识','192','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('222','知识','193','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('223','知识','194','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('224','知识','195','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('225','知识','196','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('226','团购','1','99630ff411650cfa','Product','0','0');");
E_D("replace into `imicms_keyword` values('227','知识','197','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('228','知识','198','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('229','知识','199','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('230','知识','200','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('231','知识','201','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('232','知识','202','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('233','产品','203','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('234','知识','204','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('235','知识','205','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('236','知识','206','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('237','知识','207','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('238','知识','208','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('239','知识','209','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('240','知识','210','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('241','知识','211','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('242','知识','212','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('243','知识','213','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('244','知识','214','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('245','知识','215','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('246','知识','216','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('247','知识','217','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('248','知识','218','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('249','知识','219','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('250','知识','220','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('251','知识','221','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('252','知识','222','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('253','知识','223','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('254','知识','224','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('255','知识','225','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('256','','226','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('257','知识','227','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('258','知识','228','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('259','知识','229','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('260','知识','230','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('261','知识','231','257e21c8a9e1be8c','Img','0','0');");
E_D("replace into `imicms_keyword` values('262','营销','232','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('263','我们','233','c4448ac95e30a1eb','Img','0','0');");
E_D("replace into `imicms_keyword` values('264','预约','3','c4448ac95e30a1eb','Custom','0','0');");
E_D("replace into `imicms_keyword` values('266','微博','235','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('267','营销','236','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('268','新媒体','237','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('269','其他','238','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('270','拆礼盒','2','99630ff411650cfa','Activity','0','0');");
E_D("replace into `imicms_keyword` values('271','营销','239','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('272','热文','240','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('273','热文','11','99630ff411650cfa','Multi','0','0');");
E_D("replace into `imicms_keyword` values('274','热文','241','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('275','热文','242','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('276','热文','243','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('277','热文','244','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('278','热文','245','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('279','热文','246','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('280','热文','247','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('281','热文','248','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('282','营销','249','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('283','热文','250','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('284','新媒体','251','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('285','热文','252','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('286','热文','253','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('287','热文','254','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('288','新媒体','255','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('289','热文','256','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('290','热文','257','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('291','新媒体','258','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('292','热文','259','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('293','热文','260','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('294','营销','261','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('295','美体','262','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('296','美体','263','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('297','美容','264','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('299','美甲','265','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('300','【丰胸】','266','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('301','美体','267','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('302','美容','268','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('303','美体','269','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('304','美甲','270','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('306','丰胸','271','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('307','【美容】','272','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('308','【减肥】','273','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('310','','274','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('311','【精油】','275','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('314','[美容光子]你知道光子是什么吗？','276','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('315','【脂肪】是怎样形成的，我不要你。','277','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('316','标准体重】对照表你真的了解过吗？','278','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('318','【消脂果菜汁】','279','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('319','【蜂蜜美容护肤的8个方法】蜂蜜，是我们很经常看到。大家都知道蜂蜜有很多的作用来做美容','280','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('320','面膜的正确使用方法','281','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('321','敷好面膜效果事半功倍','281','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('322','敷面膜7个误区需警惕','282','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('323','毛孔粗大的原因','283','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('324','提防这九个坏习惯','283','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('325','夏天去海边游玩如何防晒攻略','284','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('326','享受阳光晒不黑','284','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('327','神奇白醋美容护肤法','285','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('328','变白富美','285','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('329','【精油减肥最安全】想怎么吃就怎么吃让你感受奇迹','286','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('330','【苹果】亲你了解清楚了吗？一天一苹果远离疾病。','287','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('331','必知生活常识健康知识','288','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('332','5个【减肥】','288','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('334','【变身】白雪公主吧？','289','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('336','【木瓜】有“百益之果”、“水果之皇”、“万寿瓜”之雅称，是岭南四大名果之一。','290','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('338','[土豪]狂追46离异女怎样脱变？','291','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('339','【葡萄的作用】功效和营养价值','292','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('340','【枸杞茶】的禁忌。生活中，我们知道枸杞的食用方法有很多种，我们最常见的方法也是最简单的方法可能就是泡水喝了','293','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('344','热文','294','99630ff411650cfa','Img','0','0');");
E_D("replace into `imicms_keyword` values('345','【精油】直接作用','295','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('346','：植物精油分子直接杀灭病菌及微生物，','295','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('347','进入人体精油分子能增强人体的免疫力。','295','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('348','夏季】怎样补水保湿','296','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('349','让皮肤水当当方法？','296','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('350','【有着一颗减肥的心和一个能吃的胃】','297','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('351','【雁鹰欢迎您的加入】','298','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('352','皮肤过敏瘙痒红肿怎么办？','299','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('353','使用香水更能提升你的魅力值。','300','2a94af5381fcc932','Img','0','0');");
E_D("replace into `imicms_keyword` values('355','预约','4','1c5990460d702b81','Custom','0','0');");
E_D("replace into `imicms_keyword` values('362','微店','2','99630ff411650cfa','Micrstore','0','0');");
E_D("replace into `imicms_keyword` values('379','waphelp','1','99630ff411650cfa','waphelp','0','1');");
E_D("replace into `imicms_keyword` values('383','waphelp','1','kaiqpo1447853601','waphelp','0','1');");

require("../../inc/footer.php");
?>