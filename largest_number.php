<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;

//To find largest number from three numbers.
if($num1 > $num2 && $num1 > $num3){
  echo "<h2The num1 is the largest Numbe: $num1</h2>";
}
elseif ($num2 > $num1 && $num2 > $num3){
  echo "<h2>The num2 is the largest Numbe: $num2</h2>";
}
elseif ($num3 > $num1 && $num3 > $num2){
  echo "<h2>The num3 is the largest Numbe: $num3</h2>";
}
else {
  echo "All Number are equal";
}



?>