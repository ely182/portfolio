<?php

$host="localhost";
$database="#";
$usuario="root";
$senha="";

$mysqli = new mysqli($host,$usuario,$database,$senha);
if ($mysqli->error){
    die("!falha ao conectar com o servidor". $mysqli->error);
}
?>