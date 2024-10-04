<?php include "cabecalho.php"; ?>
 
<?php
if( isset ($_POST["nome"]) && isset ($_POST["valor"]) && isset ($_POST["codigobarras"]) && isset ($_POST["datavalidade"])
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
    else if ( empty ($_POST["codigobarras"]))
    {
        echo"<br> <div class alert='alert alert-danger'> Campo codigo de barras não pode estar em branco </div>";
    }
    else if ( empty ($_POST["datavalidade"]))
    {
        echo"<br> <div class alert='alert alert-danger'> Campo data de validade não pode estar em branco </div>";
    }
    else
    {   include "conexao.php";
        $nome = $_POST["nome"];
        $valor = str_replace( "," , ".", $_POST["valor"] ) ;
        $codigobarras = $_POST["codigobarras"];

        $query = "INSERT INTO produtos (DESCRICAO, VALOR, CODIGO_BARRAS, ATIVO) VALUES  ('$nome', $valor , '$codigobarras', 1 ) ";    
        $resultado = $conexao->query($query);   
        if($resultado)  
        {
            echo "<div class='alert alert -success'>
            Salvo no banco com sucesso </div" ;
        }         
    }
}
?>
<form action="novo_produto.php" method="post">
<label>Nome</label>
<input type="text" name="nome" />
<br>
<label>Valor</label>
<input type="number" name="valor" />
<br>
<label>Código de barras</label>
<input type="text" name="codigobarras" />
<br>
<label>Data de Validade</label>
<input type="date" name="datavalidade" />
<br>
<button type="submit" class="btn btn-success">
    Enviar os dados
</button>
</form>
<?php include "rodape.php"; ?>