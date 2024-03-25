<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários Retroalimentados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET["v1"] ?? 0;
        $v2 = $_GET["v2"] ?? 0;    
    ?>
    <section>
        <h1>Formulários Retroalimentados</h1>
        <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1:</label>
            <input type="number" name="v1" id="iv1" value=<?=$v1?>>
            <label for="v2">Valor 2:</label>
            <input type="number" name="v2" id="iv2" value=<?=$v2?>>
            <input type="submit" value="Somar">
        </form>
    </section>
    <section>
        <h2>Resultado da Soma</h2>
        <?php 
            $sum = $v1 + $v2;
            echo "<p>A soma de $v1 e $v2 é $sum.</p>"
        ?>
    </section>
</body>
</html>