<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <title>Calculadora de raizes</title>
</head>
<body>
    <?php
        $numero = $_REQUEST["num"] ?? 1;
        $raiz_quadrada = sqrt($numero);
        $raiz_cubica = $numero ** (1 / 3)
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?= $numero ?>">
            <input type="submit" value="Analizar">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <p>Analizando o <strong>número <?= $numero ?></strong> temos:</p>
        <ul>
            <li>A raiz quadrada é <?= number_format($raiz_quadrada, 3, ',', '.') ?>
            <li>A raiz cubica é <?= number_format($raiz_cubica, 3, ',', '.') ?>
        </ul>
    </section>
</body>
</html>