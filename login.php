<?php
session_start();
include('conexaoo.php');
if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: index.html');
    exit();
}
$email = mysqli_real_escape_string($conexaoBD, $_POST['email']);
$senha = mysqli_real_escape_string($conexaoBD, $_POST['senha']);


$query = "select email from usuarios where email = '{$email}' and senha = '{$senha}'";

$result= mysqli_query($conexaoBD, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header('Location: formulario.php');
    exit();
} else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.html');
    exit();
}
?>