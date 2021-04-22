<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\Reclamation1Type;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/reclamation")
 */
class ReclamationController extends AbstractController
{
    /**
     * @Route("/", name="reclamation_index", methods={"GET"})
     */
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }
    /**
     * @Route("/archive", name="archive", methods={"GET"})
     */
    public function archive(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/archive.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }
    /**
     * @Route("/stat", name="stat")
     */
    public function stat(ReclamationRepository $reclamationRepository): Response
    {
        $reclamation=$reclamationRepository->countRecDate();

        $reclamationDate=[];
        $reclamationCount=[];
        foreach ($reclamation as $rec){
            $reclamationDate[]=$rec['dates'];
            $reclamationCount[]=$rec['count'];


        }




        return $this->render('reclamation/stat.html.twig',[
            'reclamationDate'=>json_encode($reclamationDate),
            'reclamationCount'=>json_encode($reclamationCount),

        ]);
    }

    /**
     * @Route("/adminreclamation", name="reclamation_index_admin", methods={"GET","POST"})
     */
    public function indexAdmin(Request $request,ReclamationRepository $repo): Response
    {

        $reclamation=$repo->findAll();
        if($request->isMethod("POST"))
        {
            $search= $request->get('search');
            $reclamation=$repo->findBySearch($search);
        }

        return $this->render('reclamation/admin.html.twig', [
            'reclamations' => $reclamation,
        ]);
    }

    /**
     * @Route("/new", name="reclamation_new", methods={"GET","POST"})
     */
    public function new(Request $request,EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(Reclamation1Type::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('reclamation_index');
        }

        return $this->render('reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="reclamation_show", methods={"GET"})
     */
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="reclamation_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Reclamation $reclamation): Response
    {
        $form = $this->createForm(Reclamation1Type::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamation_index');
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}/archiver", name="reclamation_archiver", methods={"GET","POST"})
     */
    public function archiver(Request $request, Reclamation $reclamation,EntityManagerInterface $entityManager): Response
    {

        $form = $this->createForm(Reclamation1Type::class, $reclamation);
        $reclamation->setArchive('archive');
        $form->handleRequest($request);
        $entityManager->persist($reclamation);
        $entityManager->flush();
        return $this->redirectToRoute('reclamation_index');
    }
    /**
     * @Route("/{id}/desarchiver", name="reclamation_desarchiver", methods={"GET","POST"})
     */
    public function desarchiver(Request $request, Reclamation $reclamation,EntityManagerInterface $entityManager): Response
    {

        $form = $this->createForm(Reclamation1Type::class, $reclamation);
        $reclamation->setArchive('NULL');
        $form->handleRequest($request);
        $entityManager->persist($reclamation);
        $entityManager->flush();
        return $this->redirectToRoute('archive');
    }
    /**
     * @Route("/admin{id}", name="reclamation_delete_admin", methods={"POST"})
     */
    public function deleteAdmin(Request $request, Reclamation $reclamation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reclamation_index_admin');
    }

    /**
     * @Route("/{id}", name="reclamation_delete", methods={"POST"})
     */
    public function delete(Request $request, Reclamation $reclamation): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($reclamation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reclamation_index');
    }



    /**
     * @Route("/{id}/answerAdmin", name="reclamation_answer", methods={"GET","POST"})
     */
    public function editAdmin(Request $request, Reclamation $reclamation): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('reclamation_index_admin');
        }

        return $this->render('reclamation/answer.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }
}
