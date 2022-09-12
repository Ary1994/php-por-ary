<?php
$N=array("corazon","diamante","herradura","campana","limon");

$tirada=Tirada($N);
for($i=0;$i<count($tirada);$i++){
    echo $tirada[$i]." ";
}
echo"<br>";
if($tirada[0]==$tirada[1]){
    if($tirada[1]==$tirada[2] ){
    echo"Felicitaciones, ha ganado 10 monedas";
    }
    else{
        echo"Bien, ha recuperado sus monedas";
    }
}else{
if($tirada[0]==$tirada[2]or$tirada[1]==$tirada[2]){
        echo"Bien, ha recuperado sus monedas";
    }
else{
    echo"Lo siento, ha perdido";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Ejercicio103.php">
        <label for="n">Volver a intentarlo</label>
        <input type="submit">
    </form>
</body>
</html>
    
<?php
function Tirada($N){
    $f=count($N);
    for($i=0;$i<3;$i++){
        $aux=rand(0,($f-1));
        $N1[$i]=$N[$aux];
    }
    return$N1;
}
?>