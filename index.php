<?php
include('conexao.php');
$sql = "select * from tblprodutos";
$qry = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
       <h1>Produtos</h1>
       <hr>
       <a href="cadastrar.php">Cadastrar</a>
       <table border='1'>
       <tr>
       <td>ID</td>
       <td>Produto</td>
       <td>Estoque</td>
       <td>Estoque Máximo</td>
       <td>Estoque Mínimo</td>
       <td>Ações</td>

       </tr>

       <?php
           while ($linha=mysqli_fetch_array($qry)){
               echo "<tr>";
               echo "<td>".$linha["idproduto"]."</td>";
               echo "<td>".$linha["produto"]."</td>";
               echo "<td>".$linha["est"]."</td>";
               echo "<td>".$linha["estmax"]."</td>";
               echo "<td>".$linha["estmin"]."</td>";
               echo "
           <td>
           <a href='editar.php?idproduto={$linha["idproduto"]}'>Editar</a> |
           <a href='excluir.php?idproduto={$linha["idproduto"]}'>Excluir</a> |
           <a href='venda.php?idproduto={$linha["idproduto"]}'>Venda</a>
           </td> 
           ";
               

               echo"</tr>";
           }

       ?>
</table>   
</body>
</html>