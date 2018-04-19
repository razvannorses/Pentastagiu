<?php
function sumBy($array, $divideBy) {
    $sum=0;
    foreach ($array as $valuesss) {
        if ($valuesss % $divideBy == 0) {
            $sum+=$valuesss;
        }
    }echo $sum;
}

?>