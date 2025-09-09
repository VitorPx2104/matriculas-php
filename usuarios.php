<?php
include_once("conexaodb.php"); 
?> 

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Título da página</title>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>Usuarios</h1>

    <h2>Usuarios cadastrados</h2>

    <h2>Adicionar novo usuario</h2>
    <form action="usuario_add.php" method="get">
        <label for="nome_usuario">Nome de usuário:</label> 
        <input type="text" id="nome_usuario" name="nome_usuario">
        <br>

        <label for="senha">Senha:</label> 
        <input type="password" id="senha" name="senha">
        <br>

        <label for="id_perfil">Perfil:</label> 
        <select id="id_perfil" name="id_perfil">
            <option value="0">--- selecione um perfil ---</option>
            <option value="1"> Adiministrador </option>
            <option value="2"> Auxiliar de matriculas </option>
            <option value="3"> Atendente </option>    
        </select>
        <br>
        
        <input type="submit">
    </form>
  </body>
</html>