<?php

$ban=0;
$d1=Dado();
$d2=Dado();
$cont=0;
while($ban==0){
    if($d1==$d2){
        $ban++;
    }
    echo "el primer dado dio $d1 y el segundo dio $d2<br>";
    $cont++;
    $d1=Dado();
    $d2=Dado();

}
echo "Para que los dados se repitan se necesitaron $cont tiradas que paso con el numero $d1";


function Dado(){
    $d=rand(1,6);
    return $d;
}

?>
