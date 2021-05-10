<?php
include('conexao.php');
$idproduto = $_GET['idproduto'];

$sql = "DELETE from tblprodutos where idproduto='$idproduto'";

$qry = mysqli_query($conn,$sql);
if($qry){
    header("Location:index.php");
}else{
   echo "Deu ruim... <a href='index.php'>Voltar</a>";

}