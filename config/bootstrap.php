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

// Chargement des constantes 

require __DIR__ . "/constants.php";

//  chargement des variables d'environemment

require __DIR__ . "/dotenv.php";
//   chargement de la configuration système chargement 


require __DIR__ . "/system.php";

// chargement de la configuration session
require __DIR__ . "/session.php";

//  Chargement du monolog
require __DIR__ . "/monolog.php";










?>