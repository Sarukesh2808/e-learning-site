<?php

$conn = mysqli_connect("localhost", "root", "", "exp13");

if ($conn) {
    // echo "connected";
} else {
    echo "not connected";
}
