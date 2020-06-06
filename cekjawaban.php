<?php
    session_start();
    if ($_POST["hasil"] != $_SESSION["hasil"]) {
        $_SESSION["score"] = $_SESSION["score"] - 2 ;
        $_SESSION["lives"] = $_SESSION["lives"] - 1 ;
        header("Location: salah.php");
    } else {
        $_SESSION["score"] = $_SESSION["score"] + 10 ;
        header("Location: benar.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Math Game</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="style/style.css">
    </head>
    <body>
        
    </body>
</html>