<?php

	require_once("../includes/config.php");

	$id = htmlspecialchars($_GET["id"]);

	if(!empty($_GET["action"])){
 		switch($_GET["action"]) {
			case "likent":
				if(!$user->is_logged_in() ){
					header('Location: login');
				} else {
					$stmtr = $db->prepare('SELECT imgID, type FROM likent WHERE likeAID=:likeAID AND imgID=:imgID');
					$stmtr->execute(array(':likeAID' => $_SESSION['memberID'], ':imgID' => $id));
					$rowr = $stmtr->fetch(PDO::FETCH_ASSOC);
					
					if(empty($_GET["type"])){
						header("Location: index?action=invalidreview");
					} else {
						if($_GET["type"] == "like"){
							$pm = "+";
							$type = 1;
						} else if ($_GET["type"] == "unlike"){
							$pm = "-";
							$type = 0;
						} else {
							header("Location: index?action=invalidreview");
						}
					}
					
					if(empty($rowr['imgID'])){
								$stmtl = $db->prepare('INSERT INTO likent (imgID,likeAID,date,type) VALUES (:imgID, :likeAID, :date, :type)');
								$stmtl->execute(array(
									':imgID' => $id,
									':likeAID' => $_SESSION['memberID'],
									':date' => time(),
									':type' => $type
								));
								
								$stmt222 = $db->prepare('UPDATE img SET review = review '.$pm.' 1 WHERE id=:id');
								$stmt222->execute(array(
										':id' => $id
								));

								header("Location: index?action=imgreviewed");
					} else {
						if($rowr["type"] == $type){
							$stmtd = $db->prepare("DELETE FROM likent WHERE imgID=:imgID AND likeAID=:likeAID");
							$stmtd->execute(array(
								':imgID' => $id,
								':likeAID' => $_SESSION['memberID']
							));
							
							if($rowr["type"] == 0){
								$pm3 = "+";
							} else if ($rowr["type"] == 1){
								$pm3 = "-";
							}
							
							$stmt444 = $db->prepare('UPDATE img SET review = review '.$pm3.' 1 WHERE id=:id');
								$stmt444->execute(array(
										':id' => $id
								));
							
							header ("Location: index?action=imgunreviewed");
						} else {
							$stmtd = $db->prepare("DELETE FROM likent WHERE imgID=:imgID AND likeAID=:likeAID");
							$stmtd->execute(array(
								':imgID' => $id,
								':likeAID' => $_SESSION['memberID']
							));
							
							if($rowr["type"] == 0){
								$pm3 = "+";
							} else if ($rowr["type"] == 1){
								$pm3 = "-";
							}
							
							$stmt333 = $db->prepare('UPDATE img SET review = review '.$pm3.' 1 WHERE id=:id');
								$stmt333->execute(array(
										':id' => $id
								));
							
							$stmt444 = $db->prepare('UPDATE img SET review = review '.$pm.' 1 WHERE id=:id');
								$stmt444->execute(array(
										':id' => $id
								));
								
							$stmtl = $db->prepare('INSERT INTO likent (imgID,likeAID,date,type) VALUES (:imgID, :likeAID, :date, :type)');
								$stmtl->execute(array(
									':imgID' => $id,
									':likeAID' => $_SESSION['memberID'],
									':date' => time(),
									':type' => $type
								));

							header("Location: index?action=imgreviewed");
						}
					}
				}
				break;
		}
	}
 
?>