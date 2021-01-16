<?php

	require_once("hdr.php");

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

	$stmt2 = $db->prepare("SELECT * FROM img ORDER BY review DESC, date DESC LIMIT 9");
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

foreach($imgtop as $imgtop2){
	$stmt3 = $db->prepare("SELECT username FROM members WHERE memberID=:memberID");
	$stmt3->execute(array(":memberID" => $imgtop2["added"]));
	$row3 = $stmt3->fetch(PDO::FETCH_ASSOC);
	if (!$stmt3->execute())
	{
		print_r($stmt3->errorInfo());
	}

	$arrayfinal[] = $imgtop2 + $row3;

}

$smarty->assign("imgtop", $arrayfinal);
$smarty->display("index.tpl");

?>
