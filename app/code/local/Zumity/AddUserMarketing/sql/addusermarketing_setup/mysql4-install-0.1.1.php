<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
drop table zumity_user_marketing;
create table zumity_user_marketing(id int not null auto_increment, first_name varchar(100), last_name varchar(100), email varchar(255), store varchar(100), primary key(id));
		
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 