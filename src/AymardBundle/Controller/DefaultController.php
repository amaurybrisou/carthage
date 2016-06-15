<?php

namespace AymardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/{slug}", name="homepage", defaults={ "slug" : "index"})
     */
    public function indexAction($slug)
    {
    	
		$page = $this->getDoctrine()->getRepository('AymardBundle:Page')->findOneByTitle($slug);
       	
        return $this->render('AymardBundle:home:'. $slug . '.html.twig', ['photos' => $page->getPhotos()]);
    }


}   
