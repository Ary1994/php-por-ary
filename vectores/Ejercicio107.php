<?php
$n=$_POST["n"];
$n2=$_POST["n2"];
if($n>0 and $n<21){
    $V1=Vectorrand();
    Mostrar($V1);
    for($i=0;$i<count($V1);$i++){
        if($V1[$i]==$n){
            $V1[$i]="\"$n2\"";
        }
    }
    Mostrar($V1);
}else{
    echo"introducir un numero en el rango pedido";
}

function Vectorrand(){
    for($i=0;$i<100;$i++){
        $V[$i]=rand(0,20);

    }
    return$V;
}
function Mostrar($V){
    for($i=0;$i<count($V);$i++){
       echo$V[$i]."  ";

    }
    echo "<br><br><br><br>";
}
?>