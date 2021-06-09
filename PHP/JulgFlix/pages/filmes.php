<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>JulgFlix</title>
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
        <img src="../assets/logo.png"></br>

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

          $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : null;
          $genero = isset($_POST['genero']) ? $_POST['genero'] : null;
          $sinopse = isset($_POST['sinopse']) ? $_POST['sinopse'] : null;
          $datal = isset($_POST['datal']) ? $_POST['datal'] : null;
          $ondassistir = isset($_POST['ondassistir']) ? $_POST['ondassistir'] : null;
          $pa = isset($_POST['pa']) ? $_POST['pa'] : null;
          $numtemp = isset($_POST['numtemp']) ? $_POST['numtemp'] : null;

          if (isset($_POST['Enviar']) && !empty($_POST['titulo'])) {
            include("../server/connection.php");
            $db = mysqli_select_db($connection, DB_DATABASE);

            $inserir = mysqli_query($connection, "insert into filmes(titulo, sinopse, genero, datal, ondassistir, pa, numtemp) values('$titulo','$sinopse', '$genero', '$datal', '$ondassistir', '$pa', '$numtemp') ");
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
        <form action="filmes.php" method="post">
          <div class="form-group-sm">

            <label for="form">Titulo:</label>
            <input class="form-control" id="titulo" type="text" name="titulo">

            <label for="formcheck">Genêro</label>
            <div id="formcheck" class="form-check">
              <input class="form-check-input-inline" type="radio" name="genero" value="comedia" id="comedia">

              <label class="form-check-label" for="comedia">Comédia</label>

              <input class="form-check-input-inline" type="radio" name="genero" value="cromantica" id="comediaromantica">
              <label class="form-check-label" for="comediaromantica">Comédia Romântica</label>

              <input class="form-check-input-inline" type="radio" name="genero" value="drama">
              <label class="form-check-label" for="comedia">Drama</label>

              <input class="form-check-input-inline" type="radio" name="genero" value="fc">
              <label class="form-check-label" for="comedia">Ficção Cientifica</label>

              <input class="form-check-input-inline" type="radio" name="genero" value="terror">
              <label class="form-check-label" for="comedia">Terror</label>

              <input class="form-check-input-inline" type="radio" name="genero" value="acao">
              <label class="form-check-label" for="comedia">Ação</label>
            </div>

            <label for="exampleFormControlTextarea2">Sinopse:</label>
            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="2" name="sinopse"></textarea>

            <label for="datal">Data de lançamento:</label>
            <input class="form-control" id="datal" type="date" name="datal">

            <label for="ondeAssistir">Onde Assistir:</label>
            <div class="form-check" id="ondeAssistir">

              <label class="form-check-label" for="disney"></label>
              <input id="disney" class="form-check-input-inline" type="radio" name="ondassistir" value="disney">Disney+

              <label class="form-check-label" for="netflix"></label>
              <input id="netflix" class="form-check-input-inline" type="radio" name="ondassistir" value="netflix">Netflix

              <label class="form-check-label" for="hbo"></label>
              <input id="hbo" class="form-check-input-inline" type="radio" name="ondassistir" value="hbo">HBO

              <label class="form-check-label" for="amazon"></label>
              <input id="amazon" class="form-check-input-inline" type="radio" name="ondassistir" value="ap">Amazon Prime
            </div>

            <label for="porcent">Porcentagem de aprovação:</label>
            <div class="input-group mb-3">
              <input id="porcent" class="form-control" type="number" name="pa" min="0" max="100">
              <div class="input-group-append">
                <span class="input-group-text" id="porcent">%</span>
              </div>

            </div>

            <label for="temporadas">Número de Temporadas:</label>
            <input class="form-control" id="temporadas" type="number" name="numtemp" min="0" max="100">

            <br>
            <input class="btn btn-success" type="submit" name="Enviar" value="Enviar">
            <input class="btn btn-danger" type="reset" name="Limpar" value="Limpar">
            <button type="button" id="show" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
              Show
            </button>

          </div>
        </form>

      </div>
      <div class="col-md-3">

        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Séries</h5>
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
                    $resultado = mysqli_query($connection, "select * from filmes order by id_user;");
                    $num_linhas = mysqli_num_rows($resultado);

                    echo "

                  <thead>;
                    <tr>;
                      <th scope='col'>Titulo</th>;
                      <th scope='col'>Sinopse</th>;
                      <th scope='col'>Genero</th>;
                      <th scope='col'>Data de lançamento</th>;
                      <th scope='col'>Onde assistir</th>;
                      <th scope='col'>Aprovação</th>;
                      <th scope='col'>Temporadas</th>;
                      <th scope='col'>Alterar</th>;
                      <th scope='col'>Deletar</th>;
                    </tr>;
                  </thead>
                  ";
                    for ($i = 0; $i < $num_linhas; $i++) {
                      $showTable = mysqli_fetch_array($resultado);
                      $objeto = $showTable['id_user'];
                      echo "<tbody>
                    <tr>
                    <td>$objeto</td>";
                      echo "<td>";
                      echo $showTable['$titulo'];
                      echo "</td?";
                      echo "<td>";
                      echo $showTable['$sinopse'];
                      echo "</td?";
                      echo "<td>";
                      echo $showTable['$genero'];
                      echo "</td?";
                      echo "<td>";
                      echo $showTable['$datal'];
                      echo "</td?";
                      echo "<td>";
                      echo $showTable['$ondassistir'];
                      echo "</td>";
                      echo "<td>";
                      echo $showTable['$pa'];
                      echo "</td>";
                      echo "<td>";
                      echo $showTable['$numtemp'];
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
                <h5>Formulários enviado para registro.</h5>
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