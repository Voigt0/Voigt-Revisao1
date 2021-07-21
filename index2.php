<!DOCTYPE html>
<?php
  $personagem = isset($_POST["personagem"]) ? $_POST["personagem"] : "1";
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
        <form method="post" class="form-check" style="margin: 0% 30% 0% 2%; float: left;">
            <input type="radio" <?php if ($personagem == 1) echo "checked"; ?> class="form-radio-input" id="personagem1" name="personagem" value="1">
            <label class="form-radio-label" for="personagem">Luke Skywalker</label>
            <br>
            <input type="radio" <?php if ($personagem == 2) echo "checked"; ?> class="form-radio-input" id="personagem2" name="personagem" value="2">
            <label class="form-radio-label" for="personagem2">Princesa Leia</label>
            <br>
            <input type="radio" <?php if ($personagem == 3) echo "checked"; ?> class="form-radio-input" id="personagem3" name="personagem" value="3">
            <label class="form-radio-label" for="personagem3">Obi-Wan Kenobi</label>
            <br>
            <input type="radio" <?php if ($personagem == 4) echo "checked"; ?> class="form-radio-input" id="personagem4" name="personagem" value="4">
            <label class="form-radio-label" for="personagem4">Han Solo</label>
            <br>
            <input type="radio" <?php if ($personagem == 5) echo "checked"; ?> class="form-radio-input" id="personagem5" name="personagem" value="5">
            <label class="form-radio-label" for="personagem5">Chewbacca</label>
            <br>
            <input type="radio" <?php if ($personagem == 6) echo "checked"; ?> class="form-radio-input" id="personagem6" name="personagem" value="6">
            <label class="form-radio-label" for="personagem6">R2-D2</label>
            <br>
            <input type="radio" <?php if ($personagem == 7) echo "checked"; ?> class="form-radio-input" id="personagem7" name="personagem" value="7">
            <label class="form-radio-label" for="personagem7">C-3PO</label>
            <br>
            <input type="radio" <?php if ($personagem == 8) echo "checked"; ?> class="form-radio-input" id="personagem8" name="personagem" value="8">
            <label class="form-radio-label" for="personagem8">Boba Fett</label>
            <br>
            <input type="radio" <?php if ($personagem == 9) echo "checked"; ?> class="form-radio-input" id="personagem9" name="personagem" value="9">
            <label class="form-radio-label" for="personagem9">Darth Vader</label>
            <br>
            <input type="radio" <?php if ($personagem == 10) echo "checked"; ?> class="form-radio-input" id="personagem10" name="personagem" value="10">
            <label class="form-radio-label" for="personagem10">Mestre Yoda</label>
            <br><br>
            <input class="btn btn-primary" type="submit" value="Enviar">
        </form>
    </content>
<?php
    if(isset($_POST["personagem"])){
        echo "<img src='img/$personagem.png' style='width: 10rem;'>";
    }
?>


</body>
</html>











