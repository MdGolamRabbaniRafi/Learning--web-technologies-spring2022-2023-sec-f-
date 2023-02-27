<?php
$a = 10; 
$b = 20; 
$c = 15; 
if ($a >= $b && $a >= $c) {
  echo $a . " is the largest number";
} elseif ($b >= $a && $b >= $c) {
  echo $b . " is the largest number";
} else {
  echo $c . " is the largest number";
}
?>
