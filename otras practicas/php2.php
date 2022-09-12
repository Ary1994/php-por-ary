<?php
    if(isset($_GET["135"])){
        $rxh=$_GET["rxh"];
        if($rxh>0){
            for($i=1;$i<51;$i++){
                $hora=rand(0,160);
                $s=$hora*$rxh;
                $E[$i]=$s;
            }
            //no lo pide pero lo muestro dado que si no se muestra para que sirve 
            for($i=1;$i<51;$i++){
                echo "Al empleado n° $i se le debe abonar un sueldo de ". $E[$i]."<br>";
            }
        }
        else{
            echo"ingresar un numero natural para el precio por hora";
        }
    }
    if(isset($_GET["145"])){
        $aux1=1;
        $aux2=1;
        echo "1 1 ";
        for($i=3;$i<=23;$i++){
            $res=$aux1+$aux2;
            $aux1=$aux2;
            $aux2=$res;
            echo "$res  ";

        }
    }
    if(isset($_GET["165"])){
       $txt=$_GET["txt"];
       $l=$_GET["l"];
        if(strlen($txt)!=0){
            if(strlen($l)==1){
                $con=0;
                $l=$l." ";
                $l=strtolower($l);
                $txt=strtolower($txt);
                for($i=0;$i<=strlen($txt);$i++){
                    if(substr($txt,$i,2)==$l){
                        $con++;
                    }
                }
                if($con==0){
                    echo"no aparece la letra $l al final de ninguna pablabra";
                }else{
                echo "La cantidad de veces que aprarece $l al final de una palabra es $con";
                }
            }
            else{
                echo "Ingrese una sola letra";
            }
        }
        else{
            echo"Ingrese un texto";
        }
    }
    if(isset($_GET["185"])){
        $n=$_GET["n"];
        for($i=0; $i<8 ;$i++){
            for($j=0;$j<5;$j++){
                $A[$i][$j]=rand();
            }
        }
        $con=0;
        for($i=0; $i<8 ;$i++){
            for($j=0;$j<5;$j++){
                
                if($A[$i][$j]==$n){
                    $B[$con][0]=$i;
                    $B[$con][1]=$j;
                    $con=$con+1;
                
                }
            }
        }
        if($con!=0){
        for($i=0; $i<count($B);$i++){
            echo "El numero $n aparece en la fila ".$B[$i][0]." columna ".$B[$i][1]. "<br>";
        }
        }else{
            echo"El numero $n no parecio en ningun lugar";
        }
       
    }
    if(isset($_GET["195"])){
        $n=$_GET["N"];
        if($n>0 and $n<=40){
            for($i=1;$i<=$n;$i++){
                $VALOR[$i]=rand();
            }
            //Recorriendo dos veces Valor 
            $x=$VALOR[1];
            for($i=2;$i<count($VALOR);$i++){
                if($VALOR[$i]>$x){
                    $x=$VALOR[$i];
                    $ind=$i;
                }
            }
            $cont=0;
            for($i=1;$i<count($VALOR);$i++){
                if($VALOR[$i]==$x){
                    $I[$cont]=$i;
                    $cont=$cont+1;
                }

            }
            if($cont==1){
                echo "El valor maximo es $x y esta en el indice $ind";
            }
            else{
               echo"El valor maximo es $x y esta en los indices ";
                for($i=0;$i<count($I);$i++){
                    echo $I[$i]." ";
                    
                }
            }
            echo"<br>";
            //recorreiendo valor una vez
            $c=max($VALOR);
            $con=0;
            for($i=1;$i<count($VALOR);$i++){
                if($VALOR[$i]==$c){
                    $In[$con]=$i;
                    $con=$con+1;
                }
            }
            if($con==1){
                echo "El valor maximo es $c y esta en el indice ".$In[0];
            }
            else{
                echo"El valor maximo es $c y esta en los indices ";
                for($i=0;$i<count($In);$i++){
                    echo $In[$i]." ";
                }
            }


        }
        else{
            echo"Ingresar un numero natural  menor a 40";
        }
    }

?>