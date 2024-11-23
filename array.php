<?php include "cabecalho.php"; ?>


    <h1>Array</h1>

    <p>As variaveis tipo array são muito utilizadas quando vamos listar coisas. Os arrays em php são listas de quaisquer tipo de dados.</p>

    <pre>
        $array =[];
        $array = Array ();
        $array[0] = "OI";
        $array[2] = 10;
        $array ["Vitor"] = "Aluno";
        $array[$array[2]] = "teste";

    </pre>
    <?php

    $array = Array("oi",10,"prof","teste",1.99, true);
    echo "<h2>Como saber se deu certo?</h2>";
    var_dump($array);
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    echo "<pre>";
    var_dump($array);
    echo "</pre>";
    ?>
    <p>Existem varias formas de crirar uma variavel array</p>
        <pre>
            array(
                chave => valor,
                chave2 => valor2,
                chave3 => valor3,
                ...
            )
        </pre>
        <p>Esse tipo </p>

        <?php
            $array = array(
            "foo" => "bar",
            "bar" => "foo",
            );

            //Utilizando sintaxe curta
            $array = [
            "foo" => "bar",
            "bar" => "foo",
            ];
            echo "<pre>";
            print_r($array);
            echo "</pre>";

            $resultados = [
                "Id" => 1,
                "Nome" => "Fernando",
                "Idade" => 34,
                "Salario" => 5325.50,
                "Professor" => true
            ];
            echo "<pre>";
            print_r($resultados);
            echo "</pre>";

            echo $resultados["Nome"];
        ?>
        <p>Para varrer todo o array de chave e valor precisamos de um laço de repetição exclusivo chamado foreach()</p>
        <pre>
            foreach ($resultados as $Chave => $valor)
            {
                echo $resultados[$Chave];
                // ou
                echo $valor;
            }
        </pre>
        <?php
        foreach ($resultados as $Chave => $valor)
        {
            echo "Valor pela chave: ".$resultados[$Chave]."<br>";
            // ou
            echo "Apenas valor: ".$valor."<br>";
            echo "Apenas Chave: ".$Chave."<br>";
        }
        ?>
<?php include "rodape.php"; ?>