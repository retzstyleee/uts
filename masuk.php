<?php

session_start();
if(isset($_POST['submitlogin'])){
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['login'] = true;
    header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk ke game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js""></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <h1>Masuk ke game</h1>
            <form action="" method="post">
                <input type="text" name="username" autocomplete="off" required placeholder="Nama" class="form-control mb-2">
                <input type="email" name="email" autocomplete="off" required placeholder="Email" class="form-control mb-2">
                <input type="submit" name="submitlogin" class="btn btn-primary">
            </form>
        </div>
    </div>
    </div>
</body>
</html>