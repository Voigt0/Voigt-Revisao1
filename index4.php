<!DOCTYPE html>
<?php
  $personagens = isset($_POST["personagens"]) ? $_POST["personagens"] : "0";
  $personagem[1] = isset($_POST["personagem1"]) ? $_POST["personagem1"] : "0";
  $personagem[2] = isset($_POST["personagem2"]) ? $_POST["personagem2"] : "0";
  $personagem[3] = isset($_POST["personagem3"]) ? $_POST["personagem3"] : "0";
  $personagem[4] = isset($_POST["personagem4"]) ? $_POST["personagem4"] : "0";
  $personagem[5] = isset($_POST["personagem5"]) ? $_POST["personagem5"] : "0";
  $personagem[6] = isset($_POST["personagem6"]) ? $_POST["personagem6"] : "0";
  $personagem[7] = isset($_POST["personagem7"]) ? $_POST["personagem7"] : "0";
  $personagem[8] = isset($_POST["personagem8"]) ? $_POST["personagem8"] : "0";
  $personagem[9] = isset($_POST["personagem9"]) ? $_POST["personagem9"] : "0";
  $personagem[10] = isset($_POST["personagem10"]) ? $_POST["personagem10"] : "0";
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
          <select class="form-select form-select-lg mb-3" multiple aria-label="multiple select example" name="personagens" id="personagens" multiple>
            <option name="personagem1" value="1" <?php if ($personagem[1] == 1) echo "selected"; ?>>Luke Skywalker</option>
            <option name="personagem2" value="2" <?php if ($personagem[2] == 2) echo "selected"; ?>>Princesa Leia</option>
            <option name="personagem3" value="3" <?php if ($personagem[3] == 3) echo "selected"; ?>>Obi-Wan Kenobi</option>
            <option name="personagem4" value="4" <?php if ($personagem[4] == 4) echo "selected"; ?>>Han Solo</option>
            <option name="personagem5" value="5" <?php if ($personagem[5] == 5) echo "selected"; ?>>Chewbacca</option>
            <option name="personagem6" value="6" <?php if ($personagem[6] == 6) echo "selected"; ?>>R2-D2</option>
            <option name="personagem7" value="7" <?php if ($personagem[7] == 7) echo "selected"; ?>>C-3PO</option>
            <option name="personagem8" value="8" <?php if ($personagem[8] == 8) echo "selected"; ?>>Boba Fett</option>
            <option name="personagem9" value="9" <?php if ($personagem[9] == 9) echo "selected"; ?>>Darth Vader</option>
            <option name="personagem10" value="10" <?php if ($personagem[10] == 10) echo "selected"; ?>>Mestre Yoda</option>
          </select>
            <br><br>
            <input class="btn btn-primary" name="enviar" type="submit" value="Enviar">
        </form>
    </content>
<?php
echo $personagens;
echo $personagem[1];

    function choice($var1){
        if($var1 != 0){
            echo "<img src='img/$var1.png' style='width: 10rem;'>";
        }
    }
    if(isset($_POST["enviar"])){
        for($i=1; $i<=10; $i++){
            choice($personagem[$i]);
        }
        
    }
?>


</body>
</html>