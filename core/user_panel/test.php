<?php

$array10 = array("title1" => "title1", "title2" => "title2");
$array1[] = $array10;
$array20 = array("titlek1" => "titlek1", "titlek2" => "titlek2");
$array2[] = $array20;

$array3[] = $array10 + $array20;

foreach ($array3 as $array4) {
  echo $array4["titlek1"];
  echo "<br></br>";
  echo "that was title 3";
  echo "<br><br></br></br>";
  echo $array4["titlek2"];
  echo "<br></br>";
  echo "that was title 4";
  echo "<br></br>";
  echo $array4["title1"];
  echo "<br></br>";
  echo "that was title 1";
  echo "<br><br></br></br>";
  echo $array4["title2"];
  echo "that was title 2";
}

?>
