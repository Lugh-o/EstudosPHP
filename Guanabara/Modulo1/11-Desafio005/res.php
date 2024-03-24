<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 005</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Analisador de Número Real</h1>
        <?php 
            $num = $_GET["value"];
            $intNum = (int)$num;
            $fracNum = number_format((float)($num - $intNum), 3, '.', '');
            echo "<p>Analisando o número $num informado pelo usuário:</p>";
            echo <<< FRASE
                <ul>
                    <li>A parte inteira do número é $intNum</li>
                    <li>A parte fracionária do número é $fracNum</li>
                </ul>
            FRASE;
        ?>
        <button type="button" onclick="history.back()">Voltar</button>
    </section>
</body>
</html>