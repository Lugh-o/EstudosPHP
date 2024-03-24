<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 004</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v2.0</h1>
        <?php 
            $cot = null;
            for($i = 0; $cot == null; $i--){
                $day = date("m-d-Y", strtotime("-$i day"));
                $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao='".$day."'&\$top=1&\$skip=0&\$format=json&\$select=cotacaoCompra";
                $cot = json_decode(file_get_contents($url), false)->value;
            }
            $cot = $cot[0]->cotacaoCompra;

            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
            $cotRounded =  numfmt_format_currency($padrao, $cot, "BRL");
            $num = $_GET["value"];
            $converted = numfmt_format_currency($padrao, $num/$cot, "USD");
            echo "<p>Seus ". numfmt_format_currency($padrao, $num, "BRL") ." equivalem a $converted.</p>";
            echo "<p>*Cotação de $cotRounded obtida diretamente do site do <strong>Banco Central do Brasil</strong> do dia $day</p>";
        ?>
        <button type="button" onclick="history.back()">Voltar</button>
    </section>
</body>
</html>