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
      <div class="col-md-2">
      </div>
      <div id="conteudo" class="col-md-8">

        <form action="usuario.php" method="post">
        <table border="0">
         <tr>
             <td>Nome:</td>
            <td><input type="text" name="nome"></td>
        </tr>
        <tr>
             <td>CPF:</td>
            <td><input type="text" name="cpf"></td>
        </tr>
        <tr>
             <td>Endereço:</td>
            <td><input type="text" name="endereco"></td>
        </tr>
        <tr>
             <td>Cidade:</td>
            <td><input type="text" name="cidade"></td>
        </tr>
        <tr>
             <td>Estado:</td>
            <td><input type="text" name="estado"></td>
        </tr>
        <tr>
        <td><input type="submit" name="Enviar" value="Enviar"></td>
        <td><input type="reset" name="Limpar" value="Limpar"></td>
    </tr>
</table>
</form>

<div class="res">
<?php
    if (isset($_POST['Enviar'])){
        $nome=$_POST['nome'];
        $cpf=$_POST['cpf'];
        $end=$_POST['endereco'];
        $cidade=$_POST['cidade'];
        $estado=$_POST['estado'];
        echo "Nome: $nome<br>";
        echo "CPF: $cpf<br>";
        echo "Endereço: $end<br>";
        echo "Cidade: $cidade<br>";
        echo "Estado: $estado<br>";    
    } 
?>
</div>

      </div>
      <div class="col-md-2">
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