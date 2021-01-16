<?php 

  if(isset($_POST["submit"])){
	  
	  if(isset($_POST['1'])){
		$a1 = 1;
	  } else {
		$a1 = 0;
	  }
	  
	  echo $_POST["text"];
  }

  echo $a1;

?>

<form method="post">
<input type="text" name="text">
<div class="form-check">
  <label class="form-check-label">
	  <input class="form-check-input" type="checkbox" value="1" name="1">
	  Môže zobraziť admin panel
	  <span class="form-check-sign">
		  <span class="check"></span>
	  </span>
  </label>
</div>
<input type="submit" name="submit">
</form>