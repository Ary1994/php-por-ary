<?php
$n=$_GET["n"];
$tipo=$_GET["tipo"];

if($n>0){
    if($tipo==0){
        $res=Kb($n);
        echo"  $n Mbytes son $res Kbytes";
    }
    else{
        $res=Mk($n);
        echo"  $n Kbytes son $res Mbytes";
    }
}
else{
    echo "introducir un numero natural";
}

function Kb($mk){
    $kb=$mk*1000;
    return $kb;
}
function Mk($kb){
    $mk=$kb/1000;
    return $mk;
}


?>