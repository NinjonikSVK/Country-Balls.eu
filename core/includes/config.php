<?php
ob_start();
session_start();

error_reporting(E_ERROR || E_WARNING);

//set timezone
date_default_timezone_set('Europe/London');

require_once("version.php");
require_once("settings.php");

try {

	//create PDO connection
	$db = new PDO("mysql:host=".DBHOST.";charset=utf8mb4;dbname=".DBNAME, DBUSER, DBPASS);
    //$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);//Suggested to uncomment on production websites
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//Suggested to comment on production websites
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch(PDOException $e) {
	//show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}

//include the user class, pass in the database connection
require_once('classes/user.php');
require_once('classes/phpmailer/mail.php');
$user = new User($db);

//define include checker
define('included', 1);

require_once('functions.php');

// Smarty template engine
require_once("../libs/smarty/libs/Smarty.class.php");

$smarty = new Smarty();
$smarty->template_dir = '../../custom/templates/default/';
$smarty->compile_dir = '../cache/';

$sitetitle = "Country-Balls.eu";
$smarty->assign("sitetitle", $sitetitle);
$smarty->assign("username", $_SESSION['username']);

// NAVBAR

if(!$user->is_logged_in()){
	$navbarprofile = '

		 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
		 <a class="dropdown-item" href="login.php">
			Prihlásiť sa
		  </a>
		  <a class="dropdown-item" href="register.php">
			Zaregistrovať sa
		  </a>
		  <a class="dropdown-item" href="reset.php">
			Reset hesla
		  </a>
		</div>

	';
} else {
	$navbarprofile = '

		 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
		 <a class="dropdown-item" href="profile.php">
			Profil
		  </a>
		  <a class="dropdown-item" href="editprofile.php">
			Upraviť profil
		  </a>
		  <a class="dropdown-item" href="logout.php">
			Odhlásiť sa
		  </a>
		</div>

	';
}

$smarty->assign("navbarprofile", $navbarprofile);

// LANGUAGE

if(isset($_GET['lang']))
{
	$lang = $_GET['lang'];
	$_SESSION['lang'] = $lang;
	setcookie("lang", $lang, time() + (3600 * 24 * 30));
}
else if(isset($_SESSION['lang']))
{
	$lang = $_SESSION['lang'];
}
else if(isset($_COOKIE['lang']))
{
	$lang = $_COOKIE['lang'];
}
else
{
	$lang = 'sk';
}

switch ($lang) {
  case 'en':
  $lang_file = 'en.php';
  break;

  case 'sk':
  $lang_file = 'sk.php';
  break;

  default:
  $lang_file = 'sk.php';

}

include_once 'languages/'.$lang_file;

// Errory
		
require_once("errors.php");
?>
