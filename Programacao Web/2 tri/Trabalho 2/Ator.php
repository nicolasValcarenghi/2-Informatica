<?php

class Ator {

    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        
        $this -> nome = $nome;
        $this -> idade = $idade;
        
    }

    public function setNome($nome) {
        $this -> nome = $nome;
    }

    public function getNome() {
        return $this -> nome;
    }

    public function setIdade($idade) {
        $this -> idade = $idade;
    }

    public function getIdade() {
        return $this -> idade;
    }
}