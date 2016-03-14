<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Telefone{
	
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
	private $numero;
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $tipo;
	
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
	public function getNumero() {
		return $this->numero;
	}
	public function setNumero($numero) {
		$this->numero = $numero;
		return $this;
	}
	public function getTipo() {
		return $this->tipo;
	}
	public function setTipo($tipo) {
		$this->tipo = $tipo;
		return $this;
	}
				
}