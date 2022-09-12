<?php
for($i=0;$i<30;$i++){
    $N[$i]=rand(0,10);
    }
   
     $m=Media($N);
     $A=MediaPositiva($N,$m);
    echo"La Media del curso es $m y $A alumnos superaron ese promedio";
function MediaPositiva($N,$m){
    $cont=0;
    for($i=0;$i<count($N);$i++){
        if($N[$i]>$m){
            $cont++;
        }
    }
    return$cont;
}
function Media($N){
    $cont=0;
    for($i=0;$i<count($N);$i++){
        $cont=$cont+$N[$i];
    }
    $res=$cont/count($N);
    $res=round($res,2);
    return$res;
}
?>