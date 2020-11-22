<?php

	require_once("../includes/config.php");

	/*$stmt = $db->prepare("SELECT * FROM img ORDER BY date DESC LIMIT 5");
	$stmt->execute(array());
	$row = $stmt->fetch(PDO::FETCH_ASSOC);

	if (!$stmt->execute())
	{
		print_r($stmt->errorInfo());
	}

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		
	}*/

	$stmt2 = $db->prepare("SELECT * FROM img ORDER BY review DESC LIMIT 9");
	$stmt2->execute(array());
	$row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

	if (!$stmt2->execute())
	{
		print_r($stmt2->errorInfo());
	}

	while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC))
	{
		$imgtop[] = $row2;
	}
	$smarty->assign("imgtop", $imgtop);

	$smarty->assign("nazov", $sitetitle);
	$smarty->display("index.tpl");

?>
