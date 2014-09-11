<?php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller{
	public function indexAction(){
		return $this->render('SdzBlogBundle:Blog:index.html.twig', array('nom' => 'hotaru'));
	}
	public function voirAction($id){
		//return $this->render('SdzBlogBundle:Blog:voir.html.twig', array('id' => $id,));
		//return $this->redirect( $this->generateUrl('sdzblog_accueil', array('page' => 2)) );
		// $response = new Response(json_encode((array('id' => $id))));
		// $response->headers->set('Content-Type', 'aplication/json');
		// return $response;
		$mailer = $this->get('mailer');
		$message = \Swift_Message::newInstance()
			->setSubject('hello zéro !')
			->setFrom('clad0608@gmail.com')
			->setTo('nicolas0608@hotmail.fr')
			->setBody('Coucou, voici un email que vous venez de recevoir !');
		$mailer->send($message);
		return new Response('Email bien envoyé');
	}
	public function voirSlugAction($slug, $annee, $format){
		return new Response("On pourrait afficher l'article correspondant au slug '".$slug."', créé en ".$annee." et au format ".$format.".");
	}
}

