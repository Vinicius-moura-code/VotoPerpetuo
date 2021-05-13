<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>JulgFlix - Desenhos</title>
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
          if (isset($_POST['Enviar'])) {
            $genero = $_POST['genero'];
            $sinopse = $_POST['sinopse'];
            $datal = $_POST['datal'];
            $ondassistir = $_POST['ondassistir'];
            $pa = $_POST['pa'];
            $numtemp = $_POST['numtemp'];
            echo "";
            echo "<p>Genêro: $genero</p>";
            echo "<p>Sinopse: $sinopse</p>";
            echo "<p>Data de Lançamento: $datal</p>";
            echo "<p>Onde Assitir: $ondassistir</p>";
            echo "<p>Porcentagem de Aprovação: $pa</p>";
            echo "<p>Número de Temporadas: $numtemp</p>";
            echo "";
          }
          ?>
        </div>
      </div>
      <div id="conteudo" class="col-md-6">
        <form action="desenhos.php" method="post">
          <div class="form-group-sm">
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

          </div>
        </form>

      </div>
      <div class="col-md-3">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>

</html>