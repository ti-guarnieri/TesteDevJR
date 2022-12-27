<?php

include_once ("conexao.php");

$nome=$_POST["nome"]; 
$cpf=$_POST["CPF"];
$nasc=$_POST["nasc"];
$email=$_POST["email"]; 
$telefone=$_POST["telefone"]; 
$endereco=$_POST["endereco"];
$estado=$_POST["estado"];
$cidade=$_POST["cidade"];


echo "Nome: $nome <br>";
echo "CPF: $cpf <br>";
echo "nasc: $nasc <br>";
echo "email: $email <br>";
echo "telefone: $telefone <br>";
echo "endereco: $endereco <br>";
echo "estado: $estado <br>";
echo "cidade: $cidade <br>";

$script_pessoa = "INSERT INTO `pessoas`
( `nome`, `CPF`, `nasc`, `email`, `telefone`, `endereco`, `id_cidade`, `criado`) VALUES 
('$nome',$cpf,'$nasc','$email', $telefone,'$endereco',$cidade,CURRENT_DATE)";

if(mysqli_query($conn, $script_pessoa)) {
    echo "New record created successfully <br>";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
};

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";