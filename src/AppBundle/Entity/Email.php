<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Email{
	
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
	private $nome;
	
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
		return $this;
	}
	public function getIdPessoa() {
		return $this->idPessoa;
	}
	public function setIdPessoa($idPessoa) {
		$this->idPessoa = $idPessoa;
		return $this;
	}
	public function getNome() {
		return $this->nome;
	}
	public function setNome($nome) {
		$this->nome = $nome;
		return $this;
	}
				
}