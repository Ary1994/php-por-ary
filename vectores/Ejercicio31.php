<?php
for($i=0;$i<40;$i++){
    $M[$i]=rand(-100,100);
}
for($i=0;$i<40;$i++){
    echo $M[$i]." * ";
}
echo"<br><br><br><br>";
$M1=T1($M);
for($i=0;$i<40;$i++){
    echo $M1[$i]." * ";
}
echo"<br><br><br><br>";
$M2=T2($M);
for($i=0;$i<40;$i++){
    echo $M2[$i]." * ";
}
function T1($M){
    for($i=0;$i<count($M);$i++){
        if($M[$i]>0){
            $N[$i]=sqrt($M[$i]);
        }else{
            $N[$i]=" ERROR ";
        }
    }
    return $N;
}
function T2($M){
    for($i=0;$i<count($M);$i++){
        if($M[$i]>0){
            $N[$i]=pow($M[$i],1/3);
        }else{
            $N[$i]=pow($M[$i],2);
        }
    }
    return $N;
}
?>