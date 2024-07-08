<!-- Web services são uma forma de comunicação entre sistemas diferentes pela rede, utilizando padrões abertos como HTTP e XML/JSON para a troca de dados. Em PHP 8, você pode consumir web services de várias maneiras, sendo a mais comum através de APIs RESTful. -->

<form method="post">
    <input type="text" name="address" placeholder="Digite o endereço" />
    <input type="submit" name="acao" value="Enviar" />
</form>

<?php
if (isset($_POST['acao']) && !empty($_POST['address'])) {
    $address = urlencode($_POST['address']);
    $apiKey = 'YOUR_API_KEY'; // Substitua pela sua chave de API
    $url = "https://maps.googleapis.com/maps/api/geocode/json?address={$address}&key={$apiKey}&sensor=false";

    //  file_get_contents pode ser substituído por curl para um melhor controle e tratamento de erros.
    // $str = file_get_contents($url);

    // É necessário liberar a extensão curl em seu arquivo php.ini presente em xampp/php/php.ini
    // Procure por: ;extension=curl e remova a ; deixando assim: extension=curl

    // Função para fazer a requisição HTTP usando cURL
    function getAddressData($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($httpcode != 200) {
            return false;
        }

        return json_decode($response, true);
    }

    $endereco = getAddressData($url);

    if ($endereco && isset($endereco['results'][0])) {
        echo "<hr>";
        echo "Nome do bairro:<br />";
        echo $endereco['results'][0]['address_components'][1]['short_name'];
        echo "<hr>";
        echo "Nome correto da rua:<br />";
        echo $endereco['results'][0]['address_components'][0]['short_name'];
    } else {
        echo "Endereço não encontrado ou erro na API.";
    }
} else {
    if (isset($_POST['acao'])) {
        echo "Por favor, insira um endereço válido.";
    }
}
?>
