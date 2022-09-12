<?php
$Caracteres = array(0, -2, 4, 7, "p", "a", "%", "*", 8, "B", "S", "&", 1, -5, "f", "M", "?", "/", 6, "Z");

for($i=0;$i<count($Caracteres);$i++){
    $res=Evaluar($Caracteres[$i]);
    if($res==1){
        $n=$Caracteres[$i];
        $res=Num($n);
        echo"$res <br>";
    } 
    else{
        if($res==2){
        $l=$Caracteres[$i];
        $res=Letra($l);
        echo "$res <br>";
        }
        else{
            echo "$res <br>";
        }
    }
}


function Evaluar($c){
    $n=is_int($c);
    if($n!=1){
       $c=strtoupper($c);
       $a=" ABCDEFGHIJKLMÑOPQRSTUVWXYZ";
        $ban=strpos($a,$c);
      if(!$ban){
            $text="$c es un caracter especial";
            return $text;
      }else{
          $text=2;
          return $text;
      }
    

    }else{
        $text=1; 
        return $text;
    }

}

function Num($n){
    if($n!=0){
        if($n%2==0){
        $Num[0]="par";
        }else{
            $Num[0]="inpar";
        }
        if($n<0){
            $Num[1]="negativo";
        }else{
            $Num[1]="positivo";
        }
        $text="$n es $Num[0] y es $Num[1] ";
        return $text;
    }
    else{
        $text="$n es cero";
        return $text;
    }
}

function Letra($l){
    $minus=" abcdefghijklmnñopqrstuvwkyz";
    $ban=strpos($minus,$l);
    if(!$ban){
        $L[0]="mayuscula";
    }else{
        $L[0]="minuscula";
    }
    $l1=strtoupper($l);
    $vocales=" AEIOU";
    $ban1=strpos($vocales,$l1);
    if(!$ban1){
        $L[1]="consonante";

    }else{
        $L[1]="vocal";
    }
    $text=" $l es $L[1] y esta en $L[0]";
    return $text;
}
?>