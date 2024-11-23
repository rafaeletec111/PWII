<?php include "cabecalho.php"; ?>

<?php 
if( isset($_GET["pesquisa"]) )
{
    $pesquisa = $_GET["pesquisa"];
    if( empty($pesquisa) )
    {
       //Se a variavel estiver vazia executa aqui 
       include "conexao.php";
       $sql = "Select P.Id, P.Descricao, P.Valor, P.Codigo_barra, P.Imagem, P.categoria_Id from Produtos P order by Id desc";
       $resultado = $conexao->query($sql);
       
       $conexao->close();
    }
    else
    {
        //Aqui vai a lógica da pesquisa
        include "conexao.php";
        $sql = "Select Id, Descricao, Valor, Codigo_barra, Imagem, categoria_Id 
                from Produtos  
                where Descricao like '%$pesquisa%' || Codigo_Barra = '$pesquisa'
                order by P.Id desc";
        $resultado = $conexao->query($sql);
        
        $conexao->close();
    }
}
else
{
    $pesquisa = "";
    include "conexao.php";
    $sql = "Select P.Id, P.Descricao, P.Valor, P.Codigo_barra, P.Imagem, P.categoria_Id, C.Nome 
    from Produtos P left join Categorias C ON (P.categoria_Id = C.Id) order by P.Id desc";
    $resultado = $conexao->query($sql);
   
    $conexao->close();
    
}


?>
<br>
<?php
if(isset ($_GET["erro"]) && !empty($_POST["erro"])){
    echo "<div class= 'alert alert danger'>";
    echo $_GET["erro"];
    echo "</div> "; 
}
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Lista de Produtos
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <a href="novo_produto.php" class="btn btn-success" >
                            Novo Produto
                        </a>
                    </div>
                    <div class="col-8">
                        <form action="produtos.php" method="get">
                            <div class="input-group mb-3">
                                <input type="text" 
                                        name="pesquisa" 
                                        value="<?php echo $pesquisa; ?>"  
                                        class="form-control" 
                                        placeholder="Digite sua pesquisa aqui..." />


                                <button class="btn btn-primary" type="submit">
                                    Pesquisar
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-2"></div>
                </div>

                <div class="row">
                    <div class="col-12">
                        
                        <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Descrição</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Código de barras</th>
                                <th scope="col">Imagem</th>
                                <th scope="col">Categoria</th>

                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                            if ($resultado->num_rows > 0) {
                                while($row = $resultado->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["Id"] . "</td>";
                                    echo "<td>" . $row["Descricao"] . "</td>";
                                    echo "<td>" . $row["Valor"] . "</td>";
                                    echo "<td>" . $row["Codigo_barra"] . "</td>";
                                    echo "<td>" . $row["Imagem"] . "</td>";
                                    echo "<td>" . $row["Nome"] . "</td>";

                                    echo "<td><a href='editar_produto.php?Id=$row[Id]' class='btn btn-warning' >Editar</a>  ";
                                    echo "<a href='excluir_produto.php?Id=$row[Id]' class='btn btn-danger'>Excluir</a></td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
                            }
                            ?>
                                                    
                        </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include "rodape.php"; ?>