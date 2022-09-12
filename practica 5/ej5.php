<?php
$n=$_POST["n"];

$res=CantDias($n);
echo $res;

function Dias30 ($n){
    $meses=[4,6,9,11];
    $res=0;
    if(in_array($n,$meses)){
        $res=" El mes $n tiene 30 Dias";
    }
    return $res;
}
function Dias31 ($n){
    $meses=[1,3,5,7,8,10,12];
    $res=0;
    if(in_array($n,$meses)){
        $res=" El mes $n tiene 31 Dias";
    }
    return $res;
}
function CantDias($n){
    $aux=Dias30($n);
    if($aux==0){
        $aux=Dias31($n);
        if($aux==0){
            $aux=" El mes $n tiene 28 Dias";
        }
    }
    return $aux;
}
?>