<?php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller{
	public function indexAction($page){
		if ($page < 1) {
			throw $this->createNotFoundException("Page inexistante (page = ".$page.")");
		}
		return $this->render('SdzBlogBundle:Blog:index.htlm.twig');
	}
	public function voirAction($id){
		return $this->render('SdzBlogBundle:Blog:voir.html.twig', array('id' => $id));
	}
	public function ajouterAction(){
		if ($this->get('request')->getMethod() == 'POST') {
			// Bien sûr, cette méthode devra réellement ajouter l'article
		// Mais faisons comme si c'était le cas
		$this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');

		// Le « flashBag » est ce qui contient les messages flash dans la session
		// Il peut bien sûr contenir plusieurs messages :
		$this->get('session')->getFlashBag()->add('info', 'Oui oui, il est bien enregistré !');

		// Puis on redirige vers la page de visualisation de cet article
		return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => 5)) );
  		}
  		return $this->render('SdzBlogBundle:Blog:ajouter.html.twig');
	}
	public function modifierAction($id){
		return $this->render('SdzBlogBundle:Blog:modifier.html.twig');
	}
	public function supprimerAction($id){
		return $this->render('SdzBlogBundle:Blog:supprimer.html.twig');
	}
	public function menuAction(){
    	// On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
		$liste = array(
			array('id' => 2, 'titre' => 'Mon dernier weekend !'),
			array('id' => 5, 'titre' => 'Sortie de Symfony2.5'),
			array('id' => 9, 'titre' => 'Petit test')
		);

		return $this->render('SdzBlogBundle:Blog:menu.html.twig', array(
			'liste_articles' => $liste 
		));
	}
}
	
