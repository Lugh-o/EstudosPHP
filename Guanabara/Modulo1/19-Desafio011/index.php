<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 011</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $price = $_GET['price'] ?? 0;
        $readj = $_GET['readj'] ?? 0;
    ?>
    <section>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="price">Preço do Produto (R$): </label>
            <input type="number" name="price" id="iprice" min="0" step="0.01" required value="<?=$price?>">

            <label for="readj">Qual será o percentual do reajuste? (<strong><span id="readjValue">?</span>%</strong>)</label>
            <input type="range" name="readj" id="ireadj" min="0" max="100" step="1" oninput="mudarValor()" value="<?=$readj?>">

            <input type="submit" value="Reajustar">
        </form>
    </section>

    <section>
        <h2>Resultado do Reajuste</h2>
        <?php 
            $finalPrice = $price * (1+$readj/100)
        ?>
        <p>O produto que custava R$<?=$price?> com <strong><?=$readj?>% de aumento</strong> vai passar a custar <strong>R$<?=$finalPrice?></strong> a partir de agora.</p>
    </section>

    <script>
        mudarValor()
        function mudarValor() {
            document.getElementById("readjValue").innerText = ireadj.value;
        }
    </script>
</body>
</html>