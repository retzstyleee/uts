<?php
session_start();
if(isset($_SESSION['login'])){
    $user = $_SESSION['user'];
    $_SESSION['score'] = 0;
    $_SESSION['nyawa'] = 5;
}else{
    header('Location: masuk.php');
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
        <h1>Hello <?php echo $user?>, kembali lagi ke game ini</h1>
        <a href="main.php" class="btn btn-primary mb-2">Mulai game</a>
        <p>Bukan anda? <a href="keluar.php" class="btn btn-secondary btn-sm">Klik disini</a></p>
            
            </div>
        </div>
    </div>

</body>
</html>
