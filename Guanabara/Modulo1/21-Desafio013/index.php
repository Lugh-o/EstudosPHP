<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 013</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $value = $_GET['value'] ?? 0;
    ?>

    <section>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="value">Qual valor você deseja sacar? (R$)*</label>
        <input type="number" name="value" id="ivalue" required step="5" min="5" value="<?=$value?>">
        <p>*Notas disponíveis: R$100, R$50, R$10 e R$5</p>
        <input type="submit" value="Sacar">
        </form>
    </section>

    <section>
        <?php 
        $amount5 = (int)($value/5);

        $amount10 = (int)($amount5/2);
        $amount5 -= $amount10*2;

        $amount50 = (int)($amount10/5);
        $amount10 -= $amount50*5;

        $amount100 = (int)($amount50/2);
        $amount50 -= $amount100*2
        ?>
        <h1>Saque de R$<?=$value?> realizado</h1>
        <p>O caixa eletrônico vai te entregar as seguintes notas: </p>
        <ul>
            <li>R$100,00 - x<?=$amount100?></li>
            <li>R$50,00 - x<?=$amount50?></li>
            <li>R$10,00 - x<?=$amount10?></li>
            <li>R$5,00 - x<?=$amount5?></li>
        </ul>
    </section>
</body>
</html>