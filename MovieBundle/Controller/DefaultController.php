<?php

namespace MovieBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MovieBundle:Default:index.html.twig', array('name' => $name));
    }
}
