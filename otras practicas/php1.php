<?php
if(isset($_GET["125"])){
    $altura=$_GET["altura"];
    $diam=$_GET["diam"];
    if($altura>0 and $diam>0){
    $rad=$diam/2;
    $radc=pow($rad,2);
    $volumen=M_PI*$altura*$radc;
    $volumen=round($volumen,2);
    $litro=$volumen*10;
    $litro=round($litro,2);
    echo"El volumen del cilindro en metros cubicos es de $volumen en decimetros cubicos es de  $litro con una capacidad para $litro litros";
    }
    else{
        echo "Ingresar numeros naturales distintos de cero";
    }
}
if(isset($_GET["205"])){
    $texto=$_GET["texto"];
    $lon=strlen($texto);
    $aux=$lon+1;
    if($lon<80){
        for($i=0;$i<=$lon;$i++){
           echo substr($texto,($aux-$i),1);
        }
        echo substr($texto,0,1);

    }
    else{
        echo"Introducir una frace de menos de 80 caracteres";
    }
}
if(isset($_GET["235"])){
    $long=$_GET["longitud"];
    $anc=$_GET["anchura"];
    $precio=$_GET["precio"];
    if($long>0 and $anc>0){
        if($precio>0){
            if($long==$anc){
                $tipo="cuadrado";
            }else{
                $tipo="rectangulo";
            }
            $m2=$long*$anc;
            echo"El terreno es un $tipo con $m2 metros cuadrados valuado a un precio de ".($m2*$precio)." pesos";
            
        }else{
            echo "Introducir un precio correcto";
        }

    }
    else{
        echo"Introducir correctamente las medidas de distancia ";
    }
}
if(isset($_GET["245"])){
    $moneda=$_GET["cmcon"];
    $t_mon=$_GET["mcon"];
    $TC[0][1]="Yenes";
    $TC[0][2]="Pesos";
    $TC[0][3]="Pesetas";
    $TC[0][4]="Marcos";
    if($moneda>0){
        $TC[1][1]=$_GET["ty"];
        $TC[1][2]=$_GET["tp"];
        $TC[1][3]=$_GET["tps"];
        $TC[1][4]=$_GET["tm"];
        for($i=1; $i<5 ;$i++){
            echo" Para $moneda  $t_mon se necesitan ".($moneda*$TC[1][$i])." de  " .$TC[0][$i]."<br>";
        }

    
    }
    else{
        echo"Se introdujo mal el moto que desea";
    }



}
if(isset($_GET["255"])){
    $n=$_GET["n"];
    $aux=$n;
    $cont=0;
    if($n>0){
       for ($i=0; $i<7; $i++) {
           if(($n%7)!=0){
              $n++;
              $cont++;
           }
        }
      if($cont==0){
        echo "el numero $aux es multiplo de 7";
    }
    else{
        echo"al numero $aux le faltan $cont par ser multiplo de 7";
    }  
    }
    else{
        echo "ingresar un numero natural distinto de cero";
    }
    
}
?> 