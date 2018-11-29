<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index()
    {

       $article = $this->getDoctrine()
       	->getRepository('App:Article')
       	->findall();
       $commentaire = $this->getDoctrine()
    	 ->getRepository('App:Commentaire')
    	   ->findall();

       return $this->render('article/index.html.twig',
       	[
           'article' => $article,
           'commentaire' =>$commentaire
        ]);
    }
}
