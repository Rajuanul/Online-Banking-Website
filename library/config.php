<?php
ini_set('display_errors', 'off');

// start the session
session_start();

// database connection config
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'db_hlbank';

//Project data
$site_title = 'Online Banking';
$email_id = 'customerservice@hlbonline.pro';

// setting up the web root and server root
$thisFile = str_replace('\\', '/', __FILE__);
$docRoot = $_SERVER['DOCUMENT_ROOT'];

$webRoot  = str_replace(array($docRoot, 'library/config.php'), '', $thisFile);
$srvRoot  = str_replace('library/config.php', '', $thisFile);

define('WEB_ROOT', $webRoot);
define('SRV_ROOT', $srvRoot);

// these are the directories where we will store all category and product images
define('USER_IMAGE_DIR', 'images/thumbnails/');

// all category image width must not 
// exceed 75 pixels
define('MAX_USER_IMAGE_WIDTH', 180);

define('LIMIT_USER_WIDTH',     true);

// the width for product thumbnail
define('THUMBNAIL_WIDTH',      180);

if (!get_magic_quotes_gpc()) {
	if (isset($_POST)) {
		foreach ($_POST as $key => $value) {
			$_POST[$key] =  trim(addslashes($value));
		}
	}
	
	if (isset($_GET)) {
		foreach ($_GET as $key => $value) {
			$_GET[$key] = trim(addslashes($value));
		}
	}
}

require_once 'database.php';
require_once 'common.php';

?>