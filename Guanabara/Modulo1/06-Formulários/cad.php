<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_GET);
            // $_GET $_POST $_COOKIES -> $_REQUEST é uma junção dessas 3
            $n = $_GET["nome"] ?? "undefined";
            $s = $_GET["snome"] ?? "undefined";
            echo "<p>É um prazer te conhecer, $n $s!</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>