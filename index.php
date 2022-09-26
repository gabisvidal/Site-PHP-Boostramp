<!DOCTYPE html>
	<html>
		<head>
      <meta charset="utf-8">
			<title> Tela Inicial </title>
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		</head>
		<body style="background-color: #F0E68C">

      <div class="jumbotron text-center" style="background-color: #DC143C">
        <h1 style="color: #FFFFFF">Fast Pizza</h1>
          <p style="color: #FFFFFF">Sua pizza deliciosa entregue de forma rápida e segura na sua casa!</p>
      </div>

				<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #FF6347">
          <a class="navbar-brand" href="#">Fast Pizza</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="cardapio.php">Cardápio<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="formulario.php">Fazer Pedido<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="infor.php">Taxa de entrega<span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>

    <br></br>

      <div class="container" style="width: 90%; margin-top: 0px">
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Informações de Entrega</h5>
                <p class="card-text">Aqui você confere os requisitos para nossos tipos de entrega e como funcionam as taxas.</p>
                <a href="infor.php" class="btn btn-danger">Conferir</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Se você já sabe o que quer</h5>
                <p class="card-text">Vá direto para a tela de pedido clicando nesse botão sem passar pelo cardápio.</p>
                <a href="formulario.php" class="btn btn-danger">Vamos lá</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <br>

	  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>