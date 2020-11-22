<?php

require_once("../includes/config.php");

isntlog();

if(isset($error)){
	foreach($error as $error){
		echo '<p class="bg-danger">'.$error.'</p>';
	}
}

if(isset($_GET['action'])){

	//check the action

	switch ($_GET['action']) {
		case 'active':
			$echo = 'Your accounts is now active, you may log in.';
      $smarty->assign('loginerrorecho', $echo);
      break;
		case 'reset':
			$echo = "Please check your inbox for a reset link.";
      $smarty->assign('loginerrorecho', $echo);
			break;
		case 'resetAccount':
			$echo = "Password changed, you may now login.";
      $smarty->assign('loginerrorecho', $echo);
			break;
	}

}

//process login form if submitted
if(isset($_POST['submit'])){

  $echo = '';
  $smarty->assign('loginerrorecho', $echo);

	if (!isset($_POST['username']))
      $echo = '
		  <div class="alert alert-warning" role="alert">
			<span class="alert-text">Please fill out all fields!</span>
		  </div>';
      $smarty->assign('loginerrorecho', $echo);
	if (!isset($_POST['password'])) $echo = '
		  <div class="alert alert-warning" role="alert">
			<span class="alert-text">Please fill out all fields!</span>
		  </div>';
      $smarty->assign('loginerrorecho', $echo);
	$username = $_POST['username'];
	if ( $user->isValidUsername($username)){
		if (!isset($_POST['password'])){
			$echo = '
		  <div class="alert alert-warning" role="alert">
		  <span class="alert-text">A password must be entered!</span>
		  </div>';
      $smarty->assign('loginerrorecho', $echo);
		}
		$password = $_POST['password'];

		if($user->login($username,$password)){
			$_SESSION['username'] = $username;
			$echo = '
			  <div class="alert alert-success" role="alert">
				<span class="alert-text">Successfully loged in. Redirecting...</span>
			  </div>';
      $smarty->assign('loginerrorecho', $echo);
			if(!empty($_GET["route"])){
				header("Location: ".$_GET['route']."");
			} else {
				header("Location: index?action=loggedin");
			}
			exit;

		} else {
			$echo = '
		  <div class="alert alert-danger" role="alert">
				<span class="alert-text">Wrong username or password or your account has not been activated.</span>
		  </div>';
      $smarty->assign('loginerrorecho', $echo);
		}
	}else{
		$echo = '
		  <div class="alert alert-warning" role="alert">
			<span class="alert-text">Usernames are required to be Alphanumeric, and between 3-16 characters long.</span>
		  </div>';
    $smarty->assign('loginerrorecho', $echo);
	}

}

$smarty->display("login.tpl");

?>
