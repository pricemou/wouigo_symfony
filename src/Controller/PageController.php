<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('pages/home.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

     /**
     * @Route("/becomeDriver", name="app_becomeDriver")
     */
    public function becomeDriver(): Response
    {
        return $this->render('pages/becomeDriver.html.twig');
    }

      // ---------------- En fonction Soucription kindo----------------------
    
    /**
     * @Route("/souscription/vehicule", name="app_info_vehicule")
     */
    public function souscription_one(Request $request)
    {
        return $this->render('pages/souscription_one.html.twig');
    }

    /**
     * @Route("/souscription/user", name="app_info_user",methods={"GET","POST"})
     */
    public function souscription_two(Request $request)
    {
        if($request->isMethod('POST')){
            $data = $request->request->all();
            if($this->isCsrfTokenValid('authenticate', $data['_csrf_token'])) {
                return $this->render('pages/souscription_two.html.twig');
            }
        }
    }

      /**
    * @Route("/souscription/facturation", name="app_souscription_three", methods={"GET","POST"})
    */
    public function souscription_three(Request $request) : Response
    {
        if($request->isMethod('POST')){
            $data = $request->request->all();
            if($this->isCsrfTokenValid('authenticate', $data['_csrf_token'])) {
                return $this->render('pages/souscription_three.html.twig');
            }
        }
    }

     /**
    * @Route("/souscription_confirmation", name="app_souscription_confirmation")
    */
    public function souscription_confirmation(): Response
    {
        return $this->render('pages/souscription_confirmation.html.twig');
    }

    /**
    * @Route("/sign/login", name="app_loginConextion")
    */
    public function loginConextion(): Response
    {
        return $this->render('pages/loginConextion.html.twig');
    }

    /**
    * @Route("/sign/profil", name="app_sign_profil")
    */
    public function login_Conextion(): Response
    {
        return $this->render('pages/sign_profil.html.twig');
    }
    
    /**
    * @Route("/sign/user/one", name="app_sign_user_one")
    */
    public function login_user_ones(Request $request)
    {
        if ($request->isXMLHttpRequest()) {    
            $t1 = $request->get('status');
            return new JsonResponse(array($t1));
        }
        return $this->render('pages/sign_user_one.html.twig');
    }

    
    /**
    * @Route("/sign/user/two", name="app_sign_user_two")
    */
    public function login_user_two(Request $request)
    {
        if ($request->isXMLHttpRequest()) {    
            $t1 = $request->get('status');
            return new JsonResponse(array($t1));
        }
        return $this->render('pages/sign_user_tow.html.twig');
    }

    
    /**
    * @Route("/sign/user/update", name="app_sign_user_update")
    */
    public function login_user_update(Request $request)
    {
        if ($request->isXMLHttpRequest()) {    
            $t1 = $request->get('status');
            return new JsonResponse(array($t1));
        }
        return $this->render('pages/sign_user_update.html.twig');
    }



    

    
}
