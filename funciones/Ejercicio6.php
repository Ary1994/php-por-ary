<?php
define("M",4);
define("D",10);
define("V",1.5);
for($i=1;$i<=12;$i++){
    $X[$i]=($i*2)-1;
}
$T=sqrt(V);
$fot=Fotoperiodo($X,M,D,$T);
echo "Para los valores de ";
for($i=1;$i<=12;$i++){
    echo "  X$i : $X[$i] , ";
}
echo" m :".M.", D : ".D." y T: $T el fotoperiodo anual es $fot ";
function Fotoperiodo($X,$M,$D,$T){
    $res=0;
    for($i=1;$i<count($X);$i++){
        $res=$res+($X[$i]-$M);
    }
    $res=$res/($D+$T);
    return $res;

}
?>