<?php

// obter informações do arquivo do fomulario
$nome_arquivo = basename($_FILES['arquivo']['name']);
$extensão_arquivo = substr($nome_arquivo, strpos($nome_arquivo, '.') + 1);
$tamanho_arquivo = $_FILES['arquivo']['size']/1024;

// validar a extenção do arquivo
if ($extensão_arquivo != 'pdf') {
	// erro
}

// copiar o arquivo para pasta temporaria
$caminho_tmp = __DIR__ . '/tmp/';
$caminho_arquivo_tmp = $_FILES['arquivo']['tmp_name'];
$caminho_arquivo_uploaded_tmp = $caminho_tmp . $nome_arquivo;

// var_dump($_FILES['arquivo']['tmp_name']);
if (!copy($caminho_arquivo_tmp, $caminho_arquivo_uploaded_tmp)) {
	// erro
}