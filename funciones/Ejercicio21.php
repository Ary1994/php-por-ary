<?php
$t=$_GET["email"];
$nombre=Nombre($t);
echo$nombre."<br>";
$dominio=Dominio($t);
echo$dominio."<br>";
$tipo=Tipo($t);
echo$tipo."<br>";
$pais=Pais($t);
echo$pais ."<br>";
function Pais($t){
    $i=strpos($t,"@");
    $p1=strpos($t,".",$i);
    $p2=strpos($t,".",($p1+1));
    $f=strlen($t);
    $aux=$f-$p2;
    $res=substr($t,($p2+1),$aux);

    return $res;
}

function Tipo($t){
    $i=strpos($t,"@");
    $p1=strpos($t,".",$i);
    $p2=strpos($t,".",($p1+1));
    $aux=$p2-($p1+1);
    $res=substr($t,($p1+1),$aux);
    return $res;
}
function Dominio($t){
    $i=strpos($t,"@");
    $p1=strpos($t,".",$i);
    $aux=$p1-($i+1);
    $res=substr($t,($i+1),$aux);
    return $res;
}
function Nombre($t){
    $i=strpos($t,"@");
    $res=substr($t,0,$i);
    return$res;
}
?>