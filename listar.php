<?php
include 'conexao.php';
$listarSQL = mysqli_query($conexaoBD, "SELECT * FROM bombeiro");
?>