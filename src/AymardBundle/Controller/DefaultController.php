<?php

namespace AymardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/{_locale}", defaults={ "_locale": "fr"})
     * @Route("/{_locale}/home", name="home", defaults={ "_locale": "fr"})
     */
    public function homeAction(Request $request)
    {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    
        $request->setLocale($lang);
        $locale = $request->getLocale();
      
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
     * @Route("/{_locale}/biography", name="biography", defaults={ "_locale": "fr"})
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
     * @Route("/{_locale}/{slug}", name="view_pages", defaults={ "_locale" : "fr" })
     */
    public function indexAction(Request $request, $_locale, $slug)
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
