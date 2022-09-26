<?php 

	include 'conexao.php';

		$nome = $_GET['nome'];
		$excluir = "DELETE FROM `pedidos` WHERE nome = '$nome'";
		$result_pedidos = mysqli_query($conexao, $excluir);

	if(mysqli_affected_rows($conexao)){
	echo "
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    <div class='container' style='width: 500px; margin-top: 30px'>
	
	<h4>Seu pedido foi cancelado com sucesso! :) <3</h4><br>
    <div style='padding-top: 30px'>
    	<center>
			<a href='index.php' role='button' class='btn btn-danger'>Tela Inicial</a>
		</center>
	</div>";
	}else{
	echo "Deu merda";
	}

?>