<?php
/**
 * File: server.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 26/02/17
 * Time: 14:56
 * Project: lacc_php7
 * Copyright: 2017
 */
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;

require __DIR__ . '/vendor/autoload.php';
$server = \Zend\Diactoros\Server::createServer( function (
  ServerRequestInterface $request,
  ResponseInterface $response,
  $finalHandle
) {
    $data = $request->getParsedBody();
    if ( $data[ 'email' ] == 'luvett11@gmail.com' ) {
        $response->getBody()->write( 'Email enviado: ' . $data[ 'email' ] );
    } else {
        return $finalHandle( $request, $response );
    }

}, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES );
$server->listen( function ( ServerRequestInterface $request, ResponseInterface $response, $error = null ) {
    return new JsonResponse( [ 'success' => false, 'mesage' => 'O parametro email esta inválido' ], 400 );
} );