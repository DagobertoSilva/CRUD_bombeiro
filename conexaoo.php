<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomeDoBanco = "usuario";

$conexaoBD = mysqli_connect($servidor, $usuario,$senha,$nomeDoBanco);
if (!$conexaoBD){
	echo "Não conectado";
}else{
	echo "DEU CERTO ";
}


?>