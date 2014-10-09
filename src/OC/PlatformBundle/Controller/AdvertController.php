<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller{
	public function menuAction(){
		// On fixe en dur une liste ici, bien entendu par la suite
		// on la récupérera depuis la BDD !
		$listAdverts = array(
		array('id' => 2, 'title' => 'Recherche développeur Symfony2'),
		array('id' => 5, 'title' => 'Mission de webmaster'),
		array('id' => 9, 'title' => 'Offre de stage webdesigner')
	);
		return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
			// Tout l'intérêt est ici : le contrôleur passe
			// les variables nécessaires au template !
			'listAdverts' => $listAdverts
		));
	}
	public function indexAction(){
		return $this->render('OCPlatformBundle:Advert:index.html.twig', array('listAdverts' => array());
	}
}
