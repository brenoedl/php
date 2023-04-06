<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style.css">
    <link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon">
    <title>Variaves super globais</title>
</head>
<body>
    <header>
        <h1>Variaves super globais</h1>
    </header>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "quarta-feira", time() + 3600);
                echo "<h2>Super global get</h2>";
                var_dump($_GET);
                echo "<h2>Super global post</h2>";
                var_dump($_POST);
                echo "<h2>Super global request</h2>";
                var_dump($_REQUEST);
                echo "<h2>Super global cookie</h2>";
                var_dump($_COOKIE);
                echo "<h2>Super global env</h2>";
                var_dump($_ENV);
                echo "<h2>Super global server</h2>";
                var_dump($_SERVER);
                echo "<h2>Super global globals</h2>";
                var_dump($GLOBALS)
            ?>
        </pre>
    </main>
</body>
</html>