<?php 
    setcookie("Permitir-COOKIE", "Autorizado", time()+60 );
    session_start();
    $_SESSION["teste"] = "FUNCIONOU";

    //------------------------------------------------------------------------------------------------------

    //GET - Quando o cliente deseja obter recursos do servidor
    echo "O array $_GET é usado para coletar dados enviados por meio do método GET em um formulário HTML. Os dados enviados por GET são visíveis na URL e geralmente são usados para solicitar informações do servidor.";
    // URL: example.com/index.php?name=John&age=25
    var_dump($_GET);

    //------------------------------------------------------------------------------------------------------

    //POST - Quando o cliente deseja enviar dados para processamento ao servidor
    echo "O array $_POST é usado para coletar dados enviados por meio do método POST em um formulário HTML. Os dados enviados por POST não são visíveis na URL e são usados para enviar informações sensíveis ou grandes volumes de dados."
    var_dump($_POST);

    //------------------------------------------------------------------------------------------------------

    //REQUEST - GET+POST+COOKIE
    echo "O array $_REQUEST é uma combinação de $_GET, $_POST e $_COOKIE. Ele contém os dados de todas essas superglobais e é útil quando você não sabe de antemão qual método será usado para enviar os dados."
    var_dump($_REQUEST);

    //------------------------------------------------------------------------------------------------------

    echo "O array $_COOKIE é usado para acessar os cookies enviados pelo navegador do cliente. Cookies são pequenos arquivos armazenados no navegador do cliente e podem ser usados para manter dados entre as requisições."
    var_dump($_COOKIE);

    //------------------------------------------------------------------------------------------------------

    echo "O array $_SESSION é usado para armazenar dados de sessão que persistem entre requisições. Sessões são úteis para manter informações do usuário enquanto ele navega pelo site.";
    var_dump($_SESSION);  

    //------------------------------------------------------------------------------------------------------

    echo "O array $_SERVER contém informações sobre o servidor e o ambiente de execução, como cabeçalhos, caminhos e localizações de scripts.";
    var_dump($_SERVER);    

    // Acessando informações do servidor
    echo "PHP Self: " . $_SERVER['PHP_SELF'] . "<br>";
    echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
    echo "HTTP Host: " . $_SERVER['HTTP_HOST'] . "<br>";
    echo "HTTP User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
    echo "Script Name: " . $_SERVER['SCRIPT_NAME'] . "<br>";


    //------------------------------------------------------------------------------------------------------

    echo "O array $_ENV é usado para acessar variáveis de ambiente do servidor. Essas variáveis são definidas fora do PHP e podem ser usadas para configurar o ambiente de execução do script.";
    var_dump($_ENV);

    //exemplo

    // Acessando variáveis de ambiente
    echo "Home: " . $_ENV['HOME'] . "<br>";
    echo "Path: " . $_ENV['PATH'] . "<br>";

    //---------------------------------------------------------------------------------------------------

    echo "O array $GLOBALS é uma superglobal que contém referências a todas as variáveis disponíveis no escopo global do script. Ele é útil para acessar variáveis globais de dentro de funções ou métodos.";
    var_dump($GLOBALS);  
    
    //Exemplo

    $x = 5;
    $y = 10;

    function myTest() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest();
    echo $y; // Saída: 15
    //--------------------------------------------------------------------------------------------------


    echo "O array $_FILES é usado para gerenciar arquivos enviados via formulário HTML com o método POST. Ele permite acessar informações como nome do arquivo, tipo, tamanho, entre outros."

    // Supondo um formulário com método POST e enctype="multipart/form-data"
    // <form action="upload.php" method="post" enctype="multipart/form-data">
    //     <input type="file" name="fileToUpload">
    //     <input type="submit" value="Upload Image" name="submit">
    // </form>

    // Acessando dados do arquivo enviado
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verifica se o arquivo é uma imagem real
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "File is not an image.<br>";
            $uploadOk = 0;
    }
}


?>            
]