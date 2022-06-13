<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 5</title>
</head>
<body>

<h1>PHP  POO - Exemplo 5</h1>
<hr>
<h2>Assusntos abordados:</h2>
<ul>
   <li>Herança</li>
   <li>Classe Abstrato (não pode ser instanciadas) </li>
   <li>Métodos/propriedades protegidos (acessíveis apenas pela subclasse) </li>
   </ul>

<?php
// Importando a classe
/*  require_once "src/Cliente.php"; SuperClasse */
require_once "src/PessoaFisica.php";  // SubClasse
/* require_once "src/PessoaJuridica.php"; subclasse */
require_once "src/MEI.php"; // subclasse

$clientePF = new PessoaFisica;
$clientePF->setNome('Palloma');
$clientePF->setEmail('palloma@gmail.com');
$clientePF->setSenha('123dfg');
$clientePF->setCpf('123.456.789-00');
$clientePF->setIdade(21);



$clientePJ = new PessoaJuridica;
$clientePJ->setNome('Debora Abdala');
$clientePJ->setCnpj('12. 345. 678/0001-09'); 
$clientePJ->setAnoFundacao(2001);
$clientePJ->setNomeFantasia('Lojinha da Esquina');

$clienteMEI = new MEI;
$clienteMEI->setNome('Marcos Antonio');
$clienteMEI->setNomeFantasia('Banda da Turminha');
$clienteMEI->setCnpj('12. 345. 678/0001-09');
$clienteMEI->setAreaDeAtuacao('Música');
?>


<pre> <?=var_dump($clientePF)?> </pre>
<pre> <?=var_dump($clientePJ)?> </pre>
<pre> <?=var_dump($clienteMEI)?> </pre>

<?php 
$cliente = new Cliente; // ERRO, pois cliente é abstract(abstrato)
?>
<pre> <?=var_dump($cliente)?> </pre>

    
</body>
</html>