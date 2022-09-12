<?php
$n=$_POST["n"];
if($n>0){
$ban=1;
$cont=0;
$i=0;
while($ban <$n){
    $N[$i]=$ban;
    echo"$ban  ";
    $ban=$ban*2;
    $i++;

}
}else{
    echo"ingresar un numero natural";
}

$M=$N[count($N)-1];

$NI=Invertir($M);
echo"<br><br><br><br>";
for($i=0;$i<count($NI);$i++){
    echo "$NI[$i]   ";
}
function Invertir($n){
    $i=0;
    while($n>1){
        $N[$i]=$n;
        $n=$n/2;
        $i++;
    }
    $N[$i]=1;
    return $N;
}
?>