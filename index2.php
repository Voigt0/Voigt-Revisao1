<!DOCTYPE html>
<?php
    $num = isset($_POST["num"]) ? $_POST["num"] : 0;
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Testa Número</title>
</head>
<body>
    <form method="post">
    <input type="text" name="num" id="num">
    <input type="submit" value="Enviar">
    </form>
    <?php
        echo $num;
        if ($num > 0)
            echo " : Positivo";
        elseif ($num < 0)
            echo " : Negativo"; 
        else
            echo " : Zero";
    ?>
</body>
</html>