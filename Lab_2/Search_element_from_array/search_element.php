<?php
$myArray = array(10, 20, 30, 40, 50); 
$search = 30; 
$found = 0; 
// loop through the array to search for the element
for ($i = 0; $i < count($myArray); $i++) {
  if ($myArray[$i] == $search) {
    $found =1; 
    break; 
  }
}

if ($found==1) {
  echo $search . " is found in the array";
} else {
  echo $search . " is not found in the array";
}
?>
