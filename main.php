<?php

session_start();

$nyawa = $_SESSION['nyawa'];
$score = $_SESSION['score'];
$jum = $_SESSION['jum'];
$jwb = $_POST['jwb'];

if(isset($_POST['submitjwb'])){
    if($jwb == $jum){
        $_SESSION['score'] += 10;
        header('Location: benar.php');
    }else{
        $_SESSION['score'] -= 2;
        $_SESSION['nyawa'] -= 1;
        header('Location: salah.php');
    }
}


if($nyawa == 0){
    header('Location: gameover.php');
}else{
    $bil1 = rand(1,20);
    $bil2 = rand(1,20);
    $_SESSION['jum'] = $bil1 + $bil2;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h1>Hello <?php echo $_SESSION['user'] ?>, semangat you can do the best!!!</h1>
                <h1>Lives : <?php echo $nyawa ?> | Skor : <?php echo $score ?></h1>
                <h2>Berapakah <?php echo $bil1.'+'.$bil2 ?></h2>
                <form action="" method="post">
                    <input type="text" name="jwb" class="form-control mb-2">
                    <input type="submit" name="submitjwb" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>

</html>