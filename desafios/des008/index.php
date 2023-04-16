<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <title>Médias aritméticas</title>
</head>
<body>
    <?php
        $nota_1 = $_GET['n1'] ?? 0;
        $peso_1 = $_GET['p1'] ?? 1;
        $nota_2 = $_GET['n2'] ?? 0;
        $peso_2 = $_GET['p2'] ?? 1;
        $media_a = ($nota_1 + $nota_2) / 2;
        $media_p = ($nota_1 * $peso_1 + $nota_2 * $peso_2) / ($peso_1 + $peso_2)
    ?>
    <main>
        <h1>Médias aritméticas</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="n1">1ª Nota</label>
            <input type="number" name="n1" id="n1" step="0.05" min="0" max="10" value="<?= $nota_1 ?>">
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="p1" min="1" value="<?= $peso_1 ?>">
            <label for="n2">2ª Nota</label>
            <input type="number" name="n2" id="n2" step="0.05" min="0" max="10" value="<?= $nota_2 ?>">
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="p2" min="1" value="<?= $peso_2 ?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Calculo das médias</h2>
        <p>Analizando os valores <?= $nota_1 ?> e <?= $nota_2 ?>:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?= number_format($media_a, 2, ',', '.') ?>.
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?= $peso_1 ?> e <?= $peso_2 ?> é igual a <?= number_format($media_p, 2, ',', '.') ?>.
        </ul>
    </section>
</body>
</html>