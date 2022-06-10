<?php
require_once "Cliente.php";
class PessoaFisica extends Cliente {
    private string $cpf;
    private int $idade;


    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf)
    {
        $this->cpf = $cpf;
    }


    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade)
    {
        $this->idade = $idade;
    }
}

?>