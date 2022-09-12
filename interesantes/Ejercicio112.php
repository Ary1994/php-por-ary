<?php 
$t=$_POST["s"];
for($i=0;$i<100;$i++){
    $A[$i]=rand(0,500);
}
for($i=0;$i<100;$i++){
    echo $A[$i]." ";
}
echo"<br><br><br>";
$max=max($A);

$min=min($A);
if($t==1){
    for($i=0;$i<100;$i++){
        if($A[$i]==$max){
            $n=$A[$i];
            $A[$i]="**$n**";
        }
    }

}else{
    for($i=0;$i<100;$i++){
        if($A[$i]==$min){
            $n=$A[$i];
            $A[$i]="**$n**";
        }
    }
}
for($i=0;$i<100;$i++){
    echo $A[$i]." ";
}

?>