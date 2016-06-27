<?php
namespace AymardBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AymardBundle\Entity\Page;
use AymardBundle\Form\PageType;

/**
 * Page controller.
 *
 * @Route("/admin/page")
 */
class PageController extends Controller
{
    /**
     * 
     * @Route("/{_locale}/test/{slug}/{desc}/{title}", defaults={ "_locale": "fr" })
     * 
     */
    public function testAction($_locale, $slug, $desc, $title){
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('AymardBundle:Page')->findOneBySlug($slug);
        if(is_null($page)){
            $page = new Page($_locale);
            $page->setSlug($slug);
        } else {
            $page->newTranslation($_locale);
        }
        
        $page->setTitle($title);
        $page->setDescription($desc);
        $page->addTranslation();
        
        $em->persist($page);
        $em->flush();
    }
    
    /**
     * 
     * @Route("/{_locale}/fetch/{slug}", defaults={ "_locale": "fr" })
     * 
     */
    public function fetchAction($_locale, $slug){
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('AymardBundle:Page')->findOneBySlug($slug);
        if(is_null($page)){
            die('No Page');
        } else {
            
            $translations = $page->getTranslations();
            foreach($translations as $translation) {
                if($translation->getLocale() == $_locale) {
                    $translation->slug = $slug;
                    return $this->render('test.html.twig', [ 'page' => $translation ]);  
                }
            }
        }
    }
    
    /**
     * Lists all Page entities.
     *
     * @Route("/{_locale}", defaults={ "_locale": "fr" }, name="admin_page_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('AymardBundle:Page')->findAll();
        
        return $this->render('page/index.html.twig', array(
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

        return $this->render('page/new.html.twig', array(
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
        $deleteForm = $this->createDeleteForm($page);

        return $this->render('page/show.html.twig', array(
            'page' => $page,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Page entity.
     *
     * @Route("/{_locale}/{id}/edit", name="admin_page_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Page $page, $_locale)
    {
        $em = $this->getDoctrine()->getManager();
        // $page->newTranslation("en");
        // $page->setTitle("title english");
        // $page->setDescription("desc english");
        // $page->addTranslation();
        
        // $page->newTranslation("fr");
        // $page->setTitle("title french");
        // $page->setDescription("desc french");
        // $page->addTranslation();
        // $em->persist($page);
        // $em->flush();
        
        $deleteForm = $this->createDeleteForm($page);
        $editForm = $this->createForm('AymardBundle\Form\PageType', $page);
        $editForm->handleRequest($request);
        
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em->persist($page);
            $em->flush();

            return $this->redirectToRoute('admin_page_edit', array('id' => $page->getId()));
        }

        return $this->render('page/edit.html.twig', array(
            'page' => $page,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Page entity.
     *
     * @Route("/{id}", name="admin_page_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Page $page)
    {
        $form = $this->createDeleteForm($page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($page);
            $em->flush();
        }

        return $this->redirectToRoute('admin_page_index');
    }

    /**
     * Creates a form to delete a Page entity.
     *
     * @param Page $page The Page entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Page $page)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_page_delete', array('id' => $page->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
