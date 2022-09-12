<?php
$n=$_POST["n"];
$es="*";
$cont=($n-1);
for($i=1;$i<=$n;$i++){
    for($p=$cont; $p>=0;$p--){
        echo $es;
    }
    $res=Numeros($i);
    echo$res;
    for($p=$cont; $p>=0;$p--){
        echo $es;
    }
    echo"<br>";
    $cont--;
}


function Numeros($n){
    $res="";
    for($i=1;$i<=$n;$i++){
        $res="$res"."$i";
    }
    for($i=($n-1);$i>0;$i--){
        $res="$res"."$i";
    }
    return$res;
}
?>