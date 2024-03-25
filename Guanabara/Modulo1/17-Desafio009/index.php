<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 009</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $v1 = $_GET["v1"] ?? 0;
        $v2 = $_GET["v2"] ?? 0;
        $p1 = $_GET["p1"] ?? 1;
        $p2 = $_GET["p2"] ?? 1;
    
    ?>
    <section>
        <h1>Médias Aritméticass</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Primeiro Valor: </label>
            <input type="number" name="v1" id="iv1" min="0" value="<?=$v1?>" required>
            <label for="p1">Primeiro Peso: </label>
            <input type="number" name="p1" id="ip1" min="1" value="<?=$p1?>" required>
            <label for="v2">Segundo Valor:</label>
            <input type="number" name="v2" id="iv2" min="0" value="<?=$v2?>" required>
            <label for="p2">Segundo Peso: </label>
            <input type="number" name="p2" id="ip2" min="1" value="<?=$p2?>" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </section>

    <section>
        <h2>Cálculo das Médias</h2>
        <p>Analisando os valores <?=$v1?> e <?=$v2?>:</p>
        <?php 
            $simpleAvg = ($v1 + $v2)/2;
            $weightedAvg = ($v1*$p1 + $v2*$p2)/($p1+$p2)
        ?>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format($simpleAvg, 2, ",", "")?>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$p1?> e <?=$p2?> é igual a <?=number_format($weightedAvg, 2, ",", "")?>.</li>
        </ul>
    </section>
</body>
</html>