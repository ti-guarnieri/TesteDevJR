<?php

require_once('conexao.php');

$estados = "SELECT * FROM estados";
$cidades = "SELECT * FROM cidades";
$dados_estados = mysqli_query($conn,$estados) or die(mysqli_error());
$dados_cidades = mysqli_query($conn,$cidades) or die(mysqli_error());

if (!$conn) {
    die("A conexão com o banco de dados falhou: " . mysqli_connect_error());
}
else {
 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Teste para DEV PHP</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
    <form class='formulario' method="post" action="cadastra.php"> 
        <p> Preencha os dados para cadastro.</p>
        
        <div class="field">
            <label for="nome">Seu Nome:</label>
            <input type="text" name="nome" placeholder="Digite seu nome" required>
        </div>
        
        <div class="field">
            <label for="CPF">Seu CPF:</label>
            <input type="text" name="CPF" placeholder="Digite seu CPF(Apenas Numeros)" pattern="[0-9]{11}" maxlength="11" required>
        </div>

        <div class="field">
            <label for="nasc">Sua Data de Nascimento:</label>
            <input type="date" id="nasc" name="nasc" required>
        </div> 
        
        <div class="field">
            <label for="email">Seu E-Mail:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu E-Mail" required>
        </div>
        
        <div class="field">
            <label for="telefone">Seu Telefone:</label>
            <input type="tel" id="telefone" name="telefone" placeholder="Digite seu Telefone"  required> 
        </div>

        <div class="field">
            <label for="endereco">Seu Endereço:</label>
            <input type="text" id="endereco" name="endereco" placeholder="R/T/Av, Logradouro, numero" required>
        </div>

        <div class="field">      
        <select name="estado" id="estado">    
            <option value="" selected = selected>Selecione seu estado</option>
            
            <?php
                $linha_estado = mysqli_fetch_assoc($dados_estados);
                $total_estado = mysqli_num_rows($dados_estados);

                if($total_estado > 0) {
                    do {
                        echo "<option value='".$linha_estado['uf']."'>".$linha_estado['estado']."</option>";
                    }while($linha_estado = mysqli_fetch_assoc($dados_estados));
                }
            ?>
        </select>
        </div>
        
        <div class="field">      
        <select name="cidade" id="cidade">    
            <option value="" selected = selected>Selecione seu cidade</option>
            
            <?php
                $linha_cidade = mysqli_fetch_assoc($dados_cidades);
                $total_cidade = mysqli_num_rows($dados_cidades);

                if($total_cidade > 0) {
                    do { 
                        echo "<option value='".$linha_cidade['cidade']."'>".$linha_cidade['cidade']."</option>";
                    }while($linha_cidade = mysqli_fetch_assoc($dados_cidades));
                }
            ?>
        </select>
        </div>

        <input type="submit" value="Cadastrar" >
    </form>
    <a href = "exibicao.php"><button>Usuarios cadastrados</button></a>

</body>
</html>
<?php
}
?>  