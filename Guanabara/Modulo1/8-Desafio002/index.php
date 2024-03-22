<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 002</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100... <br>
        <?php 
            $num = rand(0, 100);
            echo "O valor gerado foi $num";
        ?>
        </p>
        <button type="button" onclick="window.location.reload()">Gerar outro</button>

    </section>
</body>
</html>