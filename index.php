<?php 
$name = null;

// array
  array(1,2,3,4); // array[1,2,3,4]

  // three types : indexed associative and multidimentional

  $alphabets = array("A","b","C");
  echo "AMan <br>";
  echo "<pre>";
  print_r($alphabets);

  // associative array;
  $forAssociative = array("age"=>12,"location"=>"japan");
  print_r($forAssociative);

  echo $forAssociative["location"];
  // multidimentional
 $multiD = array(array(1,2,3),array(4,5,6),array(7,8,9));
 echo "<br>";
 print_r($multiD);
  echo "</pre>";

  // for loop;
  for ($i=0; $i < 3; $i++) {
    echo "asds <br>";
  }

  foreach ($alphabets as $ele) {
    # code...
    echo"<br>" . $ele;
  }

