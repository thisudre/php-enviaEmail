<!-- Layout -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


<?php

/* Valores recebidos do formulário  */
$arquivo = $_FILES['arquivo'];
$nome = $_POST['nome'];
$replyto = $_POST['replyto']; // Email que será respondido
$assunto = $_POST['assunto'];

/* Destinatário e remetente - EDITAR SOMENTE ESTE BLOCO DO CÓDIGO */
$to = "thiagoty@gmail.com";
$remetente = "thiagoty@gmail.com"; // Deve ser um email válido do domínio

/* Cabeçalho da mensagem  */
$boundary = "XYZ-" . date("dmYis") . "-ZYX";
$headers = "MIME-Version: 1.0\n";
$headers.= "From: $remetente\n";
$headers.= "Reply-To: $replyto\n";
$headers.= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n";  
$headers.= "$boundary\n"; 

/* Layout da mensagem  */
$corpo_mensagem = " 
	<br>Formulário via site
	<br>--------------------------------------------<br>
	<br><strong>Nome:</strong> $nome
	<br><strong>Email:</strong> $replyto
	<br><strong>Assunto:</strong> $assunto
	<br><br>--------------------------------------------
";

/* Função que codifica o anexo para poder ser enviado na mensagem  */
if(file_exists($arquivo["tmp_name"]) and !empty($arquivo)){
	
	$fp = fopen($_FILES["arquivo"]["tmp_name"],"rb"); // Abre o arquivo enviado.
	$anexo = fread($fp,filesize($_FILES["arquivo"]["tmp_name"])); // Le o arquivo aberto na linha anterior
	$anexo = base64_encode($anexo); // Codifica os dados com MIME para o e-mail 
	fclose($fp); // Fecha o arquivo aberto anteriormente
	$anexo = chunk_split($anexo); // Divide a variável do arquivo em pequenos pedaços para poder enviar
	$mensagem = "--$boundary\n"; // Nas linhas abaixo possuem os parâmetros de formatação e codificação, juntamente com a inclusão do arquivo anexado no corpo da mensagem
	$mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
	$mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
	$mensagem.= "$corpo_mensagem\n"; 
	$mensagem.= "--$boundary\n"; 
	$mensagem.= "Content-Type: ".$arquivo["type"]."\n";  
	$mensagem.= "Content-Disposition: attachment; filename=\"".$arquivo["name"]."\"\n";  
	$mensagem.= "Content-Transfer-Encoding: base64\n\n";  
	$mensagem.= "$anexo\n";  
	$mensagem.= "--$boundary--\r\n"; 
}
else // Caso não tenha anexo
{
	$mensagem = "--$boundary\n"; 
	$mensagem.= "Content-Transfer-Encoding: 8bits\n"; 
	$mensagem.= "Content-Type: text/html; charset=\"utf-8\"\n\n";
	$mensagem.= "$corpo_mensagem\n";
}

/* Função que envia a mensagem  */
if(mail($to, $assunto, $mensagem, $headers))
{
	echo "<br><br><center><b><font color='green'>Mensagem enviada com sucesso!";
} 
else
{
	echo "<br><br><center><b><font color='red'>Ocorreu um erro ao enviar a mensagem!";
}
?>