<?php
$guzzle = new \Guzzle\Http\Client();
$guzzle->getAllEvents();
$client       = new LACC\Teste\Model\Client();
$client->name = "Autoload PSR-4 está funcionando!";
echo '<br />';
echo $client->name;
echo '<br />';
echo 'Fale conosco';
