<?php

include_once("conexao.php");

$id = $_GET["id"];
$result_pessoa = "SELECT * from pessoas where id = '$id'";
$resultado_pessoa = mysqli_query($conn, $result_pessoa);
$linha_pessoa = mysqli_fetch_assoc($resultado_pessoa);
$estados = "SELECT * FROM estados";
$cidades = "SELECT * FROM cidades";
$dados_estados = mysqli_query($conn,$estados) or die(mysqli_error());
$dados_cidades = mysqli_query($conn,$cidades) or die(mysqli_error());

?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Editar cadastro</title>	
        <link rel="stylesheet" type="text/css" href="estilo.css">
	
	</head>
	<body>
		<a href="index.php">Cadastrar</a><br>
		<a href="exibicao.php">Listar</a><br>
		<h1>Editar cadastro</h1>
	
	<form class='formulario' method="post" action="processa_edicao.php"> 
        <p> Preencha os dados para cadastro.</p>

        <input type="hidden" name="id" value="<?php echo $linha_pessoa['id']; ?>">

        
        <div class="field">
            <label for="nome">Seu Nome:</label>
            <input type="text" name="nome" placeholder="Digite seu nome" value="<?php echo $linha_pessoa['nome']; ?>" required>
        </div>
        
        <div class="field">
            <label for="CPF">Seu CPF:</label>
            <input type="text" name="CPF" placeholder="Digite seu CPF(Apenas Numeros)" value="<?php echo $linha_pessoa['CPF']; ?>" pattern="[0-9]{11}" maxlength="11" required>
        </div>

        <div class="field">
            <label for="nasc">Sua Data de Nascimento:</label>
            <input type="date" id="nasc" name="nasc" value="<?php echo $linha_pessoa['nasc']; ?>"required>
        </div> 
        
        <div class="field">
            <label for="email">Seu E-Mail:</label>
            <input type="email" id="email" name="email" placeholder="Digite seu E-Mail" value="<?php echo $linha_pessoa['email']; ?>" required>
        </div>
        
        <div class="field">
            <label for="telefone">Seu Telefone:</label>
            <input type="tel" id="telefone" name="telefone" placeholder="Digite seu Telefone" value="<?php echo $linha_pessoa['telefone']; ?>" required> 
        </div>

        <div class="field">
            <label for="endereco">Seu Endereço:</label>
            <input type="text" id="endereco" name="endereco" placeholder="R/T/Av, Logradouro, numero" value="<?php echo $linha_pessoa['endereco']; ?>"required>
        </div>

        <div class="field">      
        <select name="estado" id="estado">    
            <option value="" selected = selected><?php echo $linha_pessoa['estado']; ?></option>
            
            <?php
                $linha_estado = mysqli_fetch_assoc($dados_estados);
                $total_estado = mysqli_num_rows($dados_estados);

                if($total_estado > 0) {
                    do {
                        echo "<option value='".$linha_estado['uf']."'>".$linha_estado['uf']."</option>";
                    }while($linha_estado = mysqli_fetch_assoc($dados_estados));
                }
            ?>
        </select>
        </div>
        
        <div class="field">      
        <select name="cidade" id="cidade">    
            <option value="" selected = selected><?php echo $linha_pessoa['cidade']; ?></option>
            
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

        <input type="submit" value="Salvar Edição" >
    </form>
	</body>
</html>