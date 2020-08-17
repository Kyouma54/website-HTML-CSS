<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Formularios</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/formularios.css">
	</head>
	<body>
		<div class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Formulários</h1>
				</div>
				<div class="panel-body">
					<form action="" method="post">
						<label for="texto">Text: </label>
						<!-- autofocus pagina inicia com foco no texto -->
						<!-- required força que input seja preenchida -->
						<!-- pattern CPF "\d{3}\.\d{3}\.\d{3}-\d{2}" -->
						<input type="text" name="texto" id="texto" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" autofocus="" required>
						
						<label for="senha">Password: </label>
						<!-- placeholder coloca palavra no fundo da input -->
						<input type="password" name="senha" id="senha" placeholder="Password">
						
						<label for="checkbox">Checkbox: </label>
						<input type="checkbox" name="checkbox" id="checkbox" checked>
						
						<label for="radio1">Radio 1</label>
						<input type="radio" name="radio" id="radio1">
						<label for="radio2">Radio 2</label>
						<input type="radio" name="radio" id="radio2">
						
						<label for="button">Button:</label>
						<input type="button" name="button" id="button" value="Clique aqui!">
						
						<!-- Submit com botão -->
						<label for="submit">Submit: </label>
						<input type="submit" name="submit" id="submit" value="Submit">
						
						<!-- Submit com imagem -->
						<label for="image">Image: </label>
						<input type="image" src="img/busca.png" name="image" id="image">
						
						<label for="reset">Reset: </label>
						<input type="reset" name="reset" id="reset" value="Resetar Formulario">
						<!-- Para o correto envio dos arquivos, muitas vezes também é
						necessário adicionar o atributo enctype="multipart/form-data" na tag <form> -->
						<label for="file">File: </label>
						<input type="file" name="file" id="file">
						
						<label for="hidden">Hidden: </label>
						<input type="hidden" name="hidden" id="hidden">
						
						<label for="textarea">TextArea: </label>
						<textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
						
						<label for="select">Select 1: </label>
						<select name="select" id="select">
							<option value="">Selecione a Cidade</option>
							<option value="bsb">Brasília</option>
							<option value="sp">São Paulo</option>
							<option value="rj">Rio de Janeiro</option>
						</select>
						
						<!-- multiple posso selecionar mais de uma opçao -->
						<label for="select2">Select 2: </label>
						<select multiple name="select2" id="select2">
							<option value="">Selecione a Cidade</option>
							<option value="bsb">Brasília</option>
							<option value="sp">São Paulo</option>
							<option value="rj">Rio de Janeiro</option>
						</select>

						<label for="select3">Select 3: </label>
						<select name="select3" id="select3">
							<option value="">Selecione a Cidade</option>
							<optgroup label="Brasília">
								<option value="asas">Asa Sul</option>
								<option value="asan">Asa Norte</option>
							</optgroup>
							<optgroup label="São Paulo">
								<option value="vlmariana">Vila Mariana</option>
								<option value="centrosp">Centro</option>
							</optgroup>
							<optgroup label="Rio de Janeiro">
								<option value="botafogo">Botafogo</option>
								<option value="centrorj">Centro</option>
							</optgroup>
						</select>

						<label for="email">Email: </label>
						<input type="email" name="email" id="email">
						
						<label for="number">Number: </label>
						<input type="number" name="number" id="number" max="100" step="5">
						
						<label for="url">URL: </label>
						<input type="url" name="url" id="url">

						<label for="range">Range: </label>
						<input type="range" name="range" id="range" min="1" max="20" step="2">
						
						<label for="date">Date: </label>
						<input type="date" name="date" id="date" pattern="">
						<label for="date">Month: </label>
						<input type="month" name="date" id="date">
						<label for="date">Week: </label>
						<input type="week" name="date" id="date">
						<label for="date">Time: </label>
						<input type="time" name="date" id="date">
						<label for="date">Datetime-local: </label>
						<input type="datetime-local" name="date" id="date">
							
						<label for="color">Color: </label>
						<input type="color" name="color" id="color">
						
						<label for="search">Search: </label>
						<input type="search" name="search" id="search" result="10">
						
						<label for="telefone">Telefone: </label>
						<input type="tel" name="telefone" id="telefone">
					</form>			
				</div>
			</div>
		</div>
	</body>
</html>