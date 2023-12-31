<?php

/*
 * Crie uma classe PHP para o tipo Pet, com as propriedades:
 * nome, especie, raca, idade, nomeDono
 * 
 * 
 * Implemente o conceito de encapsulamento na classe.
 *
 *
 * No método para atribuir o nome da classe Pet, faça uma
 * validação para só aceitar nomes com pelo menos 2 caracteres
 */
class Pet
{ 
    private $nome;
    private $especie;
    private $raca;
    private $idade;
    private $nomeDono;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        if (strlen($nome) >= 2)
        {
            $this->nome = $nome;
            return $this;
        }
        else
        {
            echo "Nome inválido";
        }
    }

    public function getEspecie()
    {
        return $this->especie;
    }

    public function setEspecie($especie)
    {
        $this->especie = $especie;
        return $this;
    }

    public function getRaca()
    {
        return $this->raca;
    }

    public function setRaca($raca)
    {
        $this->raca = $raca;
        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    public function getNomeDono()
    {
        return $this->nomeDono;
    }
    
    public function setNomeDono($nomeDono)
    {
        $this->nomeDono = $nomeDono;
        return $this;
    }

}
