<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (isset($_POST['id'])) {

    $repository = $entityManager->getRepository(Offers::class);

    $offre = $repository->find((int) $_POST['id']);
    $entityManager->remove($offre);
    $entityManager->flush();
    //On affiche le template Twig correspondant
    echo $twig->render('delete_offre.html.twig', ['status' => "Suppression OK"]);

}
