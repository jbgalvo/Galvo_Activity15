<?php

  // Task 2: Variable Declaration and Data Types
  // Declare three variables: one for a string, one for an integer, and one for a boolean value.
  $fullname = 'Jb Galvo'; // String
  $age = 20; // Integer
  $isSingle = true ? 'Yes' : 'No'; // Boolean

  // Print the values of these variables using echo or print.
  echo "<b>Task 2: Variable Declaration and Data Types</b>";
  echo "<br /><br />";
  echo "My name is {$fullname}, {$age} years old.";
  echo "<br />";
  print "Are you single? {$isSingle}";
  echo "<br /><br />";

  //Task 3: Conditionals
  echo "<b>Task 3: Conditionals</b>";
  echo "<br /><br />";
  if($age > 10) {
    echo "Your age of {$age} is greater than 10.";
  } else if($age == 10) {
    echo "Your age of {$age} is equal to 10.";
  } else {
    echo "Your age of {$age} is lower than 10.";
  }
  echo "<br /><br />";

?>