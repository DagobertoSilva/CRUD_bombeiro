<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>



	<title>FORMULÁRIO DE CADASTRO</title>
</head>
<body>
  <div class="container col-md-6 offset-md-3">
<h1> CADASTRO DE BOMBEIROS</h1>

<form method="POST" action="salvar.php">
  
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome:</label>
    <input type="text" class="form-control" name="nome" required>
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="text" class="form-control" name="email" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Telefone</label>
    <input type="text" class="form-control" name="telefone" required>
  </div>
  <div class="mb-3">
    <p>sexo <br>
    <select name="sexo">
      <option selected></option>
      <option>Masculino</option>
      <option >Feminino</option>
      <option >outro</option>
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" name="datanasc" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Endereço</label>
    <input type="text" class="form-control" name="endereco" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">CPF</label>
    <input type="text" class="form-control" name="cpf" required>
  </div> 
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">RG</label>
    <input type="text" class="form-control" name="rg" required>
  </div> 
  <button type="submit" class="btn btn-success">Enviar</button>
  <a href="tabela.php" class="btn btn-sm btn-primary">Cadastros</a>
  <a href="home.html" class="btn btn-sm btn-danger">Sair</a>
</form>
</div>
</body>
</html>