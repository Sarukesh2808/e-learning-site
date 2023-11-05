<?php

include "config.php";

$hrun = $_POST['username'];
$hrp = $_POST['password'];
$hrm = $_POST['email'];
$hq = $_POST['qual'];

echo ("$hrun");
echo ("$hrp");
echo ("$hrm");
echo ("$hq");

$sql = "insert into user (username,email,password,qual) values('$hrun','$hrm','$hrp','$hq')";

echo ("$sql");

$result = mysqli_query($conn, $sql);


if ($result) {
    header("location:login.php");
} else {
    echo "error";
}
