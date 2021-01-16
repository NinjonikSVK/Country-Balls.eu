<?php

// GRAVATAR

function getAvatar($emailav, $sizeav) {
  if(empty($sizeav)){
    $sizeav = 100;
  }
  $defaultav = "".DIR."/uploads/default.png";
  $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $emailav ) ) ) . "?d=" . urlencode( $defaultav ) . "&s=" . $sizeav;
  return $grav_url;
}

?>
