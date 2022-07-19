<?php 

require_once('./src/Profissao.php');

try {
   $profissao = new Profissao($_POST['nome'], $_REQUEST['profissao']);
} catch (Exception $e) {
    $url = "Location:index.php?mensagemErro=";
    header($url . $e->getMessage());
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Formulário</title>
</head>
<body>
    <h1 class="titulo-form">Contracheque mensal</h1>
    <p class="texto"><?php echo $profissao->getNome(); ?>, seu salário desse mês é:</p>
    <p class="texto texto__salario"><?php echo $profissao->getSalario(); ?></p>
</body>
