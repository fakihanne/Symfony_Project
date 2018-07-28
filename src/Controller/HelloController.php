<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class HelloController extends Controller {

	/**
     *  @Route("/saluez")
     */

	
   	public function salut()

	{

		$f = 'Fatou';
		return $this-> render('index.html.twig', ['fa' => $f]); // ou array('fa' => $f));

	}

	public function etudiant()

	{
		
		$etudiants = ['Fatou','Mor','Samba'];
		return $this-> render('etudiant.html.twig', ['x' => $etudiants]);

		
	}
}

?>
