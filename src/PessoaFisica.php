<?php
require_once "Cliente.php";
class PessoaFisica extends Cliente {
    private string $cpf;
    private int $idade;

    /* Propriedade estática (não depende de um objeto) */
    public static string $cidade;

    /* Método estatico (não depende de um objeto) */
    public static function verificaIdade(int $idade):string {
        return $idade >= 60 ? "prioridade" : "normal";
    }



    public function __construct()
    {
        $this->setSituacao("normal");
    }

    public function exibirDados() {
        echo "<h3>".$this->getNome()."</h3>";
        echo "<p>Idade: ".$this->idade."</p>";
        echo "<p>Situação: ".$this->getSituacao()."</p>"; 
    }


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