<?php
	
	// Criar Pastas
	echo "<h1>mkdir: Cria diretorios(\"pastas\")</h1><br>";
	mkdir("Nova_Pasta");

	// Deletar Pastas
	echo "<hr><h1>rmdir: Deleta diretorios(\"pastas\")</h1><br>";
	rmdir("Nova_Pasta");

	// Verificar se existe e é uma pasta valida
	echo "<hr><h1>is_dir(): Verificar se pasta existe</h1><br>";
	if (is_dir("Nova_Pasta")) {
    	echo "Pasta encontrado e valida";
	} else {
	    echo "Pasta NÃO encontrada.";
	}	

	// Listar arquivos de uma pasta
	echo "<hr><h1>readdir(): Listar arquivos de uma pasta</h1><br>";
	if ($handle = opendir('teste')) {
    echo "Manipulador de diretório: $handle<br>";
    echo "Arquivos:<br>";

    /* Esta é a forma correta de percorrer o diretório */
    while (false !== ($entry = readdir($handle))) {
        echo "$entry<br>";
    }

    /* Esta é a forma INCORRETA de percorrer o diretório */
    // while ($entry = readdir($handle)) {
    //     echo "$entry\n";
    // }

    closedir($handle);
}

?>