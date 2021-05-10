<?php
include('conexao.php');
$idproduto = $_POST['idproduto'];
$produto   = $_POST['produto'];
$est       = $_POST['est'];
$estmax    = $_POST['estmax'];
$estmin    = $_POST['estmin'];

$sql = "UPDATE tblprodutos set produto='$produto',est='$est',estmax='$estmax',estmin='$estmin'
where idproduto='$idproduto'";

$qry = mysqli_query($conn,$sql);
if($qry){
    header("Location:index.php");
}else{
   echo "Deu ruim... <a href='index.php'>Voltar</a>";

}
