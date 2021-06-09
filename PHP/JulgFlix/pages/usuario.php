<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>JulgFlix - Usuário</title>
  <link rel="icon" href="../assets/logo2.ico">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/style.css">

</head>

<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
      </div>
      <div id="logo" class="col-md-8">
        <a href="../index.php"><img src="../assets/logo.png"></a>
        </br>

      </div>
      <div class="col-md-2">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-inverse">


          <ul id="menu" class="nav navbar">
            <li><a href="usuario.php">Usuário</a></li>
            <li><a href="filmes.php">Filme</a></li>
            <li><a href="series.php">Séries</a></li>
            <li><a href="animes.php">Animes</a></li>
            <li><a href="desenhos.php">Desenhos</a></li>
          </ul>

        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <div id="resposta">
          <?php
          $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
          $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
          $endereco = isset($_POST['endereco']) ? $_POST['endereco'] : null;
          $cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;
          $estado = isset($_POST['estado']) ? $_POST['estado'] : null;

          if (isset($_POST['Enviar']) && !empty($_POST['nome'])) {

            include("../server/connection.php");
            $db = mysqli_select_db($connection, DB_DATABASE);

            $inserir = mysqli_query($connection, "insert into usuario(nome, cpf, endereco, cidade, estado) values('$nome','$cpf', '$endereco', '$cidade', '$estado') ");
            if ($inserir == true) {
              echo "Cadastro efetuado com exito";
            } else
              echo "Impossivel incluir";
            mysqli_close($connection);
          }
          ?>

        </div>
      </div>
      <div id="conteudo" class="col-md-6">
        <form action="usuario.php" method="post">
          <div class="form-group-sm">
            <label for="form">Nome:</label>
            <input class="form-control" id="nome" type="text" name="nome">

            <label for="form">CPF:</label>
            <input id="cpf" class="form-control" type="number" name="cpf">

            <label for="form">Endereço:</label>
            <input class="form-control" id="endereco" type="text" name="endereco">

            <label for="form">Cidade:</label>
            <input class="form-control" id="cidade" type="text" name="cidade">

            <label for="form">Estado:</label>
            <input class="form-control" id="estado" type="text" name="estado">

            <br>
            <input class="btn btn-success" type="submit" name="Enviar" value="Enviar">
            <input class="btn btn-danger" type="reset" name="Limpar" value="Limpar">
            <button type="button" id="show" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
              Show
            </button>
          </div>
        </form>
      </div>


    </div>

    <div class="col-md-3">
      <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Página de cadastro do cliente</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table class='table table-striped' id='tableUsuario'>
                <?php
                if (isset($_POST['show'])) {
                  include("../server/connection.php");
                  $db = mysqli_select_db($connection, DB_DATABASE);
                  $resultado = mysqli_query($connection, "select * from usuario order by id;");
                  $num_linhas = mysqli_num_rows($resultado);

                  echo "

                  <thead>;
                    <tr>;
                      <th scope='col'>Nome:</th>;
                      <th scope='col'>Cpf:</th>;
                      <th scope='col'>Endereço:</th>;
                      <th scope='col'>Cidade:</th>;
                      <th scope='col'>Estado:</th>;
                      <th scope='col'>Alterar</th>;
                      <th scope='col'>Deletar</th>;
                    </tr>;
                  </thead>
                  ";
                  for ($i = 0; $i < $num_linhas; $i++) {
                    $showTable = mysqli_fetch_array($resultado);
                    $objeto = $showTable['id'];
                    echo "<tbody>
                    <tr>
                    <td>$objeto</td>";
                    echo "<td>";
                    echo $showTable['$nome'];
                    echo "</td?";
                    echo "<td>";
                    echo $showTable['$cpf'];
                    echo "</td?";
                    echo "<td>";
                    echo $showTable['$endereco'];
                    echo "</td?";
                    echo "<td>";
                    echo $showTable['$cidade'];
                    echo "</td?";
                    echo "<td>";
                    echo $showTable['$estado'];
                    echo "</td>";
                    echo "<td><a href='#'>Alterar</a></td>";
                    echo "<td><a href='#'>Deletar</a></td>";

                    echo "</tr></tbody>";
                  };
                  mysqli_close($connection);
                }

                ?>
              </table>
            </div>

            <div class="modal-footer">
              <h5>Obrigado por fazer parte da nossa história</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="footer">
        Made with ❤ by Bruna Silva
      </div>
    </div>
  </div>
  </div>
  <!-- JavaScript Bundle with Popper -->

  <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
  <script src="https://code.jquery.com/jquery-migrate-3.3.2.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../Scripts/user.js"></script>


</body>

</html>