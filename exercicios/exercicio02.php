<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 (ok)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container { display: flex; }
    </style>
</head>

<body>
    <h1>Exercício 02 (ok)</h1>
    <hr>
    <?php
    $pessoa1 = [
        "usuario" => "jon.oliva",
        "email" => "jon.oliva@savatage.com",
        "senha" => "12131jdsjka_**",
        "idade" => 65,
        "sexo" => "masculino",
        "cidade" => "São Paulo"
    ];

    $pessoa2 = [
        "usuario" => "ozzy.osbourne",
        "email" => "ozzy.osbourne@blacksabbath.com",
        "senha" => "123666aaa",
        "idade" => 70,
        "sexo" => "masculino",
        "cidade" => "Rio de Janeiro"
    ];
    ?>

    <div class="container">
        <section>
            <h2>Dados da pessoa 1</h2>
            <p>Usuário: <?= $pessoa1["usuario"] ?></p>
            <p>E-mail:
                <a href="mailto:<?= $pessoa1["email"] ?>">
                    <?= $pessoa1["email"] ?>
                </a>
            </p>
            <p>Idade: <?= $pessoa1["idade"] ?> anos</p>
            <p>Sexo: <?= $pessoa1["sexo"] ?></p>
        </section>

        <section>
            <h2>Dados da pessoa 2</h2>
            <p>Usuário: <?= $pessoa2["usuario"] ?></p>
            <p>E-mail:
                <a href="mailto:<?= $pessoa2["email"] ?>">
                    <?= $pessoa2["email"] ?>
                </a>
            </p>
            <p>Idade: <?= $pessoa2["idade"] ?> anos</p>
            <p>Sexo: <?= $pessoa2["sexo"] ?></p>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>