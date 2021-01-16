<?php

require_once("hdr.php");

if(empty($_GET["type"])){
	header("Location: index?action=invalidsubmittype");
}

islog("addimg.php?type=".$_GET['type']."");

if (isset($_POST['submit'])) {

	if (empty($_POST["title"])) {
		return header("Location: addimg?action=fillallfields&type=".$_GET["type"]."");
	}
	if (empty($_POST["desc"])) {
		return header("Location: addimg?action=fillallfields&type=".$_GET["type"]."");
	}

	$file = $_FILES["file"];

	$name = $_FILES["file"]["name"];
	$ext = end((explode(".", $name))); # extra () to prevent notice

	if (in_array($ext, array('png', 'jpg', 'gif', 'jpeg'))) {

		$fileUploader = $_SESSION["username"];
		$fileuplpath = "../../uploads/";

		$temp = explode(".", $_FILES["file"]["name"]);
		$newfilename = round(microtime(true)) . '.' . end($temp);
		move_uploaded_file($_FILES["file"]["tmp_name"], "".$fileuplpath."/" . $newfilename);
		list($width, $height) = getimagesize("".$fileuplpath."/".$newfilename."");
			$file = $newfilename;
			function download($file){
			  header('Content-Description: File Transfer');
			  header('Content-Type: application/octet-stream');
			  header('Content-Disposition: attachment; filename='.basename($file));
			  header('Content-Transfer-Encoding: binary');
			  header('Expires: 0');
			  header('Cache-Control: must-revalidate');
			  header('Pragma: public');
			  header('Content-Length: '.filesize($file));

			  ob_clean();
			  flush();
			  readfile($file);
			}

				$file = $_FILES['file']['name'];

				$stmt = $db->prepare('INSERT INTO img (date,fileName,added,type,`desc`,label,title) VALUES (:date, :fileName, :added, :type, :desc, :label, :title)');
				$stmt->execute(array(
						':date' => time(),
						':fileName' => $newfilename,
						':added' => $_SESSION['memberID'],
						':type' => $_GET['type'],
						':desc' => $_POST['desc'],
						':label' => 'nullednot',
						':title' => $_POST['title']
				));

				echo '3';

				header("Location: index?action=fileuploaded&fileid=".$db->lastInsertId()."");
	} else {
		header("Location: addimg?type=".$_GET['type']."&action=unsupfiletype&filetype=".$ext."");
	}
}

$smarty->display("addimg.tpl");
?>
