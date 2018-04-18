<?php
function sumBy($array, $divideBy) {
    $sum=0;
    foreach ($array as $value) {
        if ($value % $divideBy == 0) {
            $sum+=$value;
        }
    }echo $sum;
}

?>