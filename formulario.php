<!DOCTYPE html>
  <html>
    <head>
    <meta charset="utf-8">
	  <title> Tela de Pedido </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
  <body style="background-color: #F0E68C">

    <div class="container" id="tamanhoContainer" style="margin-top: 40px">

      <div style="text-align: left;">
        <a href="index.php" role= "button" class="btn btn-danger">Voltar</a>
      </div>

      <form action="salvar.php" method="post" style="margin-top: 40px">

      <h5>Sobre o seu Pedido</h5>
    <br>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Sabor</label>
            <select class="form-control" name="sabor">
              <option>4 Queijos</option>
              <option>Calabresa</option>
              <option>Pepperoni</option>
              <option>Vegetariana</option>
              <option>Frango</option>
              <option>Mussarela</option>                     
            </select>
          </div>
          <div class="form-group col-md-4">
            <label>Valor</label>
            <select class="form-control" name="valor">
              <option>Pequena - 13,00</option>
              <option>Média - 18,00</option>
              <option>Grande - 24,00</option>                    
            </select>
          </div>
          <div class="form-group col-md-4">
            <label>Taxa de entrega</label>
            <select class="form-control" name="entrega">
              <option>Rápida - 7,00</option>
              <option>Lenta - 4,00</option>                     
            </select>
          </div>
        </div>

    <br>      
      <h5>Seus Dados</h5>
    </br>

      	<div class="form-row">
    	    <div class="form-group col-md-4">
      		  <label>Nome</label>
      			  <input type="text" class="form-control" name="nome" placeholder="Informe seu nome" required autocomplete="off">
    	    </div>
    	    <div class="form-group col-md-4">
      		  <label>Sobrenome</label>
      			  <input type="name" class="form-control" name="sobrenome"placeholder="Informe seu sobrenome" required autocomplete="off">
    	    </div>
          <div class="form-group col-md-4">
            <label>Email</label>
              <input type="email" class="form-control" name="email" placeholder="Informe seu email" required autocomplete="off">
          </div>
  		  </div>

  		  <div class="form-row">
    	    <div class="form-group col-md-4">
      		  <label>Telefone</label>
      			   <input type="tel" class="form-control" name="telefone" placeholder="Informe seu telefone" required autocomplete="off">
          </div>
          <div class="form-group col-md-4">
          <label>Complemento</label>
            <input type="text" class="form-control" name="complemento" placeholder="Casa, apartamento, estúdio ou andar" required autocomplete="off">
          </div>
          <div class="form-group col-md-4">
            <label>Ponto de referencia</label>
               <input type="text" class="form-control" name="referencia" placeholder="Diga um ponto de referencia" required autocomplete="off">
          </div>
  		  </div>

        <div class="form-row">
    	    <div class="form-group col-md-4">
      		  <label>Rua</label>
      			   <input type="rua" class="form-control" name="rua" placeholder="Informe a rua da sua residencia" required autocomplete="off">
    	    </div>
    	    <div class="form-group col-md-4">
      		  <label>Número</label>
      			  <input type="text" class="form-control" name="numero" placeholder="Informe o número da sua residencia" required autocomplete="off">
    	    </div>
          <div class="form-group col-md-4">
            <label>CEP</label>
              <input type="text" class="form-control" name="cep" placeholder="Informe seu cep" required autocomplete="off">
          </div>

  		  </div>

    <br>
      <h5>Forma de Pagamento</h5>
    </br>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label>Pagamento</label>
            <select class="form-control" name="pagamento">
              <option>Crédito</option>
              <option>Débito</option>
              <option>Dinheiro</option>                     
            </select>
          </div>
        </div>

    <br>

  		  <button type="submit" class="btn btn-danger">Continuar</button>
		  </form>

    <br></br>

	  </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  </body>
</html>