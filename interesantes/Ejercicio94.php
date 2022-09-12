<?php
    $n=$_POST["l"];
    $a="*";
    if($n>0){
        for($i=0;$i<($n-1);$i++){
            echo $a."<br>";
        }
        $h=floor($n/2)+1;
        echo str_repeat($a,$h);
    }
?>