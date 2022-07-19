<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Confira seu contracheque</title>
</head>
<body>
    <section class="forms">
        <h1 class="titulo-form">Contracheque mensal</h1>
            <form action="./enviado.php" method="post">
                <div class="form form-nome">
                    <label for="nome" class="nome">Insira seu Nome e Profissão:</label>
                    <input type="text" id="nome" name="nome" class="form-control input" placeholder="Digite seu nome" required>
                </div>
                <div class="select input">
                <label for="profissao" class="profissao-texto"></label>
                <select name="profissao" id="profissao" required>
                    <option value="">Insira sua profissão</option>
                    <option value="Cozinheira">Cozinheira</option>
                    <option value="Diretora">Diretora</option>
                    <option value="Professora">Professora</option>
                </select>
                </div>
                <button type="submit" class="botao">Enviar</button>
            </form>
            <?php 
            if (array_key_exists("mensagemErro", $_GET)) {
            echo $_GET["mensagemErro"];
            }
            ?>
    </section>
</body>
</html>

