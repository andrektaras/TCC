<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Login{
	
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue
	 * @ORM\Column(type="integer")
	 */
	private $id;
	
	/**
     * @ORM\OneToOne(targetEntity="Pessoa")
     * @ORM\JoinColumn(name="idPessoa", referencedColumnName="id", onDelete="CASCADE")
     */
	private $idPessoa;
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $nomeUsuario;
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $senha;
	
				
}