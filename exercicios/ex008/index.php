<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Somador de números</title>
</head>
<body>
    <?php
        $n1 = $_GET["num1"] ?? 0;
        $n2 = $_GET["num2"] ?? 0;
    ?>
    <main>
        <h1>Somador de números</h1>
        <form action="<?= $_SERVER["PHP_SELF"]?>" method="get">
            <label for="num1">valor 1</label>
            <input type="number" name="num1" id="num1" value="<?= $n1?>">
            <label for="num2">valor 2</label>
            <input type="number" name="num2" id="num2" value="<?= $n2?>">
            <input type="submit" value="somar">
        </form>
    </main>
    <section>
        <h2>Resultado da soma</h2>
        <?php
            $s = $n1 + $n2;
            echo "<p>A soma entre $n1 e $n2 é igual a $s</p>"
        ?>
    </section>
</body>
</html>