<?php

$nomeservidor = "localhost"; //padrão servidor local
$nomeusuario = "root"; // padrão - root
$senha = ""; //senha de conexão do banco de dados
$bancodedados = "delivery"; //nome do seu banco de dados
// Criar conexão

$conexao = mysqli_connect($nomeservidor, $nomeusuario, $senha, $bancodedados);

?>