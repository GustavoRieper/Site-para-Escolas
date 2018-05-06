<?php
//Globais
$home="http://localhost";
$title="Eblue - Administração";

//Conexão com o banco de dados
include("DB.class.php");
$conectar=new DB;
$conectar=$conectar->conectar();

$query=mysql_query("SELECT * FROM usuarios");
echo "<h1>" .mysql_num_rows($query). "</h1>";


?>