<?php
function numberBy($array, $divideBy) {
    $count=0;
    foreach ($array as $value) {
        if ($value % $divideBy == 0) {
           $count++;
        }
    }echo $count;
}

?>