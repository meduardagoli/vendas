<?php
include('conexao.php');

$idproduto = $_GET['idproduto'];
//echo $idteste;

$sql="select * from tblprodutos where idproduto='$idproduto'";
$qry = mysqli_query($conn,$sql);
$linha = mysqli_fetch_array($qry);

$idproduto = $linha['idproduto'];
$produto = $linha['produto'];
$est = $linha['est'];
$estmax = $linha['estmax'];
$estmin = $linha['estmin'];
?>
<form action="updateproduto.php" method="post">
id             <input type="text" name="idproduto"   value="<?php echo $idproduto ?>" readonly>
Produto        <input type="text" name="produto"     value="<?php echo $produto?>">
Estoque        <input type="text" name="est"         value="<?php echo $est ?>">
Estoque Máximo <input type="text" name="estmax"      value="<?php echo $estmax ?>">
Estoque Mínimo <input type="text" name="estmin"      value="<?php echo $estmin ?>">
<input type="submit" value="Atualizar">

</form>