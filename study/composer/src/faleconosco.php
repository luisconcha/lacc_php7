<?php
$guzzle = new \Guzzle\Http\Client();
$guzzle->getAllEvents();

$client           = new LACC\Models\Client();
$client->name     = "Luis Alberto CC";
$client->endereco = "BSB";

echo '<br />';
echo "Meu nome é {$client->name}";
echo '<br />';
echo "Meu endereço é {$client->endereco}";
echo '<br />';
echo 'Fale conosco';
