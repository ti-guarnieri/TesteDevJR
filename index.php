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
            <option value="1">estado</option>
        </select>
        </div>
        <div class="field">
            <select name="cidade" id="cidade">
            <option value="1">estado</option>
        </select>
        </div>
        <input type="submit" value="Cadastrar" >
        
    </form>
</body>
</html>