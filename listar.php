<?php

session_start();

?>
<!DOCTYPE html>
  <html>
    <head>
	    <title> Lista de Pedidos </title>
      <meta charset="utf-8">
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
  <body style="background-color: #F0E68C">

	  <div class="container" style="margin-top: 40px">

    <center>
		  <h3>Seus Dados</h3>
		</center>

      <br>

		  <table class="table">
  			<thead>
    			<tr>
      			<th scope="col">Sabor</th>
      			<th scope="col">Valor</th>
      			<th scope="col">Forma de entrega</th>
      			<th scope="col">Nome</th>
      			<th scope="col">Sobrenome</th>
      			<th scope="col">Email</th>
      			<th scope="col">Telefone</th>
      			<th scope="col">Complemento</th>
            <th scope="col">Referencia</th>
            <th scope="col">Rua</th>
            <th scope="col">Número</th>
            <th scope="col">CEP</th>
            <th scope="col">Pagamento</th>
    			</tr>
  			</thead>

  					<?php

  						include ("conexao.php");
                $nome = $_SESSION['nome'];
                $sql = "SELECT * FROM pedidos WHERE nome='$nome'";
                $busca = mysqli_query($conexao, $sql);

						  while ($array = mysqli_fetch_assoc($busca)){
						    $sabor = $array['sabor'];
                $valor = $array['valor'];
                $entrega = $array['entrega'];
                $nome = $array['nome'];
						    $sobrenome = $array['sobrenome'];
						    $email = $array['email'];
						    $telefone = $array['telefone'];
						    $complemento = $array['complemento'];
                $referencia = $array['referencia'];
                $rua = $array['rua'];
						    $numero = $array['numero'];
                $cep = $array['cep'];
                $pagamento = $array['pagamento'];

					  ?>

  					  <tr>
    		    	  <td><?php echo $sabor ?></td>
    		    	  <td><?php echo $valor ?></td>
    		    	  <td><?php echo $entrega ?></td>
    		    	  <td><?php echo $nome ?></td>
    		    	  <td><?php echo $sobrenome ?></td>
    		    	  <td><?php echo $email ?></td>
    		        <td><?php echo $telefone ?></td>
    		    	  <td><?php echo $complemento ?></td>
                <td><?php echo $referencia ?></td>
                <td><?php echo $rua ?></td>
                <td><?php echo $numero ?></td>
                <td><?php echo $cep ?></td>                   	
                <td><?php echo $pagamento ?></td>

    		    	<td><a class="btn btn-warning btn-sm" href="alterar.php?nome=<?php echo $nome ?>" role="button">Editar</a></td>
    		      <td><a class="btn btn-warning btn-sm" href="deletar.php?nome=<?php echo $nome ?>" role="button">Excluir</a></td>

    		    <?php } ?>

    			   </tr>
		  </table>

	  </div>

    <br>

  	<div style="padding-top: 30px">
      	<center>
  			<a href="index.php" role="button" class="btn btn-danger">Tela Inicial</a>
  		</center>
  	</div>

	  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>