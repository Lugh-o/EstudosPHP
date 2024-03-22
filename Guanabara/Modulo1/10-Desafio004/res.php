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
        <h1>Conversor de Moedas v2.0</h1>
        <?php 

            function getDolar(){
                $url = "https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/aplicacao#!/";
                
            }

            // $num = $_GET["value"];
            $cot = getDolar();
            echo $cot;
            // $converted = round($num / $cot, 2);
            // echo "Seus R$$num equivalem a US$$converted.";
            // echo "Cotação de R$$cot obtida diretamente do site do <strong>Banco Central do Brasil</strong>"
        ?>
        <button type="button" onclick="history.back()">Voltar</button>

    </section>
</body>
</html>