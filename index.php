<?php
	session_start();
	$_SESSION["score"] = 0;
	$_SESSION["lives"] = 5;
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
					<h1>Math Game</h1>
					<?php
						if (isset($_SESSION["email"])) {
					?>
					Halo <?php echo $_SESSION["nama"]; ?> , selamat datang kembali di permainan ini!!! <br><br>
					<a href="soal.php" type="submit" class="btn btn-secondary">Start Game</a> <br> <br>
					Bukan Anda? <a href="restart.php" type="submit" class="btn btn-secondary">Klik di sini</a> 
					<?php
						} else {
					?>
					<form action="soal.php" method="post">
						Nama : <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" required>
						<br> <br>
						
						Email : <input type="email" name="email" id="email" placeholder="Masukkan Email" required>
						<br> <br>

						<input type="submit" class="btn btn-secondary" value="Mulai Main">
					</form>
					<?php
						}
					?>
				</div>
			</div>
		</center>
	</body>
</html>