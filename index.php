<?php
require_once('./config/dbconfig.php');

$data = new Operations();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Crud Php</title>
</head>

<body class="bg-dark">

  <main class="container">
    <div class="col-lg-6 m-auto">
      <div class="card mt-5">
        <header class="card-header">
          <h2>Produtos</h2>
        </header>
        <?php $data->create(); ?>
        <div class="card-body">
          <form method="POST">
            <input type="text" name="nome" placeholder="Nome Produto" class="form-control mb-2" required>
            <input type="text" name="categoria" placeholder="Categoria" class="form-control mb-2" required>
            <input type="number" step="any" name="preco" placeholder="Preço" class="form-control mb-2" required>
        </div>
        <footer class="card-footer d-flex justify-content-between">
          <button class="btn btn-success" name="btn_save">Registrar</button>
          <a href="./viewPage.php" class="btn btn-dark">Lista de Produtos</a>
          </form>
        </footer>
      </div>
    </div>
  </main>

</body>

</html>