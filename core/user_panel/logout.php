<?php require_once("hdr.php");

//logout
$user->logout();

if(!empty($_GET["route"])){
  header('Location: '.htmlspecialchars($_GET["route"]).'');
} else {
  header('Location: index?action=loggedout');
}

exit;
?>
