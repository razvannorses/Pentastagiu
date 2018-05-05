<?php
$first=$_POST['startPoint'];
$last=$_POST['endPoint'];
$nr_iteration=$_POST['iterations'];
class Validate extends Exception{
    public function error(){
        return "Enter the positive values";
    }
    public function error1(){
        return "Last is small than first";
    }
    public function error2(){
        return "The number of iteration is big than the chosen range";
    }
}
try{
    if($first<0 || $last<0 || $nr_iteration<=0){
        throw new Validate();
    }
}
catch(Validate $exception){
    echo $exception->error();
    exit;
}
try{
    if (isset($last) && $last<=$first){
        throw new Validate();
    }
}
catch (Validate $exception){
    echo $exception->error1();
    exit;
}
try{
    if (isset($nr_iteration) && $nr_iteration>count(range($first,$last))){
        throw new Validate();

    }
}
catch (Validate $exception) {
    echo $exception->error2();
    exit;
}