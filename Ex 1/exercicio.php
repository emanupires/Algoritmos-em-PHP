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
    <section class="forms">
        <h1 class="titulo-form">Me conte sobre você!</h1>
            <form action="./form.php" method="post">
                <div class="form form-nome">
                    <label for="nome" class="nome">Qual seu nome?</label>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome">
                </div>
                <button type="submit" class="botao">Oi!</button>
            </form>
    </section>
</body>
</html>
