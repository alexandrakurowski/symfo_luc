<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentaireController extends AbstractController
{
    /**
     * @Route("/commentaire", name="commentaire")
     */
    public function index()
    {
        $article = $this->getDoctrine()
        ->getRepository('App:Article')
        ->findall();

    	$commentaire = $this->getDoctrine()
    	   ->getRepository('App:Commentaire')
    	   ->findall();

    	return $this->render('commentaire/index.html.twig',
    		[
    			'article' => $article,
                'commentaire' => $commentaire
    		]);

    }


}
