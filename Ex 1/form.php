<?php

require_once('./src/Contato.php');

$contato = new Contato($_POST['nome']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Nome enviado com sucesso</title>
</head>
<body>
    <p>Olá, <?php echo htmlspecialchars($contato->getNome());?>, é um prazer te conhecer! 
    
</body>
</html>