<?php
$grupo=6;
for($i=0;$i<$grupo;$i++){
    $vector[$i][0]=rand(1,10);
    for($j=1;$j<=$vector[$i][0];$j++){
        $vector[$i][$j]=rand(1,1000);
    }
}

$promedios=Prom($vector,$grupo);
$res=MinMax($promedios);
echo $res;
function MinMax($x){
    $min=$x[0];
    $max=$x[0];
    for($i=0;$i<count($x);$i++){
        if($min>$x[$i]){
            $min=$x[$i];
        }
        elseif($max<$x[$i]){
            $max=$x[$i];
        }
    }
    $txt="El promedio minimo es de $min y elpromedio maximo es de $max ";
    return $txt;
}


function Prom($vect,$x){
    for($i=0;$i<$x;$i++){
        $aux=0;
        $aux2=$vect[$i][0];
        for($j=1; $j<=$aux2 ;$j++){

            $aux=$aux+$vect[$i][$j];

        }
        $Prom[$i]=($aux/$aux2);
    }
    return $Prom;
}
?>