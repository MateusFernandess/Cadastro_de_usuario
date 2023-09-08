<?php
    // Faz a conexão com o Banco
    require 'config.php';

    //Pegando os dados para inserir 
    if(isset($_POST['nome']) && empty($_POST['nome']) == false){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));

        $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
        $pdo->query($sql);

        header("Location: index.php");
    }
?>
<form method="POST">
    Nome<br/>
        <input type="text" name="nome">
        <br><br>
    E-mail<br/>
        <input type="email" name="email">
        <br><br>
    Senha<br/>
        <input type="password" name="senha">
        <br><br>

        <input type="submit" value="Cadastrar">
</form>