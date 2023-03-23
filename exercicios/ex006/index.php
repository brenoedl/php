<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <title>Matematica com php</title>
</head>
<body>
    <main>
        <h1>Matematica com php</h1>
        <?php
            $num1 = 3;
            $num2 = 2;
            $som = $num1 + $num2;
            $sub = $num1 - $num2;
            $mul = $num1 * $num2;
            $divr = $num1 / $num2;
            $pot = $num1 ** $num2;
            $mod = $num1 % $num2;
            $divi = intdiv($num1, $num2);
            $raq = sqrt($pot);
            $rac = 81 ** ($sub / $num1);
            echo "<p>$num1 + $num2 = $som</p>";
            echo "<p>$num1 - $num2 = $sub</p>";
            echo "<p>$num1 x $num2 = $mul</p>";
            echo "<p>$num1<sup>$num2</sup> = $pot</p>";
            echo "<p>A divisão real entre $num1 e $num2 é igual a $divr</p>";
            echo "<p>O resto da divisão inteira entre $num1 e $num2 é igual a $mod</p>";
            echo "<p>A raiz quadrada de $pot é igual a $raq</p>";
            echo "<p>A divisão inteira entre $num1 e $num2 é igual a $divi</p>";
            echo "<p>A raiz cubica de 81 é igual a $rac</p>";
        ?>
    </main>
</body>
</html>