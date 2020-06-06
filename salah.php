<?php    
    session_start();
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
    <body class="bg-light text-dark">
		<center>
			<div class="col">
				<div class="box">
                    Hello <?php echo $_SESSION["nama"]; ?>, Sayang jawaban anda salah… tetap semangat ya !!! <br>
                    Lives: <?php echo $_SESSION["lives"]; ?> | Score: <?php echo $_SESSION["score"]; ?> <br>
                    <a href="soal.php" class="btn btn-secondary">Soal Selanjutnya</a>
                </div>
            </div>
        </center>
    </body>
</html>
