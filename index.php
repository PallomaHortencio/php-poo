<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 7</title>
</head>
<body>

<h1>PHP  POO - Exemplo 7</h1>
<hr>
<h2>Assusntos abordados:</h2>
<ul>
   <li>Propreidades e Métodos Estáticos</li>
  
   </ul>
   <hr>

<?php
// Importando a classe
/*  require_once "src/Cliente.php"; SuperClasse */
require_once "src/PessoaFisica.php";  // SubClasse
/* require_once "src/PessoaJuridica.php"; subclasse */
require_once "src/MEI.php"; // subclasse

$clientePF = new PessoaFisica;
$clientePF->setNome('Palloma');
$clientePF->setIdade(61); 

// Acessando uma propriedade estática
PessoaFisica::$cidade = "São Paulo";

// Acessando e lendo o valor de uma propriedade estática
echo PessoaFisica::$cidade;

?>

<h3>Pessoa Fisica</h3>
<p> <?=$clientePF->getNome()?> </p>
<p> <?=$clientePF->getIdade()?> </p>
<p>Tipo de atendimento:
    <?=PessoaFisica::verificaIdade($clientePF->getIdade())?>
</p>



    
</body>
</html>