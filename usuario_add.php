<?php 
// Escreva o conteudo recebido pelo formulario na tela 
var_dump($_GET);

$nome_usuario = $_GET["nome_usuario"];
$senha = $_GET["senha"];
$id_perfil = $_GET["id_perfil"];
echo("O nome de usuario é:n"  . $nome_usuario);
echo("A senha é: " . $senha. "<br>");
echo("O perfil é: ");
switch ($id_perfil) {
    case 1:
        echo "Adiministrador";
        break;
    case 2:
        echo "Auxiliar de matricula";
        break;
    case 3:
        echo "Atendente";
        break;
    default:
        //se não for nenhuma das opções (1, 2 ou 3)
        //encerre o codigo php (não processa nenhuma linha depois do "die")
        echo "Erro: Perfil invalido<br>";
        die("<a href='javascript:history.back()'>Voltar</a>");
}

if (empty($nome_usuario)) {
    echo "erro: O nome de usuario não pode estar vazio.";
    die("<a href='javascript:history.back()'>Voltar</a>");
}