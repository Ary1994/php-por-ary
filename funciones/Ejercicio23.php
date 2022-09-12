<?php
$n=$_GET["n"];
if($n>0){
    $ban=1;
    while($ban<=1000){
        if($ban%$n==0){

        }else{
            echo $ban." ";
        }
        $ban++;
    }
    echo "<br><br><br><br>";
    $N=NoMostrados($n);
    for($i=0;$i<count($N);$i++){
        echo $N[$i]." ";
    }
}else{
    echo" introducirun numero natural diferente de 0";


}
function NoMostrados($n){
    $ban=1;
    $cont=0;
while($ban<=1000){
    if($ban%$n==0){
        $N[$cont]=$ban;
        $cont++;
    }else{
       
    }
    $ban++;
}
return $N;
}
?>