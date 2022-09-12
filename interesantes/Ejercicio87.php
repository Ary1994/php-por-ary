<?php
$text=$_GET["t"];
$v=$_GET["v"];
if(strlen($text)==16){
    for($i=0;$i<16;$i++){
        $T[$i]=substr($text,$i,1);
    }
    $e="*";
    if($v==1){
        $cont=0;
        for($i=3;$i>=0 ;$i--){
            $es="*";
            $l=7-($i*2);
            echo str_repeat($es,$i);
             for ($k=0;$k<$l;$k++){
                echo $T[$cont];
                $cont++;
            }
        echo str_repeat($es,$i)."<br>";
        }
    }
    if($v==2){
        $cont=0;
        for($i=0;$i<4 ;$i++){
            $es="*";
            $l=7-($i*2);
            echo str_repeat($es,$i);
             for ($k=0;$k<$l;$k++){
                echo $T[$cont];
                $cont++;
            }
        echo str_repeat($es,$i)."<br>";
        }
    }if($v==3){
        $cont=0;
        $es="*";
        for($i=1; $i<4;$i++){
            for($p=0;$p<$i;$p++){
                echo $T[$cont];
                $cont++;
            }
            echo str_repeat($es,(4-$i))."<br>";

        }
        for($i=4;$i>0;$i--){
            for($p=0;$p<$i;$p++){
                echo $T[$cont];
                $cont++;
            }
            echo str_repeat($es,(4-$i))."<br>";
        }
    }if($v==4){
        $cont=0;
        $es="*";
        for($i=1; $i<4;$i++){
           echo str_repeat($es,(4-$i));
            for($p=0;$p<$i;$p++){
                echo $T[$cont];
                $cont++;
            }
            echo"<br>";
        
        }
        for($i=4;$i>0;$i--){
            echo str_repeat($es,(4-$i));
            for($p=0;$p<$i;$p++){
                echo $T[$cont];
                $cont++;
            }
            echo "<br>";
        }
    }

}else{
    echo"introducir 16 caracteres ";
}

?>