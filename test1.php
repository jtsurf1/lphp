<?php // test1.php
$username = "Fred Smith";
echo $username;
echo "<br />";
$current_user = $username;
echo $current_user;
echo "<br />";
echo 7 % 2;
$j = 15;
$j .= 8;
$k = 168;
echo "<br />";
echo $j + $k;
echo "<br />";
if ($j != $k || $j > $k) echo "they are not equal or j is greater than k";
echo "<br />";
echo $k;
++$k;
echo "<br />";
echo $k;
$y = 0;
echo "<br />";
if ($y-- == 0) echo $y;
?>