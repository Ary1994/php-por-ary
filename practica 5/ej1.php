<?php 
$n=$_POST["n"];
$x=$_POST["x"];

$res=Sumatoria($n,$x);

echo"para un x=$x y un N=$n es resultado de la sumatoria es $res";

function Sumatoria($n,$x){
    $aux=0;
 
    for($i=0;$i<=$n;$i++){
        $aux=$aux+Poten($x,$i);
      
    }
    return $aux;
}
function Poten($x,$i){
    $aux=1;
    for($j=0;$j<$i;$j++){
        $aux=$aux*$x;
    }
    return $aux;
}


?>