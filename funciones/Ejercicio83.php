<?php
$n=$_POST["n"];
if($n>0){
    echo"1";
    for($i=2;$i<=$n;$i++){
        echo"+ 1/$i ";
    }
    $res=Armonicos($n);
    echo" = $res";

}else{
    echo"ingrese un numero natural";
}
function Armonicos($n){
    $a=0;
    for($i=1;$i<=$n;$i++){
        $a=$a+(1/$i);
    }
    return$a;
}


?>