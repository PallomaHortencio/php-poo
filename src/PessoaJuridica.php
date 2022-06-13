<?php
require_once "Cliente.php";
/* final class indica que a classe NÃO PERMITE herança */
 class PessoaJuridica extends Cliente {
    private string $cnpj;
    private int $anoFundacao;
    private string $nome;

    public function __construct()
    {
        $this->setSituacao("verificar");
    }

    public function exibirDados() {
        echo "<h3>".$this->getNome()."</h3>";
        echo "<p>CNPJ: ".$this->cnpj."</p>";
        echo "<p>Ano de Fundação: ".$this->anoFundacao."</p>"; 
        echo "<p>Situação: ".$this->getSituacao()."</p>";
        }


    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function setCnpj(string $cnpj)
    {
        $this->cnpj = $cnpj;
    }


    public function getAnoFundacao(): int
    {
        return $this->anoFundacao;
    }

    public function setAnoFundacao(int $anoFundacao)
    {
        $this->anoFundacao = $anoFundacao;
    }


    public function getNome(): string
    {
        return $this->nome;
    }


    public function setNome(string $nome)
    {
        $this->nome =  "Empresa: ".$nome;
    }
}

?>
