<?php
$first = $_POST['startPoint'];
$last = $_POST['endPoint'];
$nr_iteration = $_POST['iterations'];

try {
    if ($first < 0 || $last < 0 || $nr_iteration <= 0)
        throw new Exception("Introduceti numere pozitive");
    if (isset($last) && $last <= $first)
        throw new Exception("Last is small than first");
    if (isset($nr_iteration) && $nr_iteration > count(range($first, $last)))
        throw new Exception("The number of iteration is big than the chosen range");


}
catch (Exception $exception) {
    echo $exception->getMessage();
    exit;
}
