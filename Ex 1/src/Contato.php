<?php

class Contato 
{
    private $nome;

    public function __construct (string $nome) {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return ucwords($this->nome);
    }
}