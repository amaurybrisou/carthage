<?php

namespace AymardBundle\Controller;


use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AymardBundle\Entity\Page;
use AymardBundle\Entity\Meta;
use AymardBundle\Form\PageType;


/**
 * Page controller.
 * @Route("/admin/page")
 */
class PageController extends Controller
{
    /**
     * Lists all Page entities.
     *
     * @Route("/", name="admin_page_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pages = $em->getRepository('AymardBundle:Page')->findAll();

        return $this->render('AymardBundle::admin/page/index.html.twig', array(
            'pages' => $pages,
        ));
    }
    
    /**
     * Creates a new Page entity.
     *
     * @Route("/new", name="admin_page_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $page = new Page();
        $form = $this->createForm('AymardBundle\Form\PageType', $page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();

            return $this->redirectToRoute('admin_page_show', array('id' => $page->getId()));
        }

        return $this->render('AymardBundle::admin/page/new.html.twig', array(
            'page' => $page,
            'form' => $form->createView(),
        ));
    }

    /**
    * Finds and displays a Page entity.
    *
    * @Route("/{id}", name="admin_page_show")
    * @Method("GET")
    */
    public function showAction(Page $page)
    {
        return $this->render('AymardBundle::admin/page/show.html.twig', array(
            'page' => $page,
        ));
    }

    /**
     * Displays a form to edit an existing Page entity.
     *
     * @Route("/{id}/edit", name="admin_page_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Page $page, Request $request)
    {
        $originalMeta = new ArrayCollection();
        
        // Create an ArrayCollection of the current Meta objects in the database
        foreach ($page->getMetas() as $meta) {
             $originalMeta->add($meta);
        }
        
        $editForm = $this->createForm('AymardBundle\Form\PageType', $page);
        $editForm->handleRequest($request);

    
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
              // remove the relationship between the meta and the page
            foreach ($originalMeta as $meta) {
                if (!$page->getMetas()->contains($meta)) {
                    // if you wanted to delete the Tag entirely, you can also do that
                    $em->remove($meta);
                }
            }
         
            $em->persist($page);
            $em->flush();
            
            return $this->redirectToRoute('admin_page_edit', array('id' => $page->getId()));
        }

        return $this->render('AymardBundle::admin/page/edit.html.twig', array(
            'page' => $page,
            'edit_form' => $editForm->createView(),
        ));
    }
}
