<?php

class Profissao 
{
    private $nome;
    private $profissao;

    const SALARIOS = [
        'Professora' => 2886.24,
        'Cozinheira' => 1215,
        'Diretora' => 3210
    ];

    public function __construct (string $nome, string $profissao)
    {
        $this->setNome($nome);
        $this->setProfissao($profissao);
    }

    public function setNome($nome): void 
    {
        if (empty($nome) === true) {
            throw new Exception("Nome inválido");
        } else {
            $this->nome = $nome;
        }
    }

    public function getNome(): string
    {
        return ucwords($this->nome);
    }

    public function setProfissao(string $profissao): void
    {
        $this->profissao = $profissao;
    }

    public function getProfissao(): string
    {
        return $this->profissao;
    }

    public function getSalario()
    {
        return self::SALARIOS[$this->getProfissao()];
    }
}