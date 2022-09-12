<?php
define("P",10);
define("V",5);
define("D",7);
define("C",2);
define("M",10);
for($i=1;$i<13;$i++){
    $X[$i]=$i*2;
}
$A=A($X,M);
$I=I(P,$A,V,D,C);
echo"Para los datos:<br>
P: ".P." – A: $A – V: ".V." – D: ".D." – C ".C." – ";
for($i=1;$i<13;$i++){
     echo " x$i: $X[$i]";
}
echo" M: ".M." <br>
El impuesto aplicado sobre cada vertido es $I.";
function A($X,$M){
    $X=$X;
    $M=$M;
    $A=0;
    for($i=1;$i<count($X);$i++){
        $aux=$X[$i]-$M;
        $res=abs($aux);
        $A=$A+$res;
    }
    return $A;
}
function I($P,$A,$V,$D,$C){
    $D=pow($D,(3/5));
    $I=$P*$A+$V+$D+$C;
    return $I;
}
?>