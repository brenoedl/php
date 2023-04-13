<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <title>Anatomia da divisão</title>
</head>
<body>
    <?php
        $dividendo = $_POST["dividendo"] ?? 0;
        $divisor = $_POST["divisor"] ?? 1;
        $quociente = intdiv($dividendo, $divisor);
        $resto = $dividendo % $divisor;
    ?>
    <main>
        <h1>Anatomia da divisão</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="post">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?= $divisor?>">
            <input type="submit" value="Analizar">
        </form>
    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <table class="divisao">
            <tr>
                <td><?= $dividendo ?></td>
                <td><?= $divisor ?></td>
            </tr>
            <tr>
                <td><?= $resto ?></td>
                <td><?= $quociente ?></td>
            </tr>
        </table>
    </section>
</body>
</html>