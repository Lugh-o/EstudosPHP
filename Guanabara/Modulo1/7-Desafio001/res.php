<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 001</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Resultado Final</h1>
        <?php 
        $num = $_GET["num"];
        echo "<p>O número escolhido foi $num. </p>";
        echo "<p>O seu antecessor é " . $num - 1 . ". </p>";
        echo "<p>O seu sucessor é " . $num + 1 . ". </p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>

    </section>
</body>
</html>