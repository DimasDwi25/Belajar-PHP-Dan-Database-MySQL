<?php 
$gaji = 100000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);

echo "Operator 1 <br><br>";
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp <br><br>";

echo "Operator 2 <br><br>";
$a = 5;
$b = 4;

echo "$a == $b : ". ($a == $b);
echo "<br> $a != $b : ". ($a != $b);
echo "<br> $a > $b : ". ($a > $b);
echo "<br> $a < $b : ". ($a < $b);
echo "<br> ($a == $b) && ($a > $b) : ". ($a != $b) && ($a > $b);
echo "<br> ($a == $b) || ($a > $b) : ". ($a != $b) || ($a > $b);

?>