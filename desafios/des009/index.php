<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <title>Calculadora de idade</title>
</head>
<body>
    <?php
        $ano_atual = date('Y');
        $ano_nascimendo = $_GET['an'] ?? 2000;
        $ano_calculo = $_GET['ac'] ?? $ano_atual;
        $idade = $ano_calculo - $ano_nascimendo;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="an">Em que ano você nasceu?</label>
            <input type="number" name="an" id="an" value="<?= $ano_nascimendo ?>">
            <label for="ac">Quer saber sua idade em que ano? (atualmente estamos em <strong><?= $ano_atual ?></strong>)</label>
            <input type="number" name="ac" id="ac" value="<?= $ano_calculo ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?= $ano_nascimendo ?> vai ter <strong><?= $idade ?> anos</strong> em <?= $ano_calculo ?></p>
    </section>
</body>
</html>