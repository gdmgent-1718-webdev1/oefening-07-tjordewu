<?php

$i= 3;
$x = 0;
$y = 1;
echo $x . ", " . $y . ", ";
for ($i = 3; $i <=100; $i++){
    $z = $x + $y;
    $x = $y;
    $y = $z;
    echo $z . ", ";
}

?>