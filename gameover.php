<?php
session_start();

$user = $_SESSION['user'];
$email = $_SESSION['email'];
$score = $_SESSION['score'];

$koneksi = mysqli_connect('localhost', 'root', 'root', 'retz');

$ins = "insert into retzz values(NULL, '$user', '$email', '$score')";
mysqli_query($koneksi, $ins);

$sql = "select * from retzz order by skor desc limit 10";
$q = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selesai</title>
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
                <h1>Hello <?php echo $_SESSION['user'] ?>, permainan sudah selesai</h1>
                <h1>Lives : <?php echo $_SESSION['nyawa']?> | Skor : <?php echo $_SESSION['score']?></h1>
                <a href="index.php" class="btn btn-primary">Main lagi</a>
                <br>
                <br>
            </div>
        </div>

        <h2>Hall of fame</h2>
        <table class="table">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Skor</th>
            </tr>
            <?php
            while($row = mysqli_fetch_array($q)){
                echo "<tr>";
                echo "<td>".$row[1]."</td>";
                echo "<td>".$row[2]."</td>";
                echo "<td>".$row[3]."</td>";
            }
            ?>
        </table>
    </div>
</body>

</html>