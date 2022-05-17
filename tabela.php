<?php 
include 'listar.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="Stylesheet" type="text/css" href="tabela.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
  </script>
  <title>TABELA PHP</title>
</head>
<body>

  <?php
$pesquisa = $_POST['buscar'] ?? '';
include "conexao.php";

$sql = "SELECT * FROM bombeiro WHERE nome LIKE '%$pesquisa%'";

$listarSQL = mysqli_query($conexaoBD, $sql);
  ?>

<nav class="navbar navbar-light bg-light">
<div class="container-fluid">
<form class="d-flex" action ="tabela.php" method ="POST">
<input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name="buscar" autofocus>
<button class="btn btn-outline-success" type="submit">Pesquisar</button>
    </form>
    
  </div>
</nav>
<table class="table table-hover">
<div class="container col-md-6 offset-md-3">
  <thead>
    <tr>
      <th scope="col">Matricula</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Sexo</th>
      <th scope="col">Data de nascimento</th>
      <th scope="col">Endereço</th>
      <th scope="col">CPF</th>
      <th scope="col">RG</th>
      <th scope="col">Funções</th>
      
    </tr>
  </thead>
  <?php while ($usuario = mysqli_fetch_assoc($listarSQL)) { ?>
  <tbody>
    <tr>
      <td><?php echo $usuario['nmatricula'] ?></td>
      <td><?php echo $usuario['nome'] ?></td>
      <td><?php echo $usuario['email'] ?></td>
      <td><?php echo $usuario['telefone'] ?></td>   
      <td><?php echo $usuario['sexo'] ?></td>
      <td><?php echo $usuario['datanasc'] ?></td>
      <td><?php echo $usuario['endereco'] ?></td>
      <td><?php echo $usuario['cpf'] ?></td>
      <td><?php echo $usuario['rg'] ?></td>
      <td>
  
        <a  href="deletar.php?nmatricula=<?php echo $usuario['nmatricula']; ?>" class="btn btn-sm btn-danger" <a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
  <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
</svg> </a> </a>
        <a href="editar.php?nmatricula=<?php echo $usuario['nmatricula'];?>" class="btn btn-sm btn-primary" <a> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
  <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
</svg> </a>
</a>
      </td>
    </tr>
  </tbody>
<?php } ?>
  </div>
</table>
<a href="formulario.php" class="btn btn-sm btn-success">Página inicial</a>
</div>
</body>
</html>