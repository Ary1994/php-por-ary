<?php

$tn=$_GET["tn"];
$n=$_GET["n"];
if($n>0){
    $res=Convertidor($n,$tn);
    echo $res;
}

function Convertidor($n,$tn){
if($tn==1){
    $res=round(($n/2.54),2);
    $text=" $n centimetros son $res pulgadas";
    return $text;
}
if($tn==2){
    $res=$n*1852;
    $text=" $n millas son $res metros";
    return $text;

}else{
    $hora=floor($n/3600);
    $r=$n-($hora*3600);
    $min=floor($r/60);
    $seg=$r-($min*60);
    $text=" $n segundos son $hora horas, $min miuntos, $seg segundos";
    return $text;
}
}

?>