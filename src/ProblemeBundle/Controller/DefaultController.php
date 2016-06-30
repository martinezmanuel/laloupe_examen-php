<?php

namespace ProblemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProblemeBundle:fruits:index.html.twig');
    }
}
