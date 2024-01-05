<!-- // guess game
// generate random number
// ask user for number
// if user guesses accurate , winner
// else  if guessed num is bigg , too high
// else if guessed num is less , too small
//> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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
  <form action="" method="POST">
    <input type="number" name="number">
    <input type="submit" value="check">
  </form>

</body>
</html>