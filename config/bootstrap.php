<?php

/**
 * --------------------------------------------------------------------------
 *             L'amourceur de l'application
 * 
 * 
 * ses roles:
 *      - Charger les raccourcis (constantes)
 *      - Changer les variables d'environnement 
 *      - Charger la configuration système 
 *      - Charger la configuration session
 *      - Charger le monolog 
 * 
 * 
 * --------------------------------------------------------------------------
 * 
 * 
 */
//  chargement des variables d'environemment

// Chargement des constantes 

require __DIR__ . "/constants.php";

//  $envFile = require __DIR__ . "/../env.conf";
  $envFile = parse_ini_file(ROOT . "/env.conf");
 var_dump ($envFile);









?>