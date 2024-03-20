<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Tipos Primitivos em PHP</h1>
    <p>
        <?php 
            $sobrenome = "Silva";
            print nl2br ("$sobrenome - isso é uma String. \n");
            $idade = 34;
            print nl2br ("$idade - isso é um Integer. \n");
            $peso = 85.9;
            print nl2br ("$peso - isso é um Float, Double, ou Real. O tipo Real deixou de ser usada no PHP7. \n");
            $casado = true;
            print nl2br("$casado - isso é um Boolean. \n");
            print nl2br("Cuidado ao printar booleanos. true, vai ser printado como 1, e false não mostrará nada! \n \n");

            print nl2br("Todo numero em hexadecimal, tipo 0x1A, é um int, todo numero representado em notação científica, tipo 3e2, é um double. \n");
            print nl2br("0x - Hexadecimal; 0b - Binário; 0 - Octal \n");
            $num = 010;
            print nl2br("$num foi escrito como 010")
        ?>
    </p>

    <h2>Type Casting - Coerção de tipos</h2>
    <p>
        <?php 
            $num = 4.5;
            print nl2br("O número $num é um Float. \n");
            $num = (int) $num;
            print nl2br("O número $num é um Integer. \n");
        ?>
    </p>

    <h2>Tipos Compostos</h2>
    <p>
        <?php   
            $list = [2, 3.5, false, "Maria"];
            var_dump($list);
            print nl2br("  - Isso é um Array \n");

            class Pessoa {
                private string $nome;
            }

            $p = new Pessoa;
            var_dump($p);

        ?>
    </p>
</body>
</html>