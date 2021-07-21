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
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <span class="navbar-brand mb-2 h3">Episódio 1</span>
        </div>
    </nav>
    <content>
        <br><br>
        <form method="post" class="form-check" style="margin: 0% 30% 0% 2%; float: left;">
            <label class="form-check-label" for="flexRadioDisabled">Luke Skywalker</label>
            <input type="radio" <?php if ($personagem == 1) echo "checked"; ?> class="form-check-input" id="personagem1" name="personagem" value="1">
            <br>
            <label class="form-check-label" for="flexRadioDisabled">Princesa Leia</label>
            <input type="radio" <?php if ($personagem == 2) echo "checked"; ?> class="form-check-input" id="personagem2" name="personagem" value="2">
            <br>
            <label class="form-check-label" for="flexRadioDisabled">Obi-Wan Kenobi</label>
            <input type="radio" <?php if ($personagem == 3) echo "checked"; ?> class="form-check-input" id="personagem3" name="personagem" value="3">
            <br>
            <label class="form-check-label" for="flexRadioDisabled">Han Solo</label>
            <input type="radio" <?php if ($personagem == 4) echo "checked"; ?> class="form-check-input" id="personagem4" name="personagem" value="4">
            <br>
            <label class="form-check-label" for="flexRadioDisabled">Chewbacca</label>
            <input type="radio" <?php if ($personagem == 5) echo "checked"; ?> class="form-check-input" id="personagem5" name="personagem" value="5">
            <br>
            <label class="form-check-label" for="flexRadioDisabled">R2-D2</label>
            <input type="radio" <?php if ($personagem == 6) echo "checked"; ?> class="form-check-input" id="personagem6" name="personagem" value="6">
            <br>
            <label class="form-check-label" for="flexRadioDisabled">C-3PO</label>
            <input type="radio" <?php if ($personagem == 7) echo "checked"; ?> class="form-check-input" id="personagem7" name="personagem" value="7">
            <br>
            <label class="form-check-label" for="flexRadioDisabled">Boba Fett</label>
            <input type="radio" <?php if ($personagem == 8) echo "checked"; ?> class="form-check-input" id="personagem8" name="personagem" value="8">
            <br>
            <label class="form-check-label" for="flexRadioDisabled">Darth Vader</label>
            <input type="radio" <?php if ($personagem == 9) echo "checked"; ?> class="form-check-input" id="personagem9" name="personagem" value="9">
            <br>
            <label class="form-check-label" for="flexRadioDisabled">Mestre Yoda</label>
            <input type="radio" <?php if ($personagem == 10) echo "checked"; ?> class="form-check-input" id="personagem10" name="personagem" value="10">
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











