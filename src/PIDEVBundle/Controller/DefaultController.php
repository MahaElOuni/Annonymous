<?php

namespace PIDEVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PIDEVBundle:Default:index.html.twig');
    }
}
