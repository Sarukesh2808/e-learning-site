<?php

include "config.php";
session_start();
$a = $_POST['q1'];
$b = $_POST['a'];
$c = $_POST['b'];

$sql = "SELECT answer from qanda";
$result = mysqli_query($conn, $sql);
$x = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);

$total = 0;


foreach ($x as $z) {
    if ($z['answer'] == $a) {
        $total += 1;
    }


    if ($z['answer'] == $b) {
        $total += 1;
    }

    if ($z['answer'] == $c) {
        $total += 1;
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: whitesmoke;
        }

        h1 {
            font-family: 'Courier New', Courier, monospace;
            font-size: 100px;
        }

        a {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 50px;
        }
    </style>
</head>

<body>
    <h1>Congrats <?php echo $_SESSION['username'] ?>! You have scored <?php echo $total ?>/3</h1>
    <a href="home1.php">Home</a>
</body>

</html>