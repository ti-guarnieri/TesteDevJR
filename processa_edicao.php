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





$script_pessoa = "UPDATE pessoas set nome='$nome' ,CPF=$cpf, nasc='$nasc', email='$email', telefone=$telefone, 
                                     endereco='$endereco', estado='$estado', cidade='$cidade', modificado=NOW() WHERE id='$id'";
$edicao_pessoa = mysqli_query($conn, $script_pessoa);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Alteração</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

</head>
<body>
<div class="container">

<?php

if(mysqli_query($conn, $script_pessoa)) {
    echo "<br> Alterações realizadas com sucesso <br><hr><br>";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
};

echo "Nome: $nome <br>";
echo "CPF: $cpf <br>";
echo "nasc: $nasc <br>";
echo "email: $email <br>";
echo "telefone: $telefone <br>";
echo "endereco: $endereco <br>";
echo "estado: $estado <br>";
echo "cidade: $cidade <br><br><hr>";
?>
<a href = "exibicao.php"><button>Listar Usuarios</button></a>
<div>

</body>
</html>
