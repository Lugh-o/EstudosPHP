<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings</title>
</head>
<body>
    <h1>Manipulação de Strings</h1>
    <?php 
        print nl2br("Aspas Duplas => String com necessidade de interpretação, ou seja, variaveis e texto em unicode serão traduzidos para o texto final. \n");  
        print nl2br("Aspas Simples => independente do que foi digitado, será escrito literalmente. \n");
    
        $nome = "Lucas";
        $sobrenome = "Falcão \u{1F596}";
        print nl2br("$nome $sobrenome \n");
        print nl2br('$nome $sobrenome \n');
        print nl2br("\n\n");

        print nl2br("Para constantes, deve-se utilizar o operador de concatenação '.'\n");
        const ESTADO = "Bahia";
        print nl2br("Moro na " . ESTADO . "\n");
        print nl2br("Para retornar o resultado de funções, deve concatenar também: \n");
        print nl2br("Estamos no ano de " . date('Y') . "\n\n");

        $nom = "Rodrigo";
        $snom = "Nogueira";
        print nl2br("$nom " . '"Minotauro"' . " $snom \n");
        print nl2br("$nom \"Minotauro\" $snom");
        print nl2br("Sequencia de escape para aspas simples - \'\n");
        print nl2br("Algumas Sequencias de escape para aspas duplas; \n");
        print nl2br('\n - New line; \t - Taulação; \\ - Barra Invertida; \$ - Cifrão; \u{1F596} -  Unicode' . "\n\n");

        $curso = "PHP";
        $ano = date('Y');
        echo <<< FRASE
                Estou estudando
                    $curso em $ano.
                Isso é um Heredoc.
        FRASE;
        print nl2br("\n\n");

        echo <<< 'FRASE'
            Estou estudando
                    $curso em $ano.
                Isso é um Nowdoc.
        FRASE;
    

    ?>
</body>
</html>