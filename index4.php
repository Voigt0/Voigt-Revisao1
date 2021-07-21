<!DOCTYPE html>
<?php
  $var = 0;
  $personagem[1] = 0;
  $personagem[2] = 0;
  $personagem[3] = 0;
  $personagem[4] = 0;
  $personagem[5] = 0;
  $personagem[6] = 0;
  $personagem[7] = 0;
  $personagem[8] = 0;
  $personagem[9] = 0;
  $personagem[10] = 0;
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
    <content>
        <br><br>
        <form method="POST" class="form-check" style="margin: 0% 30% 0% 2%; width: 25%; float: left;">
          <select class="form-select form-select-lg mb-3" multiple aria-label="multiple select example" name="personagem[]" id="personagem" multiple>
            <option value="1" <?php     echo $personagem[1]; if ($personagem[1] == 1)echo "selected"; ?>>Luke Skywalker</option>
            <option value="2" <?php if ($personagem[2] == 2) echo "selected"; ?>>Princesa Leia</option>
            <option value="3" <?php if ($personagem[3] == 3) echo "selected"; ?>>Obi-Wan Kenobi</option>
            <option value="4" <?php if ($personagem[4] == 4) echo "selected"; ?>>Han Solo</option>
            <option value="5" <?php if ($personagem[5] == 5) echo "selected"; ?>>Chewbacca</option>
            <option value="6" <?php if ($personagem[6] == 6) echo "selected"; ?>>R2-D2</option>
            <option value="7" <?php if ($personagem[7] == 7) echo "selected"; ?>>C-3PO</option>
            <option value="8" <?php if ($personagem[8] == 8) echo "selected"; ?>>Boba Fett</option>
            <option value="9" <?php if ($personagem[9] == 9) echo "selected"; ?>>Darth Vader</option>
            <option value="10" <?php if ($personagem[10] == 10) echo "selected"; ?>>Mestre Yoda</option>
          </select>
            <br><br>
            <input class="btn btn-primary" name="enviar" type="submit" value="Enviar">
        </form>
    </content>
<?php
    if(isset($_POST["enviar"])){
      if(isset($_POST["personagem"])){
        foreach($_POST['personagem'] as $var){
          echo "<img src='img/$var.png' style='width: 10rem;'>";
          $personagem[$var] = $var;
        }
      }
    }
    echo $personagem[1];
?>


</body>
</html>