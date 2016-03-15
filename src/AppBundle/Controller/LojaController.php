<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Form\ClienteType;
use AppBundle\Entity\Pessoa;
use Symfony\Component\HttpFoundation\Request;

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
	public function cadastroAction(Request $request)
	{
		$pessoa = new Pessoa();
		
		$form = $this->createForm(ClienteType::class, $pessoa);
		
		$form->handleRequest($request);
		
		return $this->render('cliente/new.html.twig', array(
				'form' => $form->createView(),
		));
		
		//return $this->render('cliente/new.html.twig');
	}
}