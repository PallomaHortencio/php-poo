<?php
class Cliente {
    public string $nome;
    public string $email;
    public string $senha;
    public array $telefones;

    // Método Construtor
    public function __construct(string $nome, string $email)
    {
        /* $this é uma variável especial, sempre apontando para a referência da Classe atualmente manipulada. */
        $this->nome = $nome;
        $this->email = $email;
    }
}