<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Dokument;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Dokument controller.
 *
 * @Route("doc")
 */
class DokumentController extends Controller
{
    /**
     * Lists all dokument entities.
     *
     * @Route("/", name="doc_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $dokuments = $em->getRepository('AppBundle:Dokument')->findAll();

        return $this->render('dokument/index.html.twig', array(
            'dokuments' => $dokuments,
        ));
    }

    /**
     * Creates a new dokument entity.
     *
     * @Route("/new", name="doc_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $dokument = new Dokument();
        $form = $this->createForm('AppBundle\Form\DokumentType', $dokument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($dokument);
            $em->flush();

            return $this->redirectToRoute('doc_show', array('id' => $dokument->getId()));
        }

        return $this->render('dokument/new.html.twig', array(
            'dokument' => $dokument,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a dokument entity.
     *
     * @Route("/{id}", name="doc_show")
     * @Method("GET")
     */
    public function showAction(Dokument $dokument)
    {
        $deleteForm = $this->createDeleteForm($dokument);

        return $this->render('dokument/show.html.twig', array(
            'dokument' => $dokument,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing dokument entity.
     *
     * @Route("/{id}/edit", name="doc_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Dokument $dokument)
    {
        $deleteForm = $this->createDeleteForm($dokument);
        $editForm = $this->createForm('AppBundle\Form\DokumentType', $dokument);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('doc_edit', array('id' => $dokument->getId()));
        }

        return $this->render('dokument/edit.html.twig', array(
            'dokument' => $dokument,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a dokument entity.
     *
     * @Route("/{id}", name="doc_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Dokument $dokument)
    {
        $form = $this->createDeleteForm($dokument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($dokument);
            $em->flush();
        }

        return $this->redirectToRoute('doc_index');
    }

    /**
     * Creates a form to delete a dokument entity.
     *
     * @param Dokument $dokument The dokument entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Dokument $dokument)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('doc_delete', array('id' => $dokument->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
