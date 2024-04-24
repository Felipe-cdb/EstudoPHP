<!-- A função include() em PHP 8 é uma função que permite incluir e avaliar o conteúdo de um arquivo PHP em outro arquivo PHP durante a execução do script. Isso é útil quando você deseja reutilizar o código em vários scripts PHP ou dividir o código em arquivos separados para melhor organização e manutenção. -->

<!-- Aqui está a sintaxe básica da função include(): -->
<?php 
include 'caminho/do/arquivo.php';
?>
<!-- Se o arquivo especificado na função include() não puder ser incluído por algum motivo (por exemplo, se o arquivo não existir ou se houver um erro de permissão), a função gerará um aviso (warning), mas a execução do script continuará. -->

<!-- Você também pode usar a função include com a diretiva require, que é semelhante, mas causa um erro fatal (e interrompe a execução do script) se o arquivo não puder ser incluído: -->
<?php 
require 'caminho/do/arquivo.php';
?>

<!-- Normalmente, você usa include() ou require() para incluir arquivos de definição de função, arquivos de configuração, arquivos de modelo HTML ou qualquer outro tipo de conteúdo que você queira incluir em vários scripts PHP. -->

<!-- Exemplo -->
<!-- Arquivo1: header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
</head>
<body>
    <header>
        <h1>Meu Site</h1>
        <nav>
            <ul>
                <li><a href="#">Página Inicial</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
    </header>


<!-- Arquivo2: header.php -->
<section>
    <h2>Conteúdo Principal</h2>
    <p>Bem-vindo ao nosso site! Aqui está o conteúdo principal.</p>
</section>


<!-- Arquivo3: header.php -->
<footer>
        <p>&copy; <?php echo date('Y'); ?> Meu Site. Todos os direitos reservados.</p>
    </footer>
</body>
</html>


<!-- Arquivo Principal: index.php -->
<?php include 'header.php'; ?>

<?php include 'body.php'; ?>

<?php include 'footer.php'; ?>

