<?php
//Faz a conex�o com o Banco
require 'config.php';
?>
<h1>Usu�rios<h1>
    <a href="adicionar.php">Adicionar Usu�rio</a>
<table border="1" width="100%">
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>A��es</th>
            </tr>
            <?php
                $sql = "SELECT * FROM usuarios";
                $sql = $pdo->query($sql);

                if($sql->rowCount() > 0) {
                    foreach($sql->fetchAll() as $usuarios){
                        echo '<tr>';
                        echo '<td>'.$usuarios['nome'].'</td>';
                        echo '<td>'.$usuarios['email'].'</td>';
                        echo '<td><a href="editar.php?id='.$usuarios['id'].'">Editar</a> - <a href="excluir.php?id='.$usuarios['id'].'">Excluir</a>';
                        echo'</tr>';
                    };
                };
            ?>
</table>