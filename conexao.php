<?php //ARQUIVO DE CONEXÃO COM O BANCO

$hostname = "localhost"; //se voce estiver usando um servidor
$user = "root"; // usuário root
$password = ""; // meu banco nao possui senha entao fica em
$database = "bd_cadastroCliente"; //adiciona ao banco de dados
$conexao = mysqli_connect($hostname,$user,$password,$database);

    if(!$conexao){
        echo "falha na conexao com o banco de dados";
    }
?>
