<?php
/**
 * File: AppMiddleware.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 26/02/17
 * Time: 19:01
 * Project: lacc_php7
 * Copyright: 2017
 */
namespace App;

use Zend\Stratigility\MiddlewarePipe;

class AppMiddleware extends MiddlewarePipe
{
    public function __construct()
    {
        parent::__construct();
        
        $this->pipe( '/', function ( $request, $response, $next ) {
            if ( !in_array( $request->getUri()->getPath(), [ '/', '' ], true ) ) {
                return $next( $request, $response );
            }
            
            return $response->write( 'Página Home' );
        });
        $this->pipe( '/rota1', new Rota1Middleware() );
    }
}