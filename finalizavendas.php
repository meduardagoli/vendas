<?php

include('conexao.php');


$idproduto  = $_POST['idproduto'];
$qtdvendida = $_POST['qtdvendida'];
$est        = $_POST['est'];

echo $est."<br>";
echo $qtdvendida;


$qtdatualizada = $est - $qtdvendida;

echo "<br>".$qtdatualizada;


$sql = "UPDATE tblprodutos set est='$qtdatualizada'
where idproduto='$idproduto'";

mysqli_query($conn,$sql);
header("Location:index.php");

if($qtdatualizada >0){
    
    $sql = "UPDATE tblprodutos set est='$qtdatualizada'
    where idproduto='$idproduto'";
    
    mysqli_query($conn,$sql);
    header("Location:index.php");
    
    
    } else {
    echo  'Quantidade inexistente.';
    
    }
    
