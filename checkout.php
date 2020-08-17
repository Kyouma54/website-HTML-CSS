<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Checkout</title>
		<meta name="vieport" content="width=device-width">
		<link rel="stylesheet" href="css/bootstrap-flatly.css">
		<style>
			.navbar{
				margin: 0;
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-id">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Mirror Fashion</a>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse-id">
				<ul class="nav navbar-nav">
					<li class="active">
						<a href="sobre.php">Sobre</a>
					</li>
					<li>
						<a href="#">Ajuda</a>
					</li>
					<li>
						<a href="#">Perguntas Frequentes</a>
					</li>
					<li>
						<a href="#">Entre em contato</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="jumbotron">
			<div class="container">
				<h1>Ótima escolha!</h1>
				<p>
					Obrigado por comprar na Mirror Fashion!
					Preencha seus dados para efetivar a compra.
				</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-lg-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 class="panel-title">Sua Compra</h2>
						</div>
						<div class="panel-body">
							<img src="img/produtos/foto1-rosa.png" class="img-responsive img-thumbnail hidden-xs">
							<dl>
								<dt>Nome</dt>
								<dd>
									<?= $_GET['nome'] ?>
								</dd>
								<dt>Preço</dt>
								<dd id="preco">
									<?= $_GET['preco'] ?>
								</dd>
								<dt>Cor</dt>
								<dd>
									<?= $_GET['cor'] ?>
								</dd>
								<dt>Tamanho</dt>
								<dd>
									<?= $_GET['tamanho'] ?>
								</dd>
							</dl>
							<div class="form-group">
								<label for="qtd">Quantidade</label>
								<input class="form-control" type="number" id="qtd" min="0" max="99" value="1">
							</div>
							<div class="form-group">
								<label for="total">Total</label>
								<output for="qtd preco" class="form-control" id="total">
									<?= $_GET['preco'] ?>
								</output>
							</div>
						</div>
					</div> <!-- fim panel panel-default -->
				</div> <!-- fim col-sm-4 col-lg-3 -->
				
				<div class="col-sm-8 col-lg-9">
					<form action="">
						<div class="row">
							<div class="col-md-6">
								<fieldset>
									<legend>Dados Pessoais</legend>
									<div class="form-group">
										<label for="nome">Nome Completo</label>
										<input type="text" class="form-control" id="nome" name="nome" autofocus required>
									</div>

									<div class="form-group">
										<label for="email">Email</label>
										<div class="input-group">
											<span class="input-group-addon">@</span>
											<input type="email" class="form-control" name="email" id="email" placeholder="email@exemplo.com">
										</div>
										
									</div>

									<div class="form-group">
										<label for="cpf">CPF</label>
										<input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required>
									</div>

									<div class="checkbox">
										<label for="spam">Quero receber spam da Mirror Fashion</label>
										<input type="checkbox" value="sim" name="spam" checked>
									</div>
								</fieldset>
							</div><!-- fim col-md-6 -->
							
							<div class="col-md-6">
								<fieldset>
									<legend>Cartão de Crédito</legend>
									
									<div class="form-group">
										<label for="numero-cartao">Número - CVV</label>
										<input type="text" class="form-control" name="numero-cartao" id="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
									</div>

									<div class="form-group">
										<label for="bandeira-cartao">Bandeira</label>
										<select class="form-control" name="bandeira-cartao" id="bandeira-cartao">
											<option value="master">Mastercard</option>
											<option value="visa">VISA</option>
											<option value="amex">American Express</option>
										</select>
									</div>

									<div class="form-group">
										<label for="validade-cartao">Validade</label>
										<input type="month" class="form-control" id="validade-cartao" nome="validade-cartao">
									</div>
								</fieldset>
							</div> <!-- fim col-md-6 -->
						</div> <!-- fim row -->
						<button type="submit" class="btn btn-success btn-lg pull-right">
							<span class="glyphicon glyphicon-thumbs-up"></span>
							Confirmar Pedido 
						</button>
					</form>
				</div> <!-- fim col-sm-8 col-lg-9 -->
			</div> <!-- fim row -->
		</div> <!-- fim container -->

		<!-- Javascript -->

		<!-- jquery -->
		<script src="js/jquery.js"></script>
		<!-- bootstrap -->
		<script src="js/bootstrap.js"></script>
		<!-- total.js -->
		<script src="js/total.js"></script>

		<script src="js/inputmask-plugin.js"></script>
	</body>
</html>