<?php require_once("../includes/config.php");

//logout
$user->logout();

//logged in return to index page
header('Location: index');
exit;
?>
