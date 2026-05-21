<?php

session_start();

$host = "localhost";
$user = "root";
$pass = "root";
$db = "sistema_simples";

$conn = new mysqli($host,$user,$pass,$db);

if ($conn->connect_error){

    echo "<script> console.log('erro com a conexão com o banco') </script>";

}else{

    echo "<script> console.log('conexão com o banco foi um sucesso') </script>";

}


?>






<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tela de login</title>
</head>
<body>
    <h1>Tela de Login -PHP</h1>
    <form action="Post">
        <label>Usuario</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha</label>
        <input type="password" name="senha">
        <br>
     </form>
</body>
</html>