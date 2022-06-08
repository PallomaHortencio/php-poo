<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 3</title>
</head>
<body>

<h1>PHP  POO - Exemplo 3</h1>
<hr>
<h2>Assusntos abordados:</h2>
<ul>
   <li>Acesso direto á propriedades</li>
   <li>Atribuição de dados e leitura</li>
</ul>

<?php
// Importando a classe
require_once "src/Cliente.php";

// Criação dos objetos
$clienteA = new Cliente;
$clienteB = new Cliente;

// Atribuindo dados ás propriedades do objeto
$clienteA->nome = "Palloma";
$clienteA->email = "palloma@gmail.com";
$clienteA->telefones = ["11-98445-4648", "11-2247-9645"];

$clienteB->nome = "Igor";
$clienteB->email = "igor@gmail.com";
$clienteB->telefones = array("11-97012-1778");
?>

 <!-- <pre> <?=var_dump($clienteA, $clienteB)?> </pre> --> 


 <h2>Dados dos objetos (leitura)</h2>
 <h3> <?=$clienteA->nome?> </h3>
 <p>E-Mail: <?=$clienteA->email?> </p>
 <p>Telefones: <?=implode(", ",$clienteA->telefones)?> </p>
 <p>Senha: <?=$clienteA->senha?> </p>

 <h3> <?=$clienteB->nome?> </h3>
 <p>E-Mail: <?=$clienteB->email?> </p>
 <p>Telefones: <?=implode(", ",$clienteB->telefones)?> </p>


 <h2>Chamando o metodo exebirDados</h2>
 <?= $clienteA->exibirDados() ?>
 <?= $clienteB->exibirDados() ?>
    
</body>
</html>