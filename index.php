<?php
// Step 2 
for ($i=1; $i<=20; $i++) {
    $pattrn = "/3/";
    if (preg_match($pattrn, $i)){
        echo "lucky ";
    }elseif($i % 15 == 0) {
        echo "fizzbuzz ";
    } elseif ($i % 5 == 0) {
        echo "buzz ";
    } elseif ($i % 3 == 0) {
        echo "fizz ";
    } else {
        echo "$i ";
    }
}
?>