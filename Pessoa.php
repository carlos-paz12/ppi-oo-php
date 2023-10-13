<?php

/* 
 * Crie uma classe PHP para o tipo Pessoa, com as propriedades:
 * nome, nascimento,  cidade, genero
 *
 *
 * Implemente o conceito de encapsulamento na classe.
 * 
 *
 * No método para atribuir o nome da classe Pessoa, faça uma
 * validação para só aceitar nomes com pelo menos 3 caracteres
 *
 *
 * Crie um método adicional na classe Pessoa, que calcule e
 * retorne a idade atual com base na data de nascimento
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
        if (strlen($nome) >= 3)
        {
            $this->nome = $nome;
            return $this;
        }
        else
        {
            echo "Nome inválido";
        }
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

    /*
     * Para funcionar, o atributo 'nascimento' deve
     * estar no formato dd/mm/yyyy
     *
     * Exemplos:
     * 21/04/2004
     * 18/14/1999
     * 23/09/2004
     */
    public function calcularIdade()
    {
        $nascimentoEmTempo = strtotime($this->nascimento);
        $nascimentoEmData = date('d/m/Y', $nascimentoEmTempo);
        
        $dataAtual = new DateTime(date('d/m/Y'));
        $dataNascimento = new DateTime($nascimentoEmData);

        $idade = $dataAtual->diff($dataNascimento)->format('%Y');
        
        return $idade;
    }

}
