<!DOCTYPE html, php>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test site</title>
</head>

<body>
  <?php
  echo "<font color = #005050><h3>Switch Statement</h3></font>";
  $d = date("D");

  switch ($d) {
    case 'Mon':
      echo "today is ". $d;
      break;
    case 'Tue':
      echo "today is ". $d;
      break;
    case 'Wed':
      echo "today is ". $d;
      break;
    case 'Thu':
      echo "today is ". $d;
      break;
    case 'Fri':
      echo "today is ". $d;
      break;
    case 'Sat':
      echo "today is ". $d;
      break;
    case 'Sun':
      echo "today is ". $d;
      break;
  }
  ?>
</body>
</html>



