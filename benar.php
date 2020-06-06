<?php

session_start();
$user = $_SESSION['user'];
$nyawa = $_SESSION['nyawa'];
$score = $_SESSION['score'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1>Hello <?php echo $_SESSION['user'] ?>, selamat anda benar</h1>
                <h1>Lives : <?php echo $nyawa ?> | Skor : <?php echo $score ?></h1>
                <a href="main.php" class="btn btn-primary">Soal Selanjutnya</a>
            </div>
        </div>
    </div>
</body>
</html>