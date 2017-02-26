<?php
/**
 * File: Rota1Middleware.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 26/02/17
 * Time: 19:03
 * Project: lacc_php7
 * Copyright: 2017
 */
namespace App;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Zend\Stratigility\MiddlewareInterface;

class Rota1Middleware implements MiddlewareInterface
{
    /**
     * @param Request       $request
     * @param Response      $response
     * @param callable|null $out
     *
     * @return mixed
     */
    public function __invoke( Request $request, Response $response, callable $out = null )
    {
        return $response->write( 'rota01' );
    }

}