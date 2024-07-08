<?php
	
	// Verificando a existência de um arquivo
	echo "<h1>file_exists</h1><br>";
	if (file_exists('file_teste.txt')) {
    	echo "Arquivo encontrado";
	} else {
	    echo "Arquivo NÃO encontrado.";
	}

	echo "<hr><h1>file_put_contents</h1><br>";
	// sobreescrever ou criando um arquivo
	$content = "Novo conteúdo que sobreescreve o antigo conteúdo ou cria um novo \r\nTeste algum valor aqui = {121}";

	file_put_contents('file_teste2.txt',$content);

	echo "<hr><h1>file_get_contents</h1><br>";
	// como ler arquivos e armazenar dentro de uma variavel
	$content = file_get_contents('file_teste2.txt');
	echo nl2br($content);
	echo "<br>";
	echo nl2br(file_get_contents('file_teste.txt'));

	// requisições para sistemas externos
	// $content = file_get_contents('https://cursos.dankicode.com');
	// echo ($content);

	echo "<hr><h1>unlink: deletar Arquivo</h1><br>";
	unlink('file_teste2.txt');

?>