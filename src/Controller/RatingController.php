<?php

namespace App\Controller;

use App\Entity\Rating;
use App\Form\RatingType;
use App\Repository\RatingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class RatingController extends AbstractController
{
    /**
     * @Route("/rating", name="rating")
     */
    public function index(Request $request,EntityManagerInterface $entityManager,RatingRepository $repo): Response
    {

        $rating= new Rating();
        $form= $this->createForm(RatingType::class,$rating);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager->persist($rating);
            $entityManager->flush();

            return $this->redirectToRoute('ratinggg');
        }
        $avg=$repo->averageRate();

        return $this->render('rating/index.html.twig', [
            'reclamation' => $rating,
            'form' => $form->createView(),
            'avg'=>$avg,

        ]);
    }
    /**
     * @Route("/rating/{id}/edit", name="rating_edit")
     */
    public function edit(Rating $rating,Request $request,EntityManagerInterface $entityManager,RatingRepository $repo)
    {





        $form = $this->createForm(RatingType::class, $rating);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($rating);
            $entityManager->flush();


        }
        $avg=$repo->averageRate();

        return $this->render('rating/update.html.twig', [
            'rating' => $rating,
            'form' => $form->createView(),
            'avg'=>$avg,

        ]);
    }
    /**
     * @Route("/ratinggg", name="ratinggg")
     */

    public function test(RatingRepository $repo){

        $rating=$repo->findOneByUserID(1);

        if($rating===null){
            return $this->redirect('/rating');
        }
        else{

            return $this->redirectToRoute('rating_edit',[
                'id'=>$rating->getId(),
            ]);
        }

    }
}
