<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Initialisation de la session
session_start();
header("Cache-Control: no-cache");

// Chargement Smarty et Defines
require 'config/' . 'defines.inc.php';
// Load Twig autoloader
require_once 'bootstrap.php';

// Specify our Twig templates location
$loader = new Twig_Loader_Filesystem('view');

// Instantiate our Twig
$twig = new Twig_Environment($loader);
