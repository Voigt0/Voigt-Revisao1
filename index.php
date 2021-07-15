<!DOCTYPE html>
<?php
 $title = "Star Wars - Episódio 1 - O Império do HTTP";
 $user = isset($_GET["user"]) ? $_GET["user"] : "";
 $pass = isset($_GET["pass"]) ? $_GET["pass"] : "";

?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><? echo $title; ?></h1>
    <form method="get">
    <input type="text" name="user" id="user" value="<?php echo $user; ?>">   
    <input type="password" name="pass" id="pass" value="<?php echo $pass; ?>">
        
        <input type="submit" value="Ok">
    </form>
    <?php
        //echo "user: ".$user."<br>";
        //echo "pass: ".$pass."<br>";
    ?>
</body>
</html>