<?php
function divideBy($array, $divideBy) {
    foreach ($array as $value) {
        if ($value % $divideBy == 0) {
            echo $value . "<br/>";
        }
    }
}

?>