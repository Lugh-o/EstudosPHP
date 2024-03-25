<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 010</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $currentYear = date('Y');
        $birthYear = $_GET['birthYear'] ?? $currentYear;
        $targetYear = $_GET['targetYear'] ?? $currentYear;
    ?>
    <section>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="birthYear">Em que ano você nasceu? </label>
            <input type="number" name="birthYear" id="ibirthYear" min="1900" max="<?=$currentYear?>" required value="<?=$birthYear?>">
            <label for="targetYear">Quer saber sua idade em que ano? (atualmente estamos em <?=$currentYear?>)</label>
            <input type="number" name="targetYear" id="itargetyear" min="<?=$currentYear?>" required value="<?=$targetYear?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </section>
    <section>
        <h2>Resultado</h2>
        <?php 
            $age = $targetYear - $birthYear;
        ?>
        <p>Quem nasceu em <?=$birthYear?> vai ter <?=$age?> anos em <?=$targetYear?>!</p>
    </section>
</body>
</html>