<?php
$d=$_POST["d"];
$n=$_POST["n"];
if($n>=0 and $n<=24){
    if($d=5){
        if($n>15){
        echo"ya esta en fin de semana";
        }else{
            $dr=5-$d;
            $hr=24-$n;
            $min=Minutos($dr,$hr);
            echo "Faltan $min minutos para el finde semana "; 
        }
    }else{
        $dr=5-$d;
        $hr=24-$n;
        $min=Minutos($dr,$hr);
        echo "Faltan $min minutos para el finde semana ";
    }

}else{
    echo"Introducir una hora valida";
}
function Minutos($d,$h){
   $horas=($d*24)+$h;
   $minutos=$horas*60;
   return $minutos;
}
?>