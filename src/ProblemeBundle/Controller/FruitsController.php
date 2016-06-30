<?php

namespace ProblemeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use ProblemeBundle\Entity\Fruits;
use ProblemeBundle\Form\FruitsType;

/**
 * Fruits controller.
 *
 */
class FruitsController extends Controller
{
    /**
     * Lists all Fruits entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fruits = $em->getRepository('ProblemeBundle:Fruits')->findAll();

        return $this->render('@Probleme/fruits/index.html.twig', array(
            'fruits' => $fruits,
        ));
    }

    /**
     * Creates a new Fruits entity.
     *
     */
    public function newAction(Request $request)
    {
        $fruit = new Fruits();
        $form = $this->createForm('ProblemeBundle\Form\FruitsType', $fruit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fruit);
            $em->flush();

            return $this->redirectToRoute('fruits_show', array('id' => $fruit->getId()));
        }

        return $this->render('@Probleme/fruits/new.html.twig'
            , array(
            'fruit' => $fruit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Fruits entity.
     *
     */
    public function showAction(Fruits $fruit)
    {
        $deleteForm = $this->createDeleteForm($fruit);

        return $this->render('@Probleme/fruits/show.html.twig', array(
            'fruit' => $fruit,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Fruits entity.
     *
     */
    public function editAction(Request $request, Fruits $fruit)
    {
        $deleteForm = $this->createDeleteForm($fruit);
        $editForm = $this->createForm('ProblemeBundle\Form\FruitsType', $fruit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fruit);
            $em->flush();

            return $this->redirectToRoute('fruits_edit', array('id' => $fruit->getId()));
        }

        return $this->render('@Probleme/fruits/edit.html.twig', array(
            'fruit' => $fruit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Fruits entity.
     *
     */
    public function deleteAction(Request $request, Fruits $fruit)
    {
        $form = $this->createDeleteForm($fruit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fruit);
            $em->flush();
        }

        return $this->redirectToRoute('fruits_index');
    }

    /**
     * Creates a form to delete a Fruits entity.
     *
     * @param Fruits $fruit The Fruits entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Fruits $fruit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fruits_delete', array('id' => $fruit->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
