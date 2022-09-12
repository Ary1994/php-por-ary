<?php
$conec= mysqli_connect("localhost","root","","escuela");
if(!$conec){
    die("no hemos podido conectarnos a la basede datos: ");
}else{
    echo "hola mundo";
}


?>