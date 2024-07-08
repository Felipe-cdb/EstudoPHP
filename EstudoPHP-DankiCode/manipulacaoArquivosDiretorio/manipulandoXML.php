<!--  -->
<?php
// Definindo os dados que serão inseridos no XML
$dados = [
    ['nome' => 'João', 'idade' => 25, 'cidade' => 'São Paulo'],
    ['nome' => 'Maria', 'idade' => 30, 'cidade' => 'Rio de Janeiro'],
    ['nome' => 'Pedro', 'idade' => 28, 'cidade' => 'Belo Horizonte']
];

// Criando um novo documento XML
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->formatOutput = true; // Formata o XML para facilitar a leitura

// Criando o elemento raiz <pessoas>
$pessoas = $dom->createElement('pessoas');
$dom->appendChild($pessoas);

// Iterando sobre os dados para criar elementos <pessoa> dentro de <pessoas>
foreach ($dados as $pessoa) {
    $pessoaElemento = $dom->createElement('pessoa');
    
    // Adicionando elementos filhos dentro de <pessoa>
    foreach ($pessoa as $key => $value) {
        $elemento = $dom->createElement($key, $value);
        $pessoaElemento->appendChild($elemento);
    }
    
    // Adicionando <pessoa> dentro de <pessoas>
    $pessoas->appendChild($pessoaElemento);
}

// Salvando o XML em um arquivo
$dom->save('pessoas.xml');
echo "Arquivo XML criado com sucesso.";
?>


<?php
// Carregando o arquivo XML
$dom = new DOMDocument();
$dom->load('pessoas.xml');

// Obtendo o elemento raiz <pessoas>
$pessoas = $dom->getElementsByTagName('pessoas')->item(0);

// Iterando sobre os elementos <pessoa>
foreach ($pessoas->getElementsByTagName('pessoa') as $pessoa) {
    $nome = $pessoa->getElementsByTagName('nome')->item(0)->nodeValue;
    $idade = $pessoa->getElementsByTagName('idade')->item(0)->nodeValue;
    $cidade = $pessoa->getElementsByTagName('cidade')->item(0)->nodeValue;
    
    // Exibindo os dados de cada pessoa
    echo "Nome: $nome, Idade: $idade, Cidade: $cidade <br>";
}

// Exemplo de manipulação: adicionando uma nova pessoa
$novaPessoa = $dom->createElement('pessoa');
$novaPessoa->appendChild($dom->createElement('nome', 'Ana'));
$novaPessoa->appendChild($dom->createElement('idade', 22));
$novaPessoa->appendChild($dom->createElement('cidade', 'Curitiba'));
$pessoas->appendChild($novaPessoa);

// Salvando as alterações de volta ao arquivo
$dom->save('pessoas.xml');
echo "Dados adicionados com sucesso.";
?>