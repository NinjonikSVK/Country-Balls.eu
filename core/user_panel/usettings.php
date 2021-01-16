<?php

	require_once("hdr.php");

  $stmt2 = $db->prepare('SELECT * FROM members WHERE memberID=:memberID');
  $stmt2->execute(array(':memberID' => $_SESSION['memberID']));
  $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

  if (!$stmt2->execute())
	{
		print_r($stmt2->errorInfo());
	}

  while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC))
	{
		$row2smarty[] = $row2;
	}
  $smarty->assign("row2s", $row2smarty);

if(isset($_POST['submit'])){

	$username = htmlspecialchars($_POST['username']);
	$description = htmlspecialchars($_POST['descr']);
	$location = htmlspecialchars($_POST['location']);
	$skills = htmlspecialchars($_POST['skills']);
	$fname = htmlspecialchars($_POST["firstName"]);
  $lname = htmlspecialchars($_POST["lastName"]);
  $pn = htmlspecialchars($_POST["phone"]);

	if(preg_match('/^\w{3,}$/', $username)) { // \w equals "[0-9A-Za-z_]"
		$error[] = $l["numeric3"];
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $username));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['username'])){
			$error[] = "This username is already used by someone else.";
		}

	}

  $email = htmlspecialchars_decode($_POST['email'], ENT_QUOTES);
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $error[] = "This email is not valid. Please try again with correct email.";
  } else {
    $stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
    $stmt->execute(array(':email' => $email));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!empty($row['email'])){
      $error[] = "This email is already used by someone else.";
    }

  }


	if(!isset($error)){
		header("Location: usettings?action=notedited");
	} else {

		//insert into database with a prepared statement
			$stmt = $db->prepare('UPDATE members SET username=:username, descr=:descr, location=:location, skills=:skills, email=:email, first_name=:fname, last_name=:lname, phone_number=:pn WHERE username="'.$_SESSION['username'].'"');
			$stmt->execute(array(
				':username' => $username,
				':descr' => $description,
				':location' => $location,
				':skills' => $skills,
				':email' => $email,
        ':fname' => $fname,
				':lname' => $lname,
				':pn' => $pn
			));

		header("Location: logout?route=login.php?action=succesfullyeditedprofile");
	}

}

$smarty->display("settings.tpl");

?>
