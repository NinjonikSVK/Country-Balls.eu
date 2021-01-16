<?php

  require_once("hdr.php");

  $stmt2 = $db->prepare("SELECT * FROM groups ORDER BY id");
	$stmt2->execute(array());
	$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

	if (!$stmt2->execute())
	{
		print_r($stmt2->errorInfo());
	}

	while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC))
	{
		$groups[] = $row2;
	}
	$smarty->assign("groups", $groups);

  $smarty->display("groups.tpl");

?>
