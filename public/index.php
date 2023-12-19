<?php
require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Lucas', 'email' => 'lucas@cod3r.com.br']);
print_r($user);
echo '<br><br>';
$user->email = 'lucas_alterado@cod3r.com.br';
print_r($user->email);

/**************************
$sql = 'select * from users';
$result = Database::getResultFromQuery($sql);

while($row = $result->fetch_assoc()) {
    print_r($row);
    echo '<br>';
}*/

/*$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if($uri === '/' || $uri === '' ||  $uri === '/index.php') {
    $uri = '/day_records.php';
}

require_once(CONTROLLER_PATH . "/{$uri}");*/
