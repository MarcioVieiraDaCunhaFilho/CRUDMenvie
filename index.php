<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php include("conexao.php");
        $grupo = selectTodosUsuarios();
        var_dump($grupo);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Bem vindo ao CrudMenvie</h1>
        <a href="inserir.php">Adicionar usuário</a>
        <table border="1">
            <thead>
                <tr>
                    <th>nome</th>
                    <th>email</th>
                    <th>telefone</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($grupo as $usuario) { ?>
                    <tr>
                    <td><?=$usuario["nome"]?></td>
                    <td><?=$usuario["email"]?></td>
                    <td><?=$usuario["telefone"]?></td>
                    <td><form name="alterar" action="alterar.php" method="POST">
                            <input type="hidden" name="id" value=<?=$usuario["id"]?> />
                            <input type="submit" value="Editar" name="editar" />
                            </form></td>
                            <td>
                                <form name="excluir" action="conexao.php" method="POST">
                                    <input type="hidden" name="id" value="<?=$usuario["id"]?>" />
                                    <input type="hidden" name="acao" value="excluir" />
                                    <input type="submit" value="Excluir" name="excluir" />
                                    </form>
                                
                            </td>
                    </tr>      
                
                
                <?php     }
                
            ?>
                    
                    
            </tbody>
        </table>

        
        <?php
        // put your code here
        ?>
    </body>
</html>
