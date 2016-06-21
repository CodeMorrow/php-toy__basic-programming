<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function addUpNumbers($arr) {
  $sum = 0;
  foreach($arr as $value)
  {
  	$sum += $value;
  } 
  return $sum;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting $arr total is 17\n";
if (addUpNumbers([5,10,2]) == 17) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting $arr total is 99\n";
if (addUpNumbers([33,53,13]) == 99) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";
echo "\n###################################################################\n";
echo "Tests complete.\n";
?>
