<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function filterNumbers($arr) {
  $filteredArr = array();
  foreach($arr as $value) {
  	if ($value < 10){
  		array_push($filteredArr, $value);
  	}
  }
  return $filteredArr;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting [30, 5, 9, 10, 11] fitlers to [5, 9].\n";
if (filterNumbers([30, 5, 9, 10, 11]) == [5, 9]) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting [33, 53, 13, 0] filters to [0]\n";
if (filterNumbers([33, 53, 13, 0]) == [0]) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";
echo "\n###################################################################\n";
echo "Tests complete.\n";
?>