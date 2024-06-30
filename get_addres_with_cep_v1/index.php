<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> MEU CEP </title>
</head>
	<body> 
		<!-- ERRO 1: REF AO NOME DO ARQUIVO PHP ESTA ERRADA action="idex.php"
		O CORRETO E action="index.php"-->
		<form action="index.php" method="post">
			<label> Insira o CEP: </label>
			<input type="text" name="cep">
			<input type="submit" value="Enviar">
		</form>
		<!-- ERRO 2: A TAG FORM FOI ABERTA, MAS NAO FOI FECHADA, APOS O INPUT ENVIAR, 
		COLOCAR O /FORM -->
		<!-- ERRO DE BOAS PRATICAS: APOS COLOCAR O /FORM DAR TAB NAS TAG LABEL, E INPUTS 
		PARA FICAR COM UMA MELHOR VISUALIZACAO  E SEGUIR NORMAS HTML DE BOAS PRATICAS-->
		<!-- ERRO DE BOAS PRATICAS: IMPORTACAO CORRETA DO HTML USANDO O ! PARA COLOCAR OS
		DOCTYPE .., BOAS PRATICAS DE HTML ESSA IMPORTACAO-->
	</body>
</html>

<?php

if(!empty($_POST['cep'])){
	
	$cep = $_POST['cep'];

	// ERRO 3: REFERENCIA A VARIAVEL CEP ESTA ERRADA get_address($cp)
	// O CORRETO E get_address($cep)
	$address = (get_address($cep));

	// ERRO 4: REFERENCIA A VARAVEL ADDRES ESTA ERRADA $addres->logradoro E $adress->uf
	// O CORRETO E $address->logradoro E $address->uf
	// ERRO 5: REFERENCIA AO ATRIBUTO DA VARAVEL ADDRES ESTA ERRADA $addres->logradoro
	// O CORRETO E $address->logradouro
	echo "<br><br>CEP Informado: $cep<br>";
	echo "Rua: $address->logradouro<br>";
	echo "Bairro: $address->bairro<br>";
	echo "Estado: $address->uf<br>";
}

function get_address($cep){
	$cep = preg_replace("/[^0-9]/", "", $cep);
	// ERRO 6: ERRO NA URL "http://viacep.com.br/ws$cep/xml/"
	// O CORRETO E "http://viacep.com.br/ws/$cep/xml/"
	$url = "http://viacep.com.br/ws/$cep/xml/";

	$xml = simplexml_load_file($url);
	return $xml;
}

?>