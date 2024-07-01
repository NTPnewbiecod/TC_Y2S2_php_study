<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
    date_default_timezone_set("Asia/Bangkok");
    $t = intval(date("h"));
    $t = 19;
    echo "<font size =5 color= #009090> ... if...else Statement  ... </font><br>";
    if ($t < 18) {
      echo "The time is " . date('l jS \of F Y h:i:s A') . "<br>";
      echo "Have a good day";
    }
    else {
      echo "The time is ". date('l jS \of F Y h:i:s A'). "<br>";
      echo "Have a good night";
    }
  ?>
</body>
</html>