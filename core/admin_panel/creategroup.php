<?php

  require_once("hdr.php");

  $smarty->display("creategroup.tpl");

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

      $stmt = $db->prepare('INSERT INTO groups (title,colour,canseedashboard,caneditpermissions,cancreateadminposts,canapproveposts,canmoderateposts) VALUES (:title, :colour, :canseedashboard, :caneditpermissions, :cancreateadminposts, :canapproveposts, :canmoderateposts)');
      $stmt->execute(array(
          ':title' => $_POST["firstname"],
          ':colour' => $_POST["colour"],
          ':canseedashboard' => $a1,
          ':caneditpermissions' => $a2,
          ':cancreateadminposts' => $a3,
          ':canapproveposts' => $a4,
          ':canmoderateposts' => $a5
      ));

      header("Location: index.php?action=groupsuccesfullycreated");

  }

?>
