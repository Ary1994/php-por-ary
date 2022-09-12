<?php
    for($i=0; $i<12 ;$i++){
        for($j=0; $j<12;$j++){
            $A[$i][$j]=rand(0,100);
        }
    }

    for($i=0; $i<12 ;$i++){
        for($j=0; $j<12 ;$j++){
           echo $A[$i][$j]." ";
        }
        echo"<br>";
    }
    for($i=0; $i<12 ;$i++){
        for($j=0; $j<12 ;$j++){
            $B[$i][$j]="*";
        }
    }
    for($i=0;$i<12;$i++){
        $B=Reloj($A,$B,(11-$i),$i);
    }

    echo"<br>";
    echo"<br>";
    echo"<br>";
    for($i=0; $i<12 ;$i++){
        for($j=0; $j<12 ;$j++){
           echo $B[$i][$j]." ";
        }
        echo"<br>";
    }
    function Reloj($M,$N,$i,$p){
       
        
         for($j=($p+1);$j<=$i;$j++){
            $N[$p][$j]=$M[$p][$j-1];
         }
         for($j=($p+1);$j<=$i;$j++){
            $N[$j][$i]=$M[$j-1][$i];
         }
         for($j=($i-1);$j>=$p;$j--){
            $N[$i][$j]=$M[$i][$j+1];
         }
         for($j=($i-1);$j>=$p;$j--){
            $N[$j][$p]=$M[$j+1][$p];
         }
         return$N;
    }
?>