<?php 
$aux[0]=-1;
for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        $M[$i][$j]=Nazar($aux);
        $aux[]=$M[$i][$j];
    }
}

$max=$M[0][0];
$imax[0]=0;
$imax[1]=0;
$min=$M[0][0];
$imin[0]=0;
$imin[1]=0;
for($i=0;$i<5;$i++){
    for($j=0;$j<5;$j++){
        if($max<$M[$i][$j]){
            $max=$M[$i][$j];
            $imax[0]=$i;
            $imax[1]=$j;
        }
        if($min>$M[$i][$j]){
            $min=$M[$i][$j];
            $imin[0]=$i;
            $imin[1]=$j;

        }
    }
}
echo"el numoro maximo es $max y esta en el indice  $imax[0] $imax[1]<br>";
echo"el numero minimo es $min y esta en el indice $imin[0] $imin[1]";

function Nazar($N){
    $ban=0;
    while($ban==0){
        $n=rand(0,1000);
        if(in_array($n,$N)){
            
        }else{
            $ban=1;
        }
        
     }
    
    return $n;
}
?>