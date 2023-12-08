<?php
$number = 10;

for ($i = $number; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
    
    if ($i % 2 == 0) {
        $number -= 2;
    } else {
        $number -= 1;
    }
}
?>