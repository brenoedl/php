<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <title>Calculadora de tempo</title>
</head>
<body>
    <?php
        $tempo = $_GET['tempo'] ?? 0;
        $semana = intdiv($tempo, 604800);
        $rsemana = $tempo % 604800;
        $dia = intdiv($rsemana, 86400);
        $rdia = $rsemana % 86400;
        $hora = intdiv($rdia, 3600);
        $rhora = $rdia % 3600;
        $minuto = intdiv($rhora, 60);
        $segundo = $rhora % 60;
    ?>
    <main>
        <h1>Calculadora de tempo</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="tempo">Qual é o total de segundos?</label>
            <input type="number" name="tempo" id="tempo" value="<?= $tempo ?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <p>Analizando o valor que você digitou, <strong><?= $tempo ?> segundos</strong> equivalem a um total de:</p>
        <ul>
            <li><?= $semana ?> semanas
            <li><?= $dia ?> dias
            <li><?= $hora ?> horas
            <li><?= $minuto ?> minutos
            <li><?= $segundo ?> segundos
        </ul>
    </section>
</body>
</html>