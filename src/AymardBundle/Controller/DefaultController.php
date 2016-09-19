<?php

namespace AymardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/{_locale}", defaults={ "_locale": "fr"})
     * @Route("/{_locale}/home", name="home", defaults={ "_locale": "fr"})
     */
    public function homeAction(Request $request)
    {
        $form = $this->createForm('AymardBundle\Form\ContactType');

	    $page = $this->getDoctrine()->getRepository('AymardBundle:Page')->findOneBySlug('home');
        $menus = $this->getDoctrine()->getRepository('AymardBundle:Page')->findall();

       	$photos = [];
       	if(!is_null($page)){
       	    $photos = $page->getPhotos();
       	}

        
        return $this->render('AymardBundle:home:home.html.twig', [
            'photos' => $photos,
            'slug' => 'home',
            'page' => $page,
            'menus' => $menus,
            'form' => $form->createView()
        ]);
    }
    
    /**
     * @Route("/{_locale}/biography", name="biography", defaults={ "_locale": "fr"})
     */
    public function biographyAction()
    {
	    $page = $this->getDoctrine()->getRepository('AymardBundle:Page')->findOneBySlug('biography');
        $form = $this->createForm('AymardBundle\Form\ContactType');
        $menus = $this->getDoctrine()->getRepository('AymardBundle:Page')->findall();
        
       	$photos = [];
       	if(!is_null($page)){
       	    $photos = $page->getPhotos();
       	}
      
        return $this->render('AymardBundle:home:biography.html.twig', [
            'photos' => $photos,
            'slug' => 'biography',
            'page' => $page,
            'menus' => $menus,
            'form' => $form->createView()
        ]);
    }
    
    /**
     * @Route("/{_locale}/contact", name="contact")
     * @Method({ "POST"})
     */
     public function contactAction(Request $request){
        $form = $this->createForm('AymardBundle\Form\ContactType');
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $translator = $this->get('translator');
            
            $subject = $translator->trans('new-message') . $form->get("email")->getData() . " : " . $form->get("name")->getData();
            $message = \Swift_Message::newInstance()
                    ->setSubject($subject)
                    ->setFrom($this->getParameter('mailer_user'))
                    ->setReplyTo($form->get("email")->getData())
                    ->setTo($this->getParameter('mailer_receiver'))
                    ->setBody($form->get("message")->getData());
            $this->get('mailer')->send($message);
            
            $this->addFlash(
                'success',
                $this->get('translator')->trans('mail-sent')
            );
            
            return $this->redirectToRoute('home');
        }
     }
    
    /**
     * @Route("/{_locale}/{slug}", name="view_pages", defaults={ "_locale" : "fr" })
     */
    public function indexAction(Request $request, $_locale, $slug)
    {
        if($slug == 'admin'){
            return $this->redirectToRoute('admin_page_index');
        }
        
        $form = $this->createForm('AymardBundle\Form\ContactType');
	    $page = $this->getDoctrine()->getRepository('AymardBundle:Page')->findOneBySlug($slug);
        $menus = $this->getDoctrine()->getRepository('AymardBundle:Page')->findall();
        
        
       	$photos = [];
       	if(!is_null($page)){
       	    $photos = $page->getPhotos();
       	}
      
        return $this->render('AymardBundle::base.html.twig', [
            'photos' => $photos,
            'slug' => $slug,
            'page' => $page,
            'menus' => $menus,
            'form' => $form->createView()
        ]);
    }


}   
