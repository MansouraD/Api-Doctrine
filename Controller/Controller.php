<?php

class ServiceController
{

    //Cette function permet au client de conaitre son solde a travers son numCompte
    public function getSoldeCompteByNum($numero_compte)
    {
        // Set HTTP Response Content Type
        header('Content-Type: application/json');
        //pour indiquer qui p acceder a ces resources
        header('Access-Control-Allow-Origin: *');
       //pour se connecter a la base de donnee
        require_once 'bootstrap.php';

        $solde = $entityManager
                               ->createQuery("SELECT c.solde FROM Comptes c 
                                              WHERE c.numero_compte = ".$numero_compte)
                                ->getResult();
       echo json_encode($solde);
       
    }

    //Cette function permet de lister l'enseble des operation pour un compte
    public function getAllOperation($numero_compte)
    {
        // Set HTTP Response Content Type
        header('Content-Type: application/json');
        //pour indiquer qui p acceder a ces resources
        header('Access-Control-Allow-Origin: *');
       //pour se connecter a la base de donnee
        require_once 'bootstrap.php';

        $client_operation = $entityManager
                                ->createQuery("SELECT o.id, o.montant  
                                               FROM Compte c, Operation o
                                               WHERE c.numero_compte = ".$numero_compte." and o.comptes = c.id GROUP BY o.id")
                                ->getResult();
        // Format data into a JSON response
        echo json_encode($client_operation);
                               
                              
       
    }
}

?>