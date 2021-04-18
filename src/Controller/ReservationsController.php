<?php

namespace App\Controller;

use App\Entity\Reservations;
use App\Form\ReservationsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reservations")
 */
class ReservationsController extends AbstractController
{
    /**
     * @Route("/", name="reservations_index", methods={"GET"})
     */
    public function index(): Response
    {
        $reservations = $this->getDoctrine()
            ->getRepository(Reservations::class)
            ->findAll();

        return $this->render('reservations/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    /**
     * @Route("/new", name="reservations_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $reservation = new Reservations();
        $form = $this->createForm(ReservationsType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservation);
            $entityManager->flush();

            return $this->redirectToRoute('reservations_index');
        }

        return $this->render('reservations/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idReservation}", name="reservations_show", methods={"GET"})
     */
    public function show(Reservations $reservation): Response
    {
        return $this->render('reservations/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    /**
     * @Route("/{idReservation}/edit", name="reservations_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reservations $reservation): Response
    {
        $form = $this->createForm(ReservationsType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reservations_index');
        }

        return $this->render('reservations/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idReservation}", name="reservations_delete", methods={"POST"})
     */
    public function delete(Request $request, Reservations $reservation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reservation->getIdReservation(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reservation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservations_index');
    }
}
