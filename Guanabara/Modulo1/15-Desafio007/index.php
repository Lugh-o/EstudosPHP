<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 007</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <?php 
            $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

            $salarioMinimo = 1380.60;
            $salario = $_GET["salario"] ?? 0;
        ?>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário(R$): </label>
            <input type="number" name="salario" id="isalario" step="0.01" value="<?=$salario?>">
            <p>Considerando o salário mínimo de <strong><?=numfmt_format_currency($padrao, $salarioMinimo, "BRL")?></strong>.</p>
            <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
        <h2>Resultado Final</h2>
        <?php 
            $num = (int)($salario / $salarioMinimo);
            $resto = $salario - ($num * $salarioMinimo);
        ?>
        <p>Quem recebe um salário de <?=numfmt_format_currency($padrao, $salario, "BRL")?> ganha <strong><?=$num?> salários mínimos</strong> + <?=numfmt_format_currency($padrao, $resto, "BRL")?>.</p>
    </section>
</body>
</html>   