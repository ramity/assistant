<?php

namespace HealthBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use HealthBundle\Entity\Mealplan;
use HealthBundle\Form\MealplanType;

/**
 * Mealplan controller.
 *
 * @Route("/mealplan")
 */
class MealplanController extends Controller
{
    /**
     * Lists all Mealplan entities.
     *
     * @Route("/", name="mealplan_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $mealplans = $em->getRepository('HealthBundle:Mealplan')->findAll();

        return $this->render('mealplan/index.html.twig', array(
            'mealplans' => $mealplans,
        ));
    }

    /**
     * Creates a new Mealplan entity.
     *
     * @Route("/new", name="mealplan_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $mealplan = new Mealplan();
        $form = $this->createForm('HealthBundle\Form\MealplanType', $mealplan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mealplan);
            $em->flush();

            return $this->redirectToRoute('mealplan_show', array('id' => $mealplan->getId()));
        }

        return $this->render('mealplan/new.html.twig', array(
            'mealplan' => $mealplan,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Mealplan entity.
     *
     * @Route("/{id}", name="mealplan_show")
     * @Method("GET")
     */
    public function showAction(Mealplan $mealplan)
    {
        $deleteForm = $this->createDeleteForm($mealplan);

        return $this->render('mealplan/show.html.twig', array(
            'mealplan' => $mealplan,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Mealplan entity.
     *
     * @Route("/{id}/edit", name="mealplan_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Mealplan $mealplan)
    {
        $deleteForm = $this->createDeleteForm($mealplan);
        $editForm = $this->createForm('HealthBundle\Form\MealplanType', $mealplan);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mealplan);
            $em->flush();

            return $this->redirectToRoute('mealplan_edit', array('id' => $mealplan->getId()));
        }

        return $this->render('mealplan/edit.html.twig', array(
            'mealplan' => $mealplan,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Mealplan entity.
     *
     * @Route("/{id}", name="mealplan_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Mealplan $mealplan)
    {
        $form = $this->createDeleteForm($mealplan);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mealplan);
            $em->flush();
        }

        return $this->redirectToRoute('mealplan_index');
    }

    /**
     * Creates a form to delete a Mealplan entity.
     *
     * @param Mealplan $mealplan The Mealplan entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Mealplan $mealplan)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mealplan_delete', array('id' => $mealplan->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
