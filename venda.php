<?php
include('conexao.php');

$idproduto = $_GET['idproduto'];

$sql="SELECT * from tblprodutos where idproduto='$idproduto'";

$qry = mysqli_query($conn,$sql);
$linha = mysqli_fetch_array($qry);

$idproduto = $linha['idproduto'];
$produto    = $linha['produto'];
$est   = $linha['est'];
$estmax = $linha['estmax'];
$estmin = $linha['estmin'];

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Produtos</h1>
    <hr>
<form action="" method="post" >
Id  <input type="text" name="idproduto" value="<?php echo $idproduto ?>"readonly> <br>
Nome   <input type="text" name="produto" value="<?php echo $produto ?>"> <br>
Estoque <input type="text" name="est" value="<?php echo $est ?>"> <br>
Estoque Máx <input type="text" name="estmax" value="<?php echo $estmax ?>"> <br>
Estoque Min <input type="text" name="estmin" value="<?php echo $estmin ?>">  
<input type="submit" value="Vender"> 


</body>
</html>