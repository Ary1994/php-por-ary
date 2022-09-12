<?php
$V=Vectorrand();
for($i=0;$i<count($V);$i++){
    echo$V[$i]." ";
}
for($i=0;$i<count($V);$i++){
    $aux[$i]=Par($V[$i]);
}
$cont=0;
for($i=0;$i<count($aux);$i++){
    if($aux[$i]==0){
        $V1[$cont]=$V[$i];
        $cont++;
    }
}
for($i=0;$i<count($aux);$i++){
    if($aux[$i]==1){
        $V1[$cont]=$V[$i];
        $cont++;
    }
}
echo"<br><br><br><br>";
for($i=0;$i<count($V1);$i++){
    echo$V1[$i]." ";
}
function vectorrand(){
    for($i=0;$i<20;$i++){
        $V[$i]=rand(0,100);
    }
    return$V;
}
function Par($n){
    if($n%2==0){
        $ban=0;
    }else{
        $ban=1;
    }
    return$ban;
}
?>