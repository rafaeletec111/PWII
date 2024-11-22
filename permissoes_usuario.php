<?php 
include "cabecalho.php";
include "conexao.php";

$sql_Permissoes = "select Role, Id from PERMISSOES order by Id desc";
$resultado_permissoes = $conexao->query($sql_Permissoes);



$sql_usuarios_permissao = "select u.Id, u.Login, p.Role, PU.Id from USUARIOS_PERMISSOES PU 
                            inner join Usuarios u on (u.Id = PU.USUARIO_ID)
                            inner join PERMISSOES p on (p.Id = PU.PERMISSAO_ID)";

$resultado_usuario_permissao = $conexao->query($sql_usuarios_permissao);

?>

<div class='row'>
    <div class="col-6">

    </div>
    <div class="col-6">
        <ul class="list-group">
            <?php 
                while($linha = $resultado_permissoes->fetch_assoc())
                {
                    echo "<li class='list-group-item'><a href='#' class='btn btn-success'> << </a>  $linha[Role]</li>";
                }
            ?>
        </ul>
    </div>

</div>