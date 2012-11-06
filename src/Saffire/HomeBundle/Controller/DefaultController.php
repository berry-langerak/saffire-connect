<?php

namespace Saffire\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SaffireHomeBundle:Default:index.html.twig');
    }
}
