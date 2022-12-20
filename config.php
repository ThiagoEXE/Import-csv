<?php

function getdb(){
$servername = "localhost";
$username = "root";
$password = "";
$db = "teste";

try {
    $conn = mysqli_connect($servername, $username, $password, $db);
    //echo "conectado com sucesso";
}catch(Exception $e){
    echo "Conexão falhou: " . $e->getMessage();
}
return $conn;
}
?>