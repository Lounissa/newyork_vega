<?php 
$envFile = file_exists(ROOT . "/env.local.conf") ? ROOT . "/env.local.conf" : ROOT . "/env.conf";

//  $envFile = require __DIR__ . "/../env.conf";
  $_ENV = parse_ini_file($envFile);








  

  ?>