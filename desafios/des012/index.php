<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <title>Caixa eletrnico</title>
</head>
<body>
    <?php
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $valor = $_GET["val"] ?? 0;
        $nota_100 = intdiv($valor, 100);
        $rnota_100 = $valor % 100;
        $nota_50 = intdiv($rnota_100, 50);
        $rnota_50 = $rnota_100 % 50;
        $nota_20 = intdiv($rnota_50, 20);
        $rnota_20 = $rnota_50 % 20;
        $nota_10 = intdiv($rnota_20, 10);
        $rnota_10 = $rnota_20 % 10;
        $nota_5 = intdiv($rnota_10, 5);
    ?>
    <main>
        <h1>Caixa eletrnico</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="val">Qual o valor que você dejega sacar (R$)</label>
            <input type="number" name="val" id="val" value="<?= $valor ?>" step="5">
            <p>Notas disponives 100, 50, 20, 10 e 5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <h2>Saque de <?= numfmt_format_currency($padrao, $valor, 'BRL') ?> realizadoo</h2>
        <p>O caixa eletrnico vai te entregar as seguites notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="imagem da nota 100 reais"> x<?= $nota_100 ?>
            <li><img src="imagens/50-reais.jpg" alt="imagem da nota 50 reais"> x<?= $nota_50 ?>
            <li><img src="imagens/20-reais.jpg" alt="imagem da nota 20 reais"> x<?= $nota_20 ?>
            <li><img src="imagens/10-reais.jpg" alt="imagem da nota 10 reais"> x<?= $nota_10 ?>
            <li><img src="imagens/5-reais.jpg" alt="imagem da nota 5 reais"> x<?= $nota_5 ?>
        </ul>
    </section>
</body>
</html>