<?php

class Banco
{

    private $nome;
    private $email;
    private $endereco;
    private $gerente;

    public function __construct($nome, $email, $endereco, $gerente)
    {
        $this->$nome = $nome;
        $this->$email = $email;
        $this->$endereco = $endereco;
        $this->$gerente = $gerente;
    }

    // nome

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    // email

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    // endereco

    public function getEndereco()
    {
        return $this->endereco;
    }
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    // gerente

    public function getGerente()
    {
        return $this->gerente;
    }

    public function setGerente($gerente)
    {
        $this->gerente = $gerente;
    }
}

var_dump($banco);
