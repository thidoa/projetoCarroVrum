<?php

	class Carro {
		public $cor;
		public $modelo;
		public $marca;
		public $kmetragem;
		public $vMax;
		public $velNow;
		public $lig = false;
		
		
		
		// Velocidade Maxima
		function setvelMax($v) {
			$this->velMax = $v;
		}
		
		function getvelMax() {
			return $this->velMax;
		}
		
		// Velocidade atual
		
		function setvelNow($v) {
			if($this->lig == true){
				if($v > $this->velMax){
					$this->velNow = $this->velMax;
				}
				else{
					$this->velNow = $v;
				}
			}
			else{
				$this->velNow = 0;
			}
		}
		
		function getvelNow() {
			return $this->velNow;
		}
		
		// Ligar e desligar
		
		function ligar() {
			if ($this->lig == true)
				return;
			
			$this->lig = true;
		}
		
		function desligar() {
			if ($this->lig == false)
				return;
			
			$this->lig = false;
		}

		function setCor($cor){  // Inserir valor do atributo Cor
			$this->cor = $cor;
		}
		
		function getCor(){ // Pegar o valor do atributo Cor
			return $this->cor;
		}
		
		function setModelo($modelo){ // Inserir valor do atributo Modelo
			$this->modelo = $modelo;
		}
		
		function getModelo(){ // Pegar o valor do atributo Modelo
			return $this->modelo;
		}

		//função que muda o nome da marca do carro
		function setMarca($marca){
			$this->marca = $marca;
		}
		//função que "pega" esse nome que colocamos e depois podemos mostrar
		function getMarca(){
			return $this->marca;
		}
		// mesma coisa que o outro, mudando apenas a variavel
		function setKmetragem($kmetragem){
			$this->kmetragem = $kmetragem;
		}
		function getKmetragem(){
			return $this->kmetragem;
		}
		function getLig(){
			return $this->lig;
		}
	}

?>