<?php

$n=$_POST["n"];
$t=$_POST["t"];
if($n>0){
    if($t==0){
        Desendiendo($n);
    }else{
        Acendiendo($n);
    }
}else{
    echo "Ingresar un numero natural distinto de cero";
}
function Acendiendo($n){
    $a="*";
    for($i=1;$i<=$n;$i++){
        echo str_repeat($a,$i)."<br>";
    }

}
function Desendiendo($n){
    $a="*";
    for($i=$n;$i>0;$i--){
        echo str_repeat($a,$i)."<br>";
    }

}
?>