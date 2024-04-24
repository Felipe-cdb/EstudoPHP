<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis Globais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Variaveis Globais</h1>
        <pre>
            <?php 
                setcookie("Permitir-COOKIE", "Autorizado", time()+60 );
                session_start();
                $_SESSION["teste"] = "FUNCIONOU";

                echo "<h4>GET - Quando o cliente deseja obter recursos do servidor</h4>";
                var_dump($_GET);

                echo "<h4>POST - Quando o cliente deseja enviar dados para processamento ao servidor,<br>como os dados de um formulário</h4>";
                var_dump($_POST);

                echo "<h4>REQUEST - GET+POST</h4>";
                var_dump($_REQUEST);

                var_dump($_COOKIE);

                echo "<h4>ENV</h4>";
                var_dump($_ENV);

                echo "<h4>SESSION</h4>";
                var_dump($_SESSION);  

                echo "<h4>SERVER</h4>";
                var_dump($_SERVER);    
                
                echo "<h4>GLOBALS - Todas as globais do php</h4>";
                var_dump($GLOBALS);  
                
            ?>            
        </pre>
    </main>
</body>
</html>