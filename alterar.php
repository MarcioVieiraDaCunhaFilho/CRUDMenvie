<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("conexao.php");
$usuario = selectIdUsuario($_POST["id"]);



?>
<form name="dadosusuarios" action="conexao.php" method="POST">
    <table border="1">
        <tbody>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" value=<?=$usuario["nome"]?> size="20" /></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value=<?=$usuario["email"]?> size="20" /></td>
            </tr>
            <tr>
                <td>Telefone:</td>
                <td><input type="text" name="telefone" value=<?=$usuario["telefone"]?> size ="20" /></td>
            </tr>
            <tr>
                <td><input type="hidden" name="acao" value="alterar" />
                    <input type="hidden" name="id" value="<?=$usuario["id"]?>" />
                </td>
                <td><input type="submit" value="Enviar" name="Enviar" /></td>
            </tr>
        </tbody>
    </table>

</form>
