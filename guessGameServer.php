
<?php

  session_start();
if (! isset($_SESSION['target_number'])) {
  $_SESSION['target_number'] = rand(1,100);

}
$target_number = $_SESSION['target_number'];
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['number'] == $target_number) {
      echo " correct!!";
    }
    elseif($_POST['number'] < $target_number){
      echo " guess high!!";
  
    }
    else{
      echo "guess low";
    }
  }
  
  
  ?>
