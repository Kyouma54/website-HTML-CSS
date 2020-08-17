<!DOCTYPE HTML>
<html>
	<head>
		<title><?php print $cabecalho_title; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 320px)">
		<?php print @$cabecalho_css ?>
	</head>
	<body>
		<!-- Cabeçalho -->
		<header class="container">
			<h1><img src="img/logo.png" alt="Mirror Fashion"></h1>
			<p class="sacola">
				Nenhum item na sacola de compras
			</p>
			<nav class="menu-opcoes">
				<ul>
					<li><a href="#">Sua Conta</a></li>
					<li><a href="#">Lista de Desejos</a></li>
					<li><a href="#">Cartão Fidelidade</a></li>
					<li><a href="sobre.html">Sobre</a></li>
					<li><a href="#">Ajuda</a></li>
				</ul>
			</nav>
		</header>