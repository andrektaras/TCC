<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class PJuridica{
	
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
	private $nomeFantasia;
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $cnpj;
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $razaoSocial;
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $incrEstadual;
	
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
	public function getNomeFantasia() {
		return $this->nomeFantasia;
	}
	public function setNomeFantasia($nomeFantasia) {
		$this->nomeFantasia = $nomeFantasia;
		return $this;
	}
	public function getCnpj() {
		return $this->cnpj;
	}
	public function setCnpj($cnpj) {
		$this->cnpj = $cnpj;
		return $this;
	}
	public function getRazaoSocial() {
		return $this->razaoSocial;
	}
	public function setRazaoSocial($razaoSocial) {
		$this->razaoSocial = $razaoSocial;
		return $this;
	}
	public function getIncrEstadual() {
		return $this->incrEstadual;
	}
	public function setIncrEstadual($incrEstadual) {
		$this->incrEstadual = $incrEstadual;
		return $this;
	}
		
	
}