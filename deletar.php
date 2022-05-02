<?php 
include 'conexao.php';
$id= $_GET["id"];

if(isset( $_GET['id'])) {
$sql = mysqli_query($conexaoBD, "DELETE FROM bombeiro WHERE nmatricula ={$id}");

/* confirmação da exclusão.. */
/* echo"
<script> 
alert('O bombeiro foi deletado com sucesso.');
</script>
"; */
 header('location: tabela.php');
}

?>