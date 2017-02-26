<?php
/**
 * File: content.php
 * Created by: Luis Alberto Concha Curay.
 * Email: luisconchacuray@gmail.com
 * Language: PHP
 * Date: 24/02/17
 * Time: 13:16
 * Project: lacc_php7
 * Copyright: 2017
 */
if ( isset( $_GET[ 'arquivo' ] ) ) {
		include $_GET[ 'arquivo' ] . ".php";
} else {
		include "home.php";
}
//echo 'Content';
 