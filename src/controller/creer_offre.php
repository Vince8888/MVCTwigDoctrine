<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['title']) && isset($_POST['description'])) {

    /* @var $alloffers type */

    $offre = new Offers($_POST['title'], $_POST['description']);

    $entityManager->persist($offre);
    $entityManager->flush();

    echo $twig->render('creer_offre.html.twig', ['status' => "Ajout OK", 'offre' => $offre]);

} else {
    echo $twig->render('creer_offre.html.twig');
}
