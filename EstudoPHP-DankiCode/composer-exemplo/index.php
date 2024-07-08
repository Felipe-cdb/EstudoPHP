<!-- Instale o Composer no site oficial. Composer é uma ferramenta de instalação de dependecias. -->

<!-- A biblioteca Carbon deve estar instalada no seu projeto via Composer. Você pode instalá-la executando o comando: -->
<!-- composer require nesbot/carbon -->

<?php
require 'vendor/autoload.php';
use Carbon\Carbon;

$amanha = Carbon::now()->addDay();
echo date('d/m/Y', strtotime($amanha));
//  formata a data de amanhã no formato dd/mm/yyyy e a imprime.
?>
