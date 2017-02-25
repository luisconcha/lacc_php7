<?php
/**
 * File: Client.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 25/02/17
 * Time: 16:35
 * Project: lacc_php7
 * Copyright: 2017
 */
namespace LACC\Teste\Model;

class Person
{
    protected $type;
}

class Client
{
    /**
     * @var Person
     */
    protected $typePerson;

    protected $nameOfMyService;

    protected $repository;

    function __construct( Person $person, $var = null )
    {
        $this->typePerson      = $person;
        $this->nameOfMyService = $var;
        $this->repository      = $var;
    }

    public function daysWeek( $var = null )
    {
        $daysWeek = array(
          'segunda' => 'Lunes',
          'terca'   => 'Martes',
          'quarta'  => 'Miercoles',
          'quinta'  => 'Jueves',
          'sexta'   => 'Viernes',
          'sabado'  => 'Sábado',
          'domingo' => 'Domingo',
        );
        if ( 0 < 1 ) {

        } else {

        }
        foreach ( $daysWeek as $day ) {

        }
    }
}