<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function uppercasesAllLetters($str) {
  $str = strtoupper($str);
  return $str;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting that dog changes to DOG.\n";
if (uppercasesAllLetters("dog") == "DOG") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that cAt changes to CAT.\n";
if (uppercasesAllLetters("cAt") == "CAT") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";
echo "\n###################################################################\n";
echo "Tests complete.\n";
?>
