<?php

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');

$content_dir = ROOT_DIR .'content/';
if (@file_exists(dirname(__FILE__)."/../../wiki/config2.php"))
	include(dirname(__FILE__)."/../../wiki/config2.php");

define('CONTENT_DIR', $content_dir);
define('CONTENT_EXT', '.md');
define('LIB_DIR', ROOT_DIR .'lib/');
define('PLUGINS_DIR', ROOT_DIR .'plugins/');
define('THEMES_DIR', ROOT_DIR .'themes/');
define('CACHE_DIR', LIB_DIR .'cache/');

require(ROOT_DIR .'vendor/autoload.php');
require(LIB_DIR .'pico.php');
$pico = new Pico();
