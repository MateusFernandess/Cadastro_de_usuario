<?php
    require 'config.php';

    //verificando se enviou o ID e executa o comando
    if(isset($_GET['id']) && empty($_GET['id']) == false) {
        $id = addslashes($_GET['id']);

        $sql = "DELETE FROM usuarios WHERE id = '$id'";
        $pdo->query($sql);

        header ("Location: index.php");

    } else {
        header ("Location: index.php");
    }

?>
