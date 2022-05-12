<?php
require_once('./config/dbconfig.php');
require_once('./products/queries/getProductQuery.php');

$db = new Operations();
$getData = new GetProductQuery();

$db->update();
$idProduto = $_GET['U_ID'];
$result = $db->$result = $getData->get_record($idProduto);
$data = mysqli_fetch_assoc($result);

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
          <h2>Atualizar Produtos</h2>
        </header>
        <div class="card-body">
          <form method="POST">
            <input type="hidden" name="idproduto" value="<?php echo $data['idproduto'] ?>">
            <input type="text" name="nome" placeholder="Nome Produto" class="form-control mb-2" required value="<?php echo $data['nome'] ?>">
            <input type="text" name="categoria" placeholder="Categoria" class="form-control mb-2" required value="<?php echo $data['categoria'] ?>">
            <input type="number" name="preco" step="any" placeholder="Preço" class="form-control mb-2" required value="<?php echo $data['preco'] ?>">
        </div>
        <footer class="card-footer d-flex justify-content-between">
          <button class="btn btn-success" name="btn_update">Atualizar</button>
          </form>
          <a href="viewPage.php" class="btn btn-dark">Voltar</a>
        </footer>
      </div>
    </div>

  </main>

</body>

</html>