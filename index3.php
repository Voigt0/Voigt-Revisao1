<!DOCTYPE html>
<?php
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
        <form method="POST" class="form-check" style="margin: 0% 30% 0% 2%; float: left;">
            <input type="checkbox" <?php if ($personagem[1] == 1) echo "checked"; ?> class="form-check-input" name="personagem1"  value="1">
            <label class="form-check-label" for="personagem">Luke Skywalker</label>
            <br>
            <input type="checkbox" <?php if ($personagem[2] == 2) echo "checked"; ?> class="form-check-input" name="personagem2"  value="2">
            <label class="form-check-label" for="personagem2">Princesa Leia</label>
            <br>
            <input type="checkbox" <?php if ($personagem[3] == 3) echo "checked"; ?> class="form-check-input" name="personagem3"  value="3">
            <label class="form-check-label" for="personagem3">Obi-Wan Kenobi</label>
            <br>
            <input type="checkbox" <?php if ($personagem[4] == 4) echo "checked"; ?> class="form-check-input" name="personagem4"  value="4">
            <label class="form-check-label" for="personagem4">Han Solo</label>
            <br>
            <input type="checkbox" <?php if ($personagem[5] == 5) echo "checked"; ?> class="form-check-input" name="personagem5"  value="5">
            <label class="form-check-label" for="personagem5">Chewbacca</label>
            <br>
            <input type="checkbox" <?php if ($personagem[6] == 6) echo "checked"; ?> class="form-check-input" name="personagem6"  value="6">
            <label class="form-check-label" for="personagem6">R2-D2</label>
            <br>
            <input type="checkbox" <?php if ($personagem[7] == 7) echo "checked"; ?> class="form-check-input" name="personagem7"  value="7">
            <label class="form-check-label" for="personagem7">C-3PO</label>
            <br>
            <input type="checkbox" <?php if ($personagem[8] == 8) echo "checked"; ?> class="form-check-input" name="personagem8"  value="8">
            <label class="form-check-label" for="personagem8">Boba Fett</label>
            <br>
            <input type="checkbox" <?php if ($personagem[9] == 9) echo "checked"; ?> class="form-check-input" name="personagem9"  value="9">
            <label class="form-check-label" for="personagem9">Darth Vader</label>
            <br>
            <input type="checkbox" <?php if ($personagem[10] == 10) echo "checked"; ?> class="form-check-input" name="personagem10"  value="10">
            <label class="form-check-label" for="personagem10">Mestre Yoda</label>
            <br><br>
            <input class="btn btn-primary" name="enviar" type="submit" value="Enviar">
        </form>
    </content>
<?php
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