<?php
require_once('./config/dbconfig.php');

$db = new Operations();
$result = $db->view();

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
    <div class="col">
      <div class="card mt-5">
        <header class="card-header">
          <h2 class="text-center text-dark">Produtos Salvos:</h2>
        </header>
        <div class="card-body">
          <table class="table table-bordered">
            <tr class="text-center bg-dark" style="color:white">
              <td style="width: 5%; font-weight: bold;">ID:</td>
              <td style="width: 30%; font-weight: bold;">Nome:</td>
              <td style="width: 30%; font-weight: bold;">Categoria:</td>
              <td style="width: 15%; font-weight: bold;">Preço:</td>
              <td style="width: 20%; font-weight: bold;" colspan="2">Operações:</td>
            </tr>
            <tr>
              <?php
              while ($data = mysqli_fetch_assoc($result)) {
              ?>
                <td class="text-center"><?php echo $data['idproduto'] ?></td>
                <td class="text-center"><?php echo $data['nome'] ?></td>
                <td class="text-center"><?php echo $data['categoria'] ?></td>
                <td class="text-center">R$<?php echo $data['preco'] ?></td>
                <td class="text-center"><a href="editPage.php?U_ID=<?php echo $data['idproduto'] ?>" class="btn btn-success">Editar</a></td>
                <td class="text-center"><a href="deletePage.php?D_ID=<?php echo $data['idproduto'] ?>" class="btn btn-danger">Excluir</a></td>
            </tr>
          <?php
              }
          ?>
          </table>
          <footer>
            <a href="index.php" class="btn btn-dark">Registrar Produto</a>
          </footer>
        </div>
      </div>
    </div>
  </main>

</body>

</html>