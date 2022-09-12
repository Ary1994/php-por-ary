<?php
$base=$_GET["base"];
$e=$_GET["ex"];
 if($e>0){
    for($i=1;$i<=$e;$i++){
        $res=Potencia($base,$i);
        echo"$base evelado a la $i es : $res <br>";
    }
 }else{
     echo"ingresar como exponente un numero natural";
 }

function Potencia($b,$j){
    $b=$b;
    $j=$j;
    $res=$b;
    for($i=1;$i<$j;$i++){
        $res=$res*$b;
    }
    return $res;
}

?>