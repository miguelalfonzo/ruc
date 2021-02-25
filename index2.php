<?php 

use Peru\Jne\DniFactory;

require 'vendor/autoload.php';

$dni = '73570379';

$factory = new DniFactory();
$cs = $factory->create();

$person = $cs->get($dni);
if (!$person) {
    echo 'Not found';
    return;
}

echo json_encode($person);

 ?>