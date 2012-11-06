<?php

namespace Saffire\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class WidgetController extends Controller
{
    public function newAction($slug)
    {
        $em = $this->getDoctrine()->getManager();

        switch ($slug) {
            case "user" :
                $title = "New Users";
                $items = $em->getRepository('SaffireUserBundle:User')->getLatest(5);
                break;
            case "group" :
                $title = "New Groups";
                $items = $em->getRepository('SaffireGroupBundle:Group')->getLatest(5);
                break;
            case "badge" :
                $title = "Earned badges";
                $items = $em->getRepository('SaffireBadgeBundle:Badge')->getLatest(5);
                break;
            default :
                throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException();
                break;
        }

        return $this->render("SaffireHomeBundle:Widget:new.html.twig", array("title" => $title, "items" => $items));
    }

}
