<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 003</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php 
            $num = $_GET["value"];
            $converted = round($num / 5.22, 2);
            echo "Seus R$$num equivalem a US$$converted.";
        ?>
        <p><strong>*Cotação fixa de R$5,22</strong> informada diretamente no código.</p>
        <button type="button" onclick="history.back()">Voltar</button>

    </section>
</body>
</html>