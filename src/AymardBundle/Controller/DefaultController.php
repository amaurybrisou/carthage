<?php

namespace AymardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Route("/home", name="homepage")
     */
    public function homeAction()
    {

	    $page = $this->getDoctrine()->getRepository('AymardBundle:Page')->findOneBySlug('home');

       	$photos = [];
       	if(!is_null($page)){
       	    $photos = $page->getPhotos();
       	}

        return $this->render('AymardBundle:home:home.html.twig', [
            'photos' => $photos,
            'slug' => 'home',
            'page' => $page
        ]);
    }
    
    /**
     * @Route("/biography", name="biography")
     */
    public function biographyAction()
    {
	    $page = $this->getDoctrine()->getRepository('AymardBundle:Page')->findOneBySlug('biography');
       	$photos = [];
       	if(!is_null($page)){
       	    $photos = $page->getPhotos();
       	}
      
        return $this->render('AymardBundle:home:biography.html.twig', [
            'photos' => $photos,
            'slug' => 'biography',
            'page' => $page
        ]);
    }


    /**
     * @Route("/{slug}", name="view_pages")
     */
    public function indexAction($slug)
    {
        if($slug == 'admin'){
            return $this->redirectToRoute('admin_page_index');
        }
        
	    $page = $this->getDoctrine()->getRepository('AymardBundle:Page')->findOneBySlug($slug);

       	$photos = [];
       	if(!is_null($page)){
       	    $photos = $page->getPhotos();
       	}
      
        return $this->render('AymardBundle::base.html.twig', [
            'photos' => $photos,
            'slug' => $slug,
            'page' => $page
        ]);
    }


}   
