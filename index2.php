<!DOCTYPE html>
<?php
  $nome = isset($_POST["nome"]) ? $_POST["nome"] : "1";
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Star Wars</title>
</head>
<body>
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











