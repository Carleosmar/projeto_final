<?php

date_default_timezone_set('America/Bahia');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.uft_8', 'portuguese');

// Pasta
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));


require_once(realpath(dirname(__FILE__) . '/database.php'));
