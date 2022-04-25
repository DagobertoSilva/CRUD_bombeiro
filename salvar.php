<?php
include 'conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$sexo = $_POST['sexo'];
$datanasc = $_POST['datanasc'];
$endereco = $_POST['endereco'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];

$sql = mysqli_query($conexaoBD, "INSERT INTO bombeiro ( nome, email, telefone, sexo, datanasc, endereco, cpf, rg) VALUES ('$nome', '$email', '$telefone', '$sexo', '$datanasc', '$endereco', '$cpf', '$rg') ");
if($sql){
	header('Location: formulario.php');
}
else{
	echo "ERROR!!!!";
}
?>