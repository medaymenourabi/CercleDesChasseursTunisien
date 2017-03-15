<?php

namespace Cercle\ChasseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CercleChasseBundle:Default:index.html.twig');
    }
}
