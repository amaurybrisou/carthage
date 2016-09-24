<?php

namespace AymardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Route("/home", name="home")
     */
    public function homeAction(Request $request)
    {
        $form = $this->createForm('AymardBundle\Form\ContactType');

	    $page = $this->getDoctrine()->getRepository('AymardBundle:Page')->findOneBySlug('home');
        $menus = $this->getDoctrine()->getRepository('AymardBundle:Page')->findall();
        $locales = $this->getParameter('locales');

       	$photos = [];
       	if(!is_null($page)){
       	    $photos = $page->getPhotos();
       	}

        
        return $this->render('AymardBundle:home:home.html.twig', [
            'photos' => $photos,
            'slug' => 'home',
            'page' => $page,
            'menus' => $menus,
            'locales' => $locales,
            'form' => $form->createView()
        ]);
    }
    
    /**
     * @Route("/biography", name="biography")
     */
    public function biographyAction()
    {
	    $page = $this->getDoctrine()->getRepository('AymardBundle:Page')->findOneBySlug('biography');
        $form = $this->createForm('AymardBundle\Form\ContactType');
        $menus = $this->getDoctrine()->getRepository('AymardBundle:Page')->findall();
        $locales = $this->getParameter('locales');
        
       	$photos = [];
       	if(!is_null($page)){
       	    $photos = $page->getPhotos();
       	}
      
        return $this->render('AymardBundle:home:biography.html.twig', [
            'photos' => $photos,
            'slug' => 'biography',
            'page' => $page,
            'menus' => $menus,
            'locales' => $locales,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/press", name="press")
     */
    public function pressAction()
    {
        $page = $this->getDoctrine()->getRepository('AymardBundle:Page')->findOneBySlug('press');
        $form = $this->createForm('AymardBundle\Form\ContactType');
        $menus = $this->getDoctrine()->getRepository('AymardBundle:Page')->findall();
        $locales = $this->getParameter('locales');
        
        $photos = [];
        if(!is_null($page)){
            $photos = $page->getPhotos();
        }
      
        return $this->render('AymardBundle:home:press.html.twig', [
            'photos' => $photos,
            'slug' => 'press',
            'page' => $page,
            'menus' => $menus,
            'locales' => $locales,
            'form' => $form->createView()
        ]);
    }
    
    /**
     * @Route("/contact", name="contact")
     * @Method({ "POST"})
     */
     public function contactAction(Request $request){
        $form = $this->createForm('AymardBundle\Form\ContactType');
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $translator = $this->get('translator');
            
            $subject = $translator->trans('subject.new.message', [], 'email') . " : " . $form->get("name")->getData();
            $message = \Swift_Message::newInstance()
                    ->setSubject($subject)
                    ->setFrom($this->getParameter('mailer_user'))
                    ->setReplyTo($form->get("email")->getData())
                    ->setTo($this->getParameter('mailer_receiver'))
                    ->setBody($form->get("message")->getData());
            $this->get('mailer')->send($message);
            
            $this->addFlash(
                'success',
                $this->get('translator')->trans('flash.mail-sent', [], 'email')
            );
            
            return $this->redirectToRoute('home');
        }
     }
    
    /**
     * @Route("/oils", name="oils")
     * @Route("/acrylics", name="acrylics")
     * @Route("/drawings", name="drawings")
     * @Route("/gouaches", name="gouaches")
     * @Route("/gold", name="gold")
     * @Route("/misc", name="misc")
     * @Route("/admin", name="admin")
     */
    public function indexAction(Request $request)
    {
        $slug = $request->get('_route');
        
        if(!strcasecmp($slug, 'admin')){
            return $this->redirectToRoute('admin_page_index');
        }
        
        $form = $this->createForm('AymardBundle\Form\ContactType');
	    $page = $this->getDoctrine()->getRepository('AymardBundle:Page')->findOneBySlug($slug);
        $menus = $this->getDoctrine()->getRepository('AymardBundle:Page')->findall();
        $locales = $this->getParameter('locales');

        // die(var_dump($slug, $menus));
       	$photos = [];
       	if(!is_null($page)){
       	    $photos = $page->getPhotos();
       	}
      
        return $this->render('AymardBundle::base.html.twig', [
            'photos' => $photos,
            'slug' => $slug,
            'page' => $page,
            'menus' => $menus,
            'locales' => $locales,
            'form' => $form->createView()
        ]);
    }


}   
