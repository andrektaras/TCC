<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Endereco{
	
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
	private $rua;
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $numero;
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $complemento;
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $cidade;
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $cep;
	
	/**
	 * @ORM\Column(type="string")
	 */
	private $estado;
	
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
	public function getRua() {
		return $this->rua;
	}
	public function setRua($rua) {
		$this->rua = $rua;
		return $this;
	}
	public function getNumero() {
		return $this->numero;
	}
	public function setNumero($numero) {
		$this->numero = $numero;
		return $this;
	}
	public function getComplemento() {
		return $this->complemento;
	}
	public function setComplemento($complemento) {
		$this->complemento = $complemento;
		return $this;
	}
	public function getCidade() {
		return $this->cidade;
	}
	public function setCidade($cidade) {
		$this->cidade = $cidade;
		return $this;
	}
	public function getCep() {
		return $this->cep;
	}
	public function setCep($cep) {
		$this->cep = $cep;
		return $this;
	}
	public function getEstado() {
		return $this->estado;
	}
	public function setEstado($estado) {
		$this->estado = $estado;
		return $this;
	}
			
}