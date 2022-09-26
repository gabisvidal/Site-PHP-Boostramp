<?php 
session_start();

include 'conexao.php';

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

	$_SESSION['nome'] = $nome;

 	$sql = "INSERT INTO `pedidos`(`sabor`, `valor`, `entrega`, `nome`, `sobrenome`, `email`, `telefone`, `complemento`, `referencia`, `rua`,`numero`, `cep`, `pagamento`) VALUES ('$sabor','$valor','$entrega','$nome','$sobrenome','$email','$telefone','$complemento', '$referencia', '$rua','$numero', '$cep', '$pagamento')";

	$salvar = mysqli_query($conexao, $sql);

	if(mysqli_affected_rows($conexao)){
	echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    <div class='container' style='width: 500px; margin-top: 30px'>
	
	<h4>Seu pedido foi salvo com sucesso! :) <3</h4><br>
    <div style='padding-top: 30px'>
    	<center>
			<a href='index.php' role='button' class='btn btn-danger'>Tela Inicial</a>
		</center>
		<br>
		<center>
			<a href='listar.php' role='button' class='btn btn-danger'>Ver pedido</a>
		</center>

	</div>";
	}else{
		echo "Deu merda";
	}

?>