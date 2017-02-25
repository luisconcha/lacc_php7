<?php
/**
 * File: index.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 24/02/17
 * Time: 13:16
 * Project: lacc_php7
 * Copyright: 2017
 */
define('APP_PATH', __DIR__ . '/../');
include APP_PATH . 'lib/SplClassLoader.php';
$loader = new SplClassLoader('Guzzle', 'lib/vendor/guzzle/src');
$loader->register();
$loader = new SplClassLoader('LACC', 'src');
$loader->register();
include APP_PATH . 'src/index.php';
