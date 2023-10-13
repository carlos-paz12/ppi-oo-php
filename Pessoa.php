<?php

/* 
 * Crie uma classe PHP para o tipo Pessoa, com as propriedades:
 * nome, nascimento,  cidade, genero
 *
 *
 * Implemente o conceito de encapsulamento na classe.
 */
class Pessoa
{
    private $nome;
    private $nascimento;
    private $cidade;
    private $genero;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getNascimento()
    {
        return $this->nascimento;
    }

    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
        return $this;
    }

}
