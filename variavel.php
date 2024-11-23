
<?php include "cabecalho.php"; ?>

<h1>Variaveis em PHP</h1>
    <p> $numero = 10; //Aqui é um variavel inteira</p>
    <p> $string = "vitor camisa 10";</p>
    <p> $string1 = "vitor camisa".$numero; </p>
    <p> $string2 = "vitor camisa $numero"; </p>
    <p> $valorDecimal = 10.50; </p>
    <p> $Ativo = true; </p>
    <p> /* Aqui é um bloco de cometario */ </p>
    <?php //Tudo que esta entre as tags do php não aparece na tela ?>

    <?php //a não ser que usemos a função echo com string ?>
        <?php
        echo "Hello world";
        echo "<br>";
        $numero = 10;
        $nome = "Vitor";
        $frase1 = "<p> $nome camisa $numero frase com paragrafo </p>";
        $frase2 = $nome. " camisa " .$numero;// cocatenação das antigas
        echo $frase1;
        echo "$frase2 é o que tem dentro da variavel";
        ?>
<?php include "rodape.php"; ?>