<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{

    // *******************************************
    // Connexion
    // *******************************************

    /**
     * @Route("/login", name="login")
     */
    public function login(): Response
    {
        return $this->render('client/login.html.twig', []);
    }

    /**
     * @Route("/sign_up_one", name="sign_up_one")
     */
    public function sign_up_one(): Response
    {
        return $this->render('client/sign_up_one.html.twig', []);
    }

    /**
     * @Route("/sign_up_two", name="sign_up_two")
     */
    public function sign_up_two(): Response
    {
        return $this->render('client/sign_up_two.html.twig', []);
    }


    /**
     * @Route("/sign_up_three", name="sign_up_three")
     */
    public function sign_up_three(): Response
    {
        return $this->render('client/sign_up_three.html.twig', []);
    }

    /**
     * @Route("/sign_up_four", name="sign_up_four")
     */
    public function sign_up_four(): Response
    {
        return $this->render('client/sign_up_four.html.twig', []);
    }


    // *******************************************
    // Dashbord
    // *******************************************


    /**
     * @Route("/dashbord_client", name="app_dashbord_client")
     */
    public function dashbord_client(): Response
    {
        return $this->render('client/dashbord_client.html.twig', []);
    }

     /**
     * @Route("/dashbord_compte_chauffeur_one", name="dashbord_compte_chauffeur_one")
     */
    public function dashbord_compte_chauffeur_one(): Response
    {
        return $this->render('client/dashbord_compte_chauffeur_one.html.twig', []);
    }
    
    /**
     * @Route("/dashbord_compte_chauffeur_two", name="dashbord_compte_chauffeur_two")
     */
    public function dashbord_compte_chauffeur_two(): Response
    {
        return $this->render('client/dashbord_compte_chauffeur_two.html.twig', []);
    }

    /**
     * @Route("/dashbord_one", name="dashbord_one")
     */
    public function dashbord_one(): Response
    {
        return $this->render('client/dashbord_one.html.twig', []);
    }

    // *******************************************
    // Parametre
    // *******************************************

    /**
     * @Route("/dashbord_parametre", name="app_dashbord_parametre")
     */
    public function dashbord_parametre(): Response
    {
        return $this->render('client/dashbord_parametre.html.twig', []);
    }

    // *******************************************
    // About
    // *******************************************

    /**
     * @Route("/about", name="about")
     */
    public function about(): Response
    {
        return $this->render('client/about.html.twig', []);
    }


    // *******************************************
    // About
    // *******************************************

    /**
     * @Route("/affiliations", name="affiliations")
     */
    public function affiliations(): Response
    {
        return $this->render('client/affiliations.html.twig', []);
    }

     /**
     * @Route("/parking", name="app_dashbord_parking")
     */
    public function parking(): Response
    {
        return $this->render('client/parking.html.twig', []);
    }

     /**
     * @Route("/paiement_initial", name="paiement_initial")
     */
    public function paiement_initial(): Response
    {
        return $this->render('client/paiement_initial.html.twig');
    }

     /**
     * @Route("/cammande_initial", name="cammande_initial")
     */
    public function cammande_initial(): Response
    {
        return $this->render('client/cammande.html.twig');
    }
    
     /**
     * @Route("/affiliation", name="affiliation")
     */
    public function affiliation(): Response
    {
        return $this->render('client/affiliation.html.twig');
    }

      // ---------------- Tableau de bord Administrateur----------------------


    /**
     * @Route("/dashbord_admin", name="app_dashbord_admin")
     */
    public function dashbord_admin(): Response
    {
        return $this->render('admin/dashbord_admin.html.twig');
    }

    /**
     * @Route("/dashbord_admin_commande", name="app_dashbord_admin_commande")
     */
    public function dashbord_admin_commande(): Response
    {
        return $this->render('admin/dashbord_admin_commande.html.twig');
    }


}