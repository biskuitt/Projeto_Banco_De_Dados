<?php 

include_once("conexao.php");

$Nome = $_POST['Nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$sql = "INSERT INTO tb_clientes (nome, email, telefone, endereco, cidade, estado)
VALUES('$Nome','$email','$tel','$endereco','$cidade','$estado');";

$salvar = mysqli_query($conexao,$sql);
$linhas = mysqli_affected_rows($conexao);


mysqli_close($conexao);

if($linhas == 1){
    echo '<h3>Sucesso! Formulário Enviado: </h3> <br>
            <h5>Preenchido por '.$Nome.' - <br>
                     E-mail: '.$email.' <br>
                     Telefone: '.$tel.' - <br>
                     Endereço : '.$endereco.' - Em '.$cidade.' - estado de: '.$estado.' <br></h5>
    <a href="index.html"> <img src=""></a>';
}
else{
    echo '<h2>Erro</h2><h5>Consulte um administrador:</h5>
    <a href="index.html"> <img src=""></a>';
}
//header("Location:index.html"):
?>
