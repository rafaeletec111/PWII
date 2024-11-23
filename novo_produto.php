<?php include "cabecalho.php"; ?>

<?php
if( isset ($_POST["nome"]) && isset ($_POST["valor"]) && isset ($_POST["codigo_barra"]) && isset ($_POST["datavalidade"])
   )
   
{
  
    if( empty ($_POST["nome"]))
    {
        echo"<br> <div class alert='alert alert-danger'> Campo nome não pode estar em branco </div>";
    }
    else if ( empty ($_POST["valor"]))
    {
        echo"<br> <div class alert='alert alert-danger'> Campo valor não pode estar em branco </div>";
    }
    else if ( empty ($_POST["codigo_barra"]))
    {
        echo"<br> <div class alert='alert alert-danger'> Campo codigo de barras não pode estar em branco </div>";
    }
    else if ( empty ($_POST["datavalidade"]))
    {
        echo"<br> <div class alert='alert alert-danger'> Campo data de validade não pode estar em branco </div>";
    }
    else
    {   
        include "conexao.php";
        $nome = $_POST["nome"];
        $valor = str_replace(",",".",$_POST["valor"]);
        $codigo_barra = $_POST["codigo_barra"];

       

        $query = "INSERT INTO produtos (DESCRICAO, VALOR, CODIGO_BARRA, ATIVO) VALUES ('$nome', $valor, '$codigo_barra', 1 ) ";
        $resultado = $conexao->query($query);
        if($resultado){
            echo "<div class='alert alert-sucess'>
                        Salvo no banco com sucesso</div>";
        }else{
            echo "<div class='alert alert-sucess'>
                        Salvo no banco com sucesso</div>";
        }
        //executa a logica do progama
        //salva no banco

    }
}
?>

<form action="novo_produto.php" method="post">
<label>Nome</label>
<input class="form-control" type="text" name="nome" />
<br>
<label>Valor</label>
<input class="form-control" type="number" name="valor" />
<br>
<label>Código de barras</label>
<input class="form-control" type="text" name="codigo_barra" />
<br>
<label>Data de Validade</label>
<input class="form-control"  type="date" name="datavalidade" />
<br>
<button type="submit" class="btn btn-success">
    Enviar os dados
</button>
</form>
<?php include "rodape.php"; ?>