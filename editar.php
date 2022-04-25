<?php
include 'conexao.php';
if (isset($_GET['nmatricula'])){
    $nmatricula = $_GET['nmatricula'];
    $sql = mysqli_query($conexaoBD, "SELECT * FROM bombeiro WHERE nmatricula=$nmatricula");

    $count = (is_array($sql)) ? count($sql) :1 ;
      if ($count) {
          $n = mysqli_fetch_array($sql);
          $nome = $n['nome'];
          $email = $n['email'];
          $telefone = $n['telefone'];
          $sexo = $n['sexo'];
          $datanasc = $n['datanasc'];
          $endereco = $n['endereco'];
          $cpf = $n['cpf'];
          $rg = $n['rg'];
      } 
   }
    
   if(isset($_POST['editar'])){
    $nmatricula = $_GET['nmatricula'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $datanasc = $_POST['datanasc'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $rg= $_POST['rg'];
    $query = "UPDATE bombeiro SET nome = '$nome', email = '$email', telefone = '$telefone', sexo = '$sexo', datanasc= '$datanasc', endereco = '$endereco', cpf = '$cpf', rg = '$rg' WHERE nmatricula = $nmatricula ";


    $consulta = mysqli_query($conexaoBD, $query);
    header('location: tabela.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>FORMULÁRIO DE EDIÇÃO</title>
</head>
<body>
<form method="POST" >
<div class="container col-md-6 offset-md-3">
<h1>EDIÇÃO DE FORMULÁRIO </h1>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome:</label>
    <input type="text" class="form-control" name="nome" value="<?php echo $nome;?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $email;?>">
    </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telefone</label>
    <input type="text" class="form-control" name="telefone" value="<?php echo $telefone;?>">
    </div>

  <div class="mb-3">

  <p>sexo <br>
    <select name="sexo">
      <option ></option>
      <option value="Masculino" <?=($sexo == 'Masculino')? 'selected':''?>>Masculino</option>
      <option value="Feminino" <?=($sexo == 'Feminino')? 'selected':''?>>Feminino</option>
      <option value="outro" <?=($sexo == 'outro')? 'selected':''?>>outro</option>
</select>


  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" name="datanasc" value="<?php echo $datanasc;?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Endereço</label>
    <input type="text" class="form-control" name="endereco" value="<?php echo $endereco;?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">CPF</label>
    <input type="text" class="form-control" name="cpf" value="<?php echo $cpf;?>">
  </div> 

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">RG</label>
    <input type="text" class="form-control" name="rg" value="<?php echo $rg;?>">
    </div>
  
  <button name="editar" type="submit" class="btn btn-primary">Editar</button>
</form>
</div>
</div>
</body>
</html>