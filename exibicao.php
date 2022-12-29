<?php

include("conexao.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Pessoas cadastradas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <meta charset="utf-8"/>
</head>
<body>
<div class="container">

<a href="index.php">Cadastrar novo Usuario</a><br><br><br><hr>
</div>
<?php

$query = "SELECT * FROM pessoas";
$exibe_pessoas = mysqli_query($conn, $query);

while($linha_pessoa = mysqli_fetch_assoc($exibe_pessoas)){
   ?>
    <div class="container">

<?php
    echo "Nome: " .$linha_pessoa['nome']."<br>" ;
    echo "CPF: " .$linha_pessoa['CPF']."<br>" ;
    echo "endereço: " .$linha_pessoa['endereco']."<br>" ;
    echo "Data de nascimento: " .$linha_pessoa['nasc']."<br>" ;
    echo "telefone: " .$linha_pessoa['telefone']."<br>" ;
    echo "email: " .$linha_pessoa['email']."<br>" ;    
    echo "estado: " .$linha_pessoa['estado']."<br>";
    echo "cidade: " .$linha_pessoa['cidade']."<br>";
    echo "<a href='editar.php?id=" . $linha_pessoa['id'] . "'>Editar</a><br>";
    echo "<a href='excluir.php?id=" . $linha_pessoa['id'] . "' data-confirm='Tem certeza de que deseja excluir o item selecionado?'>Apagar</a><br><hr>";
    ?>
    </div>
    <?php

}

?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
		<script src="js/modal.js"></script>	
</body>
</html>