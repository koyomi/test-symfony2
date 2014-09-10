<?php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class blogController extends Controller{
	public function indexAction(){
		return $this->render('SdzBlogBundle:Blog:index.html.twig', array('nom' => 'hotaru'));
	}
	public function voirAction($id){
		return new Response("affichage de l'article d'id : ".$id.".");
	}
	public function voirSlugAction($slug, $annee, $format){
		return new Response("On pourrait afficher l'article correspondant au slug '".$slug."', créé en ".$annee." et au format ".$format.".");
	}
}

