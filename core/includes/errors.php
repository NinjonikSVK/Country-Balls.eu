<?php
 
	if(!empty($_GET["action"])){
 		switch($_GET["action"]) {
			case "invalidsubmittype":
				$erroraction = 
				'
				
					<div class="alert alert-danger alert-with-icon">
						<button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
						  <i class="tim-icons icon-simple-remove"></i>
						</button>
						<span data-notify="icon" class="tim-icons icon-support-17"></span>
						<span>
						  <b> Chyba! - </b> Nezadali ste, čo chcete pridať!</span>
					</div>
				
				';
				break;
			case "fillallfields":
				$erroraction = 
				'
				
					<div class="alert alert-danger alert-with-icon">
						<button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
						  <i class="tim-icons icon-simple-remove"></i>
						</button>
						<span data-notify="icon" class="tim-icons icon-support-17"></span>
						<span>
						  <b> Ajajaj! - </b> Zabudli ste vyplniť všetky políčka!</span>
					</div>
				
				';
				break;
			case "unsupfiletype":
				$erroraction = 
				'
				
					<div class="alert alert-danger alert-with-icon">
						<button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
						  <i class="tim-icons icon-simple-remove"></i>
						</button>
						<span data-notify="icon" class="tim-icons icon-support-17"></span>
						<span>
						  <b> Ajajaj! - </b> Nahrali ste nepodporovaný typ súboru! Aktuálny typ súboru: .'.$_GET["filetype"].'</span>
					</div>
				
				';
				break;	
		}
	$smarty->assign("erroraction", $erroraction);
	}
 
?>