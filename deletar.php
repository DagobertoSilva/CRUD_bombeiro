<?php 
include 'conexao.php';
$id = $_GET['nmatricula'];

if (isset( $_GET['nmatricula'])){
$sql = mysqli_query($conexaoBD, "DELETE FROM bombeiro WHERE nmatricula ={$id}");

 header('location: tabela.php');
}else{
    echo "tem algo errado aiiiiii";
}
?>
 