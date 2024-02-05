<?php

  // Task 2: Variable Declaration and Data Types
  // Declare three variables: one for a string, one for an integer, and one for a boolean value.
  $fullname = 'Jb Galvo'; // String
  $age = 20; // Integer
  $isSingle = true ? 'Yes' : 'No'; // Boolean

  // Print the values of these variables using echo or print.
  echo "<b>Task 2: Variable Declaration and Data Types</b><br /><br />";
  echo "My name is {$fullname}, {$age} years old.<br />";
  print "Are you single? {$isSingle} <br /><br />";

  //Task 3: Conditionals
  echo "<b>Task 3: Conditionals</b><br /><br />";
  if($age > 10) {
    echo "Your age of {$age} is greater than 10.";
  } else if($age == 10) {
    echo "Your age of {$age} is equal to 10.";
  } else {
    echo "Your age of {$age} is lower than 10.";
  }
  echo "<br /><br />";

  //Task 4: Loops
  echo "<b>Task 4: Loops</b><br /><br />";
  echo "<b>For loop</b> <br />";
  for($counter = 1; $counter<6; $counter++) {
    echo "{$counter} <br />";
  }
  echo "<br /><b>While loop</b><br />";
  $num = 5;
  while($num >= 1){
    echo "{$num} <br />";
    $num--;
  }

  //Task 5: Arrays
  echo "<br /><b>Task 5: Arrays</b><br /><br />";
  echo "<b>Indexed Array</b> <br />";
  $fruits = array('Apple', 'Mango', 'Watermelon');
  var_dump($fruits);

  echo "<br /><br /><b>Associative  Array</b> <br />";
  $person = array(
    "name" => "Jb Galvo",
    "age" => 24,
    "city" => "Naga City"
  );
  var_dump($person);

  //Task 6: Functions
  echo "<br /><br /><b>Task 6: Functions</b><br /><br />";

  function sum($num1, $num2) {
    return $num1 + $num2;
  }

  echo sum(5, 5) . "<br />" . sum(10, 15) . "<br />" . sum(25, 15);
  

?>