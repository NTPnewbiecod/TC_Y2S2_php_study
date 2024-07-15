<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $list_of_num = array(21, 33, 64, 72, 96, 19);
  function check_is_num_even($num){
    if ($num % 2 == 1) {
      echo "$num is odd.". "<br>";
    }
    else {
      echo "$num is even.". "<br>";
    }
      
    }
  foreach ($list_of_num as $value) {
    check_is_num_even($value);
  }
  ?>
</body>
</html>