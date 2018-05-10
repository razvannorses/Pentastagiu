<?php

class Number
{
    public function __construct()
    {
        echo "List of numbers <br/>";
    }

    public function divideBy($array, $divide)
    {

        foreach ($array as $value) {
            if ($value % $divide == 0) {
                echo $value . "<br/>";
            }
        }
    }

    public function numberBy($array, $divide)
    {
        $count = 0;
        foreach ($array as $value) {
            if ($value % $divide == 0) {
                $count++;
            }
        }
        echo $count;
    }

    public function sumBy($array, $divideBy)
    {
        $sum = 0;
        foreach ($array as $value) {
            if ($value % $divideBy == 0) {
                $sum += $value;
            }
        }
        echo $sum;
    }
}

?>