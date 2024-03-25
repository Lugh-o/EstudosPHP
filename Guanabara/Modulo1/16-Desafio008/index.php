<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 008</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <?php 
            $num = $_GET["num"] ?? 0;
        ?>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER["PHP_SELF"]?>" method="get">
            <label for="num">Número: </label>
            <input type="number" name="num" min="0" id="inum" value="<?=$num?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </section>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $sqrt = number_format(sqrt($num), 3);
            $cbrt = number_format($num ** (1/3), 3);
        ?>
        <p>Analisando o <strong>número <?=$num?></strong>, temos:</p>
        <ul>
            <li>A sua raiz quadrada é <strong><?=$sqrt?></strong>.</li>
            <li>A sua raiz cúbica é <strong><?=$cbrt?></strong>.</li>
        </ul>
    </section>
</body>
</html>