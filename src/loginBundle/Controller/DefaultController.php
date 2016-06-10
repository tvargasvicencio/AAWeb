<?php

namespace loginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('loginBundle:Default:index.html.twig', array('name' => $name));
    }
}
