<?php
$c1=$_POST["c1"];
$c2=$_POST["c2"];
$con=Igualdad($c1,$c2);
if($con==0){
    $con1=Cond($c1);
    if($con1[0]!=0){
        if($con1[1]!=0){
            echo"las contraseñas se pueden usar";
        }else{
            echo"Tu contraseña no contiene una mayuscula";
        }
    }else{
        echo "Tu contraseña  no contiene un numero";
        if($con1[1]==0){
          echo" ni mayuscula";
        }
    }
    
}else{
    echo "Las contraseñas no coinciden ";
}

function Igualdad($c1,$c2){
    $ban=0;
    for($i=0;$i <strlen($c1);$i++){
        if(substr($c1,$i,1)!=substr($c2,$i,1)){
            $ban=1;
        }
    }
    return $ban;

}
function Cond($c1){
    $ban1=0;
    $ban2=0;
    $num=" 1234567890";
    $Mayus=" ABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    for($i=0;$i<strlen($c1);$i++){
        $c=substr($c1,$i,1);
        $res=0;
        $res1=0;
        $res=strpos($num,$c);
        $res1=strpos($Mayus,$c);
        if($res!=0){
            $ban1++;
        }
        if($res1!=0){
            $ban2++;
        }
    }
    $Cond[0]=$ban1;
    $Cond[1]=$ban2;
    return $Cond;
}

?>
