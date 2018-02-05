<?php

namespace piBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /*public function indexAction()
    {
        return $this->render('piBundle:Default:index.html.twig');
    }*/

    public function homeAction(Request $request)
    {
        /*$em = $this->getDoctrine()->getEntityManager();
        $usr= $this->get('security.token_storage')->getToken()->getUser()->getRole();
        if ($usr != 'ROLE_ADMIN'){
            return $this->redirectToRoute('etudiant_home');
        }*/

        return $this->render('piBundle:Default:index.html.twig');
    }

    public function homeEtudiantAction(Request $request)
    {
       
            return $this->redirectToRoute('etudiant_home');
        
    }
    public function AdminvueAction(){
        return $this->render('piBundle:Default:Admin.html.twig');
    }
}
