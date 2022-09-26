<?php 
session_start();

include("conexao.php");

	$sabor = $_POST['sabor'];
	$valor = $_POST['valor'];
	$entrega = $_POST['entrega'];
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$complemento = $_POST['complemento'];
	$referencia = $_POST['referencia'];
	$rua = $_POST['rua'];
	$numero = $_POST['numero'];
	$cep = $_POST['cep'];
	$pagamento = $_POST['pagamento'];


$sql = "UPDATE pedidos SET sabor='$sabor', valor= '$valor', entrega= '$entrega', nome= '$nome', sobrenome= '$sobrenome', email= '$email', telefone= '$telefone', complemento= '$complemento', referencia= '$referencia', rua= '$rua', numero= '$numero', cep= '$cep', pagamento= '$pagamento' WHERE nome= '$nome'";

$atualizar = mysqli_query($conexao, $sql);

if(mysqli_affected_rows($conexao)){
	echo "
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    <div class='container' style='width: 500px; margin-top: 30px'>
	
	<h4>Seu pedido foi atualizado com sucesso! :) <3</h4><br>
    <div style='padding-top: 30px'>
    	<center>
			<a href='index.php' role='button' class='btn btn-danger'>Tela Inicial</a>
		</center>
	</div>";
}else{
	echo "Deu merda";
}

?>
