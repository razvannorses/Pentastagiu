<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Stagiu</title>
        <link rel="stylesheet" type="text/css" href="public/reset.css"/>
        <link rel="stylesheet" type="text/css" href="public/style.css"/>
    </head>
    <body>
        <div class="wrapper">
            <div class="line center bold">
                <h1>PHPentaStagiu 2018</h1>
                <h2>M01.03 <span class="fun"> The Fun One</span></h2>
                <h3>
                    <a href="https://docs.google.com/presentation/d/19YulX3DUaNkP9aT8-jX9g4mPdwY6-F-rt8BOv8xQ1VA/" target="_blank">M01.02</a>
                </h3>
            </div>
            <div class="line">
                <ol class="ml20">
                    <li>Generati un array de numere
                        <ul>
                            <li>cuprins intre <span class="bold">Numar de pornire</span> si <span class="bold">Numar de sfarsit</span> excluzand cele doua numere</li>
                            <li>numarul maxim de elemente este <span class="bold">Numar de elemente</span></li>
                        </ul>
                    </li>
                    <li>Afisati toate numerele multiplu de 3</li>
                    <li>Numar de numere multiplu de 4</li>
                    <li>Suma numerelor multiplu de 5</li>
                </ol>
            </div>
            <div class="line">
                <form method="POST" class="center">
                    <p class="label">Numar de pornire</p>
                    <input type="text" name="startPoint"/>

                    <p class="label">Numar de sfarsit</p>
                    <input type="text" name="endPoint"/>

                    <p class="label">Numar de elemente</p>
                    <input type="text" name="iterations"/>

                    <br/><br/>
                    <input type="submit"/>
                </form>
            </div>

            <div class="clear"></div>
        </div>
    </body>
</html>

<?php
if (!$_POST) {
    exit;
}

include 'display_divisible_numbers.php';
include 'number_of_numbers.php';
include 'sum_numbers.php';





$first=$_POST['startPoint'];
$last=$_POST['endPoint'];
$nr_iteration=$_POST['iterations'];

if($first<0 || $last<0 || $nr_iteration<=0){
    echo "Enter the positive values";
    exit;
}elseif (isset($last) && $last<=$first){
    echo "Last is small than first";
    exit;
}elseif (isset($nr_iteration) && $nr_iteration>count(range($first,$last))){
    echo "The number of iteration is big than the chosen range ";
    exit;
}
echo "<pre>";
print_r($_POST);
$data=range($first+1,$last-1);
var_dump($data);

$display_numbers=array_slice(range($first+1,$last-1),0,$nr_iteration);
var_dump($display_numbers);
echo "The list of numbers divisible by three:<br/>";

divideBy($display_numbers,3);

echo "The number of the numbers divisible by four:<br/>";

numberBy($display_numbers,555);
echo "<br/>";

echo "The sum of the numbers divisible by five.<br/>";

sumBy($display_numbers,5);
echo "Finish";
?>