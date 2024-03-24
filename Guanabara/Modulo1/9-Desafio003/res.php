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
            $cot = 5.22;
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            $converted = numfmt_format_currency($padrao, $num/$cot, "USD");
            echo "Seus " . numfmt_format_currency($padrao, $num, "BRL") . " equivalem a " . $converted.".";
        ?>
        <p><strong>*Cotação fixa de R$5,22</strong> informada diretamente no código.</p>
        <button type="button" onclick="history.back()">Voltar</button>

    </section>
</body>
</html>