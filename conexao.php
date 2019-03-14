<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if(isset ($_POST["acao"])){
    if ($_POST["acao"] == "inserir") {
        inserirUsuario();
    }
    if($_POST["acao"] === "alterar") {
        alterarUsuario();       
    }
    if($_POST["acao"] == "excluir") {
        excluirUsuario();
    }
}
function abrirBanco(){
    $conexao = new mysqli("localhost", "root","", "crudmeinve");
    return $conexao;
}
function inserirUsuario(){
    $banco = abrirBanco() ;
    $sql = "INSERT INTO usuario(nome, email, telefone)"
            . " VALUES ('{$_POST["nome"]}','{$_POST["email"]}','{$_POST["telefone"]}')";
    $banco->query($sql);
    $banco->close();    
    voltarIndex();
}

function alterarUsuario(){
    $banco = abrirBanco() ;
    $sql = "UPDATE usuario SET nome ='{$_POST["nome"]}',"
        . "email='{$_POST["email"]}', telefone = '{$_POST["telefone"]}' WHERE id ='{$_POST["id"]}'";
    $banco->query($sql);
    $banco->close();    
    voltarIndex();
}

function excluirUsuario(){
    $banco = abrirBanco() ;
    $sql = "DELETE FROM usuario WHERE id='{$_POST["id"]} ' ";
    $banco->query($sql);
    $banco->close();    
    voltarIndex();
}
function selectTodosUsuarios(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM usuario ORDER BY nome";
    $resultado = $banco->query($sql);
    while ($row = mysqli_fetch_array($resultado)){
        $grupo[] = $row;
    }
    return $grupo;
}

function selectIdUsuario($id){
    $banco = abrirBanco();
    $sql = "SELECT * FROM usuario WHERE id =".$id;
    $resultado = $banco->query($sql);
    $usuario = mysqli_fetch_assoc($resultado);            
    return $usuario;
}

function voltarIndex(){
header("Location: index.php");
}

  