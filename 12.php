<?php
$num = array(array());

for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 2;$j++) {
        $num[$i][$j] = rand(0, 200);
    }
}

echo ("Before: " . "<br>");
for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 2;$j++) {
        echo $num[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>";
echo ("After: " . "<br>");
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 6;$j++) {
        echo $num[$j][$i] . " ";
    }
    echo "<br>";
}
