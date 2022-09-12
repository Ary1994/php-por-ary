<?php
$h=$_POST["h"];
define("G",9.81);
if($h>0){
    $t=T($h,G);
    echo"El tiempo que tardara es de $t m/s cuadrados";
}else{
    echo"Introducir un valor natural distinto de cero";
}

function T($h,$g){
    $aux=2*$h/$g;
    $t=sqrt($aux);
    return $t;
}
?>