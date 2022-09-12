<?php

$p=$_POST["n"];
if($p>0){
    $res=Primo($p);
    if($res==-1){
        $aux=$p+1;
        $ban=0;
        while($ban==0){
           $res=Primo($aux);
           if($res!=-1){
               $pM=$res;
               $ban=1;
           }
           $aux++;
        }
        for($i=2;$i<$p;$i++){
            $aux=Primo($i);
            if($aux!=-1){
                $pm=$aux;
            }
        }
        echo " El numero $p no es primo ,el numero $pM es el primo mayor mas cercano y el numero $pm es el primo menor mas cercano";
       
    }else{
        echo "el numero $res es primo.";
    }

}else{
    echo"ingresar un numero natural";
}

function Primo($n){
    for($i=2;$i<$n;$i++){
    if($n%$i==0){
        $res=-1;
        return$res;
    }
   } 
 
   return$n;
}

?>