<?php
return array(
	'BE' => array(
		'explicitADmode' => 'explicitAllow',
		'installToolPassword' => '$P$Cdx9BwYnAY2p/4xrfniSukyp3/7ZrH/',
		'loginSecurityLevel' => 'rsa',
	),
	'DB' => array(
		'database' => 'typo3cms_live',
		'extTablesDefinitionScript' => 'extTables.php',
		'host' => 'localhost',
		'password' => 'dev',
		'socket' => '',
		'username' => 'dev',
	),
	'EXT' => array(
		'extConf' => array(
			'coreapi' => 'a:0:{}',
			'realurl' => 'a:5:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}',
			'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
			'saltedpasswords' => 'a:2:{s:3:"BE.";a:4:{s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}s:3:"FE.";a:5:{s:7:"enabled";i:1;s:21:"saltedPWHashingMethod";s:41:"TYPO3\\CMS\\Saltedpasswords\\Salt\\PhpassSalt";s:11:"forceSalted";i:0;s:15:"onlyAuthService";i:0;s:12:"updatePasswd";i:1;}}',
		),
	),
	'FE' => array(
		'activateContentAdapter' => FALSE,
		'loginSecurityLevel' => 'rsa',
	),
	'GFX' => array(
		'jpg_quality' => '80',
	),
	'SYS' => array(
		'compat_version' => '6.2',
		'encryptionKey' => '0b06b895d6d088bcb10067f37c0c4d1d4576b8c384afcca11e5c4410e37a98b2dc6d8e4a2fb84c79f02717171377e05a',
		'sitename' => 'typo3cms',
	),
);
?>