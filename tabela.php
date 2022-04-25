<?php 
include 'listar.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <a href="javascript: if(confirm('Tem Certeza que deseja deletar o bombeiro <?php echo $usuario['nome']; ?> ?')) location.href=' deletar.php?id=<?php echo $usuario['nmatricula']; ?>';" class="btn btn-sm btn-danger">Deletar</a>
        
      </td>
       <td>
        <a href="editar.php?nmatricula=<?php echo $usuario['nmatricula'];?>" class="btn btn-sm btn-primary">Editar</a>
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