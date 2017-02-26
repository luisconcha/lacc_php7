<?php
/**
 * File: index.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 26/02/17
 * Time: 14:26
 * Project: lacc_php7
 * Copyright: 2017
 */
require __DIR__ . '/vendor/autoload.php';
$uri      = new \Zend\Diactoros\Uri( 'http://cep.republicavirtual.com.br/web_cep.php?cep=71880018&formato=json' );
$request  = ( new \Zend\Diactoros\Request( $uri ) )
  ->withUri( $uri )
  ->withMethod( 'GET' );
$guzzle   = new \GuzzleHttp\Client();
$adapter  = new \Http\Adapter\Guzzle6\Client( $guzzle );
$response = $adapter->sendRequest( $request );

echo get_class( $response );

printf( "Status: %d - %s\n", $response->getStatusCode(), $response->getReasonPhrase() );
printf( "Cabeçalhos:\n" );

foreach ( $response->getHeaders() as $header => $values ):
    printf( "\t %s: %s\n", $header, implode( ', ', $values ) );
endforeach;
printf( "Mensagem: \n%s", $response->getBody() );
