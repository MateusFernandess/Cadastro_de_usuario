<?php
    require 'config.php';

    $id = 0;

    //Pegando o ID
        if(isset($_GET['id']) && empty($_GET['id']) == false){
            $id = addslashes($_GET['id']);
        }

    //Verifica e atualiza os dados
        if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);

            $sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
            $pdo->query($sql);

           header ("Location: index.php");

        }

    //Comando que vai mostrar o que tem em cada campo
        $sql = "SELECT * FROM usuarios WHERE id = '$id'";
        $sql = $pdo->query($sql);

        if($sql->rowCount() > 0 ){
            $dado = $sql->fetch();
        } else {
            header ("Location: index.php");
        }

?>

<form method="POST">
    Nome<br/>
        <input type="text" name="nome" value="<?php echo $dado['nome']; ?>">
        <br><br>
    E-mail<br/>
        <input type="email" name="email" value="<?php echo $dado['email']; ?>">
        <br><br>

        <input type="submit" value="Atualizar">
</form>