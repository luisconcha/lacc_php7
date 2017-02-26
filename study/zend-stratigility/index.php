<?php
/**
 * File: index.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 26/02/17
 * Time: 17:05
 * Project: lacc_php7
 * Copyright: 2017
 */
use App\AppMiddleware;

require __DIR__ . '/vendor/autoload.php';
//$app    = new \Zend\Stratigility\MiddlewarePipe();
//$admin  = new \Zend\Stratigility\MiddlewarePipe();
//$server = \Zend\Diactoros\Server::createServer( $app, $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES );

$server = \Zend\Diactoros\Server::createServer( new AppMiddleware(), $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES );


//$app->pipe( '/', function ( $request, $response, $next ) {
//    if ( !in_array( $request->getUri()->getPath(), [ '/', '' ], true ) ) {
//        return $next( $request, $response );
//    }
//
//    return $response->write( 'Página Home' );
//} );
//
//$app->pipe( '/rota1', function ( $request, $response, $next ) {
//    return $response->write( 'rota01' );
//} );


$server->listen();