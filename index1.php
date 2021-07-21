<!DOCTYPE html>
<?php
  $nome = isset($_POST["nome"]) ? $_POST["nome"] : "1";
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Star Wars</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Episódio 1</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index1.php">Select</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index2.php">Radio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index3.php">Checkbox</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index4.php">Select multiple</a>
        </li>
    </div>
  </div>
    </nav>
    <form method="post">
        <select name="nome" id="nome">
            <option value="1" <?php if ($nome == 1) echo "selected"; ?>>Luke Skywalker</option>
            <option value="2" <?php if ($nome == 2) echo "selected"; ?>>Princesa Leia</option>
            <option value="3" <?php if ($nome == 3) echo "selected"; ?>>Obi-Wan Kenobi</option>
            <option value="4" <?php if ($nome == 4) echo "selected"; ?>>Han Solo</option>
            <option value="5" <?php if ($nome == 5) echo "selected"; ?>>Chewbacca</option>
            <option value="6" <?php if ($nome == 6) echo "selected"; ?>>R2-D2</option>
            <option value="7" <?php if ($nome == 7) echo "selected"; ?>>C-3PO</option>
            <option value="8" <?php if ($nome == 8) echo "selected"; ?>>Boba Fett</option>
            <option value="9" <?php if ($nome == 9) echo "selected"; ?>>Darth Vader</option>
            <option value="10" <?php if ($nome == 10) echo "selected"; ?>>Mestre Yoda</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
<?php
    echo "<img src='img/$nome.png'>";
?>


</body>
</html>











