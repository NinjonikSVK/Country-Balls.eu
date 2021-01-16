<?php

  require_once("hdr.php");

  $stmt2 = $db->prepare("SELECT * FROM groups WHERE id=:id");
	$stmt2->execute(array(":id" => $_GET["id"]));
	$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

	if (!$stmt2->execute())
	{
		print_r($stmt2->errorInfo());
	}

	while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC))
	{

    if($row2["canseedashboard"] == 1){
      $smarty->assign("canseedashboard", "checked");
    } else {
      $smarty->assign("canseedashboard", "");
    }
    if($row2["caneditpermissions"] == 1){
      $smarty->assign("caneditpermissions", "checked");
    } else {
      $smarty->assign("caneditpermissions", "");
    }
    if($row2["cancreateadminposts"] == 1){
      $smarty->assign("cancreateadminposts", "checked");
    } else {
      $smarty->assign("cancreateadminposts", "");
    }
    if($row2["canapproveposts"] == 1){
      $smarty->assign("canapproveposts", "checked");
    } else {
      $smarty->assign("canapproveposts", "");
    }
    if($row2["canmoderateposts"] == 1){
      $smarty->assign("canmoderateposts", "checked");
    } else {
      $smarty->assign("canmoderateposts", "");
    }

		$groups[] = $row2;
	}
	$smarty->assign("groups", $groups);

  echo $row2["canseedashboard"];

  $smarty->display("editgroup.tpl");

  if(empty($_GET["id"])){
    header("Location: index?action=invalidid");
  }

  if(isset($_POST["submit"])){

    if(isset($_POST['1'])){
      $a1 = 1;
    } else {
      $a1 = 0;
    }
    if(isset($_POST['2'])){
      $a2 = 1;
    } else {
      $a2 = 0;
    }
    if(isset($_POST['3'])){
      $a3 = 1;
    } else {
      $a3 = 0;
    }
    if(isset($_POST['4'])){
      $a4 = 1;
    } else {
      $a4 = 0;
    }
    if(isset($_POST['5'])){
      $a5 = 1;
    } else {
      $a5 = 0;
    }

    $title = $_POST["firstname"];
    $colour = $_POST["colour"];

      updateDB("groups", "title='".$title."', colour='".$colour."', canseedashboard='".$a1."', caneditpermissions='".$a2."', cancreateadminposts='".$a3."', canapproveposts='".$a4."', canmoderateposts='".$a5."'", "id=".htmlspecialchars($_GET['id'])."");

      header("Location: index.php?action=groupsuccesfullyedited");

  }

?>
