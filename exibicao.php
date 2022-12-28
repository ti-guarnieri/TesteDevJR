<?php

include("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Pessoas cadastradas</title>
    <meta charset="utf-8"/>
</head>
<body>

<?php

$query = "SELECT * FROM pessoas";
$exibe_pessoas = mysqli_query($conn, $query);


while($linha_pessoa = mysqli_fetch_assoc($exibe_pessoas)){
        
    echo "Nome: " .$linha_pessoa['nome']."<br>" ;
    echo "CPF: " .$linha_pessoa['CPF']."<br>" ;
    echo "endereço: " .$linha_pessoa['endereco']."<br>" ;
    echo "Data de nascimento: " .$linha_pessoa['nasc']."<br>" ;
    echo "telefone: " .$linha_pessoa['telefone']."<br>" ;
    echo "email: " .$linha_pessoa['email']."<br>" ;    
    echo "estado: " .$linha_pessoa['estado']."<br>";
    echo "cidade: " .$linha_pessoa['cidade']."<br><br><hr>" ;
}

?>
</body>
</html>