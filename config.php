<?php

$servername = ''; //Nome do servidor utilizado
$username = ''; //Nome do usuário do Banco de Dados utilizado
$password = ''; //Senha do usuário do Banco de Dados utilizado
$dbname = ''; //Nome do Banco de Dados utilizado

$conexao = new mysqli($servername, $username, $password, $dbname);

//Prova real de Conexão -> Utilize para testar a conexão com o Banco de Dados
//  if($conexao->connect_errno){
//      echo "Erro";
//  }else {
//      echo "Conectado";
//  }
?>