<?php

namespace ernesto\ProyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ernestoProyBundle:Default:index.html.twig');
    }
}
