<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $sec = $_GET['sec'] ?? 0;
    ?>
    <section>
        <h2>Calculadora de Tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sec">Qual é o total de segundos? </label>
            <input type="number" name="sec" id="isec" required value="<?=$sec?>" min="0">
            <input type="submit" value="Calcular">
        </form>
    </section>
    <section>
        <?php 
            $startingSec = $sec;

            $minutes = (int)($sec/60);
            $sec -= $minutes*60;

            $hours = (int)($minutes/60);
            $minutes -= $hours*60;

            $days = (int)($hours/24);
            $hours -= $days*24;

            $weeks = (int)($days/7);
            $days -= $weeks*7;
        ?>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <?=$startingSec?> segundos equivalem a um total de: </p>
        <ul>
            <li><?=$weeks?> semanas</li>
            <li><?=$days?> dias</li>
            <li><?=$hours?> horas</li>
            <li><?=$minutes?> minutos</li>
            <li><?=$sec?> segundos</li>
        </ul>
    </section>
    
</body>
</html>