<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Controlador usado para gerenciar o conteúdo da parte pública da loja
 * 
 * @Route("/")
 */

class LojaController extends Controller
{
	/**
	 * @Route("/", name="home")
	 */
	public function indexAction()
	{
		return $this->render('home/index.html.twig');
	}
	
	/**
	 * @Route("/cadastra", name="cadastra")
	 */
	public function cadastroAction()
	{
		return $this->render('home/index.html.twig');
	}
}