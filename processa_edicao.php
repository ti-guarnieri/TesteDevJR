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
$id=$_POST["id"];


echo "Nome: $nome <br>";
echo "CPF: $cpf <br>";
echo "nasc: $nasc <br>";
echo "email: $email <br>";
echo "telefone: $telefone <br>";
echo "endereco: $endereco <br>";
echo "estado: $estado <br>";
echo "cidade: $cidade <br>";


$script_pessoa = "UPDATE pessoas set nome='$nome' ,CPF=$cpf, nasc='$nasc', email='$email', telefone=$telefone, 
                                     endereco='$endereco', estado='$estado', cidade='$cidade', modificado=NOW() WHERE id='$id'";
$edicao_pessoa = mysqli_query($conn, $script_pessoa);

if(mysqli_query($conn, $script_pessoa)) {
    echo "<br> Novo cadastro realizado com sucesso! <br><hr><br>";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
};
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Pessoas cadastradas</title>
    <meta charset="utf-8"/>
</head>
<body>
<a href = "exibicao.php"><button>Usuarios cadastrados</button></a>
</body>
</html>
