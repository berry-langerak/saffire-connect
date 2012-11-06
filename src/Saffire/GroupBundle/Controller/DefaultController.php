<?php

namespace Saffire\GroupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SaffireGroupBundle:Default:index.html.twig', array('name' => $name));
    }
}
