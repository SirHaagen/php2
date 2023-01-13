<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP PROJECT - NUMBERS</title>
</head>

<body>

  <?php

  echo (5 + 9)*5;
  echo "<br>". 4.3435 - 2.466;
  echo "<br>". -5650.565;

  $num1= 10;
  $num1++;
  echo "<br>". $num1;
  $num1--;
  echo "<br>". $num1;
  $num1+=5;
  echo "<br>". $num1;

  $num2= -23.3;
  echo "<br>". abs($num2);

  echo "<br>". pow(2,4); //2 raised to the fourth power (2^4)
  echo "<br>". sqrt(4); //square root
  echo "<br>". max(10,1,6.7,5,8.4);
  echo "<br>". min(10,1,6.7,5,8.4);
  echo "<br>". round(3.49); //3
  echo "<br>". round(3.5);  //4
  echo "<br>". ceil(3.2); //no matter the decimal value, always rounds UP
  echo "<br>". floor(3.2); //no matter the decimal value, always rounds DOWN

  ?>

</body>

</html>