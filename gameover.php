<?php    
    session_start();
    include "koneksi.php";
    tambah($_SESSION["nama"], $_SESSION["email"], $_SESSION["score"]);
?>

<!DOCTYPE html>
<html lang="en">
<   <head>
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
                    Hello <?php echo $_SESSION["nama"]; ?>, Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.
                    Score Anda : <?php echo $_SESSION["score"]; ?> <br> <br>

                    <h1>HALL OF FAME</h1> <br> <br>

                    <table border="1">
                        <thead>
                            <td>No</td>
                            <td>Nama</td>
                            <td>Score</td>
                        </thead>

                        <?php
                    $koneksi = mysqli_connect($servername,$username,$password,$dbname) or die(mysqli_error());

                    $sql = "SELECT * FROM tabel_game ORDER BY score DESC LIMIT 10";
                    $result = mysqli_query($GLOBALS["koneksi"], $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $i = 1;
                        while($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $row["nama"] . "</td>";
                            echo "<td>" . $row["score"] . "</td>";
                            echo "</tr>";
                            $i = $i + 1;
                        }
                    } else {
                    }
                    mysqli_close($GLOBALS["koneksi"]);
                    ?>
                    </table>
                    <a href="index.php" class="btn btn-secondary">Main Lagi</a>
                </div>
            </div>
        </center>
    </body>
</html>
