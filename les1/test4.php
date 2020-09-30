<?php
$a = 1;
$b = 2;

echo ("a = $a");
echo ("b = $b");

[$a, $b] = [$b, $a];

echo ("a = $a");
echo ("b = $b");
?>