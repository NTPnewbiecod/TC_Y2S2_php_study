<!DOCTYPE html, php>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test site</title>
</head>

<body>
  <?php
    datefmt_set_timezone_id("Asia/Bangkok");
    $t = date("h");
    echo "<font size =5 color= #00ff00> .... if Statement  ... </font><br>";
    if ($t < "5") {
      echo "The time is " . date('l jS \of F Y h:i:s A') . "<br>";
      echo "Have a good day";
    }
  ?>
</body>
</html>



